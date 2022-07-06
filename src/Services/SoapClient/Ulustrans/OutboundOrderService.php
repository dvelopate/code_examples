<?php declare(strict_types = 1);

namespace App\Services\SoapClient\Ulustrans;

use App\Entity\OrderLegacy;
use App\Repository\OrderRepositoryLegacy;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderConfirmationLineItem;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderConfirmationMaster;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderConfirmationResponse;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderConfirmationSerialNumber;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderConfirmationWaybill;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderDetails;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderRequest;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use Exception;
use Robier\Enum\Exception\InvalidEnum;
use stdClass;
use Symfony\Component\Serializer\SerializerInterface;
use App\Enum\Order\UlustransCustomerCode;
use Transliterator;

class OutboundOrderService
{
    private const FAIL = "Fail";

    /** @var SerializerInterface */
    private $serializer;

    /** @var Client */
    private $client;

    public function __construct(
        SerializerInterface $serializer,
        Client $client
    ) {
        $this->serializer = $serializer;
        $this->client = $client;
    }

    public function createOutboundOrder(OrderLegacy $order): void
    {
        $rootNode = "OutboundOrderList";
        $requestBody = $this->generateOutboundOrderRequestBody($order);

        $insertResponse = $this->client->call('addOutboundOrder', $rootNode, $requestBody);

        if ($insertResponse["message"] === self::FAIL) {
            $soapError = $insertResponse["processResult"]->ProcessResult->LogMessage;
            throw new Exception("Outbound order could not be created for order ID {$order->getId()}: '$soapError'");
        }
    }

    public function fetchOutboundOrderStatus(int $orderId): OutboundOrderConfirmationResponse
    {
        $rootNode = "OutboundDeliveryQuery";

        $requestBody = new stdClass();
        $requestBody->CompanyCode = "FR";
        $requestBody->OrderNumber = "$orderId";

        $response = $this->client->call('getOutboundDeliveryList', $rootNode, $requestBody);
        $response = $response['OutboundDeliveryList']->OutboundDelivery;

        if (empty($response)) {
            throw new Exception("Order confirmation for order ID $orderId does not exist");
        }

        return $this->generateOutboundConfirmationResponse($response);
    }

    private function generateOutboundConfirmationResponse(stdClass $response): OutboundOrderConfirmationResponse
    {
        return (new OutboundOrderConfirmationResponse())
            ->setMasterRecord($this->generateOutboundConfirmationMaster($response))
            ->setLineItems($this->generateLineItemCollection($response))
            ->setWaybills($this->generateWaybillCollection($response))
            ->setSerialNumbers($this->generateSerialNumberCollection($response))
        ;
    }

    private function generateOutboundOrderRequestBody(OrderLegacy $order): array
    {
        $timestamp = new DateTimeImmutable();
        $outboundOrder = new OutboundOrderRequest();
        $isB2b = $order->getCustomerBusinessType()->isB2b();

        $outboundOrder
            ->setOrderNumber("{$order->getId()}")
            ->setOrderReferenceNumber($order->getOrderReference())
            ->setOrderingCompanyCode($this->generateCompanyCode($order))
            ->setDeliveryCompanyCode($this->generateCompanyCode($order))
            ->setOrderType(" ")
            ->setOrderNote($order->getOrderComments())
            ->setVehicleType($isB2b ? null : 'YK')
            ->setInsertDate((int) $timestamp->format("Ymd"))
            ->setInsertTime((int) $timestamp->format("hms"))
            ->setHostMovementCode($isB2b ? "C39" : "EC1")
            ->setWmsMovementCode($isB2b ? "C39" : "EC1")
            ->setCargoCompanyCode($isB2b ? null : 'YK')
            ->setIsEcommerceOrder((int) !$isB2b)
        ;

        if (!$isB2b) {
            $fullCustomerName = "{$order->getShippingAddress()->getFirstName()} {$order->getShippingAddress()->getLastName()}";
            $outboundOrder
                ->setECommerceCompanyName($fullCustomerName)
                ->setECommerceCountryCode($order->getShippingAddress()->getCountryCode())
                ->setECommerceCityCode($this->resolveCityCode($order))
                ->setECommerceDistrict($this->toUpperCase($order->getShippingAddress()->getLocality()))
                ->setECommercePostalCode($order->getShippingAddress()->getPostalCode())
                ->setECommercePhoneNumber($order->getShippingAddress()->getPhoneNumber())
                ->setECommerceEmail($order->getShippingAddress()->getEmail())
                ->setECommercePlatform($order->getSourceEnum()->value())
            ;
        }

        return [
            "OutboundOrderV1" => (object) [
                "ENT000" => (object) $this->serializer->normalize($outboundOrder),
                "ENT001_List" => $this->generateOutboundOrderDetails($order, $timestamp, $isB2b),
            ],
        ];
    }

