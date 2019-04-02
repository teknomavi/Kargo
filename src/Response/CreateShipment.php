<?php

namespace Teknomavi\Kargo\Response;


/**
 * Class CreateShipment
 * @package Teknomavi\Kargo\Response
 */
class CreateShipment
{

    /**
     * @var bool
     */
    protected $success = false;
    /**
     * @var string
     */
    protected $errorCode;
    /**
     * @var string
     */
    protected $errorDescription;
    /**
     * @var string
     */
    protected $trackingNumber;
    /**
     * @var string
     */
    protected $referenceNumber;
    /**
     * @var string[]
     */
    protected $labelLinks = [];
    /**
     * @var string[]
     */
    protected $labelStrings = [];

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     *
     * @return CreateShipment
     */
    public function setSuccess(bool $success): CreateShipment
    {
        $this->success = $success;
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
     * @return CreateShipment
     */
    public function setErrorCode(string $errorCode): CreateShipment
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorDescription(): string
    {
        return $this->errorDescription;
    }

    /**
     * @param string $errorDescription
     *
     * @return CreateShipment
     */
    public function setErrorDescription(string $errorDescription): CreateShipment
    {
        $this->errorDescription = $errorDescription;
        return $this;
    }

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
     * @return CreateShipment
     */
    public function setTrackingNumber(string $trackingNumber): CreateShipment
    {
        $this->trackingNumber = $trackingNumber;
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
     * @return CreateShipment
     */
    public function setReferenceNumber(string $referenceNumber): CreateShipment
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabelLinks(): array
    {
        return $this->labelLinks;
    }

    /**
     * @param string[] $labelLinks
     *
     * @return CreateShipment
     */
    public function setLabelLinks(array $labelLinks): CreateShipment
    {
        $this->labelLinks = $labelLinks;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabelStrings(): array
    {
        return $this->labelStrings;
    }

    /**
     * @param string[] $labelStrings
     *
     * @return CreateShipment
     */
    public function setLabelStrings(array $labelStrings): CreateShipment
    {
        $this->labelStrings = $labelStrings;
        return $this;
    }


}
