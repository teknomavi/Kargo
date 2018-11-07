<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetTiNTInformationByTrackingNumberList_V1
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
     * @var ArrayOfWaybillList $TrackingNumberList
     */
    protected $TrackingNumberList = null;

    /**
     * @param string             $SessionID
     * @param int                $InformationLevel
     * @param ArrayOfWaybillList $TrackingNumberList
     */
    public function __construct($SessionID, $InformationLevel, $TrackingNumberList)
    {
        $this->SessionID = $SessionID;
        $this->InformationLevel = $InformationLevel;
        $this->TrackingNumberList = $TrackingNumberList;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTiNTInformationByTrackingNumberList_V1
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTiNTInformationByTrackingNumberList_V1
     */
    public function setInformationLevel($InformationLevel)
    {
        $this->InformationLevel = $InformationLevel;
        return $this;
    }

    /**
     * @return ArrayOfWaybillList
     */
    public function getTrackingNumberList()
    {
        return $this->TrackingNumberList;
    }

    /**
     * @param ArrayOfWaybillList $TrackingNumberList
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTiNTInformationByTrackingNumberList_V1
     */
    public function setTrackingNumberList($TrackingNumberList)
    {
        $this->TrackingNumberList = $TrackingNumberList;
        return $this;
    }
}
