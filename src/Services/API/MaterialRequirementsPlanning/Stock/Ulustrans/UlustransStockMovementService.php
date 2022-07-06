<?php declare(strict_types = 1);

namespace App\Services\MaterialRequirementsPlanning\Stock\Ulustrans;

use App\Entity\OrderLegacy;
use App\Entity\ShippingPlanLegacy;
use App\Enum\Voucher\ImportType;
use App\Enum\Warehouse\WarehousePlace;
use App\Repository\InventoryRepositoryLegacy;
use App\Repository\OrderRepositoryLegacy;
use App\Repository\OwnerRepositoryLegacy;
use App\Repository\ShippingPlanRepositoryLegacy;
use App\Repository\StockOutVoucherRepositoryLegacy;
use App\Repository\WarehousePlaceRepositoryLegacy;
use App\Services\Import\Stock\Voucher;
use App\Services\Import\Stock\VoucherItem;
use App\Services\MaterialRequirementsPlanning\Stock\StockOut;
use App\Services\MaterialRequirementsPlanning\Stock\StockTransfer;
use App\Enum\Voucher as Enum;
use DateTime;

class UlustransStockMovementService
{
    /** @var StockTransfer */
    private $stockTransfer;

    /** @var StockOut */
    private $stockOut;

    /** @var OrderRepositoryLegacy */
    private $orderRepositoryLegacy;

    /** @var OwnerRepositoryLegacy */
    private $ownerRepositoryLegacy;

    /** @var InventoryRepositoryLegacy */
    private $inventoryRepositoryLegacy;

    /** @var WarehousePlaceRepositoryLegacy */
    private $warehousePlaceRepository;

    /** @var ShippingPlanRepositoryLegacy */
    private $shippingPlanRepositoryLegacy;

    /** @var StockOutVoucherRepositoryLegacy */
    private $stockOutVoucherRepositoryLegacy;

    public function __construct(
        StockTransfer $stockTransfer,
        StockOut $stockOut,
        OrderRepositoryLegacy $orderRepositoryLegacy,
        OwnerRepositoryLegacy $ownerRepositoryLegacy,
        InventoryRepositoryLegacy $inventoryRepositoryLegacy,
        WarehousePlaceRepositoryLegacy $warehousePlaceRepository,
        ShippingPlanRepositoryLegacy $shippingPlanRepositoryLegacy,
        StockOutVoucherRepositoryLegacy $stockOutVoucherRepositoryLegacy
    ) {
        $this->stockTransfer = $stockTransfer;
        $this->stockOut = $stockOut;
        $this->orderRepositoryLegacy = $orderRepositoryLegacy;
        $this->ownerRepositoryLegacy = $ownerRepositoryLegacy;
        $this->inventoryRepositoryLegacy = $inventoryRepositoryLegacy;
        $this->warehousePlaceRepository = $warehousePlaceRepository;
        $this->shippingPlanRepositoryLegacy = $shippingPlanRepositoryLegacy;
        $this->stockOutVoucherRepositoryLegacy = $stockOutVoucherRepositoryLegacy;
    }

    public function createTransfer(
        OrderLegacy $order,
        WarehousePlace $sourcePlace,
        WarehousePlace $targetPlace,
        Enum\Type $transferType
    ): void
    {
        $owner = $this->ownerRepositoryLegacy->foundByOwnerId($order->getSalesSignature());
        $source = $this->warehousePlaceRepository->findOneBy([
            "wp.placeCode = :place_code", ":place_code", $sourcePlace->value()
        ]);

        $target = $this->warehousePlaceRepository->findOneBy([
            "wp.placeCode = :place_code", ":place_code", $targetPlace->value()
        ]);

        $voucher = new Voucher($owner, Enum\Status::processed(), ImportType::department(), $transferType, $order);

        foreach ($order->getProducts() as $product) {
            $inventory = $this->inventoryRepositoryLegacy->findByProductId($product->getProductId());
            $voucherItem = new VoucherItem($inventory, $source, $target, $product->getQuantity(), "");
            $voucher->addItem($voucherItem);
        }

        $this->stockTransfer->move($voucher);

        if (!$order->isLocked()) {
            $order->setLocked(true);
            $this->orderRepositoryLegacy->save($order);
        }
    }

    public function handleShippingPlan(OrderLegacy $order): void
    {
        $shippingPlan = $this->shippingPlanRepositoryLegacy->findBy(["sp.order_id := order_id", "order_id", $order->getId()]);

        if ($shippingPlan !== null) {
            return;
        }

        $shippingPlanInformation = [];

        foreach ($order->getProducts() as $product) {
            $inventory = $this->inventoryRepositoryLegacy->findByProductId($product->getProductId());
            $shippingPlanInformation[$inventory->getProductNumber()] = (string) $product->getQuantity();
        }

        $shippingPlan = (new ShippingPlanLegacy())
            ->setCheck("plan")
            ->setDate(new DateTime())
            ->setExport(0)
            ->setOrderId($order->getId())
            ->setQuantity(serialize($shippingPlanInformation))
        ;

        $this->shippingPlanRepositoryLegacy->save($shippingPlan);
    }

    public function createStockOut(OrderLegacy $order, WarehousePlace $sourcePlace): void
    {
        $stockOutVoucher = $this->stockOutVoucherRepositoryLegacy->findOneBy([
            "voucher_ck.order_id = :order_id", "order_id", $order->getId()
        ]);

        if ($stockOutVoucher !== null) {
            return;
        }

        $owner = $this->ownerRepositoryLegacy->foundByOwnerId($order->getSalesSignature());
        $source = $this->warehousePlaceRepository->findOneBy([
            "wp.placeCode = :place_code", ":place_code", $sourcePlace->value()
        ]);

        $voucher = new Voucher($owner, Enum\Status::processed(), ImportType::department(), Enum\Type::out(), $order);
        foreach ($order->getProducts() as $product) {
            $inventory = $this->inventoryRepositoryLegacy->findByProductId($product->getProductId());
            $voucherItem = new VoucherItem($inventory, $source, null, $product->getQuantity(), null);
            $voucher->addItem($voucherItem);
        }

        $this->stockOut->move($voucher);
    }
}

