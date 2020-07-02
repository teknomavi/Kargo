<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class ShipmentInfo_TypeAll
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
    protected $ShipperPostalCode = null;
    /**
     * @var string
     */
    protected $ShipperPhoneNumber = null;
    /**
     * @var string
     */
    protected $ShipperPhoneExtension = null;
    /**
     * @var string
     */
    protected $ShipperMobilePhoneNumber = null;
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
    protected $ConsigneePostalCode = null;
    /**
     * @var string
     */
    protected $ConsigneePhoneNumber = null;
    /**
     * @var string
     */
    protected $ConsigneePhoneExtension = null;
    /**
     * @var string
     */
    protected $ConsigneeMobilePhoneNumber = null;
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
    protected $CustomerReference = null;
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
     * @var int
     */
    protected $IdControlFlag = null;
    /**
     * @var int
     */
    protected $PhonePrealertFlag = null;
    /**
     * @var int
     */
    protected $SmsToShipper = null;
    /**
     * @var int
     */
    protected $SmsToConsignee = null;
    /**
     * @var float
     */
    protected $InsuranceValue = null;
    /**
     * @var string
     */
    protected $InsuranceValueCurrency = null;
    /**
     * @var float
     */
    protected $ValueOfGoods = null;
    /**
     * @var string
     */
    protected $ValueOfGoodsCurrency = null;
    /**
     * @var int
     */
    protected $ValueOfGoodsPaymentType = null;
    /**
     * @var int
     */
    protected $DeliveryByTally = null;
    /**
     * @var string
     */
    protected $ThirdPartyAccountNumber = null;
    /**
     * @var string
     */
    protected $ThirdPartyExpenseCode = null;
    /**
     * @var ArrayOfDimensionInfo
     */
    protected $PackageDimensions = null;
    /**
     * @var int
     */
    protected $ShipperAccountId = null;
    /**
     * @var string
     */
    protected $ShipperCityName = null;
    /**
     * @var string
     */
    protected $ShipperAreaName = null;
    /**
     * @var int
     */
    protected $ConsigneeAccountId = null;
    /**
     * @var string
     */
    protected $ConsigneeCityName = null;
    /**
     * @var string
     */
    protected $ConsigneeAreaName = null;
    /**
     * @var int
     */
    protected $ThirdPartyAccountId = null;

    /**
     * @param int   $ShipperCityCode
     * @param int   $ShipperAreaCode
     * @param int   $ConsigneeCityCode
     * @param int   $ConsigneeAreaCode
     * @param int   $ServiceLevel
     * @param int   $PaymentType
     * @param int   $NumberOfPackages
     * @param int   $IdControlFlag
     * @param int   $PhonePrealertFlag
     * @param int   $SmsToShipper
     * @param int   $SmsToConsignee
     * @param float $InsuranceValue
     * @param float $ValueOfGoods
     * @param int   $ValueOfGoodsPaymentType
     * @param int   $DeliveryByTally
     * @param int   $ShipperAccountId
     * @param int   $ConsigneeAccountId
     * @param int   $ThirdPartyAccountId
     */
    public function __construct(
        $ShipperCityCode,
        $ShipperAreaCode,
        $ConsigneeCityCode,
        $ConsigneeAreaCode,
        $ServiceLevel,
        $PaymentType,
        $NumberOfPackages,
        $IdControlFlag,
        $PhonePrealertFlag,
        $SmsToShipper,
        $SmsToConsignee,
        $InsuranceValue,
        $ValueOfGoods,
        $ValueOfGoodsPaymentType,
        $DeliveryByTally,
        $ShipperAccountId,
        $ConsigneeAccountId,
        $ThirdPartyAccountId
    ) {
        $this->ShipperCityCode = $ShipperCityCode;
        $this->ShipperAreaCode = $ShipperAreaCode;
        $this->ConsigneeCityCode = $ConsigneeCityCode;
        $this->ConsigneeAreaCode = $ConsigneeAreaCode;
        $this->ServiceLevel = $ServiceLevel;
        $this->PaymentType = $PaymentType;
        $this->NumberOfPackages = $NumberOfPackages;
        $this->IdControlFlag = $IdControlFlag;
        $this->PhonePrealertFlag = $PhonePrealertFlag;
        $this->SmsToShipper = $SmsToShipper;
        $this->SmsToConsignee = $SmsToConsignee;
        $this->InsuranceValue = $InsuranceValue;
        $this->ValueOfGoods = $ValueOfGoods;
        $this->ValueOfGoodsPaymentType = $ValueOfGoodsPaymentType;
        $this->DeliveryByTally = $DeliveryByTally;
        $this->ShipperAccountId = $ShipperAccountId;
        $this->ConsigneeAccountId = $ConsigneeAccountId;
        $this->ThirdPartyAccountId = $ThirdPartyAccountId;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperAreaCode($ShipperAreaCode)
    {
        $this->ShipperAreaCode = $ShipperAreaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperPostalCode()
    {
        return $this->ShipperPostalCode;
    }

    /**
     * @param string $ShipperPostalCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperPostalCode($ShipperPostalCode)
    {
        $this->ShipperPostalCode = $ShipperPostalCode;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperPhoneNumber($ShipperPhoneNumber)
    {
        $this->ShipperPhoneNumber = $ShipperPhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperPhoneExtension()
    {
        return $this->ShipperPhoneExtension;
    }

    /**
     * @param string $ShipperPhoneExtension
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperPhoneExtension($ShipperPhoneExtension)
    {
        $this->ShipperPhoneExtension = $ShipperPhoneExtension;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperMobilePhoneNumber()
    {
        return $this->ShipperMobilePhoneNumber;
    }

    /**
     * @param string $ShipperMobilePhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperMobilePhoneNumber($ShipperMobilePhoneNumber)
    {
        $this->ShipperMobilePhoneNumber = $ShipperMobilePhoneNumber;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeAreaCode($ConsigneeAreaCode)
    {
        $this->ConsigneeAreaCode = $ConsigneeAreaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneePostalCode()
    {
        return $this->ConsigneePostalCode;
    }

    /**
     * @param string $ConsigneePostalCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneePostalCode($ConsigneePostalCode)
    {
        $this->ConsigneePostalCode = $ConsigneePostalCode;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneePhoneNumber($ConsigneePhoneNumber)
    {
        $this->ConsigneePhoneNumber = $ConsigneePhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneePhoneExtension()
    {
        return $this->ConsigneePhoneExtension;
    }

    /**
     * @param string $ConsigneePhoneExtension
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneePhoneExtension($ConsigneePhoneExtension)
    {
        $this->ConsigneePhoneExtension = $ConsigneePhoneExtension;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeMobilePhoneNumber()
    {
        return $this->ConsigneeMobilePhoneNumber;
    }

    /**
     * @param string $ConsigneeMobilePhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeMobilePhoneNumber($ConsigneeMobilePhoneNumber)
    {
        $this->ConsigneeMobilePhoneNumber = $ConsigneeMobilePhoneNumber;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setNumberOfPackages($NumberOfPackages)
    {
        $this->NumberOfPackages = $NumberOfPackages;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setCustomerReference($CustomerReference)
    {
        $this->CustomerReference = $CustomerReference;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setDeliveryNotificationEmail($DeliveryNotificationEmail)
    {
        $this->DeliveryNotificationEmail = $DeliveryNotificationEmail;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdControlFlag()
    {
        return $this->IdControlFlag;
    }

    /**
     * @param int $IdControlFlag
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setIdControlFlag($IdControlFlag)
    {
        $this->IdControlFlag = $IdControlFlag;

        return $this;
    }

    /**
     * @return int
     */
    public function getPhonePrealertFlag()
    {
        return $this->PhonePrealertFlag;
    }

    /**
     * @param int $PhonePrealertFlag
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setPhonePrealertFlag($PhonePrealertFlag)
    {
        $this->PhonePrealertFlag = $PhonePrealertFlag;

        return $this;
    }

    /**
     * @return int
     */
    public function getSmsToShipper()
    {
        return $this->SmsToShipper;
    }

    /**
     * @param int $SmsToShipper
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setSmsToShipper($SmsToShipper)
    {
        $this->SmsToShipper = $SmsToShipper;

        return $this;
    }

    /**
     * @return int
     */
    public function getSmsToConsignee()
    {
        return $this->SmsToConsignee;
    }

    /**
     * @param int $SmsToConsignee
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setSmsToConsignee($SmsToConsignee)
    {
        $this->SmsToConsignee = $SmsToConsignee;

        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceValue()
    {
        return $this->InsuranceValue;
    }

    /**
     * @param float $InsuranceValue
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setInsuranceValue($InsuranceValue)
    {
        $this->InsuranceValue = $InsuranceValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getInsuranceValueCurrency()
    {
        return $this->InsuranceValueCurrency;
    }

    /**
     * @param string $InsuranceValueCurrency
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setInsuranceValueCurrency($InsuranceValueCurrency)
    {
        $this->InsuranceValueCurrency = $InsuranceValueCurrency;

        return $this;
    }

    /**
     * @return float
     */
    public function getValueOfGoods()
    {
        return $this->ValueOfGoods;
    }

    /**
     * @param float $ValueOfGoods
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setValueOfGoods($ValueOfGoods)
    {
        $this->ValueOfGoods = $ValueOfGoods;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueOfGoodsCurrency()
    {
        return $this->ValueOfGoodsCurrency;
    }

    /**
     * @param string $ValueOfGoodsCurrency
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setValueOfGoodsCurrency($ValueOfGoodsCurrency)
    {
        $this->ValueOfGoodsCurrency = $ValueOfGoodsCurrency;

        return $this;
    }

    /**
     * @return int
     */
    public function getValueOfGoodsPaymentType()
    {
        return $this->ValueOfGoodsPaymentType;
    }

    /**
     * @param int $ValueOfGoodsPaymentType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setValueOfGoodsPaymentType($ValueOfGoodsPaymentType)
    {
        $this->ValueOfGoodsPaymentType = $ValueOfGoodsPaymentType;

        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryByTally()
    {
        return $this->DeliveryByTally;
    }

    /**
     * @param int $DeliveryByTally
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setDeliveryByTally($DeliveryByTally)
    {
        $this->DeliveryByTally = $DeliveryByTally;

        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyAccountNumber()
    {
        return $this->ThirdPartyAccountNumber;
    }

    /**
     * @param string $ThirdPartyAccountNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setThirdPartyAccountNumber($ThirdPartyAccountNumber)
    {
        $this->ThirdPartyAccountNumber = $ThirdPartyAccountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyExpenseCode()
    {
        return $this->ThirdPartyExpenseCode;
    }

    /**
     * @param string $ThirdPartyExpenseCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setThirdPartyExpenseCode($ThirdPartyExpenseCode)
    {
        $this->ThirdPartyExpenseCode = $ThirdPartyExpenseCode;

        return $this;
    }

    /**
     * @return ArrayOfDimensionInfo
     */
    public function getPackageDimensions()
    {
        return $this->PackageDimensions;
    }

    /**
     * @param ArrayOfDimensionInfo $PackageDimensions
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setPackageDimensions($PackageDimensions)
    {
        $this->PackageDimensions = $PackageDimensions;

        return $this;
    }

    /**
     * @return int
     */
    public function getShipperAccountId()
    {
        return $this->ShipperAccountId;
    }

    /**
     * @param int $ShipperAccountId
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperAccountId($ShipperAccountId)
    {
        $this->ShipperAccountId = $ShipperAccountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperCityName()
    {
        return $this->ShipperCityName;
    }

    /**
     * @param string $ShipperCityName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperCityName($ShipperCityName)
    {
        $this->ShipperCityName = $ShipperCityName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperAreaName()
    {
        return $this->ShipperAreaName;
    }

    /**
     * @param string $ShipperAreaName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperAreaName($ShipperAreaName)
    {
        $this->ShipperAreaName = $ShipperAreaName;

        return $this;
    }

    /**
     * @return int
     */
    public function getConsigneeAccountId()
    {
        return $this->ConsigneeAccountId;
    }

    /**
     * @param int $ConsigneeAccountId
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeAccountId($ConsigneeAccountId)
    {
        $this->ConsigneeAccountId = $ConsigneeAccountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeCityName()
    {
        return $this->ConsigneeCityName;
    }

    /**
     * @param string $ConsigneeCityName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeCityName($ConsigneeCityName)
    {
        $this->ConsigneeCityName = $ConsigneeCityName;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeAreaName()
    {
        return $this->ConsigneeAreaName;
    }

    /**
     * @param string $ConsigneeAreaName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeAreaName($ConsigneeAreaName)
    {
        $this->ConsigneeAreaName = $ConsigneeAreaName;

        return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyAccountId()
    {
        return $this->ThirdPartyAccountId;
    }

    /**
     * @param int $ThirdPartyAccountId
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setThirdPartyAccountId($ThirdPartyAccountId)
    {
        $this->ThirdPartyAccountId = $ThirdPartyAccountId;

        return $this;
    }
}
