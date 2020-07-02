<?php

namespace Teknomavi\Kargo\Response;

use Teknomavi\Kargo\Exception\InvalidParameterValue;

class PackageInfo
{
    const PACKAGE_TYPE_BOX = 'Box';
    const PACKAGE_TYPE_ENVELOPE = 'Envelope';
    const SHIPMENT_TYPE_NORMAL = 'Normal';
    const SHIPMENT_TYPE_EXPRESS = 'Express';
    const PAYMENT_TYPE_SENDER = 'Sender';
    const PAYMENT_TYPE_RECIPIENT = 'Recipient';
    const PAYMENT_TYPE_3RD_PARTY = '3rdParty';
    /**
     * @var string
     */
    protected $trackingNumber;
    /**
     * @var string
     */
    protected $referenceNumber;
    /**
     * @var string
     */
    protected $packageType;
    /**
     * @var string
     */
    protected $shipmentType;
    /**
     * @var int
     */
    protected $numberOfPackages;
    /**
     * @var float
     */
    protected $weight;
    /**
     * @var float
     */
    protected $desi;
    /**
     * @var string
     */
    protected $paymentType;
    /**
     * @var float
     */
    protected $shipmentCost;
    /**
     * @var string
     */
    protected $shipmentCostCurrency;
    /**
     * @var float
     */
    protected $insuranceValue = 0;
    /**
     * @var string
     */
    protected $insuranceValueCurrency;
    /**
     * @var float
     */
    protected $valueOfGoods = 0;
    /**
     * @var string
     */
    protected $valueOfGoodsCurrency;
    /**
     * @var string
     */
    protected $errorCode;
    /**
     * @var string
     */
    protected $errorMessage;
    /**
     * @var \DateTime
     */
    protected $createTime;

    /**
     * @return string
     */
    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     *
     * @return PackageInfo
     */
    public function setTrackingNumber(string $trackingNumber): self
    {
        $this->trackingNumber = trim($trackingNumber);

        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }

    /**
     * @param string $referenceNumber
     *
     * @return PackageInfo
     */
    public function setReferenceNumber(string $referenceNumber): self
    {
        $this->referenceNumber = trim($referenceNumber);

        return $this;
    }

    /**
     * @return string
     */
    public function getPackageType(): string
    {
        return $this->packageType;
    }

    /**
     * @param string $packageType
     *
     * @throws InvalidParameterValue
     *
     * @return PackageInfo
     */
    public function setPackageType(string $packageType): self
    {
        if (!in_array($packageType, [self::PACKAGE_TYPE_BOX, self::PACKAGE_TYPE_ENVELOPE])) {
            throw new InvalidParameterValue('Package Type parametresi '
                .implode(',', [self::PACKAGE_TYPE_BOX, self::PACKAGE_TYPE_ENVELOPE])
                ." değerlerini alabilir. '$packageType' geldi.");
        }
        $this->packageType = $packageType;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentType(): string
    {
        return $this->shipmentType;
    }

    /**
     * @param string $shipmentType
     *
     * @throws InvalidParameterValue
     *
     * @return PackageInfo
     */
    public function setShipmentType(string $shipmentType): self
    {
        if (!in_array($shipmentType, [self::SHIPMENT_TYPE_NORMAL, self::SHIPMENT_TYPE_EXPRESS])) {
            throw new InvalidParameterValue('Shipment Type parametresi '
                .implode(',', [self::SHIPMENT_TYPE_NORMAL, self::SHIPMENT_TYPE_EXPRESS])
                ." değerlerini alabilir. '$shipmentType' geldi.");
        }
        $this->shipmentType = $shipmentType;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPackages(): int
    {
        return $this->numberOfPackages;
    }

    /**
     * @param int $numberOfPackages
     *
     * @return PackageInfo
     */
    public function setNumberOfPackages(int $numberOfPackages): self
    {
        $this->numberOfPackages = intval($numberOfPackages);

        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return PackageInfo
     */
    public function setWeight(float $weight): self
    {
        $this->weight = round(floatval($weight), 3);

        return $this;
    }

    /**
     * @return float
     */
    public function getDesi(): float
    {
        return $this->desi;
    }

    /**
     * @param float $desi
     *
     * @return PackageInfo
     */
    public function setDesi(float $desi): self
    {
        $this->desi = round(floatval($desi), 3);

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    /**
     * @param string $paymentType
     *
     * @throws InvalidParameterValue
     *
     * @return PackageInfo
     */
    public function setPaymentType(string $paymentType): self
    {
        if (!in_array($paymentType, [self::PAYMENT_TYPE_SENDER, self::PAYMENT_TYPE_RECIPIENT, self::PAYMENT_TYPE_3RD_PARTY])) {
            throw new InvalidParameterValue('Payment Type parametresi '
                .implode(',', [self::PAYMENT_TYPE_SENDER, self::PAYMENT_TYPE_RECIPIENT, self::PAYMENT_TYPE_3RD_PARTY])
                ." değerlerini alabilir. '$paymentType' geldi.");
        }
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * @return float
     */
    public function getShipmentCost(): float
    {
        return $this->shipmentCost;
    }

    /**
     * @param float $shipmentCost
     *
     * @return PackageInfo
     */
    public function setShipmentCost(float $shipmentCost): self
    {
        $this->shipmentCost = round(floatval($shipmentCost), 2);

        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentCostCurrency(): string
    {
        return $this->shipmentCostCurrency;
    }

    /**
     * @param string $shipmentCostCurrency
     *
     * @return PackageInfo
     */
    public function setShipmentCostCurrency(string $shipmentCostCurrency): self
    {
        $this->shipmentCostCurrency = trim($shipmentCostCurrency);

        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceValue(): float
    {
        return $this->insuranceValue;
    }

    /**
     * @param float $insuranceValue
     *
     * @return PackageInfo
     */
    public function setInsuranceValue(float $insuranceValue): self
    {
        $this->insuranceValue = round(floatval($insuranceValue), 2);

        return $this;
    }

    /**
     * @return string
     */
    public function getInsuranceValueCurrency(): string
    {
        return $this->insuranceValueCurrency;
    }

    /**
     * @param string $insuranceValueCurrency
     *
     * @return PackageInfo
     */
    public function setInsuranceValueCurrency(string $insuranceValueCurrency): self
    {
        $this->insuranceValueCurrency = $insuranceValueCurrency;

        return $this;
    }

    /**
     * @return float
     */
    public function getValueOfGoods(): float
    {
        return $this->valueOfGoods;
    }

    /**
     * @param float $valueOfGoods
     *
     * @return PackageInfo
     */
    public function setValueOfGoods(float $valueOfGoods): self
    {
        $this->valueOfGoods = round(floatval($valueOfGoods), 2);

        return $this;
    }

    /**
     * @return string
     */
    public function getValueOfGoodsCurrency(): string
    {
        return $this->valueOfGoodsCurrency;
    }

    /**
     * @param string $valueOfGoodsCurrency
     *
     * @return PackageInfo
     */
    public function setValueOfGoodsCurrency(string $valueOfGoodsCurrency): self
    {
        $this->valueOfGoodsCurrency = $valueOfGoodsCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     *
     * @return PackageInfo
     */
    public function setErrorCode(string $errorCode): self
    {
        $this->errorCode = trim($errorCode);

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     *
     * @return PackageInfo
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = trim($errorMessage);

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateTime(): \DateTime
    {
        return $this->createTime;
    }

    /**
     * @param \DateTime $createTime
     *
     * @return PackageInfo
     */
    public function setCreateTime(\DateTime $createTime): self
    {
        $this->createTime = $createTime;

        return $this;
    }
}
