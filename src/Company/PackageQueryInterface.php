<?php

namespace Teknomavi\Kargo\Company;

use Teknomavi\Kargo\Response\PackageInfo;
use Teknomavi\Kargo\Response\PackageStatus;

interface PackageQueryInterface
{
    /**
     * @param string $trackingNumber
     *
     * @return PackageInfo
     */
    public function getPackageInfoByTrackingNumber(string $trackingNumber): PackageInfo;

    /**
     * @param string $referenceNumber
     *
     * @return PackageInfo
     */
    public function getPackageInfoByReferenceNumber(string $referenceNumber): PackageInfo;

    /**
     * @param string $trackingNumber
     *
     * @return PackageStatus
     */
    public function getPackageStatusByTrackingNumber(string $trackingNumber): PackageStatus;

    /**
     * @param string $referenceNumber
     *
     * @return PackageStatus
     */
    public function getPackageStatusByReferenceNumber(string $referenceNumber): PackageStatus;

    /**
     * @param string[] $list
     *
     * @return PackageStatus[]
     */
    public function getPackageStatusesByTrackingNumberList(array $list): array;

    /**
     * @param string[] $list
     *
     * @return PackageStatus[]
     */
    public function getPackageStatusesByReferenceNumberList(array $list): array;

    /**
     * @param \DateTime $date
     *
     * @return PackageStatus[]
     */
    public function getPackageStatusByPickupDate(\DateTime $date): array;

    /**
     * @param \DateTime $date
     *
     * @return PackageStatus[]
     */
    public function getPackageStatusByDeliveryDate(\DateTime $date): array;
}