    private function toUpperCase(string $turkishString): string
    {
        return Transliterator::create("tr-Upper")->transliterate($turkishString);
    }

    private function resolveCityCode(OrderLegacy $order): string
    {
        $administrativeArea = $this->toUpperCase($order->getShippingAddress()->getAdministrativeArea());

        if (!isset(CityCodeMapper::CITY_TO_CODE[$administrativeArea])) {
            throw new Exception(
                "City code cannot be resolved for administrative area: {$order->getShippingAddress()->getAdministrativeArea()}"
            );
        }

        return CityCodeMapper::CITY_TO_CODE[$administrativeArea];
    }

    private function generateCompanyCode(OrderLegacy $order): string
    {
        if ($order->getCustomerBusinessType()->isB2b()) {
            try {
                $companyCode = UlustransCustomerCode::byValue($order->getShippingAddress()->getId())->name()->original();
            } catch (InvalidEnum $exception) {
                throw new Exception("Customer code not found for shipping address ID {$order->getShippingAddress()->getId()}");
            }

            return $companyCode;
        }

        return '9999';
    }

    private function generateOutboundOrderDetails(
        OrderLegacy $order,
        DateTimeImmutable $timestamp,
        bool $isB2b
    ): array
    {
        $orderDetails = [];
        $lineItemNumber = 1;

        foreach ($order->getProducts() as $product) {
            $orderDetail = new OutboundOrderDetails();

            $orderDetail
                ->setOrderNumber((string) $order->getId())
                ->setLineNumber((string) $lineItemNumber++)
                ->setItemCode($product->getProductId())
                ->setQuantity($product->getQuantity())
                ->setInsertDate((int) $timestamp->format("Ymd"))
                ->setInsertTime((int) $timestamp->format("hms"))
                ->setWmsMovementCode($isB2b ? "C39" : "EC1")
            ;

            $orderDetail = $this->serializer->normalize($orderDetail);
            $orderDetails[] = $orderDetail;
        }

        return ['ENT001' => $orderDetails];
    }

    private function generateLineItemCollection(stdClass $response): ArrayCollection
    {
        $outboundConfirmationLineItems = $response->ENT007_List->ENT007;
        $lineItemCollection = new ArrayCollection();

        if (empty($outboundConfirmationLineItems)) {
            throw new Exception("No line items were found");
        }

        if (!is_array($outboundConfirmationLineItems)) {
            $outboundConfirmationLineItems = [$outboundConfirmationLineItems];
        }

        foreach ($outboundConfirmationLineItems as $product) {
            $lineItem = $this->serializer->denormalize((array) $product, OutboundOrderConfirmationLineItem::class);
            $lineItemCollection->add($lineItem);
        }

        return $lineItemCollection;
    }

    private function generateWaybillCollection(stdClass $response): ?ArrayCollection
    {
        $outboundConfirmationWaybills = $response->ENT009_List->ENT009;

        if (empty($outboundConfirmationWaybills)) {
            return null;
        }

        $waybillCollection = new ArrayCollection();

        if (!is_array($outboundConfirmationWaybills)) {
            $outboundConfirmationWaybills = [$outboundConfirmationWaybills];
        }

        foreach ($outboundConfirmationWaybills as $waybillItem) {
            $waybill = $this->serializer->denormalize((array) $waybillItem, OutboundOrderConfirmationWaybill::class);
            $waybillCollection->add($waybill);
        }

        return $waybillCollection;
    }

    private function generateSerialNumberCollection(stdClass $response): ?ArrayCollection
    {
        if (empty($response->ENT015_List)) {
            return null;
        }

        $outboundConfirmationSerialNumbers = $response->ENT015_List->ENT015;

        if (empty($outboundConfirmationSerialNumbers)) {
            return null;
        }

        $serialNumberCollection = new ArrayCollection();

        if (!is_array($outboundConfirmationSerialNumbers)) {
            $outboundConfirmationSerialNumbers = [$outboundConfirmationSerialNumbers];
        }

        foreach ($outboundConfirmationSerialNumbers as $serialNumber) {
            $serialNumberRecord = $this->serializer->denormalize((array) $serialNumber, OutboundOrderConfirmationSerialNumber::class);
            $serialNumberCollection->add($serialNumberRecord);
        }

        return $serialNumberCollection;
    }

    private function generateOutboundConfirmationMaster(stdClass $response): OutboundOrderConfirmationMaster
    {
        $outboundOrderConfirmationMaster = (array) $response->ENT006;

        $outboundOrderConfirmationMaster =
            $this->serializer->denormalize($outboundOrderConfirmationMaster, OutboundOrderConfirmationMaster::class)
        ;

        return $outboundOrderConfirmationMaster;
    }
}
