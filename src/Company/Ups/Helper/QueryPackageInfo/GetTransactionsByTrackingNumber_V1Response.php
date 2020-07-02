<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetTransactionsByTrackingNumber_V1Response
{
    /**
     * @var ArrayOfPackageTransaction
     */
    protected $GetTransactionsByTrackingNumber_V1Result = null;

    /**
     * @param ArrayOfPackageTransaction $GetTransactionsByTrackingNumber_V1Result
     */
    public function __construct($GetTransactionsByTrackingNumber_V1Result)
    {
        $this->GetTransactionsByTrackingNumber_V1Result = $GetTransactionsByTrackingNumber_V1Result;
    }

    /**
     * @return ArrayOfPackageTransaction
     */
    public function getGetTransactionsByTrackingNumber_V1Result()
    {
        return $this->GetTransactionsByTrackingNumber_V1Result;
    }

    /**
     * @param ArrayOfPackageTransaction $GetTransactionsByTrackingNumber_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByTrackingNumber_V1Response
     */
    public function setGetTransactionsByTrackingNumber_V1Result($GetTransactionsByTrackingNumber_V1Result)
    {
        $this->GetTransactionsByTrackingNumber_V1Result = $GetTransactionsByTrackingNumber_V1Result;

        return $this;
    }
}
