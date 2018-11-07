<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetTransactionsByList_V1
{
    /**
     * @var string $SessionID
     */
    protected $SessionID = null;
    /**
     * @var int $InformationLevel
     */
    protected $InformationLevel = null;
    /**
     * @var ParamReferansList $refList
     */
    protected $refList = null;
    /**
     * @var TransactionTypes $trnType
     */
    protected $trnType = null;

    /**
     * @param string            $SessionID
     * @param int               $InformationLevel
     * @param ParamReferansList $refList
     * @param TransactionTypes  $trnType
     */
    public function __construct($SessionID, $InformationLevel, $refList, $trnType)
    {
        $this->SessionID = $SessionID;
        $this->InformationLevel = $InformationLevel;
        $this->refList = $refList;
        $this->trnType = $trnType;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByList_V1
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByList_V1
     */
    public function setInformationLevel($InformationLevel)
    {
        $this->InformationLevel = $InformationLevel;
        return $this;
    }

    /**
     * @return ParamReferansList
     */
    public function getRefList()
    {
        return $this->refList;
    }

    /**
     * @param ParamReferansList $refList
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByList_V1
     */
    public function setRefList($refList)
    {
        $this->refList = $refList;
        return $this;
    }

    /**
     * @return TransactionTypes
     */
    public function getTrnType()
    {
        return $this->trnType;
    }

    /**
     * @param TransactionTypes $trnType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByList_V1
     */
    public function setTrnType($trnType)
    {
        $this->trnType = $trnType;
        return $this;
    }
}
