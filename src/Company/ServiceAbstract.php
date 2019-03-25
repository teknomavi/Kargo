<?php

namespace Teknomavi\Kargo\Company;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Teknomavi\Kargo\Exception\InvalidParameterValue;
use Teknomavi\Kargo\Exception\MethodNotSupported;
use Teknomavi\Kargo\Model\Package;
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
    protected $statusMapping = [];
    /**
     * @var array
     */
    protected $packageTypeMapping = [];
    /**
     * @var array
     */
    protected $shipmentTypeMapping = [];
    /**
     * @var array
     */
    protected $paymentTypeMapping = [];
    /**
     * @var array
     */
    protected $packages = [];

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
        $resolver->setDefaults([
            'username' => '',
            'password' => '',
        ]);
    }

    abstract function sendPackages();

    abstract function addPackage(Package $package);

    /**
     * @param $originalStatus
     *
     * @return string
     * @throws InvalidParameterValue
     */
    public function mapStatus(string $originalStatus): string
    {
        if (!isset($this->statusMapping[$originalStatus])) {
            throw new InvalidParameterValue("Eşleştirilmemiş Durum Kodu: '{$originalStatus}'");
        }
        return $this->statusMapping[$originalStatus];
    }

    /**
     * @param $packageType
     *
     * @return string
     * @throws InvalidParameterValue
     */
    public function mapPackageType(string $packageType): string
    {
        if (!isset($this->packageTypeMapping[$packageType])) {
            throw new InvalidParameterValue("Eşleştirilmemiş Paket Tipi: '{$packageType}'");
        }
        return $this->packageTypeMapping[$packageType];
    }

    /**
     * @param $shipmentType
     *
     * @return string
     * @throws InvalidParameterValue
     */
    public function mapShipmentType(string $shipmentType): string
    {
        if (!isset($this->shipmentTypeMapping[$shipmentType])) {
            throw new InvalidParameterValue("Eşleştirilmemiş Gönderi Tipi: '{$shipmentType}'");
        }
        return $this->shipmentTypeMapping[$shipmentType];
    }

    /**
     * @param $paymentType
     *
     * @return string
     * @throws InvalidParameterValue
     */
    public function mapPaymentType(string $paymentType): string
    {
        if (!isset($this->paymentTypeMapping[$paymentType])) {
            throw new InvalidParameterValue("Eşleştirilmemiş Ödeme Tipi: '{$paymentType}'");
        }
        return $this->paymentTypeMapping[$paymentType];
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

    protected function shipmentStatusNotFound()
    {
        $shipmentStatus = new ShipmentStatus();
        $shipmentStatus->setStatusCode(ShipmentStatus::STATUS_NOT_FOUND)
            ->setStatusDetails('Not Found')
            ->setOriginalStatus(0);
        return $shipmentStatus;
    }
}
