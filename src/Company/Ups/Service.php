<?php

namespace Teknomavi\Kargo\Company\Ups;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Teknomavi\Kargo\Company\ServiceAbstract;
use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment;
use Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\Login_Type1;
use Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByPackagePickupDate_V1;
use Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\QueryPackageInfo;
use Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\TransactionTypes;
use Teknomavi\Kargo\Response\PackageInfo;
use Teknomavi\Kargo\Response\ShipmentStatus;

class Service extends ServiceAbstract implements ServiceInterface
{
    /**
     * @var CreateShipment
     */
    private $shipmentService = null;
    /**
     * @var QueryPackageInfo
     */
    private $queryService = null;
    /**
     * @var string
     */
    private $sessionId = null;

    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'customer_code' => '',
            'username'      => '',
            'password'      => '',
        ));
    }

    private function initShipmentService(): CreateShipment
    {
        if (!$this->shipmentService) {
            $this->shipmentService = new CreateShipment([
                "features" => SOAP_SINGLE_ELEMENT_ARRAYS,
            ]);
        }
        return $this->shipmentService;
    }

    private function initQueryService(): QueryPackageInfo
    {
        if (!$this->queryService) {
            $this->queryService = new QueryPackageInfo([
                "features" => SOAP_SINGLE_ELEMENT_ARRAYS,
            ]);
        }
        return $this->queryService;
    }

    /**
     * @return string
     * @throws \Exception
     */
    private function getSessionId()
    {
        if (is_null($this->sessionId)) {
            $result = $this->initShipmentService()->Login_Type1(new Login_Type1($this->options['customer_code'], $this->options['username'], $this->options['password']));
            if ($result->getLogin_Type1Result()->getErrorCode() != 0) {
                throw new \Exception($result->getLogin_Type1Result()->getErrorDefinition(), 'UPS-' . $result->getLogin_Type1Result()->getErrorCode());
            }
            $this->sessionId = $result->getLogin_Type1Result()->getSessionID();
        }
        return $this->sessionId;
    }

    /*
     * Courier
     */
    /*
     * Package Management
     */
    /**
     * @param string $trackingNumber
     *
     * @return PackageInfo
     */
    public function getPackageInfoByTrackingNumber(string $trackingNumber): PackageInfo
    {
        $service = $this->initQueryService();
        return new PackageInfo();
    }

    /**
     * @param string $referenceNumber
     *
     * @return PackageInfo
     */
    public function getPackageInfoByReferenceNumber(string $referenceNumber): PackageInfo
    {
        $service = $this->initQueryService();
        return new PackageInfo();
    }

    /*
     * Shipment Status
     */
    /**
     * @param string $trackingNumber
     *
     * @return ShipmentStatus
     */
    public function getShipmentStatusByTrackingNumber(string $trackingNumber): ShipmentStatus
    {
        $service = $this->initQueryService();
        return new ShipmentStatus();
    }

    /**
     * @param string $referenceNumber
     *
     * @return ShipmentStatus
     */
    public function getShipmentStatusByReferenceNumber(string $referenceNumber): ShipmentStatus
    {
        $service = $this->initQueryService();
        return new ShipmentStatus();
    }

    /**
     * @param string[] $list
     *
     * @return ShipmentStatus[]
     */
    public function getShipmentStatusByTrackingNumberList(array $list): array
    {
        $service = $this->initQueryService();
        return [];
    }

    /**
     * @param string[] $list
     *
     * @return ShipmentStatus[]
     */
    public function getShipmentStatusByReferenceNumberList(array $list): array
    {
        $service = $this->initQueryService();
        return [];
    }

    /**
     * @param \DateTime $date
     *
     * @return ShipmentStatus[]
     */
    public function getShipmentStatusByPickupDate(\DateTime $date): array
    {
        $service = $this->initQueryService();
        // $result = $this->dataConn->GetShipmentInfoByTrackingNumber_V1(new GetShipmentInfoByTrackingNumber_V1($this->getSessionId(),1,"1ZE008X56807832921"));
        // \icms::printr($result->getGetShipmentInfoByTrackingNumber_V1Result()->getPackageInformation(), 'info');
        // $result = $this->dataConn->GetLastTransactionByTrackingNumber_V1(new GetLastTransactionByTrackingNumber_V1($this->getSessionId(),1,"1ZE008X56807832921"));
        // \icms::printr($result->getGetLastTransactionByTrackingNumber_V1Result()->getPackageTransaction(), 'info');
        /** @var TransactionTypes $trnType */
        $trnType = TransactionTypes::LAST_TRANSACTIONS;
        $resultWebService = $service->GetTransactionsByPackagePickupDate_V1(
            new GetTransactionsByPackagePickupDate_V1(
                $this->getSessionId(),
                1,
                $date->format('Ymd'),
                $date->format('Ymd'),
                $trnType)
        );
        $response = [];
        foreach ($resultWebService->getGetTransactionsByPackagePickupDate_V1Result() as $item) {
            echo '<xmp>' . print_r($item, 1) . '</xmp>';
            $response[$item->getTrackingNumber()] = $item;
            die();
        }
        return $response;
    }

    /**
     * @param \DateTime $date
     *
     * @return ShipmentStatus[]
     */
    public function getShipmentStatusByDeliveryDate(\DateTime $date): array
    {
        $service = $this->initQueryService();
        return [];
    }

    private function populateStatusObjectFromItem($item): ShipmentStatus
    {
        return new ShipmentStatus();
    }
}
