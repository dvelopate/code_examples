<?php declare(strict_types = 1);

namespace App\Services\API\Qantas;

use Doctrine\Common\Collections\ArrayCollection;

class QantasInvoice
{
    /** @var string */
    private $id;

    /** @var string */
    private $postage;

    /** @var string */
    private $paidAt;

    /** @var string */
    private $status;

    /** @var string */
    private $deliveryType;

    /** @var string */
    private $readyAt;

    /** @var string */
    private $collectedAt;

    /** @var string */
    private $subtotal;

    /** @var string */
    private $discount;

    /** @var string */
    private $total;

    /** @var string */
    private $taxTotal;

    /** @var string */
    private $createdAt;

    /** @var string */
    private $messageToSeller;

    /** @var string */
    private $expectedDeliveryDate;

    /** @var string */
    private $expectedDeliverySlot;

    /** @var string */
    private $sellerId;

    /** @var QantasCustomer */
    private $customer;

    /** @var ArrayCollection<QantasLineItem> */
    private $lineItems;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getPostage(): ?string
    {
        return $this->postage;
    }


    public function setPostage(?string $postage): self
    {
        $this->postage = $postage;

        return $this;
    }

    public function getPaidAt(): ?string
    {
        return $this->paidAt;
    }


    public function setPaidAt(?string $paidAt): self
    {
        $this->paidAt = $paidAt;

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

    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }


    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    public function getReadyAt(): ?string
    {
        return $this->readyAt;
    }


    public function setReadyAt(?string $readyAt): self
    {
        $this->readyAt = $readyAt;

        return $this;
    }

    public function getCollectedAt(): ?string
    {
        return $this->collectedAt;
    }


    public function setCollectedAt(?string $collectedAt): self
    {
        $this->collectedAt = $collectedAt;

        return $this;
    }

    public function getSubtotal(): ?string
    {
        return $this->subtotal;
    }


    public function setSubtotal(?string $subtotal): self
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    public function getDiscount(): ?string
    {
        return $this->discount;
    }


    public function setDiscount(?string $discount): self
    {
        $this->discount = $discount;

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

    public function getTaxTotal(): ?string
    {
        return $this->taxTotal;
    }


    public function setTaxTotal(?string $taxTotal): self
    {
        $this->taxTotal = $taxTotal;

        return $this;
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }


    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getMessageToSeller(): ?string
    {
        return $this->messageToSeller;
    }


    public function setMessageToSeller(?string $messageToSeller): self
    {
        $this->messageToSeller = $messageToSeller;

        return $this;
    }

    public function getExpectedDeliveryDate(): ?string
    {
        return $this->expectedDeliveryDate;
    }


    public function setExpectedDeliveryDate(?string $expectedDeliveryDate): self
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;

        return $this;
    }

    public function getExpectedDeliverySlot(): ?string
    {
        return $this->expectedDeliverySlot;
    }


    public function setExpectedDeliverySlot(?string $expectedDeliverySlot): self
    {
        $this->expectedDeliverySlot = $expectedDeliverySlot;

        return $this;
    }

    public function getSellerId(): ?string
    {
        return $this->sellerId;
    }


    public function setSellerId(?string $sellerId): self
    {
        $this->sellerId = $sellerId;

        return $this;
    }

    public function getCustomer(): ?QantasCustomer
    {
        return $this->customer;
    }

    public function setCustomer(?QantasCustomer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getLineItems(): ?ArrayCollection
    {
        return $this->lineItems;
    }

    public function setLineItems(?ArrayCollection $lineItems): self
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    public function addLineItem(QantasLineItem $lineItem): void
    {
        if ($this->lineItems === null) {
            $this->lineItems = new ArrayCollection();
        }

        $this->lineItems->add($lineItem);
    }
}
