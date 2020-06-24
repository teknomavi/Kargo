<?php

namespace Teknomavi\Kargo\Response;

class ShipmentStatus
{
    const STATUS_NOT_FOUND = 'NotFound';
    const STATUS_PACKAGE_SCANNED = 'Scanned';
    const STATUS_DELIVERED = 'Delivered';
    const STATUS_EXCEPTION = 'Exception';
    const STATUS_ON_DISTRIBUTION = 'OnDistribution';
    const STATUS_ON_BRANCH = 'OnBranch';
    const STATUS_RETURN_BACK = 'ReturningBack';
    const STATUS_NOT_PROCESSED = 'NotProcessed';

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
    protected $statusCode;
    /**
     * @var string
     */
    protected $originalStatus;
    /**
     * @var string
     */
    protected $statusDetails;
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
    protected $updateTime;

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
     * @return ShipmentStatus
     */
    public function setTrackingNumber(string $trackingNumber): ShipmentStatus
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
     * @return ShipmentStatus
     */
    public function setReferenceNumber(string $referenceNumber): ShipmentStatus
    {
        $this->referenceNumber = trim($referenceNumber);
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode(): string
    {
        return $this->statusCode;
    }

    /**
     * @param string $statusCode
     *
     * @return ShipmentStatus
     */
    public function setStatusCode(string $statusCode): ShipmentStatus
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalStatus(): string
    {
        return $this->originalStatus;
    }

    /**
     * @param string $originalStatus
     *
     * @return ShipmentStatus
     */
    public function setOriginalStatus(string $originalStatus): ShipmentStatus
    {
        $this->originalStatus = trim($originalStatus);
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusDetails(): string
    {
        return $this->statusDetails;
    }

    /**
     * @param string $statusDetails
     *
     * @return ShipmentStatus
     */
    public function setStatusDetails(string $statusDetails): ShipmentStatus
    {
        $this->statusDetails = trim($statusDetails);
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
     * @return ShipmentStatus
     */
    public function setErrorCode(string $errorCode): ShipmentStatus
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
     * @return ShipmentStatus
     */
    public function setErrorMessage(string $errorMessage): ShipmentStatus
    {
        $this->errorMessage = trim($errorMessage);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime(): \DateTime
    {
        return $this->updateTime;
    }

    /**
     * @param \DateTime $updateTime
     *
     * @return ShipmentStatus
     */
    public function setUpdateTime(\DateTime $updateTime): ShipmentStatus
    {
        $this->updateTime = $updateTime;
        return $this;
    }
}
