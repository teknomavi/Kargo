<?php
namespace Teknomavi\Kargo\Company\Yurtici;


use Teknomavi\Kargo\Company\Yurtici\Helper\YKSoapClient;
use Teknomavi\Kargo\Company\ServiceAbstract;
use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Response\CreateShipment;
use Teknomavi\Kargo\Model\Package;
/**
 * Class Service
 * @package Teknomavi\Kargo\Company\Yurtici
 */
class Service extends ServiceAbstract implements ServiceInterface
{
    private $packageToBeSend;
    private $YKClient;

    function __construct($options) {
        $this->YKClient = new YKSoapClient($options);
        $this->packageList = array();
    }

    public function sendPackages(){
        $package = $this->packageToBeSend; // will be converted to for loop
        $res = $this->YKClient->createShipment(
            $package->getReferenceNo(),
            $package->getInvoiceNo(),
            $package->getConsigneeName(),    //Consigliere to Michael: 
            $package->getConsigneeAddress(), // Even the shooting of your father
            $package->getConsigneeCity(),    // was business, not personal. 
            $package->getConsigneeTown(),    // You should know that by now
            $package->getConsigneeMobilPhone(),
            "","",
            $package->getConsigneeEmail(),
            "","","",
            $package->getNumberOfPackages()
        );
        //print_r($res);
        $response = new CreateShipment();
        if($res->ShippingOrderResultVO->outFlag == 0){
            $response = $response->setSuccess(true);
            $response->setReferenceNumber($res->cargoKey);
        }
        else{
            $response = $response->setSuccess(false);
            $response = $response->setErrorDescription($res->ShippingOrderResultVO->shippingOrderDetailVO->errMessage);
            $response = $response->setErrorCode($res->ShippingOrderResultVO->shippingOrderDetailVO->errCode);
        }
        return $response;
    }
    
    public function addPackage(Package $package)
    {
        $this->packageToBeSend = $package;
    }

}