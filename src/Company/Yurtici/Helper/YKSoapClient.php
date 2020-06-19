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
    public static function createShipment(
        $cargoKey,
        $invoiceKey, 
        $receiverCustName, 
        $receiverAddress, 
        $cityName, 
        $townName, 
        $receiverPhone1, 
        $receiverPhone2 = "", 
        $receiverPhone3 = "",
        $emailAddress ="",
        $taxOfficeId = "",
        $taxNumber = "",
        $taxOfficeName = "", // Daha sonra kargo sayisi ile de ilgilenilebilir 
        $cargoCount = 1
        ){
        $credentials = array("wsUserName" => self::$username, "wsPassword" => self::$password, "userLanguage" => self::$language );
        $params = array(
            "cargoKey" => $cargoKey,
            "invoiceKey" => $invoiceKey,
            "receiverCustName" => $receiverCustName,
            "receiverAddress" => $receiverAddress,
            "cityName" => $cityName,
            "townName" => $townName,
            "receiverPhone1" => $receiverPhone1,
            "receiverPhone2" => $receiverPhone2,
            "receiverPhone3" => $receiverPhone3,
            "emailAddress" => $emailAddress,
            "taxOfficeId" => $taxOfficeId,
            "taxNumber" => $taxNumber,
            "taxOfficeName" => $taxOfficeName,
            'cargoCount'=>  $cargoCount,
            'waybillNo'=>"",
            'specialField1'=>"",
            'specialField2'=>"",
            'specialField3'=>"",
            'ttInvoiceAmount'=>"",
            'ttDocumentId'=>'',
            'ttCollectionType'=>"",
            'ttDocumentSaveType'=>"",
            'dcSelectedCredit'=>"",
            'dcCreditRule'=>'',
            'description'=>"",
            'orgGeoCode'=>"",
            'privilegeOrder'=>"",
            'custProdId'=>"",
            'orgReceiverCustId'=>"",
            );
        $body = array("ShippingOrderVO" => $params);
        $data = array_merge($credentials, $body);
        $_sclient = new \SoapClient("http://webservices.yurticikargo.com:8080/KOPSWebServices/ShippingOrderDispatcherServices?wsdl");                
        return $_sclient->createShipment($data);
    }
}