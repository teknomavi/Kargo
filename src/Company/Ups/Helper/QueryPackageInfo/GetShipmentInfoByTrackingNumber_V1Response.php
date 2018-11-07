<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetShipmentInfoByTrackingNumber_V1Response
{
    /**
     * @var ArrayOfPackageInformation $GetShipmentInfoByTrackingNumber_V1Result
     */
    protected $GetShipmentInfoByTrackingNumber_V1Result = null;

    /**
     * @param ArrayOfPackageInformation $GetShipmentInfoByTrackingNumber_V1Result
     */
    public function __construct($GetShipmentInfoByTrackingNumber_V1Result)
    {
        $this->GetShipmentInfoByTrackingNumber_V1Result = $GetShipmentInfoByTrackingNumber_V1Result;
    }

    /**
     * @return ArrayOfPackageInformation
     */
    public function getGetShipmentInfoByTrackingNumber_V1Result()
    {
        return $this->GetShipmentInfoByTrackingNumber_V1Result;
    }

    /**
     * @param ArrayOfPackageInformation $GetShipmentInfoByTrackingNumber_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetShipmentInfoByTrackingNumber_V1Response
     */
    public function setGetShipmentInfoByTrackingNumber_V1Result($GetShipmentInfoByTrackingNumber_V1Result)
    {
        $this->GetShipmentInfoByTrackingNumber_V1Result = $GetShipmentInfoByTrackingNumber_V1Result;
        return $this;
    }
}
