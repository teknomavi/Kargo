<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class PackageInformation
{
    /**
     * @var string
     */
    protected $TrackingNumber = null;
    /**
     * @var string
     */
    protected $UPSReferance = null;
    /**
     * @var string
     */
    protected $ShippperAccountNumber = null;
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
    protected $ShipperAddress = null;
    /**
     * @var string
     */
    protected $ShipperEMail = null;
    /**
     * @var int
     */
    protected $ShipperAreaCode = null;
    /**
     * @var string
     */
    protected $ShipperAreaName = null;
    /**
     * @var int
     */
    protected $ShipperCityCode = null;
    /**
     * @var string
     */
    protected $ShipperCityName = null;
    /**
     * @var string
     */
    protected $ShipperPostalCode = null;
    /**
     * @var string
     */
    protected $ShipperCountry = null;
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
    protected $ConsigneeAddress = null;
    /**
     * @var string
     */
    protected $ConsigneeEMail = null;
    /**
     * @var int
     */
    protected $ConsigneeAreaCode = null;
    /**
     * @var string
     */
    protected $ConsigneeAreaName = null;
    /**
     * @var int
     */
    protected $ConsigneeCityCode = null;
    /**
     * @var string
     */
    protected $ConsigneeCityName = null;
    /**
     * @var string
     */
    protected $ConsigneePostalCode = null;
    /**
     * @var string
     */
    protected $ConsigneeCountry = null;
    /**
     * @var string
     */
    protected $ConsigneeExpenseCode = null;
    /**
     * @var string
     */
    protected $ThirdPartyAccountNumber = null;
    /**
     * @var string
     */
    protected $ThirdPartyExpenseCode = null;
    /**
     * @var string
     */
    protected $ServiceLevel = null;
    /**
     * @var string
     */
    protected $PackageType = null;
    /**
     * @var string
     */
    protected $ShipmentType = null;
    /**
     * @var int
     */
    protected $NumberOfPackages = null;
    /**
     * @var string
     */
    protected $DescriptionOfGoods = null;
    /**
     * @var float
     */
    protected $ActualWeight = null;
    /**
     * @var float
     */
    protected $VolumeWeight = null;
    /**
     * @var int
     */
    protected $Dimension1 = null;
    /**
     * @var int
     */
    protected $Dimension2 = null;
    /**
     * @var int
     */
    protected $Dimension3 = null;
    /**
     * @var string
     */
    protected $PaymentType = null;
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
    protected $ShipmentNo = null;
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
     * @var float
     */
    protected $Freight = null;
    /**
     * @var string
     */
    protected $FreightCurrency = null;
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
    protected $DeliveryByAppointmentFlag = null;
    /**
     * @var string
     */
    protected $AppointmentBeginningTime = null;
    /**
     * @var string
     */
    protected $AppointmentEndingTime = null;
    /**
     * @var int
     */
    protected $InvoiceLabelFlag = null;
    /**
     * @var int
     */
    protected $ReturnServiceFlag = null;
    /**
     * @var string
     */
    protected $ReturnServiceTrackingNumber = null;
    /**
     * @var int
     */
    protected $ReturnFlag = null;
    /**
     * @var string
     */
    protected $ReturnServiceShipmentNumber = null;
    /**
     * @var string
     */
    protected $CreationTimeStamp = null;
    /**
     * @var int
     */
    protected $InformationLevel = null;
    /**
     * @var int
     */
    protected $ErrorCode = null;
    /**
     * @var string
     */
    protected $ErrorDefinition = null;

    /**
     * @param int   $ShipperAreaCode
     * @param int   $ShipperCityCode
     * @param int   $ConsigneeAreaCode
     * @param int   $ConsigneeCityCode
     * @param int   $NumberOfPackages
     * @param float $ActualWeight
     * @param float $VolumeWeight
     * @param int   $Dimension1
     * @param int   $Dimension2
     * @param int   $Dimension3
     * @param float $InsuranceValue
     * @param float $ValueOfGoods
     * @param float $Freight
     * @param int   $IdControlFlag
     * @param int   $PhonePrealertFlag
     * @param int   $DeliveryByAppointmentFlag
     * @param int   $InvoiceLabelFlag
     * @param int   $ReturnServiceFlag
     * @param int   $ReturnFlag
     * @param int   $InformationLevel
     * @param int   $ErrorCode
     */
    public function __construct(
        $ShipperAreaCode,
        $ShipperCityCode,
        $ConsigneeAreaCode,
        $ConsigneeCityCode,
        $NumberOfPackages,
        $ActualWeight,
        $VolumeWeight,
        $Dimension1,
        $Dimension2,
        $Dimension3,
        $InsuranceValue,
        $ValueOfGoods,
        $Freight,
        $IdControlFlag,
        $PhonePrealertFlag,
        $DeliveryByAppointmentFlag,
        $InvoiceLabelFlag,
        $ReturnServiceFlag,
        $ReturnFlag,
        $InformationLevel,
        $ErrorCode
    ) {
        $this->ShipperAreaCode = $ShipperAreaCode;
        $this->ShipperCityCode = $ShipperCityCode;
        $this->ConsigneeAreaCode = $ConsigneeAreaCode;
        $this->ConsigneeCityCode = $ConsigneeCityCode;
        $this->NumberOfPackages = $NumberOfPackages;
        $this->ActualWeight = $ActualWeight;
        $this->VolumeWeight = $VolumeWeight;
        $this->Dimension1 = $Dimension1;
        $this->Dimension2 = $Dimension2;
        $this->Dimension3 = $Dimension3;
        $this->InsuranceValue = $InsuranceValue;
        $this->ValueOfGoods = $ValueOfGoods;
        $this->Freight = $Freight;
        $this->IdControlFlag = $IdControlFlag;
        $this->PhonePrealertFlag = $PhonePrealertFlag;
        $this->DeliveryByAppointmentFlag = $DeliveryByAppointmentFlag;
        $this->InvoiceLabelFlag = $InvoiceLabelFlag;
        $this->ReturnServiceFlag = $ReturnServiceFlag;
        $this->ReturnFlag = $ReturnFlag;
        $this->InformationLevel = $InformationLevel;
        $this->ErrorCode = $ErrorCode;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getUPSReferance()
    {
        return $this->UPSReferance;
    }

    /**
     * @param string $UPSReferance
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setUPSReferance($UPSReferance)
    {
        $this->UPSReferance = $UPSReferance;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippperAccountNumber()
    {
        return $this->ShippperAccountNumber;
    }

    /**
     * @param string $ShippperAccountNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShippperAccountNumber($ShippperAccountNumber)
    {
        $this->ShippperAccountNumber = $ShippperAccountNumber;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipperContactName($ShipperContactName)
    {
        $this->ShipperContactName = $ShipperContactName;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipperMobilePhoneNumber($ShipperMobilePhoneNumber)
    {
        $this->ShipperMobilePhoneNumber = $ShipperMobilePhoneNumber;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipperAddress($ShipperAddress)
    {
        $this->ShipperAddress = $ShipperAddress;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipperEMail($ShipperEMail)
    {
        $this->ShipperEMail = $ShipperEMail;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipperAreaCode($ShipperAreaCode)
    {
        $this->ShipperAreaCode = $ShipperAreaCode;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipperAreaName($ShipperAreaName)
    {
        $this->ShipperAreaName = $ShipperAreaName;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipperCityCode($ShipperCityCode)
    {
        $this->ShipperCityCode = $ShipperCityCode;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipperCityName($ShipperCityName)
    {
        $this->ShipperCityName = $ShipperCityName;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipperPostalCode($ShipperPostalCode)
    {
        $this->ShipperPostalCode = $ShipperPostalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperCountry()
    {
        return $this->ShipperCountry;
    }

    /**
     * @param string $ShipperCountry
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipperCountry($ShipperCountry)
    {
        $this->ShipperCountry = $ShipperCountry;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneeContactName($ConsigneeContactName)
    {
        $this->ConsigneeContactName = $ConsigneeContactName;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneeMobilePhoneNumber($ConsigneeMobilePhoneNumber)
    {
        $this->ConsigneeMobilePhoneNumber = $ConsigneeMobilePhoneNumber;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneeAddress($ConsigneeAddress)
    {
        $this->ConsigneeAddress = $ConsigneeAddress;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneeEMail($ConsigneeEMail)
    {
        $this->ConsigneeEMail = $ConsigneeEMail;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneeAreaCode($ConsigneeAreaCode)
    {
        $this->ConsigneeAreaCode = $ConsigneeAreaCode;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneeAreaName($ConsigneeAreaName)
    {
        $this->ConsigneeAreaName = $ConsigneeAreaName;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneeCityCode($ConsigneeCityCode)
    {
        $this->ConsigneeCityCode = $ConsigneeCityCode;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneeCityName($ConsigneeCityName)
    {
        $this->ConsigneeCityName = $ConsigneeCityName;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneePostalCode($ConsigneePostalCode)
    {
        $this->ConsigneePostalCode = $ConsigneePostalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeCountry()
    {
        return $this->ConsigneeCountry;
    }

    /**
     * @param string $ConsigneeCountry
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneeCountry($ConsigneeCountry)
    {
        $this->ConsigneeCountry = $ConsigneeCountry;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setConsigneeExpenseCode($ConsigneeExpenseCode)
    {
        $this->ConsigneeExpenseCode = $ConsigneeExpenseCode;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setThirdPartyExpenseCode($ThirdPartyExpenseCode)
    {
        $this->ThirdPartyExpenseCode = $ThirdPartyExpenseCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceLevel()
    {
        return $this->ServiceLevel;
    }

    /**
     * @param string $ServiceLevel
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setServiceLevel($ServiceLevel)
    {
        $this->ServiceLevel = $ServiceLevel;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setPackageType($PackageType)
    {
        $this->PackageType = $PackageType;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentType()
    {
        return $this->ShipmentType;
    }

    /**
     * @param string $ShipmentType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipmentType($ShipmentType)
    {
        $this->ShipmentType = $ShipmentType;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setNumberOfPackages($NumberOfPackages)
    {
        $this->NumberOfPackages = $NumberOfPackages;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setDescriptionOfGoods($DescriptionOfGoods)
    {
        $this->DescriptionOfGoods = $DescriptionOfGoods;

        return $this;
    }

    /**
     * @return float
     */
    public function getActualWeight()
    {
        return $this->ActualWeight;
    }

    /**
     * @param float $ActualWeight
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setActualWeight($ActualWeight)
    {
        $this->ActualWeight = $ActualWeight;

        return $this;
    }

    /**
     * @return float
     */
    public function getVolumeWeight()
    {
        return $this->VolumeWeight;
    }

    /**
     * @param float $VolumeWeight
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setVolumeWeight($VolumeWeight)
    {
        $this->VolumeWeight = $VolumeWeight;

        return $this;
    }

    /**
     * @return int
     */
    public function getDimension1()
    {
        return $this->Dimension1;
    }

    /**
     * @param int $Dimension1
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setDimension1($Dimension1)
    {
        $this->Dimension1 = $Dimension1;

        return $this;
    }

    /**
     * @return int
     */
    public function getDimension2()
    {
        return $this->Dimension2;
    }

    /**
     * @param int $Dimension2
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setDimension2($Dimension2)
    {
        $this->Dimension2 = $Dimension2;

        return $this;
    }

    /**
     * @return int
     */
    public function getDimension3()
    {
        return $this->Dimension3;
    }

    /**
     * @param int $Dimension3
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setDimension3($Dimension3)
    {
        $this->Dimension3 = $Dimension3;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param string $PaymentType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setPaymentType($PaymentType)
    {
        $this->PaymentType = $PaymentType;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setCustomerInvoiceNumber($CustomerInvoiceNumber)
    {
        $this->CustomerInvoiceNumber = $CustomerInvoiceNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentNo()
    {
        return $this->ShipmentNo;
    }

    /**
     * @param string $ShipmentNo
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setShipmentNo($ShipmentNo)
    {
        $this->ShipmentNo = $ShipmentNo;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setValueOfGoodsCurrency($ValueOfGoodsCurrency)
    {
        $this->ValueOfGoodsCurrency = $ValueOfGoodsCurrency;

        return $this;
    }

    /**
     * @return float
     */
    public function getFreight()
    {
        return $this->Freight;
    }

    /**
     * @param float $Freight
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setFreight($Freight)
    {
        $this->Freight = $Freight;

        return $this;
    }

    /**
     * @return string
     */
    public function getFreightCurrency()
    {
        return $this->FreightCurrency;
    }

    /**
     * @param string $FreightCurrency
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setFreightCurrency($FreightCurrency)
    {
        $this->FreightCurrency = $FreightCurrency;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setPhonePrealertFlag($PhonePrealertFlag)
    {
        $this->PhonePrealertFlag = $PhonePrealertFlag;

        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryByAppointmentFlag()
    {
        return $this->DeliveryByAppointmentFlag;
    }

    /**
     * @param int $DeliveryByAppointmentFlag
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setDeliveryByAppointmentFlag($DeliveryByAppointmentFlag)
    {
        $this->DeliveryByAppointmentFlag = $DeliveryByAppointmentFlag;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppointmentBeginningTime()
    {
        return $this->AppointmentBeginningTime;
    }

    /**
     * @param string $AppointmentBeginningTime
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setAppointmentBeginningTime($AppointmentBeginningTime)
    {
        $this->AppointmentBeginningTime = $AppointmentBeginningTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppointmentEndingTime()
    {
        return $this->AppointmentEndingTime;
    }

    /**
     * @param string $AppointmentEndingTime
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setAppointmentEndingTime($AppointmentEndingTime)
    {
        $this->AppointmentEndingTime = $AppointmentEndingTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceLabelFlag()
    {
        return $this->InvoiceLabelFlag;
    }

    /**
     * @param int $InvoiceLabelFlag
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setInvoiceLabelFlag($InvoiceLabelFlag)
    {
        $this->InvoiceLabelFlag = $InvoiceLabelFlag;

        return $this;
    }

    /**
     * @return int
     */
    public function getReturnServiceFlag()
    {
        return $this->ReturnServiceFlag;
    }

    /**
     * @param int $ReturnServiceFlag
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setReturnServiceFlag($ReturnServiceFlag)
    {
        $this->ReturnServiceFlag = $ReturnServiceFlag;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnServiceTrackingNumber()
    {
        return $this->ReturnServiceTrackingNumber;
    }

    /**
     * @param string $ReturnServiceTrackingNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setReturnServiceTrackingNumber($ReturnServiceTrackingNumber)
    {
        $this->ReturnServiceTrackingNumber = $ReturnServiceTrackingNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getReturnFlag()
    {
        return $this->ReturnFlag;
    }

    /**
     * @param int $ReturnFlag
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setReturnFlag($ReturnFlag)
    {
        $this->ReturnFlag = $ReturnFlag;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnServiceShipmentNumber()
    {
        return $this->ReturnServiceShipmentNumber;
    }

    /**
     * @param string $ReturnServiceShipmentNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setReturnServiceShipmentNumber($ReturnServiceShipmentNumber)
    {
        $this->ReturnServiceShipmentNumber = $ReturnServiceShipmentNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreationTimeStamp()
    {
        return $this->CreationTimeStamp;
    }

    /**
     * @param string $CreationTimeStamp
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setCreationTimeStamp($CreationTimeStamp)
    {
        $this->CreationTimeStamp = $CreationTimeStamp;

        return $this;
    }

    /**
     * @return int
     */
    public function getInformationLevel()
    {
        return $this->InformationLevel;
    }

    /**
     * @param int $InformationLevel
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setInformationLevel($InformationLevel)
    {
        $this->InformationLevel = $InformationLevel;

        return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setErrorCode($ErrorCode)
    {
        $this->ErrorCode = $ErrorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorDefinition()
    {
        return $this->ErrorDefinition;
    }

    /**
     * @param string $ErrorDefinition
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageInformation
     */
    public function setErrorDefinition($ErrorDefinition)
    {
        $this->ErrorDefinition = $ErrorDefinition;

        return $this;
    }
}
