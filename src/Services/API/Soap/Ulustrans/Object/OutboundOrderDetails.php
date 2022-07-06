<?php declare(strict_types = 1);

namespace App\Services\API\Soap\Ulustrans\Object;

use Symfony\Component\Serializer\Annotation\SerializedName;

class OutboundOrderDetails
{
    /**
     * @var string
     * @SerializedName("S01SKOD")
     */
    private $companyCode = 'FR';

    /**
     * @var string
     * @SerializedName("S01TESL")
     */
    private $orderNumber;

    /**
     * @var string
     * @SerializedName("S01KALN")
     */
    private $lineNumber;

    /**
     * @var string
     * @SerializedName("S01SKU")
     */
    private $itemCode;

    /**
     * @var int
     * @SerializedName("S01MIKT")
     */
    private $quantity;

    /**
     * @var string
     * @SerializedName("S01HKOD")
     */
    private $wmsMovementCode;

    /**
     * @var int
     * @SerializedName("S01ITAR")
     */
    private $insertDate;

    /**
     * @var int
     * @SerializedName("S01IZMN")
     */
    private $insertTime;

    /**
     * @var string
     * @SerializedName("S01DEPO")
     */
    private $warehouseCode = '01';

    public function getCompanyCode(): string
    {
        return $this->companyCode;
    }

    public function setCompanyCode(string $companyCode): self
    {
        $this->companyCode = $companyCode;

        return $this;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getLineNumber(): string
    {
        return $this->lineNumber;
    }

    public function setLineNumber(string $lineNumber): self
    {
        $this->lineNumber = $lineNumber;

        return $this;
    }

    public function getItemCode(): string
    {
        return $this->itemCode;
    }

    public function setItemCode(string $itemCode): self
    {
        $this->itemCode = $itemCode;

        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getWmsMovementCode(): string
    {
        return $this->wmsMovementCode;
    }

    public function setWmsMovementCode($wmsMovementCode): self
    {
        $this->wmsMovementCode = $wmsMovementCode;

        return $this;
    }

    public function getInsertDate(): int
    {
        return $this->insertDate;
    }

    public function setInsertDate(int $insertDate): self
    {
        $this->insertDate = $insertDate;

        return $this;
    }

    public function getInsertTime(): int
    {
        return $this->insertTime;
    }

    public function setInsertTime(int $insertTime): self
    {
        $this->insertTime = $insertTime;

        return $this;
    }

    public function getWarehouseCode(): string
    {
        return $this->warehouseCode;
    }

    public function setWarehouseCode(string $warehouseCode): self
    {
        $this->warehouseCode = $warehouseCode;

        return $this;
    }
}
