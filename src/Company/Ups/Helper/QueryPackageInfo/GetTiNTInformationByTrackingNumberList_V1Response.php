<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetTiNTInformationByTrackingNumberList_V1Response
{
    /**
     * @var ArrayOfTiNTInformation
     */
    protected $GetTiNTInformationByTrackingNumberList_V1Result = null;

    /**
     * @param ArrayOfTiNTInformation $GetTiNTInformationByTrackingNumberList_V1Result
     */
    public function __construct($GetTiNTInformationByTrackingNumberList_V1Result)
    {
        $this->GetTiNTInformationByTrackingNumberList_V1Result = $GetTiNTInformationByTrackingNumberList_V1Result;
    }

    /**
     * @return ArrayOfTiNTInformation
     */
    public function getGetTiNTInformationByTrackingNumberList_V1Result()
    {
        return $this->GetTiNTInformationByTrackingNumberList_V1Result;
    }

    /**
     * @param ArrayOfTiNTInformation $GetTiNTInformationByTrackingNumberList_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTiNTInformationByTrackingNumberList_V1Response
     */
    public function setGetTiNTInformationByTrackingNumberList_V1Result($GetTiNTInformationByTrackingNumberList_V1Result)
    {
        $this->GetTiNTInformationByTrackingNumberList_V1Result = $GetTiNTInformationByTrackingNumberList_V1Result;

        return $this;
    }
}
