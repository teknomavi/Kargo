<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class GetPackageInfoByDatePeriod_V1
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
     * @var string
     */
    protected $StartDate = null;
    /**
     * @var string
     */
    protected $EndDate = null;

    /**
     * @param string $SessionID
     * @param int    $InformationLevel
     * @param string $StartDate
     * @param string $EndDate
     */
    public function __construct($SessionID, $InformationLevel, $StartDate, $EndDate)
    {
        $this->SessionID = $SessionID;
        $this->InformationLevel = $InformationLevel;
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByDatePeriod_V1
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByDatePeriod_V1
     */
    public function setInformationLevel($InformationLevel)
    {
        $this->InformationLevel = $InformationLevel;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param string $StartDate
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByDatePeriod_V1
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param string $EndDate
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetPackageInfoByDatePeriod_V1
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;

        return $this;
    }
}
