<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class CreateShipment_Type2Response
{
    /**
     * @var ResultCreateShipment_Type1
     */
    protected $CreateShipment_Type2Result = null;

    /**
     * @param ResultCreateShipment_Type1 $CreateShipment_Type2Result
     */
    public function __construct($CreateShipment_Type2Result)
    {
        $this->CreateShipment_Type2Result = $CreateShipment_Type2Result;
    }

    /**
     * @return ResultCreateShipment_Type1
     */
    public function getCreateShipment_Type2Result()
    {
        return $this->CreateShipment_Type2Result;
    }

    /**
     * @param ResultCreateShipment_Type1 $CreateShipment_Type2Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type2Response
     */
    public function setCreateShipment_Type2Result($CreateShipment_Type2Result)
    {
        $this->CreateShipment_Type2Result = $CreateShipment_Type2Result;

        return $this;
    }
}
