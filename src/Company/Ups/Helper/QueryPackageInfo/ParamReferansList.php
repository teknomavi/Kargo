<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class ParamReferansList
{
    /**
     * @var ReferansTypes $referansType
     */
    protected $referansType = null;
    /**
     * @var ArrayOfString $referansList
     */
    protected $referansList = null;

    /**
     * @param ReferansTypes $referansType
     */
    public function __construct($referansType)
    {
        $this->referansType = $referansType;
    }

    /**
     * @return ReferansTypes
     */
    public function getReferansType()
    {
        return $this->referansType;
    }

    /**
     * @param ReferansTypes $referansType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\ParamReferansList
     */
    public function setReferansType($referansType)
    {
        $this->referansType = $referansType;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getReferansList()
    {
        return $this->referansList;
    }

    /**
     * @param ArrayOfString $referansList
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\ParamReferansList
     */
    public function setReferansList($referansList)
    {
        $this->referansList = $referansList;
        return $this;
    }
}
