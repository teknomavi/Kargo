<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class TransferShipmentList_Type1Response
{
    /**
     * @var ResultTransferShipmentList_Type1 $TransferShipmentList_Type1Result
     */
    protected $TransferShipmentList_Type1Result = null;

    /**
     * @param ResultTransferShipmentList_Type1 $TransferShipmentList_Type1Result
     */
    public function __construct($TransferShipmentList_Type1Result)
    {
        $this->TransferShipmentList_Type1Result = $TransferShipmentList_Type1Result;
    }

    /**
     * @return ResultTransferShipmentList_Type1
     */
    public function getTransferShipmentList_Type1Result()
    {
        return $this->TransferShipmentList_Type1Result;
    }

    /**
     * @param ResultTransferShipmentList_Type1 $TransferShipmentList_Type1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\TransferShipmentList_Type1Response
     */
    public function setTransferShipmentList_Type1Result($TransferShipmentList_Type1Result)
    {
        $this->TransferShipmentList_Type1Result = $TransferShipmentList_Type1Result;
        return $this;
    }
}
