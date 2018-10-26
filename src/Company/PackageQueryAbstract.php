<?php

namespace Teknomavi\Kargo\Company;

use Teknomavi\Kargo\Exception\MethodNotSupported;
use Teknomavi\Kargo\Response\PackageInfo;
use Teknomavi\Kargo\Response\PackageStatus;

abstract class PackageQueryAbstract extends ServiceAbstract
{
    /**
     * @param string $trackingNumber
     *
     * @return PackageInfo
     * @throws MethodNotSupported
     */
    public function getPackageInfoByTrackingNumber(string $trackingNumber): PackageInfo
    {
        throw new MethodNotSupported();
    }

    /**
     * @param string $trackingNumber
     *
     * @return PackageInfo
     * @throws MethodNotSupported
     */
    public function getPackageInfoByReferenceNumber(string $trackingNumber): PackageInfo
    {
        throw new MethodNotSupported();
    }

    /**
     * @param string $trackingNumber
     *
     * @return PackageStatus
     * @throws MethodNotSupported
     */
    public function getPackageStatusByTrackingNumber(string $trackingNumber): PackageStatus
    {
        throw new MethodNotSupported();
    }

    /**
     * @param string $referenceNumber
     *
     * @return PackageStatus
     * @throws MethodNotSupported
     */
    public function getPackageStatusByReferenceNumber(string $referenceNumber): PackageStatus
    {
        throw new MethodNotSupported();
    }

    /**
     * @param string[] $list
     *
     * @return PackageStatus[]
     * @throws MethodNotSupported
     */
    public function getPackageStatusesByTrackingNumberList(array $list): array
    {
        throw new MethodNotSupported();
    }

    /**
     * @param string[] $list
     *
     * @return PackageStatus[]
     * @throws MethodNotSupported
     */
    public function getPackageStatusesByReferenceNumberList(array $list): array
    {
        throw new MethodNotSupported();
    }

    /**
     * @param \DateTime $date
     *
     * @return PackageStatus[]
     * @throws MethodNotSupported
     */
    public function getPackageStatusByPickupDate(\DateTime $date): array
    {
        throw new MethodNotSupported();
    }

    /**
     * @param \DateTime $date
     *
     * @return PackageStatus[]
     * @throws MethodNotSupported
     */
    public function getPackageStatusByDeliveryDate(\DateTime $date): array
    {
        throw new MethodNotSupported();
    }
}
