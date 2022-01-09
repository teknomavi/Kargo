<?php
namespace Teknomavi\Kargo\Company\Ptt\Helper\Shipment;

class Gonderi
{
    public string $aAdres;
    public ?string $agirlik;
    public string $aliciAdi;
    public string $aliciIlAdi;
    public string $aliciIlceAdi;
    public int $aliciSms;
    public string $barkodNo;
    public float $boy;
    public string $degerUcreti;
    public float $desi;
    public string $ekHizmet;
    public float $en;
    public string $musteriReferansNo;
    public string $odemeSekli;
    public float $odemeSartUcreti;
    public string $rezerve1;
    public float $yukseklik;
    public string $iadeAAdres;
    public string $iadeAIlAdi;
    public GondericiBilgi $gondericibilgi;

    public function __construct()
    {
        $this->gondericibilgi = new GondericiBilgi();
    }

    /**
     * @return GondericiBilgi
     */
    public function getgondericibilgi(): GondericiBilgi
    {
        return $this->gondericibilgi;
    }

    /**
     * @param GondericiBilgi $gondericibilgi
     */
    public function setgondericibilgi(GondericiBilgi $gondericibilgi): void
    {
        $this->gondericibilgi = $gondericibilgi;
    }

    /**
     * @return string
     */
    public function getIadeAAdres(): string
    {
        return $this->iadeAAdres;
    }

    /**
     * @param string $iadeAAdres
     */
    public function setIadeAAdres(string $iadeAAdres): void
    {
        $this->iadeAAdres = $iadeAAdres;
    }

    /**
     * @return string
     */
    public function getIadeAIlAdi(): string
    {
        return $this->iadeAIlAdi;
    }

    /**
     * @param string $iadeAIlAdi
     */
    public function setIadeAIlAdi(string $iadeAIlAdi): void
    {
        $this->iadeAIlAdi = $iadeAIlAdi;
    }

    /**
     * @return string
     */
    public function getIadeAliciIlceAdi(): string
    {
        return $this->iadeAliciIlceAdi;
    }

    /**
     * @param string $iadeAliciIlceAdi
     */
    public function setIadeAliciIlceAdi(string $iadeAliciIlceAdi): void
    {
        $this->iadeAliciIlceAdi = $iadeAliciIlceAdi;
    }

    /**
     * @return string
     */
    public function getIadeAliciAdi(): string
    {
        return $this->iadeAliciAdi;
    }

    /**
     * @param string $iadeAliciAdi
     */
    public function setIadeAliciAdi(string $iadeAliciAdi): void
    {
        $this->iadeAliciAdi = $iadeAliciAdi;
    }

    /**
     * @return string
     */
    public function getIadeAliciTel(): string
    {
        return $this->iadeAliciTel;
    }

    /**
     * @param string $iadeAliciTel
     */
    public function setIadeAliciTel(string $iadeAliciTel): void
    {
        $this->iadeAliciTel = $iadeAliciTel;
    }

    public string $iadeAliciIlceAdi;
    public string $iadeAliciAdi;
    public string $iadeAliciTel;

    /**
     * @return null
     */
    public function getAAdres()
    {
        return $this->aAdres;
    }

    /**
     * @param null $aAdres
     */
    public function setAAdres($aAdres): void
    {
        $this->aAdres = $aAdres;
    }

    /**
     * @return null
     */
    public function getAgirlik()
    {
        return $this->agirlik;
    }

    /**
     * @param null $agirlik
     */
    public function setAgirlik($agirlik): void
    {
        $this->agirlik = $agirlik;
    }

    /**
     * @return null
     */
    public function getAliciAdi()
    {
        return $this->aliciAdi;
    }

    /**
     * @param null $aliciAdi
     */
    public function setAliciAdi($aliciAdi): void
    {
        $this->aliciAdi = $aliciAdi;
    }

    /**
     * @return null
     */
    public function getAliciIlAdi()
    {
        return $this->aliciIlAdi;
    }

    /**
     * @param null $aliciIlAdi
     */
    public function setAliciIlAdi($aliciIlAdi): void
    {
        $this->aliciIlAdi = $aliciIlAdi;
    }

    /**
     * @return null
     */
    public function getAliciIlceAdi()
    {
        return $this->aliciIlceAdi;
    }

