<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetPackageInfoByDatePeriod_V1Response
{
    /**
     * @var ArrayOfPackageInformation $GetPackageInfoByDatePeriod_V1Result
     */
    protected $GetPackageInfoByDatePeriod_V1Result = null;

    /**
     * @param ArrayOfPackageInformation $GetPackageInfoByDatePeriod_V1Result
     */
    public function __construct($GetPackageInfoByDatePeriod_V1Result)
    {
        $this->GetPackageInfoByDatePeriod_V1Result = $GetPackageInfoByDatePeriod_V1Result;
    }

    /**
     * @return ArrayOfPackageInformation
     */
    public function getGetPackageInfoByDatePeriod_V1Result()
    {
        return $this->GetPackageInfoByDatePeriod_V1Result;
    }

    /**
     * @param ArrayOfPackageInformation $GetPackageInfoByDatePeriod_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByDatePeriod_V1Response
     */
    public function setGetPackageInfoByDatePeriod_V1Result($GetPackageInfoByDatePeriod_V1Result)
    {
        $this->GetPackageInfoByDatePeriod_V1Result = $GetPackageInfoByDatePeriod_V1Result;
        return $this;
    }
}
