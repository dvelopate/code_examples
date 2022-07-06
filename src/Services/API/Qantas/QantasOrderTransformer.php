<?php declare(strict_types = 1);

namespace App\Services\API\Qantas;

use App\Entity\Address;
use App\Entity\OrderLegacy;
use App\Entity\OrderProductsLegacy;
use App\Entity\ThirdPartyBundle;
use App\Entity\WarehouseLegacy;
use App\Enum\Brand;
use App\Enum\Currency;
use App\Enum\Customer\VirtualCustomer;
use App\Enum\OrderSource;
use App\Enum\OrderStatus;
use App\Repository\AddressRepository;
use App\Repository\CustomerRepository;
use App\Repository\OwnerRepositoryLegacy;
use App\Repository\ProductRepositoryLegacy;
use App\Repository\ThirdPartyBundleRepository;
use App\Utility\Helper\WeekDays;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\SerializerInterface;

class QantasOrderTransformer
{
    public const LINE_ITEMS = "line_items";
    private const CUSTOMERS = "customers";
    private const CUSTOMER = "customer";
    private const NO = "No";
    private const ORIGNAL_BL_NO = "N";

    /** @var SerializerInterface */
    private $serializer;

    /** @var CustomerRepository */
    private $customerRepository;

    /** @var OwnerRepositoryLegacy */
    private $ownerRepositoryLegacy;

    /** @var ProductRepositoryLegacy */
    private $productRepositoryLegacy;

    /** @var ThirdPartyBundleRepository */
    private $thirdPartyBundleRepository;

    /** @var AddressRepository */
    private $addressRepository;

    /** @var WeekDays */
    private $workingDayCalculator;

    public function __construct(
        SerializerInterface $serializer,
        CustomerRepository $customerRepository,
        OwnerRepositoryLegacy $ownerRepositoryLegacy,
        ProductRepositoryLegacy $productRepositoryLegacy,
        ThirdPartyBundleRepository $thirdPartyBundleRepository,
        AddressRepository $addressRepository,
        WeekDays $workingDayCalculator
    ) {
        $this->serializer = $serializer;
        $this->customerRepository = $customerRepository;
        $this->ownerRepositoryLegacy = $ownerRepositoryLegacy;
        $this->productRepositoryLegacy = $productRepositoryLegacy;
        $this->thirdPartyBundleRepository = $thirdPartyBundleRepository;
        $this->addressRepository = $addressRepository;
        $this->workingDayCalculator = $workingDayCalculator;
    }

    public function transform(array $qantasInvoice): OrderLegacy
    {
        $qantasInvoiceObject = $this->serializer->denormalize($qantasInvoice["data"]["attributes"], QantasInvoice::class);
        $qantasInvoiceObject->setId($qantasInvoice["data"]['id']);

        foreach ($qantasInvoice["included"] as $relationship) {
            $this->resolveRelationships($relationship, $qantasInvoiceObject);
        }

        return $this->createOrder($qantasInvoiceObject);
    }

    private function resolveRelationships(array $relationship, QantasInvoice $qantasInvoice): void
    {
        switch ($relationship["type"]) {
            case self::LINE_ITEMS:
                $lineItem = $this->serializer->denormalize($relationship["attributes"], QantasLineItem::class);
                $qantasInvoice->addLineItem($lineItem);

                break;
            case self::CUSTOMERS && $relationship["id"] === self::CUSTOMER:
                $customer = $this->serializer->denormalize($relationship["attributes"], QantasCustomer::class);
                $qantasInvoice->setCustomer($customer);

                break;
        }
    }

