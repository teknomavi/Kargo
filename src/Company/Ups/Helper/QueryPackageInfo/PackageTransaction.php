<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class PackageTransaction
{
    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
     */
    public function setProcessDescription2($ProcessDescription2)
    {
        $this->ProcessDescription2 = $ProcessDescription2;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransaction
     */
    public function setErrorDefinition($ErrorDefinition)
    {
        $this->ErrorDefinition = $ErrorDefinition;
        return $this;
    }
}
