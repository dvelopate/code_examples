<?php declare(strict_types = 1);

namespace App\Services\API\Soap\Ulustrans\Object;

use Symfony\Component\Serializer\Annotation\SerializedName;

class OutboundOrderConfirmationLineItem
{
    /**
     * @SerializedName("S07SIRK")
     * @var string
     */
    private $companyCode;

    /**
     * @SerializedName("S07TESL")
     * @var string
     */
    private $orderNumber;

    /**
     * @SerializedName("S07KALN")
     * @var string
     */
    private $lineNumber;

    /**
     * @SerializedName("S07SKOD")
     * @var string
     */
    private $itemCode;

    /**
     * @SerializedName("S07MIKT")
     * @var string
     */
    private $quantity;

    /**
     * @SerializedName("S07STTU")
     * @var string
     */
    private $status;

    /**
     * @SerializedName("S07YUKN")
     * @var string
     */
    private $loadingNumber;

    /**
     * @SerializedName("S07ITAR")
     * @var string
     */
    private $insertDate;

    /**
     * @SerializedName("S07IZMN")
     * @var string
     */
    private $insertTime;

    /**
     * @SerializedName("S07SIRA")
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

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(?string $quantity): self
    {
        $this->quantity = $quantity;

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
