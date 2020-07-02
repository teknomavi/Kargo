<?php

namespace Teknomavi\Kargo\Company\Yurtici;


use Teknomavi\Kargo\Company\Yurtici\Helper\YKSoapClient;
use Teknomavi\Kargo\Company\ServiceAbstract;
use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Company\Yurtici\Helper\ShipmentInfo;
use Teknomavi\Kargo\Exception\InvalidParameterValue;
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
    protected $statusMapping = [
        "0" => ShipmentStatus::STATUS_NOT_PROCESSED,
        "1" => ShipmentStatus::STATUS_ON_DISTRIBUTION,
        "2" => ShipmentStatus::STATUS_PACKAGE_SCANNED,
        "3" => ShipmentStatus::STATUS_EXCEPTION,
        "4" => ShipmentStatus::STATUS_RETURN_BACK,
        "5" => ShipmentStatus::STATUS_DELIVERED,
    ];

    function __construct($options)
    {
        $this->YKClient = new YKSoapClient($options);
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
            } else if (property_exists($res->ShippingOrderResultVO, 'errCode')) {
                $response->setErrorCode($res->ShippingOrderResultVO->errCode);
                $response->setErrorDescription($res->ShippingOrderResultVO->outResult);
                $response->setSuccess(false);
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
        $ok = $this->isErrorMessage($res, $packageInfo);
        if ($ok) {
            return $packageInfo;
        }
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
        $this->addTrackingNumber($res, $packageInfo);

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
        $ok = $this->isErrorMessage($res, $shipmentStatus);
        if ($ok) {
            return $shipmentStatus;
        }
        // set the status code
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO, 'operationCode')) {
            $opCode = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->operationCode;
            $opMsg = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->operationMessage;
            $shipmentStatus->setStatusDetails($opMsg);
            $shipmentStatus->setOriginalStatus($opCode);
            try {
                $shipmentStatus->setStatusCode($this->mapStatus($opCode));
            } catch (InvalidParameterValue $a) {
                $shipmentStatus->setStatusCode(ShipmentStatus::STATUS_EXCEPTION);
            }
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
        $this->addTrackingNumber($res, $shipmentStatus);

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
        if ($res->ShippingDeliveryVO->outResult != "Başarılı") {
            // error
            $packageInfo->setErrorMessage($res->ShippingDeliveryVO->outResult);
            $packageInfo->setErrorCode($res->ShippingDeliveryVO->errCode);
            return  true;
        }
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO, 'errCode')) {
            $packageInfo->setErrorCode($res->ShippingDeliveryVO->shippingDeliveryDetailVO->errCode);
            $packageInfo->setErrorMessage($res->ShippingDeliveryVO->shippingDeliveryDetailVO->errMessage);
            return  true;
        }
        // Then the cargo is successfull
        if ($res->ShippingDeliveryVO->shippingDeliveryDetailVO->operationCode == 0) {
            // Kargo islem gormemis eklenecek veri de yok
            return  false;
        }
        return  false;
    }

    /**
     * @param ShipmentStatus,PackageInfo $item
     */
    private function addTrackingNumber($res, $item)
    {
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO, 'trackingUrl')) {
            $trackingUrl = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->trackingUrl;
            $no = explode("code=", $trackingUrl)[1];
            $item->setTrackingNumber($no);
        }
    }
}
