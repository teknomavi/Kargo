<?php

namespace Teknomavi\Kargo\Company\Surat\Helper\Gonderi;

/**
 * Class Gonderi
 *
 * @package Teknomavi\Kargo\Company\Surat\Helper\Gonderi
 */
class Gonderi
{
    /**
     * @var string $KisiKurum
     */
    protected $KisiKurum = '';
    /**
     * @var string $SahisBirim
     */
    protected $SahisBirim = '';
    /**
     * @var string $AliciAdresi
     */
    protected $AliciAdresi = '';
    /**
     * @var string $Il
     */
    protected $Il = '';
    /**
     * @var string $Ilce
     */
    protected $Ilce = '';
    /**
     * @var string $TelefonEv
     */
    protected $TelefonEv = '';
    /**
     * @var string $TelefonIs
     */
    protected $TelefonIs = '';
    /**
     * @var string $TelefonCep
     */
    protected $TelefonCep = '';
    /**
     * @var string $Email
     */
    protected $Email = '';
    /**
     * @var string $AliciKodu
     */
    protected $AliciKodu = '';
    /**
     * @var int $KargoTuru
     */
    protected $KargoTuru = 0;
    /**
     * @var int $Odemetipi
     */
    protected $Odemetipi = 0;
    /**
     * @var string $IrsaliyeSeriNo
     */
    protected $IrsaliyeSeriNo = '';
    /**
     * @var string $IrsaliyeSiraNo
     */
    protected $IrsaliyeSiraNo = '';
    /**
     * @var string $ReferansNo
     */
    protected $ReferansNo = '';
    /**
     * @var string $OzelKargoTakipNo
     */
    protected $OzelKargoTakipNo = '';
    /**
     * @var int $Adet
     */
    protected $Adet = 0;
    /**
     * @var float $BirimDesi
     */
    protected $BirimDesi = 0.0;
    /**
     * @var float $BirimKg
     */
    protected $BirimKg = 0.0;
    /**
     * @var string $KargoIcerigi
     */
    protected $KargoIcerigi = '';
    /**
     * @var int $KapidanOdemeTahsilatTipi
     */
    protected $KapidanOdemeTahsilatTipi = 1;
    /**
     * @var float $KapidanOdemeTutari
     */
    protected $KapidanOdemeTutari = 0.0;
    /**
     * @var string $EkHizmetler
     */
    protected $EkHizmetler = '';
    /**
     * @var string $SevkAdresiAdi
     */
    protected $SevkAdresiAdi = '';
    /**
     * @var int $TeslimSekli
     */
    protected $TeslimSekli = '';
    /**
     * @var int $TasimaSekli
     */
    protected $TasimaSekli = '';
    /**
     * @var string $BayiNo
     */
    protected $BayiNo = '';
    /**
     * @var string $EntegrasyonId
     */
    protected $EntegrasyonId = '';
    /**
     * @var string $EntegrasyonHesaplamaTuru
     */
    protected $EntegrasyonHesaplamaTuru = '';

    /**
     * @param int   $KargoTuru
     * @param int   $Odemetipi
     * @param int   $Adet
     * @param float $BirimDesi
     * @param float $BirimKg
     * @param int   $KapidanOdemeTahsilatTipi
     * @param float $KapidanOdemeTutari
     * @param int   $TeslimSekli
     * @param int   $TasimaSekli
     */
    public function __construct($KargoTuru, $Odemetipi, $Adet, $BirimDesi, $TeslimSekli, $TasimaSekli)
    {
        $this->KargoTuru = $KargoTuru;
        $this->Odemetipi = $Odemetipi;
        $this->Adet = $Adet;
        $this->BirimDesi = $BirimDesi;
        $this->TeslimSekli = $TeslimSekli;
        $this->TasimaSekli = $TasimaSekli;
    }

    /**
     * @return string
     */
    public function getKisiKurum()
    {
        return $this->KisiKurum;
    }

    /**
     * @param string $KisiKurum
     *
     * @return $this
     */
    public function setKisiKurum($KisiKurum)
    {
        $this->KisiKurum = $KisiKurum;
        return $this;
    }

    /**
     * @return string
     */
    public function getSahisBirim()
    {
        return $this->SahisBirim;
    }

