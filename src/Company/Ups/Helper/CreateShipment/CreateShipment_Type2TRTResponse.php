<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class CreateShipment_Type2TRTResponse
{
    /**
     * @var ResultCreateShipment_Type1 $CreateShipment_Type2TRTResult
     */
    protected $CreateShipment_Type2TRTResult = null;

    /**
     * @param ResultCreateShipment_Type1 $CreateShipment_Type2TRTResult
     */
    public function __construct($CreateShipment_Type2TRTResult)
    {
        $this->CreateShipment_Type2TRTResult = $CreateShipment_Type2TRTResult;
    }

    /**
     * @return ResultCreateShipment_Type1
     */
    public function getCreateShipment_Type2TRTResult()
    {
        return $this->CreateShipment_Type2TRTResult;
    }

    /**
     * @param ResultCreateShipment_Type1 $CreateShipment_Type2TRTResult
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type2TRTResponse
     */
    public function setCreateShipment_Type2TRTResult($CreateShipment_Type2TRTResult)
    {
        $this->CreateShipment_Type2TRTResult = $CreateShipment_Type2TRTResult;
        return $this;
    }
}
