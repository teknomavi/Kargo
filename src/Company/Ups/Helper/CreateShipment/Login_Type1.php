<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class Login_Type1
{
    /**
     * @var string
     */
    protected $CustomerNumber = null;
    /**
     * @var string
     */
    protected $UserName = null;
    /**
     * @var string
     */
    protected $Password = null;

    /**
     * @param string $CustomerNumber
     * @param string $UserName
     * @param string $Password
     */
    public function __construct($CustomerNumber, $UserName, $Password)
    {
        $this->CustomerNumber = $CustomerNumber;
        $this->UserName = $UserName;
        $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\Login_Type1
     */
    public function setCustomerNumber($CustomerNumber)
    {
        $this->CustomerNumber = $CustomerNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param string $UserName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\Login_Type1
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\Login_Type1
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;

        return $this;
    }
}
