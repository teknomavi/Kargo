<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class ShipmentInfo_Type1
{
    /**
     * @var string
     */
    protected $ShipperAccountNumber = null;
    /**
     * @var string
     */
    protected $ShipperName = null;
    /**
     * @var string
     */
    protected $ShipperContactName = null;
    /**
     * @var string
     */
    protected $ShipperAddress = null;
    /**
     * @var int
     */
    protected $ShipperCityCode = null;
    /**
     * @var int
     */
    protected $ShipperAreaCode = null;
    /**
     * @var string
     */
    protected $ShipperPhoneNumber = null;
    /**
     * @var string
     */
    protected $ShipperEMail = null;
    /**
     * @var string
     */
    protected $ShipperExpenseCode = null;
    /**
     * @var string
     */
    protected $ConsigneeAccountNumber = null;
    /**
     * @var string
     */
    protected $ConsigneeName = null;
    /**
     * @var string
     */
    protected $ConsigneeContactName = null;
    /**
     * @var string
     */
    protected $ConsigneeAddress = null;
    /**
     * @var int
     */
    protected $ConsigneeCityCode = null;
    /**
     * @var int
     */
    protected $ConsigneeAreaCode = null;
    /**
     * @var string
     */
    protected $ConsigneePhoneNumber = null;
    /**
     * @var string
     */
    protected $ConsigneeEMail = null;
    /**
     * @var string
     */
    protected $ConsigneeExpenseCode = null;
    /**
     * @var int
     */
    protected $ServiceLevel = null;
    /**
     * @var int
     */
    protected $PaymentType = null;
    /**
     * @var string
     */
    protected $PackageType = null;
    /**
     * @var int
     */
    protected $NumberOfPackages = null;
    /**
     * @var string
     */
    protected $CustomerReferance = null;
    /**
     * @var string
     */
    protected $CustomerInvoiceNumber = null;
    /**
     * @var string
     */
    protected $DescriptionOfGoods = null;
    /**
     * @var string
     */
    protected $DeliveryNotificationEmail = null;

    /**
     * @param int $ShipperCityCode
     * @param int $ShipperAreaCode
     * @param int $ConsigneeCityCode
     * @param int $ConsigneeAreaCode
     * @param int $ServiceLevel
     * @param int $PaymentType
     * @param int $NumberOfPackages
     */
    public function __construct($ShipperCityCode, $ShipperAreaCode, $ConsigneeCityCode, $ConsigneeAreaCode, $ServiceLevel, $PaymentType, $NumberOfPackages)
    {
        $this->ShipperCityCode = $ShipperCityCode;
        $this->ShipperAreaCode = $ShipperAreaCode;
        $this->ConsigneeCityCode = $ConsigneeCityCode;
        $this->ConsigneeAreaCode = $ConsigneeAreaCode;
        $this->ServiceLevel = $ServiceLevel;
        $this->PaymentType = $PaymentType;
        $this->NumberOfPackages = $NumberOfPackages;
    }

    /**
     * @return string
     */
    public function getShipperAccountNumber()
    {
        return $this->ShipperAccountNumber;
    }

    /**
     * @param string $ShipperAccountNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setShipperAccountNumber($ShipperAccountNumber)
    {
        $this->ShipperAccountNumber = $ShipperAccountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperName()
    {
        return $this->ShipperName;
    }

    /**
     * @param string $ShipperName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setShipperName($ShipperName)
    {
        $this->ShipperName = $ShipperName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperContactName()
    {
        return $this->ShipperContactName;
    }

    /**
     * @param string $ShipperContactName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setShipperContactName($ShipperContactName)
    {
        $this->ShipperContactName = $ShipperContactName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperAddress()
    {
        return $this->ShipperAddress;
    }

    /**
     * @param string $ShipperAddress
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setShipperAddress($ShipperAddress)
    {
        $this->ShipperAddress = $ShipperAddress;

        return $this;
    }

    /**
     * @return int
     */
    public function getShipperCityCode()
    {
        return $this->ShipperCityCode;
    }

    /**
     * @param int $ShipperCityCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setShipperCityCode($ShipperCityCode)
    {
        $this->ShipperCityCode = $ShipperCityCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getShipperAreaCode()
    {
        return $this->ShipperAreaCode;
    }

    /**
     * @param int $ShipperAreaCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setShipperAreaCode($ShipperAreaCode)
    {
        $this->ShipperAreaCode = $ShipperAreaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperPhoneNumber()
    {
        return $this->ShipperPhoneNumber;
    }

    /**
     * @param string $ShipperPhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setShipperPhoneNumber($ShipperPhoneNumber)
    {
        $this->ShipperPhoneNumber = $ShipperPhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperEMail()
    {
        return $this->ShipperEMail;
    }

    /**
     * @param string $ShipperEMail
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setShipperEMail($ShipperEMail)
    {
        $this->ShipperEMail = $ShipperEMail;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperExpenseCode()
    {
        return $this->ShipperExpenseCode;
    }

    /**
     * @param string $ShipperExpenseCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setShipperExpenseCode($ShipperExpenseCode)
    {
        $this->ShipperExpenseCode = $ShipperExpenseCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeAccountNumber()
    {
        return $this->ConsigneeAccountNumber;
    }

    /**
     * @param string $ConsigneeAccountNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setConsigneeAccountNumber($ConsigneeAccountNumber)
    {
        $this->ConsigneeAccountNumber = $ConsigneeAccountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeName()
    {
        return $this->ConsigneeName;
    }

    /**
     * @param string $ConsigneeName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setConsigneeName($ConsigneeName)
    {
        $this->ConsigneeName = $ConsigneeName;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeContactName()
    {
        return $this->ConsigneeContactName;
    }

    /**
     * @param string $ConsigneeContactName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setConsigneeContactName($ConsigneeContactName)
    {
        $this->ConsigneeContactName = $ConsigneeContactName;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeAddress()
    {
        return $this->ConsigneeAddress;
    }

    /**
     * @param string $ConsigneeAddress
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setConsigneeAddress($ConsigneeAddress)
    {
        $this->ConsigneeAddress = $ConsigneeAddress;

        return $this;
    }

    /**
     * @return int
     */
    public function getConsigneeCityCode()
    {
        return $this->ConsigneeCityCode;
    }

    /**
     * @param int $ConsigneeCityCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setConsigneeCityCode($ConsigneeCityCode)
    {
        $this->ConsigneeCityCode = $ConsigneeCityCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getConsigneeAreaCode()
    {
        return $this->ConsigneeAreaCode;
    }

    /**
     * @param int $ConsigneeAreaCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setConsigneeAreaCode($ConsigneeAreaCode)
    {
        $this->ConsigneeAreaCode = $ConsigneeAreaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneePhoneNumber()
    {
        return $this->ConsigneePhoneNumber;
    }

    /**
     * @param string $ConsigneePhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setConsigneePhoneNumber($ConsigneePhoneNumber)
    {
        $this->ConsigneePhoneNumber = $ConsigneePhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeEMail()
    {
        return $this->ConsigneeEMail;
    }

    /**
     * @param string $ConsigneeEMail
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setConsigneeEMail($ConsigneeEMail)
    {
        $this->ConsigneeEMail = $ConsigneeEMail;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeExpenseCode()
    {
        return $this->ConsigneeExpenseCode;
    }

    /**
     * @param string $ConsigneeExpenseCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setConsigneeExpenseCode($ConsigneeExpenseCode)
    {
        $this->ConsigneeExpenseCode = $ConsigneeExpenseCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getServiceLevel()
    {
        return $this->ServiceLevel;
    }

    /**
     * @param int $ServiceLevel
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setServiceLevel($ServiceLevel)
    {
        $this->ServiceLevel = $ServiceLevel;

        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param int $PaymentType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setPaymentType($PaymentType)
    {
        $this->PaymentType = $PaymentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
        return $this->PackageType;
    }

    /**
     * @param string $PackageType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setPackageType($PackageType)
    {
        $this->PackageType = $PackageType;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPackages()
    {
        return $this->NumberOfPackages;
    }

    /**
     * @param int $NumberOfPackages
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setNumberOfPackages($NumberOfPackages)
    {
        $this->NumberOfPackages = $NumberOfPackages;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReferance()
    {
        return $this->CustomerReferance;
    }

    /**
     * @param string $CustomerReferance
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setCustomerReferance($CustomerReferance)
    {
        $this->CustomerReferance = $CustomerReferance;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerInvoiceNumber()
    {
        return $this->CustomerInvoiceNumber;
    }

    /**
     * @param string $CustomerInvoiceNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setCustomerInvoiceNumber($CustomerInvoiceNumber)
    {
        $this->CustomerInvoiceNumber = $CustomerInvoiceNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionOfGoods()
    {
        return $this->DescriptionOfGoods;
    }

    /**
     * @param string $DescriptionOfGoods
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setDescriptionOfGoods($DescriptionOfGoods)
    {
        $this->DescriptionOfGoods = $DescriptionOfGoods;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNotificationEmail()
    {
        return $this->DeliveryNotificationEmail;
    }

    /**
     * @param string $DeliveryNotificationEmail
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_Type1
     */
    public function setDeliveryNotificationEmail($DeliveryNotificationEmail)
    {
        $this->DeliveryNotificationEmail = $DeliveryNotificationEmail;

        return $this;
    }
}
