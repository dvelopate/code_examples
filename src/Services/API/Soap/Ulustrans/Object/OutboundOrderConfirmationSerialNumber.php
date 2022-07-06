<?php declare(strict_types = 1);

namespace App\Services\API\Soap\Ulustrans\Object;

use Symfony\Component\Serializer\Annotation\SerializedName;

class OutboundOrderConfirmationSerialNumber
{
    /**
     * @SerializedName("S15SKOD")
     * @var string
     */
    private $companyCode;

    /**
     * @SerializedName("S15DEPO")
     * @var string
     */
    private $warehouseCode;

    /**
     * @SerializedName("S15SIPN")
     * @var string
     */
    private $osOrderId;

    /**
     * @SerializedName("S15KALN")
     * @var string
     */
    private $lineNumber;

    /**
     * @SerializedName("S15SKU")
     * @var string
     */
    private $itemCode;

    /**
     * @SerializedName("S15SERI")
     * @var string
     */
    private $serialNumber;

    /**
     * @SerializedName("S15SIRA")
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

    public function getWarehouseCode(): ?string
    {
        return $this->warehouseCode;
    }

    public function setWarehouseCode(?string $warehouseCode): self
    {
        $this->warehouseCode = $warehouseCode;

        return $this;
    }

    public function getOsOrderId(): ?string
    {
        return $this->osOrderId;
    }

    public function setOsOrderId(?string $osOrderId): self
    {
        $this->osOrderId = $osOrderId;

        return $this;
    }

    public function getLineNumber(): ?string
    {
        return $this->lineNumber;
    }

    public function setLineNumber(?string $lineNumber): self
    {
        $this->lineNumber = $lineNumber;

        return $this;
    }

    public function getItemCode(): ?string
    {
        return $this->itemCode;
    }

    public function setItemCode(?string $itemCode): self
    {
        $this->itemCode = $itemCode;

        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): self
    {
        $this->serialNumber = $serialNumber;

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
