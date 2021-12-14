<?php
namespace Teknomavi\Kargo\Company\Ptt\Helper\Track;

class QueryTrack extends \SoapClient
{
    /**
     * @var array The defined classes
     */
    private static $classmap = [
        'gonderiSorgu_referansNo'         => 'Teknomavi\\Kargo\\Company\\Ptt\\Helper\\Track\\GetTrack',
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
            $wsdl = 'https://pttws.ptt.gov.tr/GonderiTakipV2/services/Sorgu?wsdl';
//            $wsdl = 'https://pttws.ptt.gov.tr/GonderiTakipV2Test/services/Sorgu?wsdl';
        }

        parent::__construct($wsdl, $options);
    }

    public function QueryShipment($parameters)
    {
        return $this->__soapCall("gonderiSorgu_referansNo",[$parameters]);
    }
}
