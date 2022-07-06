<?php declare(strict_types = 1);

namespace App\Services\API\Soap\Ulustrans\Object;

use Doctrine\Common\Collections\ArrayCollection;

class OutboundOrderConfirmationResponse
{
    /** @var OutboundOrderConfirmationMaster */
    private $masterRecord;

    /** @var ArrayCollection<OutboundOrderConfirmationLineItem> */
    private $lineItems;

    /** @var ArrayCollection<OutboundOrderConfirmationWaybill> */
    private $waybills;

    /** @var ArrayCollection<OutboundOrderConfirmationSerialNumber> */
    private $serialNumbers;

    public function getMasterRecord(): OutboundOrderConfirmationMaster
    {
        return $this->masterRecord;
    }

    public function setMasterRecord(OutboundOrderConfirmationMaster $masterRecord): self
    {
        $this->masterRecord = $masterRecord;

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

    public function getWaybills(): ?ArrayCollection
    {
        return $this->waybills;
    }

    public function setWaybills(?ArrayCollection $waybills): self
    {
        $this->waybills = $waybills;

        return $this;
    }

    public function getSerialNumbers(): ?ArrayCollection
    {
        return $this->serialNumbers;
    }

    public function setSerialNumbers(?ArrayCollection $serialNumbers): self
    {
        $this->serialNumbers = $serialNumbers;

        return $this;
    }
}
