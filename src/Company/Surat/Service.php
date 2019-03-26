<?php

namespace Teknomavi\Kargo\Company\Surat;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Teknomavi\Kargo\Company\ServiceAbstract;
use Teknomavi\Kargo\Company\ServiceInterface;
use Teknomavi\Kargo\Company\Surat\Helper\Gonderi\CreateShipment;
use Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi;
use Teknomavi\Kargo\Company\Surat\Helper\Gonderi\GonderiyiKargoyaGonder;
use Teknomavi\Kargo\Model\Package;

/**
 * Class Service
 * @package Teknomavi\Kargo\Company\Surat
 */
class Service extends ServiceAbstract implements ServiceInterface
{
    /**
     * @var  CreateShipment
     */
    private $shipmentService;

    /**
     * @return CreateShipment
     */
    private function initShipmentService(): CreateShipment
    {
        if (!$this->shipmentService) {
            $this->shipmentService = new CreateShipment([
                'trace' => 1,
                'connection_timeout' => 60,
                "features" => SOAP_SINGLE_ELEMENT_ARRAYS,
            ]);
        }
        return $this->shipmentService;
    }

    /**
     * @param Package $package
     *
     * @return mixed|void
     */
    function addPackage(Package $package)
    {
        $gonderi = new Gonderi();
        $gonderi
            ->setKisiKurum($package->getConsigneeName())
            ->setAliciAdresi($package->getConsigneeAddress())
            ->setIl($package->getConsigneeCity())
            ->setIlce($package->getConsigneeTown())
            ->setTelefonCep($package->getConsigneeMobilPhone())
            ->setOzelKargoTakipNo($package->getReferenceNo())
            ->setAdet($package->getNumberOfPackages());

        if ($package->getPaymentType() == Package::PAYMENT_TYPE_SHIPPER_PAY) {
            $gonderi->setOdemetipi(1);
        } else {
            $gonderi->setOdemetipi(2);
        }

        if ($package->getPackageType() == Package::PACKAGE_TYPE_BOX) {
            $gonderi->setKargoTuru(3);
        } else {
            $gonderi->setKargoTuru(1);
        }

        if (!$package->getShipmentType() == Package::SHIPMENT_TYPE_PREPAID) {
            $gonderi->setKapidanOdemeTutari($package->getValueOfGoods());
            if ($package->getShipmentType() == Package::SHIPMENT_TYPE_CARD_ON_DELIVERY) {
                $gonderi->setKapidanOdemeTahsilatTipi(2);
            } elseif ($package->getShipmentType() == Package::SHIPMENT_TYPE_CASH_ON_DELIVERY) {
                $gonderi->setKapidanOdemeTahsilatTipi(1);
            }
            if ($package->getInvoiceNo()) {
                $irsaliye = explode('-', $package->getInvoiceNo());
            } else {
                $irsaliye = ['AA', time()];
            }

            $seriNo = $irsaliye[0] ?? 'AA';
            $siraNo = $irsaliye[1] ?? time();
            $gonderi->setIrsaliyeSeriNo($seriNo);
            $gonderi->setIrsaliyeSiraNo($siraNo);
        }
        $this->packages[] = $gonderi;
    }

    /**
     * @return array
     */
    function sendPackages()
    {
        $response = [];
        $service = $this->initShipmentService();
        foreach ($this->packages as $package) {
            $gonder = new GonderiyiKargoyaGonder($this->options['KullaniciAdi'], $this->options['Sifre'], $package);
            $createShipmentResponse = new \Teknomavi\Kargo\Response\CreateShipment();
            $createShipmentResponse->setReferenceNumber($package->getOzelKargoTakipNo());
            try {
                $result = $service->GonderiyiKargoyaGonder($gonder);
                if ($result->getGonderiyiKargoyaGonderResult() == 'Tamam') {
                    $createShipmentResponse->setSuccess(true);
                } else {
                    $createShipmentResponse
                        ->setErrorCode('SURAT')
                        ->setErrorDescription($result->getGonderiyiKargoyaGonderResult())
                        ->setSuccess(false);
                }
            } catch (\Exception $exception) {
                $createShipmentResponse
                    ->setErrorCode('SOAP' . $exception->getCode())
                    ->setErrorDescription($exception->getMessage())
                    ->setSuccess(false);
            }

            $response[$package->getOzelKargoTakipNo()] = $createShipmentResponse;
        }
        return $response;
    }

    /**
     * @param OptionsResolver $resolver
     */
    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'KullaniciAdi' => '',
            'Sifre' => '',
        ]);
    }
}