    /**
     * @param null $aliciIlceAdi
     */
    public function setAliciIlceAdi($aliciIlceAdi): void
    {
        $this->aliciIlceAdi = $aliciIlceAdi;
    }

    /**
     * @return null
     */
    public function getAliciSms()
    {
        return $this->aliciSms;
    }

    /**
     * @param null $aliciSms
     */
    public function setAliciSms($aliciSms): void
    {
        $this->aliciSms = $aliciSms;
    }

    /**
     * @return null
     */
    public function getBarkodNo()
    {
        return $this->barkodNo;
    }

    /**
     * @param null $barkodNo
     */
    public function setBarkodNo($barkodNo): void
    {
        $this->barkodNo = $barkodNo;
    }

    /**
     * @return null
     */
    public function getBoy()
    {
        return $this->boy;
    }

    /**
     * @param null $boy
     */
    public function setBoy($boy): void
    {
        $this->boy = $boy;
    }

    /**
     * @return null
     */
    public function getDegerUcreti()
    {
        return $this->degerUcreti;
    }

    /**
     * @param null $degerUcreti
     */
    public function setDegerUcreti($degerUcreti): void
    {
        $this->degerUcreti = $degerUcreti;
    }

    /**
     * @return null
     */
    public function getDesi()
    {
        return $this->desi;
    }

    /**
     * @param null $desi
     */
    public function setDesi($desi): void
    {
        $this->desi = $desi;
    }

    /**
     * @return null
     */
    public function getEkHizmet()
    {
        return $this->ekHizmet;
    }

    /**
     * @param null $ekHizmet
     */
    public function setEkHizmet($ekHizmet): void
    {
        $this->ekHizmet = $ekHizmet;
    }

    /**
     * @return null
     */
    public function getEn()
    {
        return $this->en;
    }

    /**
     * @param null $en
     */
    public function setEn($en): void
    {
        $this->en = $en;
    }

    /**
     * @return null
     */
    public function getMusteriReferansNo()
    {
        return $this->musteriReferansNo;
    }

    /**
     * @param null $musteriReferansNo
     */
    public function setMusteriReferansNo($musteriReferansNo): void
    {
        $this->musteriReferansNo = $musteriReferansNo;
    }

    /**
     * @return null
     */
    public function getOdemeSekli()
    {
        return $this->odemeSekli;
    }

    /**
     * @param null $odemeSekli
     */
    public function setOdemeSekli($odemeSekli): void
    {
        $this->odemeSekli = $odemeSekli;
    }

    /**
     * @return null
     */
    public function getOdemeSartUcreti()
    {
        return $this->odemeSartUcreti;
    }

    /**
     * @param null $odemeSartUcreti
     */
    public function setOdemeSartUcreti($odemeSartUcreti): void
    {
        $this->odemeSartUcreti = $odemeSartUcreti;
    }

    /**
     * @return null
     */
    public function getRezerve1()
    {
        return $this->rezerve1;
    }

    /**
     * @param null $rezerve1
     */
    public function setRezerve1($rezerve1): void
    {
        $this->rezerve1 = $rezerve1;
    }

    /**
     * @return null
     */
    public function getYukseklik()
    {
        return $this->yukseklik;
    }

    /**
     * @param null $yukseklik
     */
    public function setYukseklik($yukseklik): void
    {
        $this->yukseklik = $yukseklik;
    }

    /**
     * @return null
     */
    public function getDosyaAdi()
    {
        return $this->dosyaAdi;
    }

    /**
     * @param null $dosyaAdi
     */
    public function setDosyaAdi($dosyaAdi): void
    {
        $this->dosyaAdi = $dosyaAdi;
    }

    /**
     * @return string
     */
    public function getGonderiTur(): string
    {
        return $this->gonderiTur;
    }

    /**
     * @param string $gonderiTur
     */
    public function setGonderiTur(string $gonderiTur): void
    {
        $this->gonderiTur = $gonderiTur;
    }

    /**
     * @return string
     */
    public function getGonderiTip(): string
    {
        return $this->gonderiTip;
    }

    /**
     * @param string $gonderiTip
     */
    public function setGonderiTip(string $gonderiTip): void
    {
        $this->gonderiTip = $gonderiTip;
    }
}
