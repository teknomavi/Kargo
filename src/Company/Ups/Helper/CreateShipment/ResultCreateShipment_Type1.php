<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class ResultCreateShipment_Type1
{
    /**
     * @var string $ShipmentNo
     */
    protected $ShipmentNo = null;
    /**
     * @var string $LinkForLabelPrinting
     */
    protected $LinkForLabelPrinting = null;
    /**
     * @var ArrayOfString $BarkodArrayPng
     */
    protected $BarkodArrayPng = null;
    /**
     * @var int $ErrorCode
     */
    protected $ErrorCode = null;
    /**
     * @var string $ErrorDefinition
     */
    protected $ErrorDefinition = null;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ResultCreateShipment_Type1
     */
    public function setErrorDefinition($ErrorDefinition)
    {
        $this->ErrorDefinition = $ErrorDefinition;
        return $this;
    }
}
