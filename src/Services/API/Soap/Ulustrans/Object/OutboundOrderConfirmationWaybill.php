<?php declare(strict_types = 1);

namespace App\Services\API\Soap\Ulustrans\Object;

use Symfony\Component\Serializer\Annotation\SerializedName;

class OutboundOrderConfirmationWaybill
{
    /**
     * @SerializedName("S09TESL")
     * @var string
     */
    private $orderNumber;

    /**
     * @SerializedName("S09SIPN")
     * @var string
     */
    private $orderReferenceNumber;

    /**
     * @SerializedName("S09HTIP")
     * @var string
     */
    private $wmsMovementCode;

    /**
     * @SerializedName("S09EHTP")
     * @var string
     */
    private $hostMovementCode;

    /**
     * @SerializedName("S09SKOD")
     * @var string
     */
    private $companyCode;

    /**
     * @SerializedName("S09DEPO")
     * @var string
     */
    private $warehouseCode;

    /**
     * @SerializedName("S09SYIL")
     * @var string
     */
    private $shipmentYear;

    /**
     * @SerializedName("S09SNO")
     * @var string
     */
    private $shipmentNumber;

    /**
     * @SerializedName("S09YUKN")
     * @var string
     */
    private $loadingNumber;

    /**
     * @SerializedName("S09INUM")
     * @var string
     */
    private $waybillNumber;

    /**
     * @SerializedName("S09IRTR")
     * @var string
     */
    private $waybillDate;

    /**
     * @SerializedName("S09IRZM")
     * @var string
     */
    private $waybillTime;

    /**
     * @SerializedName("S09FSTR")
     * @var string
     */
    private $shipmentDate;

    /**
     * @SerializedName("S09USER")
     * @var string
     */
    private $printedBy;

    /**
     * @SerializedName("S09ITIP")
     * @var string
     */
    private $printCount;

    /**
     * @SerializedName("S09BSNO")
     * @var string
     */
    private $waybillSerialNumber;

    /**
     * @SerializedName("S09ISTR")
     * @var string
     */
    private $inserDate;

    /**
     * @SerializedName("S09ISZM")
     * @var string
     */
    private $insertTime;

    /**
     * @SerializedName("S09SIRA")
     * @var string
     */
    private $id;

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getOrderReferenceNumber(): ?string
    {
        return $this->orderReferenceNumber;
    }

    public function setOrderReferenceNumber(?string $orderReferenceNumber): self
    {
        $this->orderReferenceNumber = $orderReferenceNumber;

        return $this;
    }

    public function getWmsMovementCode(): ?string
    {
        return $this->wmsMovementCode;
    }

    public function setWmsMovementCode(?string $wmsMovementCode): self
    {
        $this->wmsMovementCode = $wmsMovementCode;

        return $this;
    }

    public function getHostMovementCode(): ?string
    {
        return $this->hostMovementCode;
    }

    public function setHostMovementCode(?string $hostMovementCode): self
    {
        $this->hostMovementCode = $hostMovementCode;

        return $this;
    }

    public function getCompanyCode(): ?string
    {
        return $this->companyCode;
    }

    public function setCompanyCode(?string $companyCode): self
    {
        $this->companyCode = $companyCode;

        return $this;
    }

    public function getWarehouseCode(): ?string
    {
        return $this->warehouseCode;
    }

    public function setWarehouseCode(?string $warehouseCode): self
    {
        $this->warehouseCode = $warehouseCode;

        return $this;
    }

    public function getShipmentYear(): ?string
    {
        return $this->shipmentYear;
    }

    public function setShipmentYear(?string $shipmentYear): self
    {
        $this->shipmentYear = $shipmentYear;

        return $this;
    }

    public function getShipmentNumber(): ?string
    {
        return $this->shipmentNumber;
    }

    public function setShipmentNumber(?string $shipmentNumber): self
    {
        $this->shipmentNumber = $shipmentNumber;

        return $this;
    }

    public function getLoadingNumber(): ?string
    {
        return $this->loadingNumber;
    }

    public function setLoadingNumber(?string $loadingNumber): self
    {
        $this->loadingNumber = $loadingNumber;

        return $this;
    }

    public function getWaybillNumber(): ?string
    {
        return $this->waybillNumber;
    }

    public function setWaybillNumber(?string $waybillNumber): self
    {
        $this->waybillNumber = $waybillNumber;

        return $this;
    }

    public function getWaybillDate(): ?string
    {
        return $this->waybillDate;
    }

    public function setWaybillDate(?string $waybillDate): self
    {
        $this->waybillDate = $waybillDate;

        return $this;
    }

    public function getWaybillTime(): ?string
    {
        return $this->waybillTime;
    }

    public function setWaybillTime(?string $waybillTime): self
    {
        $this->waybillTime = $waybillTime;

        return $this;
    }

    public function getShipmentDate(): ?string
    {
        return $this->shipmentDate;
    }

    public function setShipmentDate(?string $shipmentDate): self
    {
        $this->shipmentDate = $shipmentDate;

        return $this;
    }

    public function getPrintedBy(): ?string
    {
        return $this->printedBy;
    }

    public function setPrintedBy(?string $printedBy): self
    {
        $this->printedBy = $printedBy;

        return $this;
    }

    public function getPrintCount(): ?string
    {
        return $this->printCount;
    }

    public function setPrintCount(?string $printCount): self
    {
        $this->printCount = $printCount;

        return $this;
    }

    public function getWaybillSerialNumber(): ?string
    {
        return $this->waybillSerialNumber;
    }

    public function setWaybillSerialNumber(?string $waybillSerialNumber): self
    {
        $this->waybillSerialNumber = $waybillSerialNumber;

        return $this;
    }

    public function getInserDate(): ?string
    {
        return $this->inserDate;
    }

    public function setInserDate(?string $inserDate): self
    {
        $this->inserDate = $inserDate;

        return $this;
    }

    public function getInsertTime(): ?string
    {
        return $this->insertTime;
    }

    public function setInsertTime(?string $insertTime): self
    {
        $this->insertTime = $insertTime;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }
}
