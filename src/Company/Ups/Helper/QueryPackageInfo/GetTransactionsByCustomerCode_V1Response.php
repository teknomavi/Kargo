<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetTransactionsByCustomerCode_V1Response
{
    /**
     * @var ArrayOfPackageTransaction
     */
    protected $GetTransactionsByCustomerCode_V1Result = null;

    /**
     * @param ArrayOfPackageTransaction $GetTransactionsByCustomerCode_V1Result
     */
    public function __construct($GetTransactionsByCustomerCode_V1Result)
    {
        $this->GetTransactionsByCustomerCode_V1Result = $GetTransactionsByCustomerCode_V1Result;
    }

    /**
     * @return ArrayOfPackageTransaction
     */
    public function getGetTransactionsByCustomerCode_V1Result()
    {
        return $this->GetTransactionsByCustomerCode_V1Result;
    }

    /**
     * @param ArrayOfPackageTransaction $GetTransactionsByCustomerCode_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByCustomerCode_V1Response
     */
    public function setGetTransactionsByCustomerCode_V1Result($GetTransactionsByCustomerCode_V1Result)
    {
        $this->GetTransactionsByCustomerCode_V1Result = $GetTransactionsByCustomerCode_V1Result;

        return $this;
    }
}
