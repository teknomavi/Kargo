<?php

namespace Teknomavi\Kargo\Model;


class Package
{
    const PAYMENT_TYPE_CONSIGNEE_PAY = 1;
    const PAYMENT_TYPE_SHIPPER_PAY = 2;

    const SHIPMENT_TYPE_PREPAID = 1;
    const SHIPMENT_TYPE_CASH_ON_DELIVERY = 2;  // Kapıda ödeme nakit
    const SHIPMENT_TYPE_CARD_ON_DELIVERY = 3;  // Kapıda ödeme kredi kartı


    const PACKAGE_TYPE_DOCUMENT = 1;
    const PACKAGE_TYPE_BOX = 2;

    private $referenceNo;
    private $invoiceNo;
    private $shipperCountry;
    private $shipperCity;
    private $shipperTown;
    private $shipperAddress;
    private $shipperMobilPhone;
    private $shipperEmail;
    private $shipperAccountNumber;
    private $shipperName;
    private $shipperPostalCode;

    private $consigneeCountry;
    private $consigneeCity;
    private $consigneeTown;
    private $consigneeAddress;
    private $consigneeMobilPhone;
    private $consigneeEmail;
    private $consigneeIdentificationNo;
    private $consigneeAccountNumber;
    private $consigneeName;
    private $consigneePostalCode;

    private $packageType;
    private $paymentType = self::SHIPMENT_TYPE_PREPAID;
    private $shipmentType;
    private $numberOfPackages;

    private $packageContent;
    /**
     * @var float $ActualWeight
     */
    private $actualWeight;

    /**
     * @var float $VolumeWeight
     */
    private $volumeWeight;

    /**
     * @var float $InsuranceValue
     */
    private $insuranceValue = null;
    /**
     * @var string $InsuranceValueCurrency
     */
    private $insuranceValueCurrency = null;
    /**
     * @var float $ValueOfGoods
     */
    private $valueOfGoods = null;
    /**
     * @var string $ValueOfGoodsCurrency
     */
    private $valueOfGoodsCurrency = null;

    /**
     * @return mixed
     */
    public function getReferenceNo()
    {
        return $this->referenceNo;
    }

