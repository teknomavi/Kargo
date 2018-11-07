<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class TiNTInformation
{
    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;
    /**
     * @var string $TiNTDate
     */
    protected $TiNTDate = null;
    /**
     * @var string $TiNTStartTime
     */
    protected $TiNTStartTime = null;
    /**
     * @var string $TiNTEndTime
     */
    protected $TiNTEndTime = null;
    /**
     * @var string $PickupDate
     */
    protected $PickupDate = null;
    /**
     * @var int $InformationLevel
     */
    protected $InformationLevel = null;
    /**
     * @var int $ErrorCode
     */
    protected $ErrorCode = null;
    /**
     * @var string $ErrorDefinition
     */
    protected $ErrorDefinition = null;

    /**
     * @param int $InformationLevel
     * @param int $ErrorCode
     */
    public function __construct($InformationLevel, $ErrorCode)
    {
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\TiNTInformation
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTiNTDate()
    {
        return $this->TiNTDate;
    }

    /**
     * @param string $TiNTDate
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\TiNTInformation
     */
    public function setTiNTDate($TiNTDate)
    {
        $this->TiNTDate = $TiNTDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTiNTStartTime()
    {
        return $this->TiNTStartTime;
    }

    /**
     * @param string $TiNTStartTime
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\TiNTInformation
     */
    public function setTiNTStartTime($TiNTStartTime)
    {
        $this->TiNTStartTime = $TiNTStartTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getTiNTEndTime()
    {
        return $this->TiNTEndTime;
    }

    /**
     * @param string $TiNTEndTime
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\TiNTInformation
     */
    public function setTiNTEndTime($TiNTEndTime)
    {
        $this->TiNTEndTime = $TiNTEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupDate()
    {
        return $this->PickupDate;
    }

    /**
     * @param string $PickupDate
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\TiNTInformation
     */
    public function setPickupDate($PickupDate)
    {
        $this->PickupDate = $PickupDate;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\TiNTInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\TiNTInformation
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\TiNTInformation
     */
    public function setErrorDefinition($ErrorDefinition)
    {
        $this->ErrorDefinition = $ErrorDefinition;
        return $this;
    }
}
