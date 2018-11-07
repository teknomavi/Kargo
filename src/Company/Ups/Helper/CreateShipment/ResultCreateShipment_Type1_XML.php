<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class ResultCreateShipment_Type1_XML
{
    /**
     * @var string $ShipmentNo
     */
    protected $ShipmentNo = null;
    /**
     * @var int $ErrorCode
     */
    protected $ErrorCode = null;
    /**
     * @var string $ErrorDefinition
     */
    protected $ErrorDefinition = null;
    /**
     * @var ShipmentInfo_TypeAll $ShipmentInfo
     */
    protected $ShipmentInfo = null;
    /**
     * @var string $MinistryofFinanceNumber
     */
    protected $MinistryofFinanceNumber = null;
    /**
     * @var string $SlicCode
     */
    protected $SlicCode = null;
    /**
     * @var ArrayOfString $WaybillList
     */
    protected $WaybillList = null;

    /**
     * @param int $ErrorCode
     */
    public function __construct($ErrorCode)
    {
        $this->ErrorCode = $ErrorCode;
    }

    /**
     * @return string
     */
    public function getShipmentNo()
    {
        return $this->ShipmentNo;
    }

    /**
     * @param string $ShipmentNo
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1_XML
     */
    public function setShipmentNo($ShipmentNo)
    {
        $this->ShipmentNo = $ShipmentNo;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1_XML
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1_XML
     */
    public function setErrorDefinition($ErrorDefinition)
    {
        $this->ErrorDefinition = $ErrorDefinition;
        return $this;
    }

    /**
     * @return ShipmentInfo_TypeAll
     */
    public function getShipmentInfo()
    {
        return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfo_TypeAll $ShipmentInfo
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1_XML
     */
    public function setShipmentInfo($ShipmentInfo)
    {
        $this->ShipmentInfo = $ShipmentInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinistryofFinanceNumber()
    {
        return $this->MinistryofFinanceNumber;
    }

    /**
     * @param string $MinistryofFinanceNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1_XML
     */
    public function setMinistryofFinanceNumber($MinistryofFinanceNumber)
    {
        $this->MinistryofFinanceNumber = $MinistryofFinanceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlicCode()
    {
        return $this->SlicCode;
    }

    /**
     * @param string $SlicCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1_XML
     */
    public function setSlicCode($SlicCode)
    {
        $this->SlicCode = $SlicCode;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getWaybillList()
    {
        return $this->WaybillList;
    }

    /**
     * @param ArrayOfString $WaybillList
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1_XML
     */
    public function setWaybillList($WaybillList)
    {
        $this->WaybillList = $WaybillList;
        return $this;
    }
}
