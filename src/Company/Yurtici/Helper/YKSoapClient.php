<?php

namespace Teknomavi\Kargo\Company\Yurtici\Helper;

class YKSoapClient{

    private static $username = "";
    private static $password = "";
    private static $language = "TR";

    /**
     * @param string $params 
     * 
     * Gönderici Ödemeli, Normal Gönderi 
     */
    public static function createShipment($params){
        $credentials = array("wsUsername" => self::$username, "wsPassword" => self::$password, "userLanguage" => self::$language );
        $body = array("ShippingOrderVO" => $params);
        $data = array_merge($credentials, $body);
        $_sclient = new \SoapClient("http://webservices.yurticikargo.com:8080/KOPSWebServices/ShippingOrderDispatcherServices?wsdl");                
        return $_sclient->createShipment($data);
    }

}