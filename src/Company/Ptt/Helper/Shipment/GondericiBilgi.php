<?php
namespace Teknomavi\Kargo\Company\Ptt\Helper\Shipment;

class GondericiBilgi
{
    public string $gonderici_adi;
    public $gonderici_soyadi;
    public string $gonderici_il_ad;
    public string $gonderici_ilce_ad;
    public string $gonderici_sms;
    public string $gonderici_telefonu;
    public $gonderici_ulke_id;
    public string $gonderici_adresi;
    public string $gonderici_email;
    public $gonderici_posta_kodu;

    /**
     * @return string
     */
    public function getGondericiPostaKodu(): string
    {
        return $this->gonderici_posta_kodu;
    }

    /**
     * @param string $gonderici_posta_kodu
     */
    public function setGondericiPostaKodu(string $gonderici_posta_kodu = null): void
    {
        $this->gonderici_posta_kodu = $gonderici_posta_kodu;
    }

    /**
     * @return string
     */
    public function getGondericiSoyadi()
    {
        return $this->gonderici_soyadi;
    }

    /**
     * @param string $gonderici_soyadi
     */
    public function setGondericiSoyadi(?string $gonderici_soyadi = null): void
    {
        $this->gonderici_soyadi = $gonderici_soyadi;
    }

    /**
     * @return string
     */
    public function getGondericiUlkeId()
    {
        return $this->gonderici_ulke_id;
    }

    /**
     * @param string $gonderici_ulke_id
     */
    public function setGondericiUlkeId(?string $gonderici_ulke_id = null): void
    {
        $this->gonderici_ulke_id = $gonderici_ulke_id;
    }


    /**
     * @return string
     */
    public function getGondericiAdi(): string
    {
        return $this->gonderici_adi;
    }

    /**
     * @param string $gonderici_adi
     */
    public function setGondericiAdi(string $gonderici_adi): void
    {
        $this->gonderici_adi = $gonderici_adi;
    }

    /**
     * @return string
     */
    public function getGondericiAdresi(): string
    {
        return $this->gonderici_adresi;
    }

    /**
     * @param string $gonderici_adresi
     */
    public function setGondericiAdresi(string $gonderici_adresi): void
    {
        $this->gonderici_adresi = $gonderici_adresi;
    }

    /**
     * @return string
     */
    public function getGondericiEmail(): string
    {
        return $this->gonderici_email;
    }

    /**
     * @param string $gonderici_email
     */
    public function setGondericiEmail(string $gonderici_email): void
    {
        $this->gonderici_email = $gonderici_email;
    }

    /**
     * @return string
     */
    public function getGondericiIlAd(): string
    {
        return $this->gonderici_il_ad;
    }

    /**
     * @param string $gonderici_il_ad
     */
    public function setGondericiIlAd(string $gonderici_il_ad): void
    {
        $this->gonderici_il_ad = $gonderici_il_ad;
    }

    /**
     * @return string
     */
    public function getGondericiIlceAd(): string
    {
        return $this->gonderici_ilce_ad;
    }

    /**
     * @param string $gonderici_ilce_ad
     */
    public function setGondericiIlceAd(string $gonderici_ilce_ad): void
    {
        $this->gonderici_ilce_ad = $gonderici_ilce_ad;
    }

    /**
     * @return string
     */
    public function getGondericiSms(): string
    {
        return $this->gonderici_sms;
    }

    /**
     * @param string $gonderici_sms
     */
    public function setGondericiSms(string $gonderici_sms): void
    {
        $this->gonderici_sms = $gonderici_sms;
    }

    /**
     * @return string
     */
    public function getGondericiTelefonu(): string
    {
        return $this->gonderici_telefonu;
    }

    /**
     * @param string $gonderici_telefonu
     */
    public function setGondericiTelefonu(string $gonderici_telefonu): void
    {
        $this->gonderici_telefonu = $gonderici_telefonu;
    }


}
