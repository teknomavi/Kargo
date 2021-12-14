<?php
namespace Teknomavi\Kargo\Company\Ptt\Helper\Shipment;

class CreateShipment extends \SoapClient
{
    /**
     * @var array The defined classes
     */
    private static $classmap = [
        'kabulEkle2'         => 'Teknomavi\\Kargo\\Company\\Ptt\\Helper\\Shipment\\GonderiyiKargoyaGonder',
    ];

    /**
     * @param array  $options A array of config values
     * @param string $wsdl    The wsdl file to use
     */
    public function __construct(array $options = [], $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        if (!$wsdl) {
            $wsdl = 'https://pttws.ptt.gov.tr/PttVeriYukleme/services/Sorgu?wsdl';
//            $wsdl = 'https://pttws.ptt.gov.tr/PttVeriYuklemeTest/services/Sorgu?wsdl';
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @param GonderiyiKargoyaGonder $parameters
     *
     * @return GonderiyiKargoyaGonderResponse
     */
    public function GonderiyiKargoyaGonder($parameters)
    {
        return $this->__soapCall('kabulEkle2', [$parameters]);
    }
}
