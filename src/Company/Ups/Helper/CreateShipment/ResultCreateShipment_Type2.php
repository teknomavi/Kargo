<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class ResultCreateShipment_Type2
{
    /**
     * @var string
     */
    protected $ShipmentNo = null;
    /**
     * @var string
     */
    protected $LinkForLabelPrinting = null;
    /**
     * @var ArrayOfString
     */
    protected $BarkodArrayPng = null;
    /**
     * @var int
     */
    protected $ErrorCode = null;
    /**
     * @var string
     */
    protected $ErrorDefinition = null;
    /**
     * @var ArrayOfString
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type2
     */
    public function setShipmentNo($ShipmentNo)
    {
        $this->ShipmentNo = $ShipmentNo;

        return $this;
    }

    /**
     * @return string
     */
    public function getLinkForLabelPrinting()
    {
        return $this->LinkForLabelPrinting;
    }

    /**
     * @param string $LinkForLabelPrinting
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type2
     */
    public function setLinkForLabelPrinting($LinkForLabelPrinting)
    {
        $this->LinkForLabelPrinting = $LinkForLabelPrinting;

        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getBarkodArrayPng()
    {
        return $this->BarkodArrayPng;
    }

    /**
     * @param ArrayOfString $BarkodArrayPng
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type2
     */
    public function setBarkodArrayPng($BarkodArrayPng)
    {
        $this->BarkodArrayPng = $BarkodArrayPng;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type2
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type2
     */
    public function setErrorDefinition($ErrorDefinition)
    {
        $this->ErrorDefinition = $ErrorDefinition;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type2
     */
    public function setWaybillList($WaybillList)
    {
        $this->WaybillList = $WaybillList;

        return $this;
    }
}
