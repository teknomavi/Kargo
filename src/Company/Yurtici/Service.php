<?php

namespace Teknomavi\Kargo\Company\Yurtici;


use Teknomavi\Kargo\Company\Yurtici\Helper\YKSoapClient;
use Teknomavi\Kargo\Company\ServiceAbstract;
use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Company\Yurtici\Helper\ShipmentInfo;
use Teknomavi\Kargo\Response\CreateShipment;
use Teknomavi\Kargo\Model\Package;
use Teknomavi\Kargo\Response\PackageInfo;
use Teknomavi\Kargo\Response\ShipmentStatus;

/**
 * Class Service
 * @package Teknomavi\Kargo\Company\Yurtici
 */
class Service extends ServiceAbstract implements ServiceInterface
{
    private $YKClient;

    function __construct($options)
    {
        $this->YKClient = new YKSoapClient($options);
        $this->statusMapping = array(
            "0" => ShipmentStatus::STATUS_NOT_PROCESSED,
            "1" => ShipmentStatus::STATUS_ON_DISTRIBUTION,
            "2" => ShipmentStatus::STATUS_PACKAGE_SCANNED,
            "3" => ShipmentStatus::STATUS_EXCEPTION,
            "4" => ShipmentStatus::STATUS_RETURN_BACK,
            "5" => ShipmentStatus::STATUS_DELIVERED,
        );
    }

    public function sendPackages()
    {
        $responses = array();
        foreach ($this->packages as $package) {
            $package = ShipmentInfo::generatePackage($package);
            $res = $this->YKClient->createShipment(
                $package->getReferenceNo(),
                $package->getInvoiceNo(),
                $package->getConsigneeName(),
                $package->getConsigneeAddress(),
                $package->getConsigneeCity(),
                $package->getConsigneeTown(),
                $package->getConsigneeMobilPhone(),
                "",
                "",
                $package->getConsigneeEmail(),
                "",
                "",
                "",
                $package->getNumberOfPackages()
            );

            $response = new CreateShipment();
            if ($res->ShippingOrderResultVO->outFlag == 0) {
                $response = $response->setSuccess(true);
                $response->setReferenceNumber($res->ShippingOrderResultVO->shippingOrderDetailVO->cargoKey);
            } else {
                $response = $response->setSuccess(false);
                $response = $response->setErrorDescription($res->ShippingOrderResultVO->shippingOrderDetailVO->errMessage);
                $response = $response->setErrorCode($res->ShippingOrderResultVO->shippingOrderDetailVO->errCode);
            }
            $responses[$package->getReferenceNo()] = $response;
        }
        return $responses;
    }

    public function addPackage(Package $package)
    {
        $package = ShipmentInfo::generateFromPackage($package);
        array_push($this->packages, $package);
    }

