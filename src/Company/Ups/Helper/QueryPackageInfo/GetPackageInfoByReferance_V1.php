<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetPackageInfoByReferance_V1
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
     * @var string $Referance
     */
    protected $Referance = null;

    /**
     * @param string $SessionID
     * @param int    $InformationLevel
     * @param string $Referance
     */
    public function __construct($SessionID, $InformationLevel, $Referance)
    {
        $this->SessionID = $SessionID;
        $this->InformationLevel = $InformationLevel;
        $this->Referance = $Referance;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByReferance_V1
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByReferance_V1
     */
    public function setInformationLevel($InformationLevel)
    {
        $this->InformationLevel = $InformationLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferance()
    {
        return $this->Referance;
    }

    /**
     * @param string $Referance
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByReferance_V1
     */
    public function setReferance($Referance)
    {
        $this->Referance = $Referance;
        return $this;
    }
}
