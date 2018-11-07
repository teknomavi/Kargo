<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class CreateShipment_Type3_XML
{
    /**
     * @var string $SessionID
     */
    protected $SessionID = null;
    /**
     * @var ShipmentInfo_Type3 $ShipmentInfo
     */
    protected $ShipmentInfo = null;

    /**
     * @param string             $SessionID
     * @param ShipmentInfo_Type3 $ShipmentInfo
     */
    public function __construct($SessionID, $ShipmentInfo)
    {
        $this->SessionID = $SessionID;
        $this->ShipmentInfo = $ShipmentInfo;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type3_XML
     */
    public function setSessionID($SessionID)
    {
        $this->SessionID = $SessionID;
        return $this;
    }

    /**
     * @return ShipmentInfo_Type3
     */
    public function getShipmentInfo()
    {
        return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfo_Type3 $ShipmentInfo
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type3_XML
     */
    public function setShipmentInfo($ShipmentInfo)
    {
        $this->ShipmentInfo = $ShipmentInfo;
        return $this;
    }
}
