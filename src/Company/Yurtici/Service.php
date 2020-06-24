<?php

namespace Teknomavi\Kargo\Company\Yurtici;


use Teknomavi\Kargo\Company\Yurtici\Helper\YKSoapClient;
use Teknomavi\Kargo\Company\ServiceAbstract;
use Teknomavi\Kargo\Company\ServiceInterface;
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
    }

    public function sendPackages()
    {
        $responses = array();
        foreach ($this->packages as $package) {
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
        $res = $this->YKClient->querryShipment($referenceNumber);
        // 1st check if outResult == "Basarili"
        print_r($res);
        if ($res->ShippingDeliveryVO->outResult != "Başarılı") {
            // error
            $packageInfo->setErrorMessage($res->ShippingDeliveryVO->outResult);
            $packageInfo->setErrorCode($res->ShippingDeliveryVO->errCode);
            return $packageInfo;
        }

        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO, 'errCode')) {
            $packageInfo->setErrorCode($res->ShippingDeliveryVO->shippingDeliveryDetailVO->errCode);
            $packageInfo->setErrorMessage($res->ShippingDeliveryVO->shippingDeliveryDetailVO->errMessage);
            return $packageInfo;
        }
        // Then the cargo is successfull
        if ($res->ShippingDeliveryVO->shippingDeliveryDetailVO->operationCode == 0) {
            // Kargo islem gormemis eklenecek veri de yok
            return $packageInfo;
        }
        // after this check if fields exist then fill the respective area at PackageInfo if it exists
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO, 'trackingUrl')) {
            $trackingUrl = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->trackingUrl;
            $no = explode("code=", $trackingUrl)[1];
            $packageInfo->setTrackingNumber($no);
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
        $res = $this->YKClient->querryShipment($referenceNumber);
        print_r($res);
        if ($res->ShippingDeliveryVO->outResult != "Başarılı") {
            // error
            $shipmentStatus->setErrorMessage($res->ShippingDeliveryVO->outResult);
            $shipmentStatus->setErrorCode($res->ShippingDeliveryVO->errCode);
            return $shipmentStatus;
        }
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO, 'errCode')) {
            $shipmentStatus->setErrorCode($res->ShippingDeliveryVO->shippingDeliveryDetailVO->errCode);
            $shipmentStatus->setErrorMessage($res->ShippingDeliveryVO->shippingDeliveryDetailVO->errMessage);
            return $shipmentStatus;
        }
        // now that we have checked for errors, we can carry on filling the $shipmentStatus
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO, 'trackingUrl')) {
            $trackingUrl = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->trackingUrl;
            $no = explode("code=", $trackingUrl)[1];
            $shipmentStatus->setTrackingNumber($no);
        }
        // Update Time from document Date and Document Time
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO, 'documentDate')) {
            $date = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->documentDate;
            $time = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->shippingDeliveryItemDetailVO->documentTime;
            $shipmentStatus->setUpdateTime(\DateTime::createFromFormat("YmdGis", $date . $time, new \DateTimeZone('Asia/Istanbul')));
        }
        // set the status code
        if (property_exists($res->ShippingDeliveryVO->shippingDeliveryDetailVO, 'operationCode')) {
            $opCode = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->operationCode;
            $opMsg = $res->ShippingDeliveryVO->shippingDeliveryDetailVO->operationMessage;
            $shipmentStatus->setStatusDetails($opMsg);
            $shipmentStatus->setOriginalStatus($opCode);
            switch ($opCode) {
                case '0':
                    $shipmentStatus->setStatusCode(ShipmentStatus::STATUS_NOT_PROCESSED);
                    break;
                case '1':
                    $shipmentStatus->setStatusCode(ShipmentStatus::STATUS_ON_DISTRIBUTION);
                    break;
                case '2':
                    $shipmentStatus->setStatusCode(ShipmentStatus::STATUS_PACKAGE_SCANNED);
                    break;
                case '3':
                    $shipmentStatus->setStatusCode(ShipmentStatus::STATUS_EXCEPTION);
                    break;
                case '4':
                    $shipmentStatus->setStatusCode(ShipmentStatus::STATUS_RETURN_BACK);
                    break;
                case '5':
                    $shipmentStatus->setStatusCode(ShipmentStatus::STATUS_DELIVERED);
                    break;
                default:
                    $shipmentStatus->setStatusCode(ShipmentStatus::STATUS_NOT_FOUND);
                    $shipmentStatus->setStatusDetails("Operation Code Alani YK API dönütünde belirtilmemiş");
                    break;
            }
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
}