    /**
     * @param string $SahisBirim
     *
     * @return $this
     */
    public function setSahisBirim($SahisBirim)
    {
        $this->SahisBirim = $SahisBirim;
        return $this;
    }

    /**
     * @return string
     */
    public function getAliciAdresi()
    {
        return $this->AliciAdresi;
    }

    /**
     * @param string $AliciAdresi
     *
     * @return $this
     */
    public function setAliciAdresi($AliciAdresi)
    {
        $this->AliciAdresi = $AliciAdresi;
        return $this;
    }

    /**
     * @return string
     */
    public function getIl()
    {
        return $this->Il;
    }

    /**
     * @param string $Il
     *
     * @return $this
     */
    public function setIl($Il)
    {
        $this->Il = $Il;
        return $this;
    }

    /**
     * @return string
     */
    public function getIlce()
    {
        return $this->Ilce;
    }

    /**
     * @param string $Ilce
     *
     * @return $this
     */
    public function setIlce($Ilce)
    {
        $this->Ilce = $Ilce;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefonEv()
    {
        return $this->TelefonEv;
    }

    /**
     * @param string $TelefonEv
     *
     * @return $this
     */
    public function setTelefonEv($TelefonEv)
    {
        $this->TelefonEv = $TelefonEv;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefonIs()
    {
        return $this->TelefonIs;
    }

    /**
     * @param string $TelefonIs
     *
     * @return $this
     */
    public function setTelefonIs($TelefonIs)
    {
        $this->TelefonIs = $TelefonIs;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefonCep()
    {
        return $this->TelefonCep;
    }

    /**
     * @param string $TelefonCep
     *
     * @return $this
     */
    public function setTelefonCep($TelefonCep)
    {
        $this->TelefonCep = $TelefonCep;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     *
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getAliciKodu()
    {
        return $this->AliciKodu;
    }

    /**
     * @param string $AliciKodu
     *
     * @return $this
     */
    public function setAliciKodu($AliciKodu)
    {
        $this->AliciKodu = $AliciKodu;
        return $this;
    }

    /**
     * @return int
     */
    public function getKargoTuru()
    {
        return $this->KargoTuru;
    }

    /**
     * @param int $KargoTuru
     *
     * @return $this
     */
    public function setKargoTuru($KargoTuru)
    {
        $this->KargoTuru = $KargoTuru;
        return $this;
    }

    /**
     * @return int
     */
    public function getOdemetipi()
    {
        return $this->Odemetipi;
    }

    /**
     * @param int $Odemetipi
     *
     * @return $this
     */
    public function setOdemetipi($Odemetipi)
    {
        $this->Odemetipi = $Odemetipi;
        return $this;
    }

    /**
     * @return string
     */
    public function getIrsaliyeSeriNo()
    {
        return $this->IrsaliyeSeriNo;
    }

    /**
     * @param string $IrsaliyeSeriNo
     *
     * @return $this
     */
    public function setIrsaliyeSeriNo($IrsaliyeSeriNo)
    {
        $this->IrsaliyeSeriNo = $IrsaliyeSeriNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getIrsaliyeSiraNo()
    {
        return $this->IrsaliyeSiraNo;
    }

    /**
     * @param string $IrsaliyeSiraNo
     *
     * @return $this
     */
    public function setIrsaliyeSiraNo($IrsaliyeSiraNo)
    {
        $this->IrsaliyeSiraNo = $IrsaliyeSiraNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferansNo()
    {
        return $this->ReferansNo;
    }

    /**
     * @param string $ReferansNo
     *
     * @return $this
     */
    public function setReferansNo($ReferansNo)
    {
        $this->ReferansNo = $ReferansNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOzelKargoTakipNo()
    {
        return $this->OzelKargoTakipNo;
    }

    /**
     * @param string $OzelKargoTakipNo
     *
     * @return $this
     */
    public function setOzelKargoTakipNo($OzelKargoTakipNo)
    {
        $this->OzelKargoTakipNo = $OzelKargoTakipNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdet()
    {
        return $this->Adet;
    }

    /**
     * @param int $Adet
     *
     * @return $this
     */
    public function setAdet($Adet)
    {
        $this->Adet = $Adet;
        return $this;
    }

    /**
     * @return float
     */
    public function getBirimDesi()
    {
        return $this->BirimDesi;
    }

    /**
     * @param float $BirimDesi
     *
     * @return $this
     */
    public function setBirimDesi($BirimDesi)
    {
        $this->BirimDesi = $BirimDesi;
        return $this;
    }

    /**
     * @return float
     */
    public function getBirimKg()
    {
        return $this->BirimKg;
    }

    /**
     * @param float $BirimKg
     *
     * @return $this
     */
    public function setBirimKg($BirimKg)
    {
        $this->BirimKg = $BirimKg;
        return $this;
    }

    /**
     * @return string
     */
    public function getKargoIcerigi()
    {
        return $this->KargoIcerigi;
    }

    /**
     * @param string $KargoIcerigi
     *
     * @return $this
     */
    public function setKargoIcerigi($KargoIcerigi)
    {
        $this->KargoIcerigi = $KargoIcerigi;
        return $this;
    }

    /**
     * @return int
     */
    public function getKapidanOdemeTahsilatTipi()
    {
        return $this->KapidanOdemeTahsilatTipi;
    }

    /**
     * @param int $KapidanOdemeTahsilatTipi
     *
     * @return $this
     */
    public function setKapidanOdemeTahsilatTipi($KapidanOdemeTahsilatTipi)
    {
        $this->KapidanOdemeTahsilatTipi = $KapidanOdemeTahsilatTipi;
        return $this;
    }

    /**
     * @return float
     */
    public function getKapidanOdemeTutari()
    {
        return $this->KapidanOdemeTutari;
    }

    /**
     * @param float $KapidanOdemeTutari
     *
     * @return $this
     */
    public function setKapidanOdemeTutari($KapidanOdemeTutari)
    {
        $this->KapidanOdemeTutari = $KapidanOdemeTutari;
        return $this;
    }

    /**
     * @return string
     */
    public function getEkHizmetler()
    {
        return $this->EkHizmetler;
    }

    /**
     * @param string $EkHizmetler
     *
     * @return $this
     */
    public function setEkHizmetler($EkHizmetler)
    {
        $this->EkHizmetler = $EkHizmetler;
        return $this;
    }

    /**
     * @return string
     */
    public function getSevkAdresiAdi()
    {
        return $this->SevkAdresiAdi;
    }

    /**
     * @param string $SevkAdresiAdi
     *
     * @return $this
     */
    public function setSevkAdresiAdi($SevkAdresiAdi)
    {
        $this->SevkAdresiAdi = $SevkAdresiAdi;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeslimSekli()
    {
        return $this->TeslimSekli;
    }

    /**
     * @param int $TeslimSekli
     *
     * @return $this
     */
    public function setTeslimSekli($TeslimSekli)
    {
        $this->TeslimSekli = $TeslimSekli;
        return $this;
    }

    /**
     * @return int
     */
    public function getTasimaSekli()
    {
        return $this->TasimaSekli;
    }

    /**
     * @param int $TasimaSekli
     *
     * @return $this
     */
    public function setTasimaSekli($TasimaSekli)
    {
        $this->TasimaSekli = $TasimaSekli;
        return $this;
    }

    /**
     * @return string
     */
    public function getBayiNo()
    {
        return $this->BayiNo;
    }

    /**
     * @param string $BayiNo
     *
     * @return $this
     */
    public function setBayiNo($BayiNo)
    {
        $this->BayiNo = $BayiNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntegrasyonId()
    {
        return $this->EntegrasyonId;
    }

    /**
     * @param string $EntegrasyonId
     *
     * @return $this
     */
    public function setEntegrasyonId($EntegrasyonId)
    {
        $this->EntegrasyonId = $EntegrasyonId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntegrasyonHesaplamaTuru()
    {
        return $this->EntegrasyonHesaplamaTuru;
    }

    /**
     * @param string $EntegrasyonHesaplamaTuru
     *
     * @return $this
     */
    public function setEntegrasyonHesaplamaTuru($EntegrasyonHesaplamaTuru)
    {
        $this->EntegrasyonHesaplamaTuru = $EntegrasyonHesaplamaTuru;
        return $this;
    }
}
