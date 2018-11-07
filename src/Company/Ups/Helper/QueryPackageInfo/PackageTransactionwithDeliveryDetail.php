<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class PackageTransactionwithDeliveryDetail
{
    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;
    /**
     * @var string $CustomerReferanceNumber
     */
    protected $CustomerReferanceNumber = null;
    /**
     * @var string $ProcessTimeStamp
     */
    protected $ProcessTimeStamp = null;
    /**
     * @var string $OperationBranchName
     */
    protected $OperationBranchName = null;
    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;
    /**
     * @var string $ExceptionCode
     */
    protected $ExceptionCode = null;
    /**
     * @var string $ProcessDescription1
     */
    protected $ProcessDescription1 = null;
    /**
     * @var string $ProcessDescription2
     */
    protected $ProcessDescription2 = null;
    /**
     * @var string $SignedPersonName
     */
    protected $SignedPersonName = null;
    /**
     * @var string $SignedPersonSurname
     */
    protected $SignedPersonSurname = null;
    /**
     * @var string $SignedPersonPhoneNumber
     */
    protected $SignedPersonPhoneNumber = null;
    /**
     * @var string $SignedPersonRelation
     */
    protected $SignedPersonRelation = null;
    /**
     * @var int $RecordId
     */
    protected $RecordId = null;
    /**
     * @var int $InformationLevel
     */
    protected $InformationLevel = null;
    /**
     * @var int $ErrorCode
     */
    protected $ErrorCode = null;
    /**
     * @var string $ErrorDefinition
     */
    protected $ErrorDefinition = null;

    /**
     * @param int $StatusCode
     * @param int $RecordId
     * @param int $InformationLevel
     * @param int $ErrorCode
     */
    public function __construct($StatusCode, $RecordId, $InformationLevel, $ErrorCode)
    {
        $this->StatusCode = $StatusCode;
        $this->RecordId = $RecordId;
        $this->InformationLevel = $InformationLevel;
        $this->ErrorCode = $ErrorCode;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReferanceNumber()
    {
        return $this->CustomerReferanceNumber;
    }

    /**
     * @param string $CustomerReferanceNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setCustomerReferanceNumber($CustomerReferanceNumber)
    {
        $this->CustomerReferanceNumber = $CustomerReferanceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessTimeStamp()
    {
        return $this->ProcessTimeStamp;
    }

    /**
     * @param string $ProcessTimeStamp
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setProcessTimeStamp($ProcessTimeStamp)
    {
        $this->ProcessTimeStamp = $ProcessTimeStamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperationBranchName()
    {
        return $this->OperationBranchName;
    }

    /**
     * @param string $OperationBranchName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setOperationBranchName($OperationBranchName)
    {
        $this->OperationBranchName = $OperationBranchName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setStatusCode($StatusCode)
    {
        $this->StatusCode = $StatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getExceptionCode()
    {
        return $this->ExceptionCode;
    }

    /**
     * @param string $ExceptionCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setExceptionCode($ExceptionCode)
    {
        $this->ExceptionCode = $ExceptionCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessDescription1()
    {
        return $this->ProcessDescription1;
    }

    /**
     * @param string $ProcessDescription1
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setProcessDescription1($ProcessDescription1)
    {
        $this->ProcessDescription1 = $ProcessDescription1;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessDescription2()
    {
        return $this->ProcessDescription2;
    }

    /**
     * @param string $ProcessDescription2
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setProcessDescription2($ProcessDescription2)
    {
        $this->ProcessDescription2 = $ProcessDescription2;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignedPersonName()
    {
        return $this->SignedPersonName;
    }

    /**
     * @param string $SignedPersonName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setSignedPersonName($SignedPersonName)
    {
        $this->SignedPersonName = $SignedPersonName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignedPersonSurname()
    {
        return $this->SignedPersonSurname;
    }

    /**
     * @param string $SignedPersonSurname
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setSignedPersonSurname($SignedPersonSurname)
    {
        $this->SignedPersonSurname = $SignedPersonSurname;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignedPersonPhoneNumber()
    {
        return $this->SignedPersonPhoneNumber;
    }

    /**
     * @param string $SignedPersonPhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setSignedPersonPhoneNumber($SignedPersonPhoneNumber)
    {
        $this->SignedPersonPhoneNumber = $SignedPersonPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignedPersonRelation()
    {
        return $this->SignedPersonRelation;
    }

    /**
     * @param string $SignedPersonRelation
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setSignedPersonRelation($SignedPersonRelation)
    {
        $this->SignedPersonRelation = $SignedPersonRelation;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecordId()
    {
        return $this->RecordId;
    }

    /**
     * @param int $RecordId
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setRecordId($RecordId)
    {
        $this->RecordId = $RecordId;
        return $this;
    }

    /**
     * @return int
     */
    public function getInformationLevel()
    {
        return $this->InformationLevel;
    }

    /**
     * @param int $InformationLevel
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setInformationLevel($InformationLevel)
    {
        $this->InformationLevel = $InformationLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setErrorCode($ErrorCode)
    {
        $this->ErrorCode = $ErrorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorDefinition()
    {
        return $this->ErrorDefinition;
    }

    /**
     * @param string $ErrorDefinition
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail
     */
    public function setErrorDefinition($ErrorDefinition)
    {
        $this->ErrorDefinition = $ErrorDefinition;
        return $this;
    }
}
