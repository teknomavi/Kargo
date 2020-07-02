<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class CreateShipment_Type3
{
    /**
     * @var string
     */
    protected $SessionID = null;
    /**
     * @var ShipmentInfo_Type3
     */
    protected $ShipmentInfo = null;
    /**
     * @var bool
     */
    protected $ReturnLabelLink = null;
    /**
     * @var bool
     */
    protected $ReturnLabelImage = null;

    /**
     * @param string             $SessionID
     * @param ShipmentInfo_Type3 $ShipmentInfo
     * @param bool               $ReturnLabelLink
     * @param bool               $ReturnLabelImage
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type3
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type3
     */
    public function setShipmentInfo($ShipmentInfo)
    {
        $this->ShipmentInfo = $ShipmentInfo;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReturnLabelLink()
    {
        return $this->ReturnLabelLink;
    }

    /**
     * @param bool $ReturnLabelLink
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type3
     */
    public function setReturnLabelLink($ReturnLabelLink)
    {
        $this->ReturnLabelLink = $ReturnLabelLink;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReturnLabelImage()
    {
        return $this->ReturnLabelImage;
    }

    /**
     * @param bool $ReturnLabelImage
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type3
     */
    public function setReturnLabelImage($ReturnLabelImage)
    {
        $this->ReturnLabelImage = $ReturnLabelImage;

        return $this;
    }
}
