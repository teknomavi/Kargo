<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class OnDemandPickupRequestInfo_Type1
{
    /**
     * @var int $LabelSource
     */
    protected $LabelSource = null;
    /**
     * @var \DateTime $PickupRequestDay
     */
    protected $PickupRequestDay = null;
    /**
     * @var ArrayOfBoxType $RequestedBoxList
     */
    protected $RequestedBoxList = null;
    /**
     * @var ShipmentInfo_Type3 $ShipmentInfo
     */
    protected $ShipmentInfo = null;

    /**
     * @param int       $LabelSource
     * @param \DateTime $PickupRequestDay
     */
    public function __construct($LabelSource, \DateTime $PickupRequestDay)
    {
        $this->LabelSource = $LabelSource;
        $this->PickupRequestDay = $PickupRequestDay->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getLabelSource()
    {
        return $this->LabelSource;
    }

    /**
     * @param int $LabelSource
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\OnDemandPickupRequestInfo_Type1
     */
    public function setLabelSource($LabelSource)
    {
        $this->LabelSource = $LabelSource;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickupRequestDay()
    {
        if ($this->PickupRequestDay == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->PickupRequestDay);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $PickupRequestDay
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\OnDemandPickupRequestInfo_Type1
     */
    public function setPickupRequestDay(\DateTime $PickupRequestDay)
    {
        $this->PickupRequestDay = $PickupRequestDay->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfBoxType
     */
    public function getRequestedBoxList()
    {
        return $this->RequestedBoxList;
    }

    /**
     * @param ArrayOfBoxType $RequestedBoxList
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\OnDemandPickupRequestInfo_Type1
     */
    public function setRequestedBoxList($RequestedBoxList)
    {
        $this->RequestedBoxList = $RequestedBoxList;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\OnDemandPickupRequestInfo_Type1
     */
    public function setShipmentInfo($ShipmentInfo)
    {
        $this->ShipmentInfo = $ShipmentInfo;
        return $this;
    }
}
