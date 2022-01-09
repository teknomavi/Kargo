<?php
namespace Teknomavi\Kargo\Company\Ptt\Helper\Shipment;

class GonderiyiKargoyaGonder
{
    /**
     * @var Gonderi
     */
    public array $input;

    /**
     * @param string  $kullanici
     * @param string  $musteriId
     * @param string  $sifre
     * @param Gonderi $Gonderi
     */
    public function __construct($kullanici, $musteriId, $sifre, $Gonderi, $dosyaAdi)
    {
        $this->input = [
            'kullanici'  => $kullanici,
            'musteriId'  => (int) $musteriId,
            'sifre'      => $sifre,
            'gonderiTip' => 'normal',
            'gonderiTur' => 'KARGO',
            'dosyaAdi'   => $dosyaAdi,
            'dongu'      => $Gonderi,
        ];
    }

    /**
     * @return Gonderi
     */
    public function getGonderi()
    {
        return $this->Gonderi;
    }

    /**
     * @param Gonderi $Gonderi
     *
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\GonderiyiKargoyaGonder
     */
    public function setGonderi($Gonderi)
    {
        $this->Gonderi = $Gonderi;

        return $this;
    }
}
