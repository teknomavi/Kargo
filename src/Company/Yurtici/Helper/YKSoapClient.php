<?php
namespace Teknomavi\Kargo\Company\Yurtici\Helper;

class YKSoapClient
{
    private $username = '';
    private $password = '';
    private $url = 'http://webservices.yurticikargo.com:8080/KOPSWebServices/ShippingOrderDispatcherServices?wsdl';
    private static $language = 'TR';

    public function __construct($options)
    {
        $this->username = $options['username'];
        $this->password = $options['password'];
        if(!empty($options['url'])){
            $this->url = $options['url'];
        }
    }

    /**
     * @param string $params
     *
     * Gönderici Ödemeli, Normal Gönderi
     */
    public function createShipment(
        $cargoKey,
        $invoiceKey,
        $receiverCustName,
        $receiverAddress,
        $cityName,
        $townName,
        $receiverPhone1,
        $receiverPhone2 = '',
        $receiverPhone3 = '',
        $emailAddress = '',
        $taxOfficeId = '',
        $taxNumber = '',
        $taxOfficeName = '', // Daha sonra kargo sayisi ile de ilgilenilebilir
        $cargoCount = 1
    ) {
        $credentials = ['wsUserName' => $this->username, 'wsPassword' => $this->password, 'userLanguage' => self::$language];
        $params = [
            'cargoKey'           => $cargoKey,
            'invoiceKey'         => $invoiceKey,
            'receiverCustName'   => $receiverCustName,
            'receiverAddress'    => $receiverAddress,
            'cityName'           => $cityName,
            'townName'           => $townName,
            'receiverPhone1'     => $receiverPhone1,
            'receiverPhone2'     => $receiverPhone2,
            'receiverPhone3'     => $receiverPhone3,
            'emailAddress'       => $emailAddress,
            'taxOfficeId'        => $taxOfficeId,
            'taxNumber'          => $taxNumber,
            'taxOfficeName'      => $taxOfficeName,
            'cargoCount'         => $cargoCount,
            'waybillNo'          => '',
            'specialField1'      => '',
            'specialField2'      => '',
            'specialField3'      => '',
            'ttInvoiceAmount'    => '',
            'ttDocumentId'       => '',
            'ttCollectionType'   => '',
            'ttDocumentSaveType' => '',
            'dcSelectedCredit'   => '',
            'dcCreditRule'       => '',
            'description'        => '',
            'orgGeoCode'         => '',
            'privilegeOrder'     => '',
            'custProdId'         => '',
            'orgReceiverCustId'  => '',
        ];
        $body = ['ShippingOrderVO' => $params];
        $data = array_merge($credentials, $body);
        $_sclient = new \SoapClient($this->url);

        return $_sclient->createShipment($data);
    }

    public function queryShipment($cargoKey)
    {
        $params = [
            'wsUserName'        => $this->username,
            'wsPassword'        => $this->password,
            'wsLanguage'        => self::$language,
            'keys'              => $cargoKey,
            'keyType'           => 0, // Fatura/Irsaliye anahtari ile de gonderilebilir fakat referans numarasi baz alindi
            'addHistoricalData' => false,
            'onlyTracking'      => false,
        ];
        $_sclient = new \SoapClient($this->url);

        return $_sclient->queryShipment($params);
    }
}
