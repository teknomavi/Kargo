<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetTiNTInformationByTrackingNumber_V1Response
{
    /**
     * @var TiNTInformation
     */
    protected $GetTiNTInformationByTrackingNumber_V1Result = null;

    /**
     * @param TiNTInformation $GetTiNTInformationByTrackingNumber_V1Result
     */
    public function __construct($GetTiNTInformationByTrackingNumber_V1Result)
    {
        $this->GetTiNTInformationByTrackingNumber_V1Result = $GetTiNTInformationByTrackingNumber_V1Result;
    }

    /**
     * @return TiNTInformation
     */
    public function getGetTiNTInformationByTrackingNumber_V1Result()
    {
        return $this->GetTiNTInformationByTrackingNumber_V1Result;
    }

    /**
     * @param TiNTInformation $GetTiNTInformationByTrackingNumber_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTiNTInformationByTrackingNumber_V1Response
     */
    public function setGetTiNTInformationByTrackingNumber_V1Result($GetTiNTInformationByTrackingNumber_V1Result)
    {
        $this->GetTiNTInformationByTrackingNumber_V1Result = $GetTiNTInformationByTrackingNumber_V1Result;

        return $this;
    }
}
