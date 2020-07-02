<?php

namespace Teknomavi\Kargo;

use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Exception\InvalidProvider;

class CargoFactory
{
    const PROVIDER_ARAS = 'Aras';
    const PROVIDER_MNG = 'Mng';
    const PROVIDER_UPS = 'Ups';
    const PROVIDER_SURAT = 'Surat';
    const PROVIDER_YURTICI = 'Yurtici';

    /**
     * @param string $providerName
     * @param array  $options
     *
     * @throws InvalidProvider
     *
     * @return ServiceInterface
     */
    public static function initServiceProvider(string $providerName, array $options = []): ServiceInterface
    {
        /** @var ServiceInterface $provider */
        $provider = 'Teknomavi\\Kargo\\Company\\'.$providerName.'\\Service';
        if (!class_exists($provider)) {
            throw new InvalidProvider($providerName.' için kargo entegrasyonu bulunamadı');
        }

        return new $provider($options);
    }
}
