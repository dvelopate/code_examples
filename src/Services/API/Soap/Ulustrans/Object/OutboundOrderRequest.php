<?php declare(strict_types = 1);

namespace App\Services\API\Soap\Ulustrans\Object;

use Symfony\Component\Serializer\Annotation\SerializedName;

class OutboundOrderRequest
{
    /**
     * @var string
     * @SerializedName("S00SKOD")
     */
    private $companyCode = 'FR';

    /**
     * @var string
     * @SerializedName("S00TESN")
     */
    private $orderNumber;

    /**
     * @var string
     * @SerializedName("S00SIPN")
     */
    private $orderReferenceNumber;

    /**
     * @var string
     * @SerializedName("S00DKAN")
     */
    private $warehouseCode = '01';

    /**
     * @var string
     * @SerializedName("S00SMUS")
     */
    private $orderingCompanyCode;

    /**
     * @var string
     * @SerializedName("S00TMUS")
     */
    private $deliveryCompanyCode;

    /**
     * @var string
     * @SerializedName("S00FDRM")
     */
    private $orderType;

    /**
     * @var string
     * @SerializedName("S00SNOT")
     */
    private $orderNote;

    /**
     * @var string
     * @SerializedName("S00ACIN")
     */
    private $vehicleType;

    /**
     * @var int
     * @SerializedName("S13ITAR")
     */
    private $insertDate;

    /**
     * @var int
     * @SerializedName("S13IZMN")
     */
    private $insertTime;

    /**
     * @var string
     * @SerializedName("S00HTP1")
     */
    private $hostMovementCode;

    /**
     * @var string
     * @SerializedName("S00HTP2")
     */
    private $wmsMovementCode;

    /**
     * @var string
     * @SerializedName("S00CARGO")
     */
    private $cargoCompanyCode;

    /**
     * @var int
     * @SerializedName("S00ISECOMM")
     */
    private $isEcommerceOrder;

    /**
     * @var string
     * @SerializedName("S00EC_FIRADI")
     */
    private $eCommerceCompanyName;

    /**
     * @var string
     * @SerializedName("S00EC_UKOD")
     */
    private $eCommerceCountryCode;

    /**
     * @var string
     * @SerializedName("S00EC_ILKOD")
     */
    private $eCommerceCityCode;

    /**
     * @var string
     * @SerializedName("S00EC_ILCE")
     */
    private $eCommerceDistrict;

    /**
     * @var string
     * @SerializedName("S00EC_PKOD")
     */
    private $eCommercePostalCode;

    /**
     * @var string
     * @SerializedName("S00EC_TEL1")
     */
    private $eCommercePhoneNumber;

    /**
     * @var string
     * @SerializedName("S00EC_EMAIL")
     */
    private $eCommerceEmail;

    /**
     * @var string
     * @SerializedName("S00EC_PLATFORM")
     */
    private $eCommercePlatform;

    public function getCompanyCode(): string
    {
        return $this->companyCode;
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

    public function getOrderReferenceNumber(): string
    {
        return $this->orderReferenceNumber;
    }

    public function setOrderReferenceNumber(string $orderReferenceNumber): self
    {
        $this->orderReferenceNumber = $orderReferenceNumber;

        return $this;
    }

    public function getWarehouseCode(): string
    {
        return $this->warehouseCode;
    }

    public function getOrderingCompanyCode(): string
    {
        return $this->orderingCompanyCode;
    }

    public function setOrderingCompanyCode(string $orderingCompanyCode): self
    {
        $this->orderingCompanyCode = $orderingCompanyCode;

        return $this;
    }

    public function getDeliveryCompanyCode(): string
    {
        return $this->deliveryCompanyCode;
    }

    public function setDeliveryCompanyCode(string $deliveryCompanyCode): self
    {
        $this->deliveryCompanyCode = $deliveryCompanyCode;

        return $this;
    }

    public function getOrderType(): string
    {
        return $this->orderType;
    }

    public function setOrderType(string $orderType): self
    {
        $this->orderType = $orderType;

        return $this;
    }

    public function getOrderNote(): ?string
    {
        return $this->orderNote;
    }

    public function setOrderNote(?string $orderNote): self
    {
        $this->orderNote = $orderNote;

        return $this;
    }

    public function getVehicleType(): ?string
    {
        return $this->vehicleType;
    }

    public function setVehicleType(?string $vehicleType): self
    {
        $this->vehicleType = $vehicleType;

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

    public function getHostMovementCode(): string
    {
        return $this->hostMovementCode;
    }

    public function setHostMovementCode(string $hostMovementCode): self
    {
        $this->hostMovementCode = $hostMovementCode;

        return $this;
    }

    public function getWmsMovementCode(): string
    {
        return $this->wmsMovementCode;
    }

    public function setWmsMovementCode(string $wmsMovementCode): self
    {
        $this->wmsMovementCode = $wmsMovementCode;

        return $this;
    }

    public function getCargoCompanyCode(): ?string
    {
        return $this->cargoCompanyCode;
    }

    public function setCargoCompanyCode(?string $cargoCompanyCode): self
    {
        $this->cargoCompanyCode = $cargoCompanyCode;

        return $this;
    }

    public function getIsEcommerceOrder(): int
    {
        return $this->isEcommerceOrder;
    }

    public function setIsEcommerceOrder(int $isEcommerceOrder): self
    {
        $this->isEcommerceOrder = $isEcommerceOrder;

        return $this;
    }

    public function getECommerceCompanyName(): ?string
    {
        return $this->eCommerceCompanyName;
    }

    public function setECommerceCompanyName(?string $eCommerceCompanyName): self
    {
        $this->eCommerceCompanyName = $eCommerceCompanyName;

        return $this;
    }

    public function getECommerceCountryCode(): ?string
    {
        return $this->eCommerceCountryCode;
    }

    public function setECommerceCountryCode(?string $eCommerceCountryCode): self
    {
        $this->eCommerceCountryCode = $eCommerceCountryCode;

        return $this;
    }

    public function getECommerceCityCode(): ?string
    {
        return $this->eCommerceCityCode;
    }

    public function setECommerceCityCode(?string $eCommerceCityCode): self
    {
        $this->eCommerceCityCode = $eCommerceCityCode;

        return $this;
    }

    public function getECommerceDistrict(): ?string
    {
        return $this->eCommerceDistrict;
    }

    public function setECommerceDistrict(?string $eCommerceDistrict): self
    {
        $this->eCommerceDistrict = $eCommerceDistrict;

        return $this;
    }

    public function getECommercePostalCode(): ?string
    {
        return $this->eCommercePostalCode;
    }

    public function setECommercePostalCode(?string $eCommercePostalCode): self
    {
        $this->eCommercePostalCode = $eCommercePostalCode;

        return $this;
    }

    public function getECommercePhoneNumber(): ?string
    {
        return $this->eCommercePhoneNumber;
    }

    public function setECommercePhoneNumber(?string $eCommercePhoneNumber): self
    {
        $this->eCommercePhoneNumber = $eCommercePhoneNumber;

        return $this;
    }

    public function getECommerceEmail(): ?string
    {
        return $this->eCommerceEmail;
    }

    public function setECommerceEmail(?string $eCommerceEmail): self
    {
        $this->eCommerceEmail = $eCommerceEmail;

        return $this;
    }

    public function getECommercePlatform(): ?string
    {
        return $this->eCommercePlatform;
    }

    public function setECommercePlatform(?string $eCommercePlatform): self
    {
        $this->eCommercePlatform = $eCommercePlatform;

        return $this;
    }
}