    /**
     * @param string $referenceNumber
     *
     * @return PackageInfo
     */
    public function getPackageInfoByReferenceNumber(string $referenceNumber): PackageInfo
    {
        $packageInfo = new PackageInfo();
        $packageInfo->setReferenceNumber($referenceNumber);
        $packageInfo->setPaymentType(PackageInfo::PAYMENT_TYPE_SENDER);
        $res = $this->YKClient->queryShipment($referenceNumber);
        // 1st check if there is an error
        $statusArray = $this->isErrorMessage($res, $packageInfo);
        if ($statusArray[1]) {
            return $statusArray[0];
        }
        $packageInfo = $statusArray[0];
        if (!property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO, 'shippingDeliveryItemDetailVO')) {
            return $packageInfo;
        }
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO, 'totalPrice')) {
            // price
            $price = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->totalPrice;
            $packageInfo->setShipmentCost($price);
            $packageInfo->setShipmentCostCurrency("TRY");
        }
        // total Cargo
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO, 'totalCargo')) {
            // price
            $count = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->totalCargo;
            $packageInfo->setNumberOfPackages($count);
        }
        // Cargo Type
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO, 'cargoType')) {
            $cargoType = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->cargoType;
            $packageInfo->setPackageType(PackageInfo::PACKAGE_TYPE_ENVELOPE);
            if ($cargoType != 0)
                $packageInfo->setPackageType(PackageInfo::PACKAGE_TYPE_BOX);
        }

        return $packageInfo;
    }
    /**
     * @param string $referenceNumber
     *
     * @return ShipmentStatus
     */
    public function getShipmentStatusByReferenceNumber(string $referenceNumber): ShipmentStatus
    {
        $shipmentStatus = new ShipmentStatus();
        $shipmentStatus->setReferenceNumber($referenceNumber);
        $res = $this->YKClient->queryShipment($referenceNumber);
        $statusArray = $this->isErrorMessage($res, $shipmentStatus);
        if ($statusArray[1]) {
            return $statusArray[0];
        }
        $shipmentStatus = $statusArray[0];
        // set the status code
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO, 'operationCode')) {
            $opCode = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->operationCode;
            $opMsg = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->operationMessage;
            $shipmentStatus->setStatusDetails($opMsg);
            print($opMsg . "ABCD");
            $shipmentStatus->setOriginalStatus($opCode);
            $shipmentStatus->setStatusCode($this->mapStatus($opCode));
        }
        // makes sure there is such a field
        if (!property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO, 'shippingDeliveryItemDetailVO')) {
            return $shipmentStatus;
        }
        // Update Time from document Date and Document Time
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO, 'documentDate')) {
            $date = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->documentDate;
            $time = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->documentTime;
            $shipmentStatus->setUpdateTime(\DateTime::createFromFormat("YmdGis", $date . $time, new \DateTimeZone('Asia/Istanbul')));
        }

        return $shipmentStatus;
    }

    /**
     * @param string[] $list
     *
     * @return ShipmentStatus[]
     */
    public function getShipmentStatusByReferenceNumberList(array $list): array
    {
        $shipmentStatusList = array();
        foreach ($list as $value) {
            $shipmentStatus = $this->getShipmentStatusByReferenceNumber($value);
            $shipmentStatusList[] = $shipmentStatus;
        }
        return $shipmentStatusList;
    }


    /**
     * Takes the soap client response and processes it until TrackingNumber fullfilment
     * for both ShipmentStatis and PackageInfo types
     * 
     * @param object $res takes the soap client response as $res
     * @param ShipmentStatus,PackageInfo $package it takes ShipmentStatus
     * or PackageInfo as parameter
     * @return array 
     * the first index is the processed item
     * the second index is a flag for package to be processed more
     */
    private function isErrorMessage($res, $packageInfo)
    {
        print("AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA");
        print_r($res);
        if ($res->ShippingDeliveryVO->outResult != "Başarılı") {
            // error
            $packageInfo->setErrorMessage($res->ShippingDeliveryVO->outResult);
            $packageInfo->setErrorCode($res->ShippingDeliveryVO->errCode);
            return [$packageInfo, true];
        }

        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO, 'errCode')) {
            $packageInfo->setErrorCode($res->ShippingDeliveryVO->shippingDeliveryDetailVO->errCode);
            $packageInfo->setErrorMessage($res->ShippingDeliveryVO->shippingDeliveryDetailVO->errMessage);
            return [$packageInfo, true];
        }
        // Then the cargo is successfull
        if ($res->ShippingDeliveryVO->shippingDeliveryDetailVO->operationCode == 0) {
            // Kargo islem gormemis eklenecek veri de yok
            return [$packageInfo, false];
        }
        // now that we have checked for errors, we can carry on filling the $shipmentStatus
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO, 'trackingUrl')) {
            $trackingUrl = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->trackingUrl;
            $no = explode("code=", $trackingUrl)[1];
            return [$packageInfo->setTrackingNumber($no), false];
        }
        return [$packageInfo, false];
    }

    // Overriding the original meth
    // it is done to not bother with try-catch loop
    // 'cause the parent method was throwing an error 
    public function mapStatus(string $originalStatus): string
    {
        if (!isset($this->statusMapping[$originalStatus])) {
            return ShipmentStatus::STATUS_NOT_FOUND;
        }
        return $this->statusMapping[$originalStatus];
    }
}
