<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class OnDemandPickupRequest_Type1
{
    /**
     * @var string
     */
    protected $SessionID = null;
    /**
     * @var OnDemandPickupRequestInfo_Type1
     */
    protected $OnDemandPickupRequestInfo = null;

    /**
     * @param string                          $SessionID
     * @param OnDemandPickupRequestInfo_Type1 $OnDemandPickupRequestInfo
     */
    public function __construct($SessionID, $OnDemandPickupRequestInfo)
    {
        $this->SessionID = $SessionID;
        $this->OnDemandPickupRequestInfo = $OnDemandPickupRequestInfo;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\OnDemandPickupRequest_Type1
     */
    public function setSessionID($SessionID)
    {
        $this->SessionID = $SessionID;

        return $this;
    }

    /**
     * @return OnDemandPickupRequestInfo_Type1
     */
    public function getOnDemandPickupRequestInfo()
    {
        return $this->OnDemandPickupRequestInfo;
    }

    /**
     * @param OnDemandPickupRequestInfo_Type1 $OnDemandPickupRequestInfo
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\OnDemandPickupRequest_Type1
     */
    public function setOnDemandPickupRequestInfo($OnDemandPickupRequestInfo)
    {
        $this->OnDemandPickupRequestInfo = $OnDemandPickupRequestInfo;

        return $this;
    }
}
