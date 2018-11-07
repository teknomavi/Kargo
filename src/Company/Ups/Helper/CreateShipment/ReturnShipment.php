<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class ReturnShipment
{
    /**
     * @var string $RTSWaybill
     */
    protected $RTSWaybill = null;
    /**
     * @var string $RTSAccountNumber
     */
    protected $RTSAccountNumber = null;
    /**
     * @var string $RTSName
     */
    protected $RTSName = null;
    /**
     * @var string $RTSContactName
     */
    protected $RTSContactName = null;
    /**
     * @var string $RTSAddress
     */
    protected $RTSAddress = null;
    /**
     * @var int $RTSCityCode
     */
    protected $RTSCityCode = null;
    /**
     * @var int $RTSAreaCode
     */
    protected $RTSAreaCode = null;
    /**
     * @var string $RTSPostalCode
     */
    protected $RTSPostalCode = null;
    /**
     * @var string $RTSPhoneNumber
     */
    protected $RTSPhoneNumber = null;
    /**
     * @var string $RTSPhoneExtension
     */
    protected $RTSPhoneExtension = null;
    /**
     * @var string $RTSMobilePhoneNumber
     */
    protected $RTSMobilePhoneNumber = null;
    /**
     * @var string $RTSEMail
     */
    protected $RTSEMail = null;
    /**
     * @var string $RTSExpenseCode
     */
    protected $RTSExpenseCode = null;
    /**
     * @var int $RTSServiceLevel
     */
    protected $RTSServiceLevel = null;
    /**
     * @var string $RTSPackageType
     */
    protected $RTSPackageType = null;

    /**
     * @param int $RTSCityCode
     * @param int $RTSAreaCode
     * @param int $RTSServiceLevel
     */
    public function __construct($RTSCityCode, $RTSAreaCode, $RTSServiceLevel)
    {
        $this->RTSCityCode = $RTSCityCode;
        $this->RTSAreaCode = $RTSAreaCode;
        $this->RTSServiceLevel = $RTSServiceLevel;
    }

    /**
     * @return string
     */
    public function getRTSWaybill()
    {
        return $this->RTSWaybill;
    }

    /**
     * @param string $RTSWaybill
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSWaybill($RTSWaybill)
    {
        $this->RTSWaybill = $RTSWaybill;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSAccountNumber()
    {
        return $this->RTSAccountNumber;
    }

    /**
     * @param string $RTSAccountNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSAccountNumber($RTSAccountNumber)
    {
        $this->RTSAccountNumber = $RTSAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSName()
    {
        return $this->RTSName;
    }

    /**
     * @param string $RTSName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSName($RTSName)
    {
        $this->RTSName = $RTSName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSContactName()
    {
        return $this->RTSContactName;
    }

    /**
     * @param string $RTSContactName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSContactName($RTSContactName)
    {
        $this->RTSContactName = $RTSContactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSAddress()
    {
        return $this->RTSAddress;
    }

    /**
     * @param string $RTSAddress
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSAddress($RTSAddress)
    {
        $this->RTSAddress = $RTSAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getRTSCityCode()
    {
        return $this->RTSCityCode;
    }

    /**
     * @param int $RTSCityCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSCityCode($RTSCityCode)
    {
        $this->RTSCityCode = $RTSCityCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getRTSAreaCode()
    {
        return $this->RTSAreaCode;
    }

    /**
     * @param int $RTSAreaCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSAreaCode($RTSAreaCode)
    {
        $this->RTSAreaCode = $RTSAreaCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSPostalCode()
    {
        return $this->RTSPostalCode;
    }

    /**
     * @param string $RTSPostalCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSPostalCode($RTSPostalCode)
    {
        $this->RTSPostalCode = $RTSPostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSPhoneNumber()
    {
        return $this->RTSPhoneNumber;
    }

    /**
     * @param string $RTSPhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSPhoneNumber($RTSPhoneNumber)
    {
        $this->RTSPhoneNumber = $RTSPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSPhoneExtension()
    {
        return $this->RTSPhoneExtension;
    }

    /**
     * @param string $RTSPhoneExtension
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSPhoneExtension($RTSPhoneExtension)
    {
        $this->RTSPhoneExtension = $RTSPhoneExtension;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSMobilePhoneNumber()
    {
        return $this->RTSMobilePhoneNumber;
    }

    /**
     * @param string $RTSMobilePhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSMobilePhoneNumber($RTSMobilePhoneNumber)
    {
        $this->RTSMobilePhoneNumber = $RTSMobilePhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSEMail()
    {
        return $this->RTSEMail;
    }

    /**
     * @param string $RTSEMail
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSEMail($RTSEMail)
    {
        $this->RTSEMail = $RTSEMail;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSExpenseCode()
    {
        return $this->RTSExpenseCode;
    }

    /**
     * @param string $RTSExpenseCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSExpenseCode($RTSExpenseCode)
    {
        $this->RTSExpenseCode = $RTSExpenseCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getRTSServiceLevel()
    {
        return $this->RTSServiceLevel;
    }

    /**
     * @param int $RTSServiceLevel
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSServiceLevel($RTSServiceLevel)
    {
        $this->RTSServiceLevel = $RTSServiceLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getRTSPackageType()
    {
        return $this->RTSPackageType;
    }

    /**
     * @param string $RTSPackageType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ReturnShipment
     */
    public function setRTSPackageType($RTSPackageType)
    {
        $this->RTSPackageType = $RTSPackageType;
        return $this;
    }
}
