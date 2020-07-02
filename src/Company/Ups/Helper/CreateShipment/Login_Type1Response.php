<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class Login_Type1Response
{
    /**
     * @var ResultLogin_Type1
     */
    protected $Login_Type1Result = null;

    /**
     * @param ResultLogin_Type1 $Login_Type1Result
     */
    public function __construct($Login_Type1Result)
    {
        $this->Login_Type1Result = $Login_Type1Result;
    }

    /**
     * @return ResultLogin_Type1
     */
    public function getLogin_Type1Result()
    {
        return $this->Login_Type1Result;
    }

    /**
     * @param ResultLogin_Type1 $Login_Type1Result
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\Login_Type1Response
     */
    public function setLogin_Type1Result($Login_Type1Result)
    {
        $this->Login_Type1Result = $Login_Type1Result;

        return $this;
    }
}
