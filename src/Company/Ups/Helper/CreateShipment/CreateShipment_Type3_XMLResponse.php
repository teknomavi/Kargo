<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class CreateShipment_Type3_XMLResponse
{
    /**
     * @var ResultCreateShipment_Type1_XML
     */
    protected $CreateShipment_Type3_XMLResult = null;

    /**
     * @param ResultCreateShipment_Type1_XML $CreateShipment_Type3_XMLResult
     */
    public function __construct($CreateShipment_Type3_XMLResult)
    {
        $this->CreateShipment_Type3_XMLResult = $CreateShipment_Type3_XMLResult;
    }

    /**
     * @return ResultCreateShipment_Type1_XML
     */
    public function getCreateShipment_Type3_XMLResult()
    {
        return $this->CreateShipment_Type3_XMLResult;
    }

    /**
     * @param ResultCreateShipment_Type1_XML $CreateShipment_Type3_XMLResult
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment_Type3_XMLResponse
     */
    public function setCreateShipment_Type3_XMLResult($CreateShipment_Type3_XMLResult)
    {
        $this->CreateShipment_Type3_XMLResult = $CreateShipment_Type3_XMLResult;

        return $this;
    }
}
