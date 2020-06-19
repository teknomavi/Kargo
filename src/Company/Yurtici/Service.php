<?php
namespace Teknomavi\Kargo\Company\Yurtici;


use Teknomavi\Kargo\Company\Yurtici\Helper\YKSoapClient;
use Teknomavi\Kargo\Company\ServiceAbstract;
use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Response\CreateShipment;
/**
 * Class Service
 * @package Teknomavi\Kargo\Company\Yurtici
 */
class Service extends ServiceAbstract implements ServiceInterface
{
    private $shipmentService;

    function __construct() {
        $shipmentService = new YKSoapClient();
    }

    public function sendPackages(){
        $res = YKSoapClient::createShipment("TEST");
        print_r($res);
        $response = new CreateShipment();
        return $response;
    }
    
    public function addPackage(\Teknomavi\Kargo\Model\Package $package)
    {
        
    }

}