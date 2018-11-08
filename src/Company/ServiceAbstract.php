<?php

namespace Teknomavi\Kargo\Company;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Teknomavi\Kargo\Exception\MethodNotSupported;
use Teknomavi\Kargo\Exception\UndefinedStatusCode;
use Teknomavi\Kargo\Response\PackageInfo;
use Teknomavi\Kargo\Response\ShipmentStatus;

abstract class ServiceAbstract
{
    /**
     * @var array
     */
    protected $options;
    /**
     * @var array
     */
    protected $statusMap = [];

    public function __construct(array $options = [])
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $this->options = $resolver->resolve($options);
    }

    /**
     * @param OptionsResolver $resolver
     */
    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'username' => '',
            'password' => '',
        ));
    }

    /**
     * @param $originalStatus
     *
     * @return mixed
     * @throws UndefinedStatusCode
     */
    public function mapStatus(string $originalStatus): string
    {
        if (!isset($this->statusMap[$originalStatus])) {
            throw new UndefinedStatusCode("Durum kodu '{$originalStatus}' eşleştirilmemiş.");
        }
        return $this->statusMap[$originalStatus];
    }

    /*
     * Courier
     */
    /*
     * Package Management
     */
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
     * @param string $referenceNumber
     *
     * @return PackageInfo
     * @throws MethodNotSupported
     */
    public function getPackageInfoByReferenceNumber(string $referenceNumber): PackageInfo
    {
        throw new MethodNotSupported();
    }

    /*
     * Shipment Status
     */
    /**
     * @param string $trackingNumber
     *
     * @return ShipmentStatus
     * @throws MethodNotSupported
     */
    public function getShipmentStatusByTrackingNumber(string $trackingNumber): ShipmentStatus
    {
        throw new MethodNotSupported();
    }

    /**
     * @param string $referenceNumber
     *
     * @return ShipmentStatus
     * @throws MethodNotSupported
     */
    public function getShipmentStatusByReferenceNumber(string $referenceNumber): ShipmentStatus
    {
        throw new MethodNotSupported();
    }

    /**
     * @param string[] $list
     *
     * @return ShipmentStatus[]
     * @throws MethodNotSupported
     */
    public function getShipmentStatusByTrackingNumberList(array $list): array
    {
        throw new MethodNotSupported();
    }

    /**
     * @param string[] $list
     *
     * @return ShipmentStatus[]
     * @throws MethodNotSupported
     */
    public function getShipmentStatusByReferenceNumberList(array $list): array
    {
        throw new MethodNotSupported();
    }

    /**
     * @param \DateTime $date
     *
     * @return ShipmentStatus[]
     * @throws MethodNotSupported
     */
    public function getShipmentStatusByPickupDate(\DateTime $date): array
    {
        throw new MethodNotSupported();
    }

    /**
     * @param \DateTime $date
     *
     * @return ShipmentStatus[]
     * @throws MethodNotSupported
     */
    public function getShipmentStatusByDeliveryDate(\DateTime $date): array
    {
        throw new MethodNotSupported();
    }
}
