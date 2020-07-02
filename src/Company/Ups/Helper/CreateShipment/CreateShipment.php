<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

/**
 * Createshipment V6.
 */
class CreateShipment extends \SoapClient
{
    /**
     * @var array The defined classes
     */
    private static $classmap = [
        'Login_Type1'                         => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\Login_Type1',
        'Login_Type1Response'                 => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\Login_Type1Response',
        'ResultLogin_Type1'                   => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ResultLogin_Type1',
        'CreateShipment_Type1'                => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type1',
        'ShipmentInfo_Type1'                  => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ShipmentInfo_Type1',
        'CreateShipment_Type1Response'        => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type1Response',
        'ResultCreateShipment_Type1'          => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ResultCreateShipment_Type1',
        'ArrayOfString'                       => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ArrayOfString',
        'CreateShipment_Type2'                => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type2',
        'ShipmentInfo_Type2'                  => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ShipmentInfo_Type2',
        'CreateShipment_Type2Response'        => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type2Response',
        'CreateShipment_Type2TRT'             => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type2TRT',
        'CreateShipment_Type2TRTResponse'     => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type2TRTResponse',
        'CreateShipment_Type3'                => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type3',
        'ShipmentInfo_Type3'                  => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ShipmentInfo_Type3',
        'ArrayOfDimensionInfo'                => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ArrayOfDimensionInfo',
        'DimensionInfo'                       => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\DimensionInfo',
        'CreateShipment_Type3Response'        => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type3Response',
        'CreateShipment_Type4'                => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type4',
        'CreateShipment_Type4Response'        => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type4Response',
        'ResultCreateShipment_Type2'          => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ResultCreateShipment_Type2',
        'CreateShipment_Type3_XML'            => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type3_XML',
        'CreateShipment_Type3_XMLResponse'    => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\CreateShipment_Type3_XMLResponse',
        'ResultCreateShipment_Type1_XML'      => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ResultCreateShipment_Type1_XML',
        'ShipmentInfo_TypeAll'                => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ShipmentInfo_TypeAll',
        'OnDemandPickupRequest_Type1'         => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\OnDemandPickupRequest_Type1',
        'OnDemandPickupRequestInfo_Type1'     => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\OnDemandPickupRequestInfo_Type1',
        'ArrayOfBoxType'                      => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ArrayOfBoxType',
        'BoxType'                             => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\BoxType',
        'OnDemandPickupRequest_Type1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\OnDemandPickupRequest_Type1Response',
        'ResultOnDemandPickupRequest_Type1'   => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ResultOnDemandPickupRequest_Type1',
        'TransferShipmentList_Type1'          => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\TransferShipmentList_Type1',
        'ShipmentListInfo_Type1'              => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ShipmentListInfo_Type1',
        'ArrayOfDimensionInfo_Type2'          => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ArrayOfDimensionInfo_Type2',
        'DimensionInfo_Type2'                 => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\DimensionInfo_Type2',
        'ReturnShipment'                      => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ReturnShipment',
        'TransferShipmentList_Type1Response'  => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\TransferShipmentList_Type1Response',
        'ResultTransferShipmentList_Type1'    => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\CreateShipment\\ResultTransferShipmentList_Type1',
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
            $wsdl = 'http://ws.ups.com.tr/wsCreateShipment/wsCreateShipment.asmx?WSDL';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param Login_Type1 $parameters
     *
     * @return Login_Type1Response
     */
    public function Login_Type1(Login_Type1 $parameters)
    {
        return $this->__soapCall('Login_Type1', [$parameters]);
    }

    /**
     * @param CreateShipment_Type1 $parameters
     *
     * @return CreateShipment_Type1Response
     */
    public function CreateShipment_Type1(CreateShipment_Type1 $parameters)
    {
        return $this->__soapCall('CreateShipment_Type1', [$parameters]);
    }

    /**
     * @param CreateShipment_Type2 $parameters
     *
     * @return CreateShipment_Type2Response
     */
    public function CreateShipment_Type2(CreateShipment_Type2 $parameters)
    {
        return $this->__soapCall('CreateShipment_Type2', [$parameters]);
    }

    /**
     * @param CreateShipment_Type2TRT $parameters
     *
     * @return CreateShipment_Type2TRTResponse
     */
    public function CreateShipment_Type2TRT(CreateShipment_Type2TRT $parameters)
    {
        return $this->__soapCall('CreateShipment_Type2TRT', [$parameters]);
    }

    /**
     * @param CreateShipment_Type3 $parameters
     *
     * @return CreateShipment_Type3Response
     */
    public function CreateShipment_Type3(CreateShipment_Type3 $parameters)
    {
        return $this->__soapCall('CreateShipment_Type3', [$parameters]);
    }

    /**
     * @param CreateShipment_Type4 $parameters
     *
     * @return CreateShipment_Type4Response
     */
    public function CreateShipment_Type4(CreateShipment_Type4 $parameters)
    {
        return $this->__soapCall('CreateShipment_Type4', [$parameters]);
    }

    /**
     * @param CreateShipment_Type3_XML $parameters
     *
     * @return CreateShipment_Type3_XMLResponse
     */
    public function CreateShipment_Type3_XML(CreateShipment_Type3_XML $parameters)
    {
        return $this->__soapCall('CreateShipment_Type3_XML', [$parameters]);
    }

    /**
     * @param OnDemandPickupRequest_Type1 $parameters
     *
     * @return OnDemandPickupRequest_Type1Response
     */
    public function OnDemandPickupRequest_Type1(OnDemandPickupRequest_Type1 $parameters)
    {
        return $this->__soapCall('OnDemandPickupRequest_Type1', [$parameters]);
    }

    /**
     * @param TransferShipmentList_Type1 $parameters
     *
     * @return TransferShipmentList_Type1Response
     */
    public function TransferShipmentList_Type1(TransferShipmentList_Type1 $parameters)
    {
        return $this->__soapCall('TransferShipmentList_Type1', [$parameters]);
    }
}
