<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetUnreadTransactionsByTrackingNumber_V1Response
{
    /**
     * @var ArrayOfPackageTransaction
     */
    protected $GetUnreadTransactionsByTrackingNumber_V1Result = null;

    /**
     * @param ArrayOfPackageTransaction $GetUnreadTransactionsByTrackingNumber_V1Result
     */
    public function __construct($GetUnreadTransactionsByTrackingNumber_V1Result)
    {
        $this->GetUnreadTransactionsByTrackingNumber_V1Result = $GetUnreadTransactionsByTrackingNumber_V1Result;
    }

    /**
     * @return ArrayOfPackageTransaction
     */
    public function getGetUnreadTransactionsByTrackingNumber_V1Result()
    {
        return $this->GetUnreadTransactionsByTrackingNumber_V1Result;
    }

    /**
     * @param ArrayOfPackageTransaction $GetUnreadTransactionsByTrackingNumber_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetUnreadTransactionsByTrackingNumber_V1Response
     */
    public function setGetUnreadTransactionsByTrackingNumber_V1Result($GetUnreadTransactionsByTrackingNumber_V1Result)
    {
        $this->GetUnreadTransactionsByTrackingNumber_V1Result = $GetUnreadTransactionsByTrackingNumber_V1Result;

        return $this;
    }
}
