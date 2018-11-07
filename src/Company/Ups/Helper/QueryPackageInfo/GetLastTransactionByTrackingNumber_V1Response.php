<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetLastTransactionByTrackingNumber_V1Response
{
    /**
     * @var ArrayOfPackageTransaction $GetLastTransactionByTrackingNumber_V1Result
     */
    protected $GetLastTransactionByTrackingNumber_V1Result = null;

    /**
     * @param ArrayOfPackageTransaction $GetLastTransactionByTrackingNumber_V1Result
     */
    public function __construct($GetLastTransactionByTrackingNumber_V1Result)
    {
        $this->GetLastTransactionByTrackingNumber_V1Result = $GetLastTransactionByTrackingNumber_V1Result;
    }

    /**
     * @return ArrayOfPackageTransaction
     */
    public function getGetLastTransactionByTrackingNumber_V1Result()
    {
        return $this->GetLastTransactionByTrackingNumber_V1Result;
    }

    /**
     * @param ArrayOfPackageTransaction $GetLastTransactionByTrackingNumber_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetLastTransactionByTrackingNumber_V1Response
     */
    public function setGetLastTransactionByTrackingNumber_V1Result($GetLastTransactionByTrackingNumber_V1Result)
    {
        $this->GetLastTransactionByTrackingNumber_V1Result = $GetLastTransactionByTrackingNumber_V1Result;
        return $this;
    }
}
