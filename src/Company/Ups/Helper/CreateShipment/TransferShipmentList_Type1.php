<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class TransferShipmentList_Type1
{
    /**
     * @var string
     */
    protected $SessionID = null;
    /**
     * @var ShipmentListInfo_Type1
     */
    protected $ShipmentListInfo = null;

    /**
     * @param string                 $SessionID
     * @param ShipmentListInfo_Type1 $ShipmentListInfo
     */
    public function __construct($SessionID, $ShipmentListInfo)
    {
        $this->SessionID = $SessionID;
        $this->ShipmentListInfo = $ShipmentListInfo;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\TransferShipmentList_Type1
     */
    public function setSessionID($SessionID)
    {
        $this->SessionID = $SessionID;

        return $this;
    }

    /**
     * @return ShipmentListInfo_Type1
     */
    public function getShipmentListInfo()
    {
        return $this->ShipmentListInfo;
    }

    /**
     * @param ShipmentListInfo_Type1 $ShipmentListInfo
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\TransferShipmentList_Type1
     */
    public function setShipmentListInfo($ShipmentListInfo)
    {
        $this->ShipmentListInfo = $ShipmentListInfo;

        return $this;
    }
}
