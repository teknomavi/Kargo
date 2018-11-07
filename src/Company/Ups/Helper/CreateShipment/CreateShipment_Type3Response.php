<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class CreateShipment_Type3Response
{
    /**
     * @var ResultCreateShipment_Type1 $CreateShipment_Type3Result
     */
    protected $CreateShipment_Type3Result = null;

    /**
     * @param ResultCreateShipment_Type1 $CreateShipment_Type3Result
     */
    public function __construct($CreateShipment_Type3Result)
    {
        $this->CreateShipment_Type3Result = $CreateShipment_Type3Result;
    }

    /**
     * @return ResultCreateShipment_Type1
     */
    public function getCreateShipment_Type3Result()
    {
        return $this->CreateShipment_Type3Result;
    }

    /**
     * @param ResultCreateShipment_Type1 $CreateShipment_Type3Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type3Response
     */
    public function setCreateShipment_Type3Result($CreateShipment_Type3Result)
    {
        $this->CreateShipment_Type3Result = $CreateShipment_Type3Result;
        return $this;
    }
}
