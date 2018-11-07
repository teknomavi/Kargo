<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class CreateShipment_Type4Response
{
    /**
     * @var ResultCreateShipment_Type2 $CreateShipment_Type4Result
     */
    protected $CreateShipment_Type4Result = null;

    /**
     * @param ResultCreateShipment_Type2 $CreateShipment_Type4Result
     */
    public function __construct($CreateShipment_Type4Result)
    {
        $this->CreateShipment_Type4Result = $CreateShipment_Type4Result;
    }

    /**
     * @return ResultCreateShipment_Type2
     */
    public function getCreateShipment_Type4Result()
    {
        return $this->CreateShipment_Type4Result;
    }

    /**
     * @param ResultCreateShipment_Type2 $CreateShipment_Type4Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type4Response
     */
    public function setCreateShipment_Type4Result($CreateShipment_Type4Result)
    {
        $this->CreateShipment_Type4Result = $CreateShipment_Type4Result;
        return $this;
    }
}
