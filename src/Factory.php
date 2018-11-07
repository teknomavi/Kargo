<?php

namespace Teknomavi\Kargo;

use Teknomavi\Kargo\Company\CreateShipmentInterface;
use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Exception\InvalidProvider;

class Factory
{
    /**
     * @param string $providerName
     * @param array  $options
     *
     * @return CreateShipmentInterface
     * @throws InvalidProvider
     */
    public static function initCreateShipmentService(string $providerName, array $options = []): CreateShipmentInterface
    {
        /** @var CreateShipmentInterface $provider */
        $provider = 'Teknomavi\\Kargo\\Company\\' . $providerName . '\\CreateShipment';
        if (!class_exists($provider)) {
            throw new InvalidProvider($providerName . ' isimli kargo firması için Kargo Gönderim Servisi bulunamadı');
        }
        return new $provider($options);
    }

    /**
     * @param string $providerName
     * @param array  $options
     *
     * @return ServiceInterface
     * @throws InvalidProvider
     */
    public static function initPackageQueryService(string $providerName, array $options = []): ServiceInterface
    {
        /** @var ServiceInterface $provider */
        $provider = 'Teknomavi\\Kargo\\Company\\' . $providerName . '\\PackageQuery';
        if (!class_exists($provider)) {
            throw new InvalidProvider($providerName . ' isimli kargo firması için Paket Sorgulama Servisi bulunamadı');
        }
        return new $provider($options);
    }
}
