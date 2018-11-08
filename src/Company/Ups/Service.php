<?php

namespace Teknomavi\Kargo\Company\Ups;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Teknomavi\Kargo\Company\ServiceAbstract;
use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\CreateShipment;
use Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\Login_Type1;
use Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\GetTransactionsByPackagePickupDate_V1;
use Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\PackageTransactionwithDeliveryDetail;
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
    const STATUS_PACKAGE_SCANNED = 'Scanned';
    const STATUS_DELIVERED = 'Delivered';
    const STATUS_EXCEPTION = 'Exception';
    const STATUS_ON_DISTRIBUTION = 'OnDistribution';
    const STATUS_ON_BRANCH = 'OnBranch';
    const STATUS_RETURN_BACK = 'ReturningBack';
    protected $statusMap = [
        1  => ShipmentStatus::STATUS_PACKAGE_SCANNED, #GİRİŞ SCAN EDİLDİ
        2  => ShipmentStatus::STATUS_DELIVERED, #ALICIYA TESLİM EDİLDİ
        3  => ShipmentStatus::STATUS_EXCEPTION, #ÖZEL DURUM OLUŞTU
        4  => ShipmentStatus::STATUS_ON_DISTRIBUTION, #KURYE DAĞITMAK ÜZERE ÇIKARDI
        5  => ShipmentStatus::STATUS_ON_BRANCH, #KURYE GERİ GETİRDİ
        6  => ShipmentStatus::STATUS_ON_BRANCH, #ŞUBEYE GÖNDERİLDİ
        7  => ShipmentStatus::STATUS_ON_BRANCH, #ŞUBEDEN GELDİ
        12 => ShipmentStatus::STATUS_ON_BRANCH, #K. KONTEYNERE KONDU
        15 => ShipmentStatus::STATUS_ON_BRANCH, #MANİFESTO FAZLASI
        16 => ShipmentStatus::STATUS_ON_BRANCH, #K. KONTEYNERDEN ÇIKTI
        17 => ShipmentStatus::STATUS_RETURN_BACK, #GÖNDERENE İADE AMAÇLI ÇIKIŞ
        18 => ShipmentStatus::STATUS_PACKAGE_SCANNED, #MÜŞTERİ TOPLU GİRİŞ
        19 => ShipmentStatus::STATUS_ON_BRANCH, #ŞUBEDE BEKLEYEN
        30 => ShipmentStatus::STATUS_ON_BRANCH, #KONSOLOSLUKTAN TESLİM ALINDI
        31 => ShipmentStatus::STATUS_PACKAGE_SCANNED, #ÇAĞRI SONUCU ALINDI
        32 => ShipmentStatus::STATUS_ON_BRANCH, #DEPOYA GİRDİ
        33 => ShipmentStatus::STATUS_ON_BRANCH, #DEPODAN ÇIKTI
        34 => ShipmentStatus::STATUS_ON_BRANCH, #EDI BİLGİ TRANSFER
        35 => ShipmentStatus::STATUS_PACKAGE_SCANNED, #MÜŞTERİ DEPODA OKUNDU
        36 => ShipmentStatus::STATUS_ON_DISTRIBUTION, #TOPLU DAĞITIMA ÇIKIŞ
        37 => ShipmentStatus::STATUS_ON_BRANCH, #TRANSİT KARŞILAMA
        38 => ShipmentStatus::STATUS_ON_BRANCH, #TRANSİT ÇIKIŞ
    ];

    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'customer_code' => '',
            'username'      => '',
            'password'      => '',
        ]);
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
            $shipmentStatus = $this->populateShipmentStatusFromItem($item);
            $response[$shipmentStatus->getTrackingNumber()] = $shipmentStatus;
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

    /**
     * @param PackageTransactionwithDeliveryDetail $item
     *
     * @return ShipmentStatus
     */
    private function populateShipmentStatusFromItem($item): ShipmentStatus
    {
        $shipmentStatus = new ShipmentStatus();
        $shipmentStatus->setTrackingNumber($item->getTrackingNumber())
            ->setReferenceNumber($item->getCustomerReferanceNumber())
            ->setStatusCode($this->mapStatus($item->getStatusCode()))
            ->setOriginalStatus($item->getStatusCode())
            ->setStatusDetails($item->getProcessDescription2())
            ->setUpdateTime(\DateTime::createFromFormat('Ymd-His', $item->getProcessTimeStamp()))
            ->setErrorCode($item->getErrorCode())
            ->setErrorMessage($item->getErrorDefinition());
        return $shipmentStatus;
    }
}
