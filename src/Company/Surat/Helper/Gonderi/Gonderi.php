<?php

namespace Teknomavi\Kargo\Company\Surat\Helper\Gonderi;

class Gonderi
{

    /**
     * @var string $KisiKurum
     */
    protected $KisiKurum = null;

    /**
     * @var string $SahisBirim
     */
    protected $SahisBirim = null;

    /**
     * @var string $AliciAdresi
     */
    protected $AliciAdresi = null;

    /**
     * @var string $Il
     */
    protected $Il = null;

    /**
     * @var string $Ilce
     */
    protected $Ilce = null;

    /**
     * @var string $TelefonEv
     */
    protected $TelefonEv = null;

    /**
     * @var string $TelefonIs
     */
    protected $TelefonIs = null;

    /**
     * @var string $TelefonCep
     */
    protected $TelefonCep = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $AliciKodu
     */
    protected $AliciKodu = null;

    /**
     * @var int $KargoTuru
     */
    protected $KargoTuru = null;

    /**
     * @var int $Odemetipi
     */
    protected $Odemetipi = null;

    /**
     * @var string $IrsaliyeSeriNo
     */
    protected $IrsaliyeSeriNo = null;

    /**
     * @var string $IrsaliyeSiraNo
     */
    protected $IrsaliyeSiraNo = null;

    /**
     * @var string $ReferansNo
     */
    protected $ReferansNo = null;

    /**
     * @var string $OzelKargoTakipNo
     */
    protected $OzelKargoTakipNo = null;

    /**
     * @var int $Adet
     */
    protected $Adet = null;

    /**
     * @var float $BirimDesi
     */
    protected $BirimDesi = 0;

    /**
     * @var float $BirimKg
     */
    protected $BirimKg = 0;

    /**
     * @var string $KargoIcerigi
     */
    protected $KargoIcerigi = null;

    /**
     * @var int $KapidanOdemeTahsilatTipi
     */
    protected $KapidanOdemeTahsilatTipi = 0;

    /**
     * @var float $KapidanOdemeTutari
     */
    protected $KapidanOdemeTutari = 0;

    /**
     * @var string $EkHizmetler
     */
    protected $EkHizmetler = null;

    /**
     * @var string $SevkAdresiAdi
     */
    protected $SevkAdresiAdi = null;

    /**
     * @var int $TeslimSekli
     */
    protected $TeslimSekli = 1;

    /**
     * @var int $TasimaSekli
     */
    protected $TasimaSekli = 1; // 1: Adrese Teslim, 2: Şubeden Teslim

    /**
     * @var string $BayiNo
     */
    protected $BayiNo = null;

    /**
     * @var string $EntegrasyonId
     */
    protected $EntegrasyonId = null;

    /**
     * @var string $EntegrasyonHesaplamaTuru
     */
    protected $EntegrasyonHesaplamaTuru = null;

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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
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
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\Gonderi
     */
    public function setEntegrasyonHesaplamaTuru($EntegrasyonHesaplamaTuru)
    {
        $this->EntegrasyonHesaplamaTuru = $EntegrasyonHesaplamaTuru;
        return $this;
    }

}
