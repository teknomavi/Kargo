<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetTransactionsByPackagePickupDate_V1Response
{
    /**
     * @var ArrayOfPackageTransactionwithDeliveryDetail $GetTransactionsByPackagePickupDate_V1Result
     */
    protected $GetTransactionsByPackagePickupDate_V1Result = null;

    /**
     * @param ArrayOfPackageTransactionwithDeliveryDetail $GetTransactionsByPackagePickupDate_V1Result
     */
    public function __construct($GetTransactionsByPackagePickupDate_V1Result)
    {
        $this->GetTransactionsByPackagePickupDate_V1Result = $GetTransactionsByPackagePickupDate_V1Result;
    }

    /**
     * @return ArrayOfPackageTransactionwithDeliveryDetail
     */
    public function getGetTransactionsByPackagePickupDate_V1Result()
    {
        return $this->GetTransactionsByPackagePickupDate_V1Result;
    }

    /**
     * @param ArrayOfPackageTransactionwithDeliveryDetail $GetTransactionsByPackagePickupDate_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByPackagePickupDate_V1Response
     */
    public function setGetTransactionsByPackagePickupDate_V1Result($GetTransactionsByPackagePickupDate_V1Result)
    {
        $this->GetTransactionsByPackagePickupDate_V1Result = $GetTransactionsByPackagePickupDate_V1Result;
        return $this;
    }
}
