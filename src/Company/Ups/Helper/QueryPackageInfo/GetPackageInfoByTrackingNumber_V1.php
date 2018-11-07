<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetPackageInfoByTrackingNumber_V1
{
    /**
     * @var string $SessionID
     */
    protected $SessionID = null;
    /**
     * @var int $InformationLevel
     */
    protected $InformationLevel = null;
    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @param string $SessionID
     * @param int    $InformationLevel
     * @param string $TrackingNumber
     */
    public function __construct($SessionID, $InformationLevel, $TrackingNumber)
    {
        $this->SessionID = $SessionID;
        $this->InformationLevel = $InformationLevel;
        $this->TrackingNumber = $TrackingNumber;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }

    /**
     * @param string $SessionID
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByTrackingNumber_V1
     */
    public function setSessionID($SessionID)
    {
        $this->SessionID = $SessionID;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByTrackingNumber_V1
     */
    public function setInformationLevel($InformationLevel)
    {
        $this->InformationLevel = $InformationLevel;
        return $this;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByTrackingNumber_V1
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
        return $this;
    }
}
