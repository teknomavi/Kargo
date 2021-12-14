<?php

namespace Teknomavi\Kargo\Company\Ptt;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Teknomavi\Kargo\Company\Ptt\Helper\Gonderi\CreateShipment;
use Teknomavi\Kargo\Company\Ptt\Helper\Gonderi\Gonderi;
use Teknomavi\Kargo\Company\Ptt\Helper\Gonderi\GonderiyiKargoyaGonder;
use Teknomavi\Kargo\Company\Ptt\Helper\Track\GetTrack;
use Teknomavi\Kargo\Company\Ptt\Helper\Track\QueryTrack;
use Teknomavi\Kargo\Company\ServiceAbstract;
use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Model\Package;
use Teknomavi\Kargo\Response\ShipmentStatus;

/**
 * Class Service.
 */
class Service extends ServiceAbstract implements ServiceInterface
{

    protected $statusMapping = [
        1 => ShipmentStatus::STATUS_PACKAGE_SCANNED, //GİRİŞ SCAN EDİLDİ
        15 => ShipmentStatus::STATUS_RETURN_BACK, //GİRİŞ SCAN EDİLDİ
        2 => ShipmentStatus::STATUS_DELIVERED, //ALICIYA TESLİM EDİLDİ
        100 => ShipmentStatus::STATUS_DELIVERED, //ALICIYA TESLİM EDİLDİ
        657 => ShipmentStatus::STATUS_PACKAGE_SCANNED, //GİRİŞ SCAN EDİLDİ
        4  => ShipmentStatus::STATUS_ON_DISTRIBUTION, //KURYE DAĞITMAK ÜZERE ÇIKARDI
    ];

    private $shipmentService;

    private $queryService = null;

    /**
     * @return CreateShipment
     */
    private function initShipmentService(): CreateShipment
    {
        if (!$this->shipmentService) {
            $this->shipmentService = new CreateShipment([
                'trace' => 1,
                'connection_timeout' => 60,
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            ]);
        }

        return $this->shipmentService;
    }

    /**
     * @param Package $package
     *
     * @return mixed|void
     */
    public function addPackage(Package $package)
    {
        $gonderi = new Gonderi();
        $gonderi->setAAdres($package->getConsigneeAddress());
        $gonderi->setAliciAdi($package->getConsigneeName());
        $gonderi->setAliciIlAdi($package->getConsigneeCity());
        $gonderi->setAliciIlceAdi($package->getConsigneeTown());
        $gonderi->setAliciSms($package->getConsigneeMobilPhone());
        $gonderi->setMusteriReferansNo($package->getReferenceNo());
        $gonderi->setOdemeSekli($package->getPaymentType());
        $gonderi->setIadeAliciAdi($package->getShipperName());
        $gonderi->setIadeAAdres($package->getShipperAddress());
        $gonderi->setIadeAIlAdi($package->getShipperCity());
        $gonderi->setIadeAliciIlceAdi($package->getShipperTown());
        $gonderi->setAgirlik(0.5);
        $gonderi->setEn(1);
        $gonderi->setDesi(1);
        $gonderi->setBoy(1);
        $gonderi->setYukseklik(1);
        $gonderi->setDegerUcreti(0);
        $gonderi->setOdemeSartUcreti(0);

        $gonderi->gondericibilgi->setGondericiAdi($package->getShipperName());
        $gonderi->gondericibilgi->setGondericiSms($package->getShipperPhoneNumber());
        $gonderi->gondericibilgi->setGondericiAdresi($package->getShipperAddress());
        $gonderi->gondericibilgi->setGondericiEmail($package->getShipperEmail());
        $gonderi->gondericibilgi->setGondericiIlAd($package->getShipperCity());
        $gonderi->gondericibilgi->setGondericiIlceAd($package->getShipperTown());
        $gonderi->gondericibilgi->setGondericiTelefonu($package->getShipperPhoneNumber());
        $gonderi->gondericibilgi->setGondericiPostaKodu(null);
        $gonderi->gondericibilgi->setGondericiUlkeId('');

        if ($package->getPaymentType() == Package::PAYMENT_TYPE_SHIPPER_PAY) {
            $gonderi->setOdemeSekli('MH');
        } else {
            $gonderi->setOdemeSekli('Nakit');
        }

        $this->packages[] = $gonderi;
    }

