<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetUnreadTransactionsByTrackingNumber_V1
{
    /**
     * @var string
     */
    protected $SessionID = null;
    /**
     * @var int
     */
    protected $InformationLevel = null;
    /**
     * @var string
     */
    protected $TrackingNumber = null;
    /**
     * @var int
     */
    protected $RecordId = null;

    /**
     * @param string $SessionID
     * @param int    $InformationLevel
     * @param string $TrackingNumber
     * @param int    $RecordId
     */
    public function __construct($SessionID, $InformationLevel, $TrackingNumber, $RecordId)
    {
        $this->SessionID = $SessionID;
        $this->InformationLevel = $InformationLevel;
        $this->TrackingNumber = $TrackingNumber;
        $this->RecordId = $RecordId;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetUnreadTransactionsByTrackingNumber_V1
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetUnreadTransactionsByTrackingNumber_V1
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetUnreadTransactionsByTrackingNumber_V1
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getRecordId()
    {
        return $this->RecordId;
    }

    /**
     * @param int $RecordId
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetUnreadTransactionsByTrackingNumber_V1
     */
    public function setRecordId($RecordId)
    {
        $this->RecordId = $RecordId;

        return $this;
    }
}
