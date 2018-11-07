<?php

namespace Teknomavi\Kargo;

use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Exception\InvalidProvider;

class CargoFactory
{
    /**
     * @param string $providerName
     * @param array  $options
     *
     * @return ServiceInterface
     * @throws InvalidProvider
     */
    public static function initServiceProvider(string $providerName, array $options = []): ServiceInterface
    {
        /** @var ServiceInterface $provider */
        $provider = 'Teknomavi\\Kargo\\Company\\' . $providerName . '\\Service';
        if (!class_exists($provider)) {
            throw new InvalidProvider($providerName . ' için kargo entegrasyonu bulunamadı');
        }
        return new $provider($options);
    }
}
