<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetPackageInfoByReferance_V1Response
{
    /**
     * @var ArrayOfPackageInformation
     */
    protected $GetPackageInfoByReferance_V1Result = null;

    /**
     * @param ArrayOfPackageInformation $GetPackageInfoByReferance_V1Result
     */
    public function __construct($GetPackageInfoByReferance_V1Result)
    {
        $this->GetPackageInfoByReferance_V1Result = $GetPackageInfoByReferance_V1Result;
    }

    /**
     * @return ArrayOfPackageInformation
     */
    public function getGetPackageInfoByReferance_V1Result()
    {
        return $this->GetPackageInfoByReferance_V1Result;
    }

    /**
     * @param ArrayOfPackageInformation $GetPackageInfoByReferance_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByReferance_V1Response
     */
    public function setGetPackageInfoByReferance_V1Result($GetPackageInfoByReferance_V1Result)
    {
        $this->GetPackageInfoByReferance_V1Result = $GetPackageInfoByReferance_V1Result;

        return $this;
    }
}
