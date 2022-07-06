<?php declare(strict_types = 1);

namespace App\Services\MaterialRequirementsPlanning\Stock\Ulustrans;

use App\Entity\OrderLegacy;
use App\Enum\VirtualUser;
use App\Enum\Voucher as Enum;
use App\Enum\Warehouse\WarehousePlace;
use App\Mailer\SystemNotificationMailer;
use App\Repository\OrderPackingRepositoryLegacy;
use App\Repository\StockTransferVoucherRepositoryLegacy;
use App\Repository\UserRepository;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderConfirmationLineItem;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderConfirmationResponse;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderConfirmationSerialNumber;
use App\Services\MaterialRequirementsPlanning\Import\SerialNumber\SerialNumberImport;
use LogicException;

class UlustransShippingInformationService
{
    private const STATUS_SUCCESS = " ";

    /** @var OrderPackingRepositoryLegacy */
    private $orderPackingRepository;

    /** @var SerialNumberImport */
    private $serialNumberImport;

    /** @var UserRepository */
    private $userRepository;

    /** @var SystemNotificationMailer */
    private $mailer;

    /** @var UlustransStockMovementService */
    private $stockMovementService;

    /** @var StockTransferVoucherRepositoryLegacy */
    private $stockTransferVoucherRepositoryLegacy;

    public function __construct(
        OrderPackingRepositoryLegacy $orderPackingRepository,
        SerialNumberImport $serialNumberImport,
        UserRepository $userRepository,
        SystemNotificationMailer $mailer,
        UlustransStockMovementService $stockMovementService,
        StockTransferVoucherRepositoryLegacy $stockTransferVoucherRepositoryLegacy
    ) {
        $this->orderPackingRepository = $orderPackingRepository;
        $this->serialNumberImport = $serialNumberImport;
        $this->userRepository = $userRepository;
        $this->mailer = $mailer;
        $this->stockMovementService = $stockMovementService;
        $this->stockTransferVoucherRepositoryLegacy = $stockTransferVoucherRepositoryLegacy;
    }

    public function handleSerialNumbers(
        OrderLegacy $order, OutboundOrderConfirmationResponse $outboundOrderConfirmation
    ): void
    {
        $orderPacking = $this->orderPackingRepository->findOneBy(
            ['packages.o_id = :order_id', 'order_id', $order->getId()]
        );

        if ($orderPacking !== null) {
            return;
        }

        if (!$this->isOrderValid($outboundOrderConfirmation)) {
            throw new LogicException("
                Order ID {$outboundOrderConfirmation->getMasterRecord()->getOrderNumber()} could not be fully shipped
            ");
        }

        $imports = [];
        /** @var OutboundOrderConfirmationSerialNumber $serialNumberNode */
        foreach ($outboundOrderConfirmation->getSerialNumbers() as $serialNumberNode) {
            $values = [
                $serialNumberNode->getOsOrderId(),
                $serialNumberNode->getItemCode(),
                $serialNumberNode->getSerialNumber(),
                1
            ];

            [$orderId, $productNumber, $serialNumber, $boxNumber] = $values;
            $imports[$orderId][$boxNumber][$productNumber][] = $serialNumber;
        }

        if (empty($imports)) {
            return;
        }

        $user = $this->userRepository->find(VirtualUser::volkan_dinc()->value());

        $importedSerialNumbers = $this->serialNumberImport->import($imports, $user);
        $importedSerialNumbers = $this->formatSerialNumberInformation($importedSerialNumbers);

        $this->mailer->sendUlustransEmail("Ulustrans serial number import information", $importedSerialNumbers);
    }

    public function saveShippingInformation(OrderLegacy $order): void
    {
        $transferVoucher = $this->stockTransferVoucherRepositoryLegacy->findOneBy([
            "voucher.order_id = :order_id", "order_id", $order->getId()
        ]);

        if ($transferVoucher !== null) {
            return;
        }

        $this->stockMovementService->createTransfer(
            $order,
            WarehousePlace::turkeyWorkshop(),
            WarehousePlace::turkeyExit(),
            Enum\Type::transfer()
        );

        $this->stockMovementService->handleShippingPlan($order);
        $this->stockMovementService->createStockOut($order, WarehousePlace::turkeyExit());
    }

    private function formatSerialNumberInformation(array $importedSerialNumbers): array
    {
        $formattedSerialNumberInformation = ["Serial number import information"];
        foreach ($importedSerialNumbers as $status => $orders) {
            if ($status !== "invalid") {
                $formattedSerialNumberInformation[] = ucfirst($status) . " serial numbers:";
                foreach ($orders as $orderId => $serialNumbers) {
                    $formattedSerialNumberInformation[] = "Order ID $orderId: " . implode(", ", $serialNumbers);
                }

                continue;
            }

            $formattedSerialNumberInformation[] = ucfirst($status) . " serial numbers:";
            foreach ($orders as $orderId => $items) {
                foreach ($items as $serialNumber => $description) {
                    foreach ($description as $message) {
                        $formattedSerialNumberInformation[] = "$orderId: $message, serial number: $serialNumber";
                    }
                }
            }
        }

        return $formattedSerialNumberInformation;
    }

    private function isOrderValid(OutboundOrderConfirmationResponse $outboundOrderConfirmation): bool
    {
        /** @var OutboundOrderConfirmationLineItem $lineItem */
        foreach ($outboundOrderConfirmation->getLineItems() as $lineItem) {
            // When a line item is processed successfuly, it's status will be " "
            // If a single line item quantity is missing, the order will not be processed
            if ($lineItem->getStatus() !== self::STATUS_SUCCESS) {
                return false;
            }
        }

        return true;
    }
}
