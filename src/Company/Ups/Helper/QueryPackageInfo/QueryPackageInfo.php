<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class QueryPackageInfo extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'Login_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\Login_V1',
        'Login_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\Login_V1Response',
        'LoginInformation' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\LoginInformation',
        'GetPackageInfoByTrackingNumber_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetPackageInfoByTrackingNumber_V1',
        'GetPackageInfoByTrackingNumber_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetPackageInfoByTrackingNumber_V1Response',
        'ArrayOfPackageInformation' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\ArrayOfPackageInformation',
        'PackageInformation' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\PackageInformation',
        'GetShipmentInfoByTrackingNumber_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetShipmentInfoByTrackingNumber_V1',
        'GetShipmentInfoByTrackingNumber_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetShipmentInfoByTrackingNumber_V1Response',
        'GetPackageInfoByReferance_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetPackageInfoByReferance_V1',
        'GetPackageInfoByReferance_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetPackageInfoByReferance_V1Response',
        'GetTransactionsByTrackingNumber_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTransactionsByTrackingNumber_V1',
        'GetTransactionsByTrackingNumber_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTransactionsByTrackingNumber_V1Response',
        'ArrayOfPackageTransaction' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\ArrayOfPackageTransaction',
        'PackageTransaction' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\PackageTransaction',
        'GetTransactionsByCustomerCode_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTransactionsByCustomerCode_V1',
        'GetTransactionsByCustomerCode_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTransactionsByCustomerCode_V1Response',
        'GetLastTransactionByTrackingNumber_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetLastTransactionByTrackingNumber_V1',
        'GetLastTransactionByTrackingNumber_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetLastTransactionByTrackingNumber_V1Response',
        'GetTransactionsByPackagePickupDate_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTransactionsByPackagePickupDate_V1',
        'GetTransactionsByPackagePickupDate_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTransactionsByPackagePickupDate_V1Response',
        'ArrayOfPackageTransactionwithDeliveryDetail' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\ArrayOfPackageTransactionwithDeliveryDetail',
        'PackageTransactionwithDeliveryDetail' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\PackageTransactionwithDeliveryDetail',
        'GetTransactionsByList_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTransactionsByList_V1',
        'ParamReferansList' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\ParamReferansList',
        'ArrayOfString' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\ArrayOfString',
        'GetTransactionsByList_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTransactionsByList_V1Response',
        'GetUnreadTransactionsByTrackingNumber_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetUnreadTransactionsByTrackingNumber_V1',
        'GetUnreadTransactionsByTrackingNumber_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetUnreadTransactionsByTrackingNumber_V1Response',
        'GetPackageInfoByDatePeriod_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetPackageInfoByDatePeriod_V1',
        'GetPackageInfoByDatePeriod_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetPackageInfoByDatePeriod_V1Response',
        'GetTiNTInformationByTrackingNumber_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTiNTInformationByTrackingNumber_V1',
        'GetTiNTInformationByTrackingNumber_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTiNTInformationByTrackingNumber_V1Response',
        'TiNTInformation' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\TiNTInformation',
        'GetTiNTInformationByTrackingNumberList_V1' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTiNTInformationByTrackingNumberList_V1',
        'ArrayOfWaybillList' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\ArrayOfWaybillList',
        'WaybillList' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\WaybillList',
        'GetTiNTInformationByTrackingNumberList_V1Response' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\GetTiNTInformationByTrackingNumberList_V1Response',
        'ArrayOfTiNTInformation' => 'Teknomavi\\Kargo\\Company\\Ups\\Helper\\QueryPackageInfo\\ArrayOfTiNTInformation',
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
            $wsdl = 'http://ws.ups.com.tr/QueryPackageInfo/wsQueryPackagesInfo.asmx?WSDL';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param Login_V1 $parameters
     *
     * @return Login_V1Response
     */
    public function Login_V1(Login_V1 $parameters)
    {
        return $this->__soapCall('Login_V1', [$parameters]);
    }

    /**
     * @param GetPackageInfoByTrackingNumber_V1 $parameters
     *
     * @return GetPackageInfoByTrackingNumber_V1Response
     */
    public function GetPackageInfoByTrackingNumber_V1(GetPackageInfoByTrackingNumber_V1 $parameters)
    {
        return $this->__soapCall('GetPackageInfoByTrackingNumber_V1', [$parameters]);
    }

    /**
     * @param GetShipmentInfoByTrackingNumber_V1 $parameters
     *
     * @return GetShipmentInfoByTrackingNumber_V1Response
     */
    public function GetShipmentInfoByTrackingNumber_V1(GetShipmentInfoByTrackingNumber_V1 $parameters)
    {
        return $this->__soapCall('GetShipmentInfoByTrackingNumber_V1', [$parameters]);
    }

    /**
     * @param GetPackageInfoByReferance_V1 $parameters
     *
     * @return GetPackageInfoByReferance_V1Response
     */
    public function GetPackageInfoByReferance_V1(GetPackageInfoByReferance_V1 $parameters)
    {
        return $this->__soapCall('GetPackageInfoByReferance_V1', [$parameters]);
    }

    /**
     * @param GetTransactionsByTrackingNumber_V1 $parameters
     *
     * @return GetTransactionsByTrackingNumber_V1Response
     */
    public function GetTransactionsByTrackingNumber_V1(GetTransactionsByTrackingNumber_V1 $parameters)
    {
        return $this->__soapCall('GetTransactionsByTrackingNumber_V1', [$parameters]);
    }

    /**
     * @param GetTransactionsByCustomerCode_V1 $parameters
     *
     * @return GetTransactionsByCustomerCode_V1Response
     */
    public function GetTransactionsByCustomerCode_V1(GetTransactionsByCustomerCode_V1 $parameters)
    {
        return $this->__soapCall('GetTransactionsByCustomerCode_V1', [$parameters]);
    }

    /**
     * @param GetLastTransactionByTrackingNumber_V1 $parameters
     *
     * @return GetLastTransactionByTrackingNumber_V1Response
     */
    public function GetLastTransactionByTrackingNumber_V1(GetLastTransactionByTrackingNumber_V1 $parameters)
    {
        return $this->__soapCall('GetLastTransactionByTrackingNumber_V1', [$parameters]);
    }

    /**
     * @param GetTransactionsByPackagePickupDate_V1 $parameters
     *
     * @return GetTransactionsByPackagePickupDate_V1Response
     */
    public function GetTransactionsByPackagePickupDate_V1(GetTransactionsByPackagePickupDate_V1 $parameters)
    {
        return $this->__soapCall('GetTransactionsByPackagePickupDate_V1', [$parameters]);
    }

    /**
     * @param GetTransactionsByList_V1 $parameters
     *
     * @return GetTransactionsByList_V1Response
     */
    public function GetTransactionsByList_V1(GetTransactionsByList_V1 $parameters)
    {
        return $this->__soapCall('GetTransactionsByList_V1', [$parameters]);
    }

    /**
     * @param GetUnreadTransactionsByTrackingNumber_V1 $parameters
     *
     * @return GetUnreadTransactionsByTrackingNumber_V1Response
     */
    public function GetUnreadTransactionsByTrackingNumber_V1(GetUnreadTransactionsByTrackingNumber_V1 $parameters)
    {
        return $this->__soapCall('GetUnreadTransactionsByTrackingNumber_V1', [$parameters]);
    }

    /**
     * @param GetPackageInfoByDatePeriod_V1 $parameters
     *
     * @return GetPackageInfoByDatePeriod_V1Response
     */
    public function GetPackageInfoByDatePeriod_V1(GetPackageInfoByDatePeriod_V1 $parameters)
    {
        return $this->__soapCall('GetPackageInfoByDatePeriod_V1', [$parameters]);
    }

    /**
     * @param GetTiNTInformationByTrackingNumber_V1 $parameters
     *
     * @return GetTiNTInformationByTrackingNumber_V1Response
     */
    public function GetTiNTInformationByTrackingNumber_V1(GetTiNTInformationByTrackingNumber_V1 $parameters)
    {
        return $this->__soapCall('GetTiNTInformationByTrackingNumber_V1', [$parameters]);
    }

    /**
     * @param GetTiNTInformationByTrackingNumberList_V1 $parameters
     *
     * @return GetTiNTInformationByTrackingNumberList_V1Response
     */
    public function GetTiNTInformationByTrackingNumberList_V1(GetTiNTInformationByTrackingNumberList_V1 $parameters)
    {
        return $this->__soapCall('GetTiNTInformationByTrackingNumberList_V1', [$parameters]);
    }
}
