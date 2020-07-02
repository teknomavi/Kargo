<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetTransactionsByCustomerCode_V1
{
    /**
     * @var string
     */
    protected $SessionID = null;
    /**
     * @var int
     */
    protected $InformationLevel = null;
    /**
     * @var int
     */
    protected $RecordId = null;

    /**
     * @param string $SessionID
     * @param int    $InformationLevel
     * @param int    $RecordId
     */
    public function __construct($SessionID, $InformationLevel, $RecordId)
    {
        $this->SessionID = $SessionID;
        $this->InformationLevel = $InformationLevel;
        $this->RecordId = $RecordId;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }

    /**
     * @param string $SessionID
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByCustomerCode_V1
     */
    public function setSessionID($SessionID)
    {
        $this->SessionID = $SessionID;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByCustomerCode_V1
     */
    public function setInformationLevel($InformationLevel)
    {
        $this->InformationLevel = $InformationLevel;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByCustomerCode_V1
     */
    public function setRecordId($RecordId)
    {
        $this->RecordId = $RecordId;

        return $this;
    }
}
