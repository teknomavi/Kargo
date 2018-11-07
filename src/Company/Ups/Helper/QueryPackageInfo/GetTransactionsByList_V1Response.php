<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetTransactionsByList_V1Response
{
    /**
     * @var ArrayOfPackageTransactionwithDeliveryDetail $GetTransactionsByList_V1Result
     */
    protected $GetTransactionsByList_V1Result = null;

    /**
     * @param ArrayOfPackageTransactionwithDeliveryDetail $GetTransactionsByList_V1Result
     */
    public function __construct($GetTransactionsByList_V1Result)
    {
        $this->GetTransactionsByList_V1Result = $GetTransactionsByList_V1Result;
    }

    /**
     * @return ArrayOfPackageTransactionwithDeliveryDetail
     */
    public function getGetTransactionsByList_V1Result()
    {
        return $this->GetTransactionsByList_V1Result;
    }

    /**
     * @param ArrayOfPackageTransactionwithDeliveryDetail $GetTransactionsByList_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByList_V1Response
     */
    public function setGetTransactionsByList_V1Result($GetTransactionsByList_V1Result)
    {
        $this->GetTransactionsByList_V1Result = $GetTransactionsByList_V1Result;
        return $this;
    }
}
