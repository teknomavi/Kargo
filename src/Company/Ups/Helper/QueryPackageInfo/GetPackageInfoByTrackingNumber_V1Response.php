<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetPackageInfoByTrackingNumber_V1Response
{
    /**
     * @var ArrayOfPackageInformation
     */
    protected $GetPackageInfoByTrackingNumber_V1Result = null;

    /**
     * @param ArrayOfPackageInformation $GetPackageInfoByTrackingNumber_V1Result
     */
    public function __construct($GetPackageInfoByTrackingNumber_V1Result)
    {
        $this->GetPackageInfoByTrackingNumber_V1Result = $GetPackageInfoByTrackingNumber_V1Result;
    }

    /**
     * @return ArrayOfPackageInformation
     */
    public function getGetPackageInfoByTrackingNumber_V1Result()
    {
        return $this->GetPackageInfoByTrackingNumber_V1Result;
    }

    /**
     * @param ArrayOfPackageInformation $GetPackageInfoByTrackingNumber_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByTrackingNumber_V1Response
     */
    public function setGetPackageInfoByTrackingNumber_V1Result($GetPackageInfoByTrackingNumber_V1Result)
    {
        $this->GetPackageInfoByTrackingNumber_V1Result = $GetPackageInfoByTrackingNumber_V1Result;

        return $this;
    }
}
