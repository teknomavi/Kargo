<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class OnDemandPickupRequest_Type1Response
{
    /**
     * @var ResultOnDemandPickupRequest_Type1
     */
    protected $OnDemandPickupRequest_Type1Result = null;

    /**
     * @param ResultOnDemandPickupRequest_Type1 $OnDemandPickupRequest_Type1Result
     */
    public function __construct($OnDemandPickupRequest_Type1Result)
    {
        $this->OnDemandPickupRequest_Type1Result = $OnDemandPickupRequest_Type1Result;
    }

    /**
     * @return ResultOnDemandPickupRequest_Type1
     */
    public function getOnDemandPickupRequest_Type1Result()
    {
        return $this->OnDemandPickupRequest_Type1Result;
    }

    /**
     * @param ResultOnDemandPickupRequest_Type1 $OnDemandPickupRequest_Type1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\OnDemandPickupRequest_Type1Response
     */
    public function setOnDemandPickupRequest_Type1Result($OnDemandPickupRequest_Type1Result)
    {
        $this->OnDemandPickupRequest_Type1Result = $OnDemandPickupRequest_Type1Result;

        return $this;
    }
}
