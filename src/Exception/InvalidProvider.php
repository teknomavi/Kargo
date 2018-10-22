<?php

namespace Teknomavi\Kargo\Exception;

class InvalidProvider extends \Exception
{
    /**
     * @var string
     */
    protected $providerName;
    /**
     * @var
     */
    protected $providerType;

    /**
     * @return string
     */
    public function getProviderName(): string
    {
        return $this->providerName;
    }

    /**
     * @param string $providerName
     */
    public function setProviderName(string $providerName)
    {
        $this->providerName = $providerName;
    }
}
