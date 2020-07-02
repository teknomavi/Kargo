<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class CreateShipment_Type1Response
{
    /**
     * @var ResultCreateShipment_Type1
     */
    protected $CreateShipment_Type1Result = null;

    /**
     * @param ResultCreateShipment_Type1 $CreateShipment_Type1Result
     */
    public function __construct($CreateShipment_Type1Result)
    {
        $this->CreateShipment_Type1Result = $CreateShipment_Type1Result;
    }

    /**
     * @return ResultCreateShipment_Type1
     */
    public function getCreateShipment_Type1Result()
    {
        return $this->CreateShipment_Type1Result;
    }

    /**
     * @param ResultCreateShipment_Type1 $CreateShipment_Type1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type1Response
     */
    public function setCreateShipment_Type1Result($CreateShipment_Type1Result)
    {
        $this->CreateShipment_Type1Result = $CreateShipment_Type1Result;

        return $this;
    }
}