    /**
     * @return array
     */
    public function sendPackages()
    {
        $response = [];
        $service = $this->initShipmentService();

        foreach ($this->packages as $package) {
            /**
             * @var Gonderi $package
             */
            $createShipmentResponse = new \Teknomavi\Kargo\Response\CreateShipment();
            $createShipmentResponse->setReferenceNumber($package->getMusteriReferansNo());

            $gonder = new GonderiyiKargoyaGonder($this->options['kullanici'], $this->options['musteriId'], $this->options['sifre'], $package, $package->getMusteriReferansNo());

            try {
                $result = $service->GonderiyiKargoyaGonder($gonder);
              
                if ($result->return->aciklama == 'BASARILI') {
                    $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
                    $png = $generator->getBarcode($package->getMusteriReferansNo(), $generator::TYPE_CODE_128, 2, 90);
                    $base64 = base64_encode($png);
                    $createShipmentResponse->setSuccess(true);
                    $createShipmentResponse->setLabelStrings([$base64]);
                } else {
                    $createShipmentResponse
                        ->setErrorCode('Ptt')
                        ->setErrorDescription($result->return->aciklama)
                        ->setSuccess(false);
                }
            } catch (\Exception $exception) {
                $createShipmentResponse
                    ->setErrorCode('SOAP' . $exception->getCode())
                    ->setErrorDescription($exception->getMessage())
                    ->setSuccess(false);
            }

            $response[$package->getMusteriReferansNo()] = $createShipmentResponse;
        }

        return $response;
    }

    private function initQueryService(): QueryTrack
    {
        if (!$this->queryService) {
            $this->queryService = new QueryTrack([
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            ]);
        }

        return $this->queryService;
    }


    /*
 * Shipment Status
 */

    /**
     * @param string $trackingNumber
     *
     * @return ShipmentStatus
     * @throws \Teknomavi\Kargo\Exception\InvalidParameterValue
     *
     */
    public function getShipmentStatusByTrackingNumber(string $trackingNumber): ShipmentStatus
    {
        $response = $this->getShipmentStatusByTrackingNumberList([$trackingNumber]);
        if (count($response)) {
            return current($response);
        }

        return $this->shipmentStatusNotFound()->setTrackingNumber($trackingNumber);
    }

    /**
     * @param string[] $list
     *
     * @return ShipmentStatus[]
     * @throws \Teknomavi\Kargo\Exception\InvalidParameterValue
     *
     */
    public function getShipmentStatusByTrackingNumberList(array $list): array
    {
        $service = $this->initQueryService();

        $refNo = str_replace("-", "", $list[0]);

        $getTrackParameters = new GetTrack();
        $getTrackParameters->setKullanici($this->options['musteriId']);
        $getTrackParameters->setSifre($this->options['sifre']);
        $getTrackParameters->setReferansNo($refNo);
        $result = $service->QueryShipment($getTrackParameters->query());

        $response = [];
        $shipmentStatus = new ShipmentStatus();

        if (isset($result->return)) {

            if (isset($result->return->dongu[0])) {
                $status = last($result->return->dongu);
            }

            $date = (new \DateTime($result->return->ITARIH ?? (date('Ymd-His'))))->format('Ymd-His');

            $shipmentStatus
                ->setTrackingNumber($result->return->BARNO)
                ->setStatusCode($this->mapStatus($status->IKODU ?? 1))
                ->setOriginalStatus($status->IKODU ?? 1)
                ->setStatusDetails($result->return->sonucAciklama)
                ->setStatusDetails($date)
                ->setUpdateTime(\DateTime::createFromFormat('Ymd-His', $date))
                ->setErrorCode("")
                ->setReferenceNumber($refNo)
                ->setErrorMessage("");
        } else {
            $shipmentStatus->setReferenceNumber($refNo);
        }
        $response[$shipmentStatus->getReferenceNumber()] = $shipmentStatus;

        return $response;
    }

    /**
     * @param OptionsResolver $resolver
     */
    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'kullanici' => 'PttWs',
            'musteriId' => '',
            'sifre' => '',
        ]);
    }


}