    private function createOrder(QantasInvoice $qantasInvoice): OrderLegacy
    {
        $customer = $this->customerRepository->find(VirtualCustomer::qantas()->getValue());
        $customerFullName = "{$qantasInvoice->getCustomer()->getFirstName()} {$qantasInvoice->getCustomer()->getSurname()}";
        $createdDate = new DateTime($qantasInvoice->getCreatedAt());
        $orderReferenceAndComment = "{$qantasInvoice->getId()} - $customerFullName";
        $personResponsibleEmail = $customer->getB2bInformation()->getKeyAccountManager()->getEmail();
        $owner = $this->ownerRepositoryLegacy->foundByOwnerEmail($personResponsibleEmail);

        $shippingAddress = $this->addressRepository->findOneBy([
            'customer' => $customer,
            'firstName' => $qantasInvoice->getCustomer()->getFirstName(),
            'lastName' => $qantasInvoice->getCustomer()->getSurname(),
            'postalCode' => $qantasInvoice->getCustomer()->getPostcode(),
            'administrativeArea' => $qantasInvoice->getCustomer()->getState(),
            'street' => $qantasInvoice->getCustomer()->getAddress(),
        ]);

        if ($shippingAddress === null) {
            $shippingAddress = (new Address())
                ->setStatus(false)
                ->setCustomer($customer)
                ->setFirstName($qantasInvoice->getCustomer()->getFirstName())
                ->setLastName($qantasInvoice->getCustomer()->getSurname())
                ->setPhoneNumber($qantasInvoice->getCustomer()->getPhone())
                ->setEmail($qantasInvoice->getCustomer()->getEmailAddress())
                ->setStreet($qantasInvoice->getCustomer()->getAddress())
                ->setLocality($qantasInvoice->getCustomer()->getCity())
                ->setPostalCode($qantasInvoice->getCustomer()->getPostcode())
                ->setAdministrativeArea($qantasInvoice->getCustomer()->getState())
                ->setDateCreated(new DateTime())
                ->setCountry($customer->getBillingAddress()->getCountry())
            ;
        }

        $order = (new OrderLegacy())
            ->setBrand(Brand::foreo())
            ->setCustomer($customer)
            ->setStatus(OrderStatus::approved()->getValue())
            ->setThirdPartyId((string) $qantasInvoice->getId())
            ->setOrderReference($orderReferenceAndComment)
            ->setOrderDate($createdDate)
            ->setSource(OrderSource::qantas()->value())
            ->setSalesSignature($owner->getCode())
            ->setApprovedBy($owner->getCode())
            ->setBillingAddress($customer->getBillingAddress())
            ->setCurrency(Currency::aud()->getValue())
            ->setCertificateOfOrigin(self::NO)
            ->setOriginalBL(self::ORIGNAL_BL_NO)
            ->setShippingAddress($shippingAddress)
            ->setOrderComments($orderReferenceAndComment)
            ->setShippingResponsible(WarehouseLegacy::AUSTRALIA)
            ->setForwarder(WarehouseLegacy::AUSTRALIA)
            ->setShippingMethodApproved(OrderLegacy::SHIPPING_METHOD_TRUCK)
            ->setApprovedDate($createdDate)
            ->setProducts($this->generateOrderProducts($qantasInvoice->getLineItems()))
        ;

        $order
            ->setOrderSubTotal($this->getSubTotal($order->getProducts()))
            ->setVat($this->getVat($order))
            ->setOrderTotal($order->getOrderSubTotal() + $order->getVat())
            ->setShippingCost(.0)
            ->setExpectedDate($this->getExpectedArrivalDate($order))
        ;

        return $order;
    }

    private function generateOrderProducts(ArrayCollection $qantasLineItems): array
    {
        $orderProducts = [];

        /** @var QantasLineItem $lineItem */
        foreach ($qantasLineItems as $lineItem) {
            $product = $this->productRepositoryLegacy->findOneByCode($lineItem->getVariantSku());

            if ($product === null) {
                $orderProducts = $this->splitBundle($orderProducts, $lineItem);
                continue;
            }

            $orderProducts[] = (new OrderProductsLegacy())
                ->setProductId($product->getProductId())
                ->setProduct($product)
                ->setPrice((float) $lineItem->getPrice())
                ->setQuantity($lineItem->getQuantity())
            ;
        }

        return $orderProducts;
    }

    private function splitBundle(array $orderProducts, QantasLineItem $lineItem)
    {
        $bundledProducts = $this->thirdPartyBundleRepository->findBy([
            "source" => OrderSource::qantas()->value(),
            "thirdPartyBundleId" => $lineItem->getVariantExternalId()
        ]);

        if ($bundledProducts === null) {
            return $orderProducts;
        }

        /** @var ThirdPartyBundle[] $bundledProducts */
        foreach ($bundledProducts as $bundledProduct) {
            $quantityMultiplier = $bundledProduct->getQuantity();

            $product = $this->productRepositoryLegacy->findOneByCode($lineItem->getVariantSku());
            $orderProducts[] = (new OrderProductsLegacy())
                ->setProductId($bundledProduct->getProductId())
                ->setProduct($product)
                ->setPrice($bundledProduct->getPricePerProduct())
                ->setQuantity($lineItem->getQuantity() * $quantityMultiplier)
            ;
        }

        return $orderProducts;
    }

    /** @param OrderProductsLegacy[] $orderProducts */
    private function getSubTotal(array $orderProducts): float
    {
        $subTotal = .0;

        foreach ($orderProducts as $orderProduct) {
            $subTotal += $orderProduct->getQuantity() * $orderProduct->getPrice();
        }

        return $subTotal;
    }

    private function getVat(OrderLegacy $order): float
    {
        return $order->getOrderSubTotal() * 0.1;
    }

    private function getExpectedArrivalDate(OrderLegacy $order): DateTime
    {
        $orderDate = $order->getOrderDate() ?? new DateTime();
        $endDate = (clone $orderDate)->modify('+30 days');
        $country = $order->getShippingAddress()->getCountry();
        $workingDays = $this->workingDayCalculator->getNextXNumberOfWorkingDays(7, $country, $orderDate, $endDate);

        return end($workingDays);
    }
}
