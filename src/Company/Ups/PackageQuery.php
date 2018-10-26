<?php

namespace Teknomavi\Kargo\Company\Ups;

use Teknomavi\Kargo\Company\PackageQueryAbstract;
use Teknomavi\Kargo\Company\PackageQueryInterface;
use Teknomavi\Kargo\Response\PackageInfo;
use Teknomavi\Kargo\Response\PackageStatus;

class PackageQuery extends PackageQueryAbstract implements PackageQueryInterface
{
    /**
     * @param string $trackingNumber
     *
     * @return PackageInfo
     */
    public function getPackageInfoByTrackingNumber(string $trackingNumber): PackageInfo
    {
        return new PackageInfo();
    }

    /**
     * @param string $trackingNumber
     *
     * @return PackageInfo
     */
    public function getPackageInfoByReferenceNumber(string $trackingNumber): PackageInfo
    {
        return new PackageInfo();
    }

    /**
     * @param string $trackingNumber
     *
     * @return PackageStatus
     */
    public function getPackageStatusByTrackingNumber(string $trackingNumber): PackageStatus
    {

        return new PackageStatus();
    }

    /**
     * @param string $referenceNumber
     *
     * @return PackageStatus
     */
    public function getPackageStatusByReferenceNumber(string $referenceNumber): PackageStatus
    {
        return new PackageStatus();
    }

    /**
     * @param string[] $list
     *
     * @return PackageStatus[]
     */
    public function getPackageStatusesByTrackingNumberList(array $list): array
    {
        return [];
    }

    /**
     * @param string[] $list
     *
     * @return PackageStatus[]
     */
    public function getPackageStatusesByReferenceNumberList(array $list): array
    {
        return [];
    }

    /**
     * @param \DateTime $date
     *
     * @return PackageStatus[]
     */
    public function getPackageStatusByPickupDate(\DateTime $date): array
    {
        return [];
    }

    /**
     * @param \DateTime $date
     *
     * @return PackageStatus[]
     */
    public function getPackageStatusByDeliveryDate(\DateTime $date): array
    {
        return [];
    }
}
