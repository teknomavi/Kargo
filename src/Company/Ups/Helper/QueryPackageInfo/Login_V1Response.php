<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class Login_V1Response
{
    /**
     * @var LoginInformation $Login_V1Result
     */
    protected $Login_V1Result = null;

    /**
     * @param LoginInformation $Login_V1Result
     */
    public function __construct($Login_V1Result)
    {
        $this->Login_V1Result = $Login_V1Result;
    }

    /**
     * @return LoginInformation
     */
    public function getLogin_V1Result()
    {
        return $this->Login_V1Result;
    }

    /**
     * @param LoginInformation $Login_V1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\Login_V1Response
     */
    public function setLogin_V1Result($Login_V1Result)
    {
        $this->Login_V1Result = $Login_V1Result;
        return $this;
    }
}
