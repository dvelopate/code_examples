<?php declare(strict_types = 1);

namespace App\Services\API\Qantas;

class QantasLineItem
{
    /** @var string */
    private $price;

    /** @var string */
    private $status;

    /** @var string */
    private $subTotal;

    /** @var string */
    private $taxTotal;

    /** @var string */
    private $originalTaxRate;

    /** @var string */
    private $total;

    /** @var int */
    private $quantity;

    /** @var string */
    private $taxonName;

    /** @var string */
    private $brandName;

    /** @var string */
    private $advertName;

    /** @var string */
    private $advertExternalId;

    /** @var string */
    private $variantName;

    /** @var string */
    private $variantSku;

    /** @var string */
    private $variantBarcode;

    /** @var string */
    private $variantExternalId;

    /** @var string */
    private $id;

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

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

    public function getSubTotal(): ?string
    {
        return $this->subTotal;
    }

    public function setSubTotal(?string $subTotal): self
    {
        $this->subTotal = $subTotal;

        return $this;
    }

    public function getTaxTotal(): ?string
    {
        return $this->taxTotal;
    }

    public function setTaxTotal(?string $taxTotal): self
    {
        $this->taxTotal = $taxTotal;

        return $this;
    }

    public function getOriginalTaxRate(): ?string
    {
        return $this->originalTaxRate;
    }

    public function setOriginalTaxRate(?string $originalTaxRate): self
    {
        $this->originalTaxRate = $originalTaxRate;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getTaxonName(): ?string
    {
        return $this->taxonName;
    }

    public function setTaxonName(?string $taxonName): self
    {
        $this->taxonName = $taxonName;

        return $this;
    }

    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    public function getAdvertName(): ?string
    {
        return $this->advertName;
    }

    public function setAdvertName(?string $advertName): self
    {
        $this->advertName = $advertName;

        return $this;
    }

    public function getAdvertExternalId(): ?string
    {
        return $this->advertExternalId;
    }

    public function setAdvertExternalId(?string $advertExternalId): self
    {
        $this->advertExternalId = $advertExternalId;

        return $this;
    }

    public function getVariantName(): ?string
    {
        return $this->variantName;
    }

    public function setVariantName(?string $variantName): self
    {
        $this->variantName = $variantName;

        return $this;
    }

    public function getVariantSku(): ?string
    {
        return $this->variantSku;
    }

    public function setVariantSku(?string $variantSku): self
    {
        $this->variantSku = $variantSku;

        return $this;
    }

    public function getVariantBarcode(): ?string
    {
        return $this->variantBarcode;
    }

    public function setVariantBarcode(?string $variantBarcode): self
    {
        $this->variantBarcode = $variantBarcode;

        return $this;
    }

    public function getVariantExternalId(): ?string
    {
        return $this->variantExternalId;
    }

    public function setVariantExternalId(?string $variantExternalId): self
    {
        $this->variantExternalId = $variantExternalId;

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
