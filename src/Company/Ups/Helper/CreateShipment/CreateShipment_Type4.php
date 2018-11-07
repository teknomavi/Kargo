<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class CreateShipment_Type4
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
     * @var boolean $ReturnLabelLink
     */
    protected $ReturnLabelLink = null;
    /**
     * @var boolean $ReturnLabelImage
     */
    protected $ReturnLabelImage = null;

    /**
     * @param string             $SessionID
     * @param ShipmentInfo_Type3 $ShipmentInfo
     * @param boolean            $ReturnLabelLink
     * @param boolean            $ReturnLabelImage
     */
    public function __construct($SessionID, $ShipmentInfo, $ReturnLabelLink, $ReturnLabelImage)
    {
        $this->SessionID = $SessionID;
        $this->ShipmentInfo = $ShipmentInfo;
        $this->ReturnLabelLink = $ReturnLabelLink;
        $this->ReturnLabelImage = $ReturnLabelImage;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type4
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type4
     */
    public function setShipmentInfo($ShipmentInfo)
    {
        $this->ShipmentInfo = $ShipmentInfo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnLabelLink()
    {
        return $this->ReturnLabelLink;
    }

    /**
     * @param boolean $ReturnLabelLink
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type4
     */
    public function setReturnLabelLink($ReturnLabelLink)
    {
        $this->ReturnLabelLink = $ReturnLabelLink;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnLabelImage()
    {
        return $this->ReturnLabelImage;
    }

    /**
     * @param boolean $ReturnLabelImage
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type4
     */
    public function setReturnLabelImage($ReturnLabelImage)
    {
        $this->ReturnLabelImage = $ReturnLabelImage;
        return $this;
    }
}
