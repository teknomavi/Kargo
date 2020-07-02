<?php

namespace Teknomavi\Kargo\Company\Surat\Helper\Gonderi;

class CreateShipment extends \SoapClient
{
    /**
     * @var array The defined classes
     */
    private static $classmap = [
        'GonderiyiKargoyaGonder'         => 'Teknomavi\\Kargo\\Company\\Surat\\Helper\\Gonderi\\GonderiyiKargoyaGonder',
        'Gonderi'                        => 'Teknomavi\\Kargo\\Company\\Surat\\Helper\\Gonderi\\Gonderi',
        'GonderiyiKargoyaGonderResponse' => 'Teknomavi\\Kargo\\Company\\Surat\\Helper\\Gonderi\\GonderiyiKargoyaGonderResponse',
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
        $options = array_merge([
            'features' => 1,
        ], $options);
        if (!$wsdl) {
            $wsdl = 'http://www.suratkargo.com.tr/GonderiWebServiceGercek/Service.asmx?WSDL';
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
        return $this->__soapCall('GonderiyiKargoyaGonder', [$parameters]);
    }
}
