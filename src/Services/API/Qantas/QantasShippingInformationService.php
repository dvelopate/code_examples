<?php declare(strict_types = 1);

namespace App\Services\API\Qantas;

use App\Entity\OrderLegacy;
use App\Entity\OrderProductsLegacy;
use App\Entity\ThirdPartyBundle;
use App\Enum\OrderSource;
use App\Repository\OrderRepositoryLegacy;
use App\Repository\ThirdPartyBundleRepository;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use LogicException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\PreconditionFailedHttpException;
use Symfony\Component\Serializer\SerializerInterface;

class QantasShippingInformationService
{
    public const INVOICE_ENDPOINT = "client/invoices";

    /** @var QantasClient $qantasClient */
    private $qantasClient;

    /** @var SerializerInterface */
    private $serializer;

    /** @var ThirdPartyBundleRepository */
    private $thirdPartyBundleRepository;

    /** @var OrderRepositoryLegacy */
    private $orderRepositoryLegacy;

    public function __construct(
        QantasClient $qantasClient,
        SerializerInterface $serializer,
        ThirdPartyBundleRepository $thirdPartyBundleRepository,
        OrderRepositoryLegacy $orderRepositoryLegacy
    ) {
        $this->qantasClient = $qantasClient;
        $this->serializer = $serializer;
        $this->thirdPartyBundleRepository = $thirdPartyBundleRepository;
        $this->orderRepositoryLegacy = $orderRepositoryLegacy;
    }

    public function sendRequest(int $orderId): void
    {
        $order = $this->orderRepositoryLegacy->find($orderId);

        if ($order === null) {
            throw new NotFoundHttpException("Order ID $orderId does not exist");
        }

        $qantasInvoiceArray = $this->qantasClient->getSingleInvoice($order->getThirdPartyId());

        if ($this->containsShippingInformation($qantasInvoiceArray)) {
            throw new PreconditionFailedHttpException(
                "Shipping information for order ID {$order->getId()} already sent"
            );
        }

        $requestBody = $this->createRequestBody($order, $qantasInvoiceArray);
        $response = $this->qantasClient->postShippingInformation($order, $requestBody);

        if (isset($response["errors"])) {
            throw new LogicException("Shipping information for order ID {$order->getId()} could not be sent");
        }
    }

    private function containsShippingInformation(array $qantasInvoiceArray): bool
    {
        foreach ($qantasInvoiceArray["included"] as $include) {
            if ($include["type"] === "shipments") {
                return true;
            }
        }

        return false;
    }

    private function createRequestBody(OrderLegacy $order, array $qantasInvoiceArray): array
    {
        return [
            "data" => [
                "type" => "shipments",
                "attributes" => [
                    "shipment_tracking_number" => $order->getTrackingNumber(),
                    "shipment_carrier" => $order->getShippingMethod(),
                    "dispatched_at" => (new DateTimeImmutable())->format("Y-m-d"),
                    "shipped_items" => $this->populateShippedItems($order->getProducts(), $qantasInvoiceArray)
                ],
            ],
        ];
    }

    /** @param OrderProductsLegacy[] $orderProducts */
    private function populateShippedItems(array $orderProducts, array $qantasInvoice): array
    {
        $qantasLineItems = $this->resolveLineItems($qantasInvoice["included"]);
        $shippedItems = [];
        $orderProductCount = 0;
        $qantasLineItemCount = 0;

        /** @var QantasLineItem $lineItem */
        foreach ($qantasLineItems as $lineItem) {
            $qantasLineItemCount += $lineItem->getQuantity();
        }

        foreach ($orderProducts as $osLineItem) {
            $orderProductCount += $osLineItem->getQuantity();
            /** @var QantasLineItem $qantasLineItem */
            foreach ($qantasLineItems as $qantasLineItem) {
                if ($osLineItem->getProductId() !== $qantasLineItem->getVariantSku()) {
                    continue;
                }

                $shippedItems[] = [
                    "line_item_id" => $qantasLineItem->getId(),
                    "quantity" => $osLineItem->getQuantity(),
                ];
            }
        }

        if ($orderProductCount !== $qantasLineItemCount) {
            $shippedItems = $this->resolveBundles($orderProducts, $qantasLineItems, $shippedItems);
        }

        return $shippedItems;
    }

    /**
     * @param OrderProductsLegacy[] $orderProducts
     * @param QantasLineItem[] $qantasLineItems
     */
    private function resolveBundles(array $orderProducts, array $qantasLineItems, array $shippedItems): array
    {
        $bundleMatches = [];
        $qantasBundledProducts = $this->thirdPartyBundleRepository->findBy([
            "source" => OrderSource::qantas()->value(),
        ]);

        $bundleCollection = new ArrayCollection($qantasBundledProducts);

        foreach ($orderProducts as $orderProduct) {
            $criteria = Criteria::create()
                ->where(Criteria::expr()->eq("productId", $orderProduct->getProductId()))
            ;

            $matchingBundle = $bundleCollection->matching($criteria);

            if ($matchingBundle->isEmpty()) {
                continue;
            }

            // first() is used because there can only be one bundle for each product ID
            /** @var ThirdPartyBundle $bundle */
            $bundle = $matchingBundle->first();

            if (in_array($bundle->getThirdPartyBundleId(), $bundleMatches)) {
                continue;
            }

            $bundleMatches[] = $bundle->getThirdPartyBundleId();
        }

        if (empty($bundleMatches)) {
            return $shippedItems;
        }

        foreach ($bundleMatches as $thirdPartyBundleId) {
            foreach ($qantasLineItems as $qantasLineItem) {
                if ($qantasLineItem->getVariantExternalId() !== $thirdPartyBundleId) {
                    continue;
                }

                $shippedItems[] = [
                    "line_item_id" => $qantasLineItem->getId(),
                    "quantity" => $qantasLineItem->getQuantity(),
                ];
            }
        }

        return $shippedItems;
    }

    private function resolveLineItems(array $included): array
    {
        $lineItemArray = [];

        foreach ($included as $item) {
            if ($item["type"] !== QantasOrderTransformer::LINE_ITEMS) {
                continue;
            }

            /** @var QantasLineItem $lineItem */
            $lineItem = $this->serializer->denormalize($item["attributes"], QantasLineItem::class);
            $lineItem->setId($item["id"]);

            $lineItemArray[] = $lineItem;
        }

        return $lineItemArray;
    }
}
