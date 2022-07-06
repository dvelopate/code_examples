<?php declare(strict_types = 1);

namespace App\Services\API\Soap\Ulustrans\Object;

use Symfony\Component\Serializer\Annotation\SerializedName;

class OutboundOrderConfirmationMaster
{
    /**
     * @SerializedName("S06SKOD")
     * @var string
     */
    private $companyCode;

    /**
     * @SerializedName("S06TESL")
     * @var string
     */
    private $orderNumber;

    /**
     * @SerializedName("S06OHTP")
     * @var string
     */
    private $hostMovementCode;

    /**
     * @SerializedName("S06HKOD")
     * @var string
     */
    private $wmsMovementCode;

    /**
     * @SerializedName("S06DEPO")
     * @var string
     */
    private $warehouseCode;

    /**
     * @SerializedName("S06RSIP")
     * @var string
     */
    private $orderReferenceNumber;

    /**
     * @var string
     * @SerializedName("S06FIRM")
     */
    private $orderingCompanyCode;

    /**
     * @var string
     * @SerializedName("S06TFIR")
     */
    private $deliveryCompanyCode;

    /**
     * @SerializedName("S06STTU")
     * @var string
     */
    private $status;

    /**
     * @SerializedName("S06YUKN")
     * @var string
     */
    private $loadingNumber;

    /**
     * @SerializedName("S06ITAR")
     * @var string
     */
    private $insertDate;

    /**
     * @SerializedName("S06IZMN")
     * @var string
     */
    private $inserTime;

    /**
     * @SerializedName("S06SIRA")
     * @var string
     */
    private $id;

    public function getCompanyCode(): ?string
    {
        return $this->companyCode;
    }

    public function setCompanyCode(?string $companyCode): self
    {
        $this->companyCode = $companyCode;

        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

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

    public function getWmsMovementCode(): ?string
    {
        return $this->wmsMovementCode;
    }

    public function setWmsMovementCode(?string $wmsMovementCode): self
    {
        $this->wmsMovementCode = $wmsMovementCode;

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

    public function getOrderReferenceNumber(): ?string
    {
        return $this->orderReferenceNumber;
    }

    public function setOrderReferenceNumber(?string $orderReferenceNumber): self
    {
        $this->orderReferenceNumber = $orderReferenceNumber;

        return $this;
    }

    public function getOrderingCompanyCode(): ?string
    {
        return $this->orderingCompanyCode;
    }

    public function setOrderingCompanyCode(?string $orderingCompanyCode): self
    {
        $this->orderingCompanyCode = $orderingCompanyCode;

        return $this;
    }

    public function getDeliveryCompanyCode(): ?string
    {
        return $this->deliveryCompanyCode;
    }

    public function setDeliveryCompanyCode(?string $deliveryCompanyCode): self
    {
        $this->deliveryCompanyCode = $deliveryCompanyCode;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

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

    public function getInsertDate(): ?string
    {
        return $this->insertDate;
    }

    public function setInsertDate(?string $insertDate): self
    {
        $this->insertDate = $insertDate;

        return $this;
    }

    public function getInserTime(): ?string
    {
        return $this->inserTime;
    }

    public function setInserTime(?string $inserTime): self
    {
        $this->inserTime = $inserTime;

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
