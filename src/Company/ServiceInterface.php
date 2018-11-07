<?php

namespace Teknomavi\Kargo\Company;

use Teknomavi\Kargo\Response\PackageInfo;
use Teknomavi\Kargo\Response\ShipmentStatus;

interface ServiceInterface
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
     * @return ShipmentStatus
     */
    public function getShipmentStatusByTrackingNumber(string $trackingNumber): ShipmentStatus;

    /**
     * @param string $referenceNumber
     *
     * @return ShipmentStatus
     */
    public function getShipmentStatusByReferenceNumber(string $referenceNumber): ShipmentStatus;

    /**
     * @param string[] $list
     *
     * @return ShipmentStatus[]
     */
    public function getShipmentStatusByTrackingNumberList(array $list): array;

    /**
     * @param string[] $list
     *
     * @return ShipmentStatus[]
     */
    public function getShipmentStatusByReferenceNumberList(array $list): array;

    /**
     * @param \DateTime $date
     *
     * @return ShipmentStatus[]
     */
    public function getShipmentStatusByPickupDate(\DateTime $date): array;

    /**
     * @param \DateTime $date
     *
     * @return ShipmentStatus[]
     */
    public function getShipmentStatusByDeliveryDate(\DateTime $date): array;
}