    /**
     * @param mixed $referenceNo
     *
     * @return Package
     */
    public function setReferenceNo($referenceNo)
    {
        $this->referenceNo = $referenceNo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * @param mixed $invoiceNo
     *
     * @return Package
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->invoiceNo = $invoiceNo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipperCountry()
    {
        return $this->shipperCountry;
    }

    /**
     * @param mixed $shipperCountry
     *
     * @return Package
     */
    public function setShipperCountry($shipperCountry)
    {
        $this->shipperCountry = $shipperCountry;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipperCity()
    {
        return $this->shipperCity;
    }

    /**
     * @param mixed $shipperCity
     *
     * @return Package
     */
    public function setShipperCity($shipperCity)
    {
        $this->shipperCity = $shipperCity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipperTown()
    {
        return $this->shipperTown;
    }

    /**
     * @param mixed $shipperTown
     *
     * @return Package
     */
    public function setShipperTown($shipperTown)
    {
        $this->shipperTown = $shipperTown;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipperAddress()
    {
        return $this->shipperAddress;
    }

    /**
     * @param mixed $shipperAddress
     *
     * @return Package
     */
    public function setShipperAddress($shipperAddress)
    {
        $this->shipperAddress = $shipperAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipperMobilPhone()
    {
        return $this->shipperMobilPhone;
    }

    /**
     * @param mixed $shipperMobilPhone
     *
     * @return Package
     */
    public function setShipperMobilPhone($shipperMobilPhone)
    {
        $this->shipperMobilPhone = $shipperMobilPhone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipperEmail()
    {
        return $this->shipperEmail;
    }

    /**
     * @param mixed $shipperEmail
     *
     * @return Package
     */
    public function setShipperEmail($shipperEmail)
    {
        $this->shipperEmail = $shipperEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipperIdentificationNo()
    {
        return $this->shipperIdentificationNo;
    }

    /**
     * @param mixed $shipperIdentificationNo
     *
     * @return Package
     */
    public function setShipperIdentificationNo($shipperIdentificationNo)
    {
        $this->shipperIdentificationNo = $shipperIdentificationNo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipperAccountNumber()
    {
        return $this->shipperAccountNumber;
    }

    /**
     * @param mixed $shipperAccountNumber
     *
     * @return Package
     */
    public function setShipperAccountNumber($shipperAccountNumber)
    {
        $this->shipperAccountNumber = $shipperAccountNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipperName()
    {
        return $this->shipperName;
    }

    /**
     * @param mixed $shipperName
     *
     * @return Package
     */
    public function setShipperName($shipperName)
    {
        $this->shipperName = $shipperName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipperPostalCode()
    {
        return $this->shipperPostalCode;
    }

    /**
     * @param mixed $shipperPostalCode
     *
     * @return Package
     */
    public function setShipperPostalCode($shipperPostalCode)
    {
        $this->shipperPostalCode = $shipperPostalCode;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getConsigneeCountry()
    {
        return $this->consigneeCountry;
    }

    /**
     * @param mixed $consigneeCountry
     *
     * @return Package
     */
    public function setConsigneeCountry($consigneeCountry)
    {
        $this->consigneeCountry = $consigneeCountry;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsigneeCity()
    {
        return $this->consigneeCity;
    }

    /**
     * @param mixed $consigneeCity
     *
     * @return Package
     */
    public function setConsigneeCity($consigneeCity)
    {
        $this->consigneeCity = $consigneeCity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsigneeTown()
    {
        return $this->consigneeTown;
    }

    /**
     * @param mixed $consigneeTown
     *
     * @return Package
     */
    public function setConsigneeTown($consigneeTown)
    {
        $this->consigneeTown = $consigneeTown;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

    /**
     * @param mixed $consigneeAddress
     *
     * @return Package
     */
    public function setConsigneeAddress($consigneeAddress)
    {
        $this->consigneeAddress = $consigneeAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsigneeMobilPhone()
    {
        return $this->consigneeMobilPhone;
    }

    /**
     * @param mixed $consigneeMobilPhone
     *
     * @return Package
     */
    public function setConsigneeMobilPhone($consigneeMobilPhone)
    {
        $this->consigneeMobilPhone = $consigneeMobilPhone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsigneeEmail()
    {
        return $this->consigneeEmail;
    }

    /**
     * @param mixed $consigneeEmail
     *
     * @return Package
     */
    public function setConsigneeEmail($consigneeEmail)
    {
        $this->consigneeEmail = $consigneeEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsigneeIdentificationNo()
    {
        return $this->consigneeIdentificationNo;
    }

    /**
     * @param mixed $consigneeIdentificationNo
     *
     * @return Package
     */
    public function setConsigneeIdentificationNo($consigneeIdentificationNo)
    {
        $this->consigneeIdentificationNo = $consigneeIdentificationNo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsigneeAccountNumber()
    {
        return $this->consigneeAccountNumber;
    }

    /**
     * @param mixed $consigneeAccountNumber
     *
     * @return Package
     */
    public function setConsigneeAccountNumber($consigneeAccountNumber)
    {
        $this->consigneeAccountNumber = $consigneeAccountNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    /**
     * @param mixed $consigneeName
     *
     * @return Package
     */
    public function setConsigneeName($consigneeName)
    {
        $this->consigneeName = $consigneeName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsigneePostalCode()
    {
        return $this->consigneePostalCode;
    }

    /**
     * @param mixed $consigneePostalCode
     *
     * @return Package
     */
    public function setConsigneePostalCode($consigneePostalCode)
    {
        $this->consigneePostalCode = $consigneePostalCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     * @param mixed $packageType
     *
     * @return Package
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param mixed $paymentType
     *
     * @return Package
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipmentType()
    {
        return $this->shipmentType;
    }

    /**
     * @param mixed $shipmentType
     *
     * @return Package
     */
    public function setShipmentType($shipmentType)
    {
        $this->shipmentType = $shipmentType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberOfPackages()
    {
        return $this->numberOfPackages;
    }

    /**
     * @param mixed $numberOfPackages
     *
     * @return Package
     */
    public function setNumberOfPackages($numberOfPackages)
    {
        $this->numberOfPackages = $numberOfPackages;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPackageContent()
    {
        return $this->packageContent;
    }

    /**
     * @param mixed $packageContent
     *
     * @return Package
     */
    public function setPackageContent($packageContent)
    {
        $this->packageContent = $packageContent;
        return $this;
    }

    /**
     * @return float
     */
    public function getActualWeight(): float
    {
        return $this->actualWeight;
    }

    /**
     * @param float $actualWeight
     *
     * @return Package
     */
    public function setActualWeight(float $actualWeight): Package
    {
        $this->actualWeight = $actualWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolumeWeight(): float
    {
        return $this->volumeWeight;
    }

    /**
     * @param float $volumeWeight
     *
     * @return Package
     */
    public function setVolumeWeight(float $volumeWeight): Package
    {
        $this->volumeWeight = $volumeWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceValue(): ?float
    {
        return $this->insuranceValue;
    }

    /**
     * @param float $insuranceValue
     *
     * @return Package
     */
    public function setInsuranceValue(float $insuranceValue): Package
    {
        $this->insuranceValue = $insuranceValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getInsuranceValueCurrency(): string
    {
        return $this->insuranceValueCurrency;
    }

    /**
     * @param string $insuranceValueCurrency
     *
     * @return Package
     */
    public function setInsuranceValueCurrency(string $insuranceValueCurrency): Package
    {
        $this->insuranceValueCurrency = $insuranceValueCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getValueOfGoods(): float
    {
        return $this->valueOfGoods;
    }

    /**
     * @param float $valueOfGoods
     *
     * @return Package
     */
    public function setValueOfGoods(float $valueOfGoods): Package
    {
        $this->valueOfGoods = $valueOfGoods;
        return $this;
    }

    /**
     * @return string
     */
    public function getValueOfGoodsCurrency(): string
    {
        return $this->valueOfGoodsCurrency;
    }

    /**
     * @param string $valueOfGoodsCurrency
     *
     * @return Package
     */
    public function setValueOfGoodsCurrency(string $valueOfGoodsCurrency): Package
    {
        $this->valueOfGoodsCurrency = $valueOfGoodsCurrency;
        return $this;
    }

}
