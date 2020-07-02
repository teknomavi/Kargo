<?php

namespace Teknomavi\Kargo\Company\Surat\Helper\Gonderi;

class GonderiyiKargoyaGonder
{
    /**
     * @var string
     */
    protected $KullaniciAdi = null;

    /**
     * @var string
     */
    protected $Sifre = null;

    /**
     * @var Gonderi
     */
    protected $Gonderi = null;

    /**
     * @param string  $KullaniciAdi
     * @param string  $Sifre
     * @param Gonderi $Gonderi
     */
    public function __construct($KullaniciAdi, $Sifre, $Gonderi)
    {
        $this->KullaniciAdi = $KullaniciAdi;
        $this->Sifre = $Sifre;
        $this->Gonderi = $Gonderi;
    }

    /**
     * @return string
     */
    public function getKullaniciAdi()
    {
        return $this->KullaniciAdi;
    }

    /**
     * @param string $KullaniciAdi
     *
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\GonderiyiKargoyaGonder
     */
    public function setKullaniciAdi($KullaniciAdi)
    {
        $this->KullaniciAdi = $KullaniciAdi;

        return $this;
    }

    /**
     * @return string
     */
    public function getSifre()
    {
        return $this->Sifre;
    }

    /**
     * @param string $Sifre
     *
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\GonderiyiKargoyaGonder
     */
    public function setSifre($Sifre)
    {
        $this->Sifre = $Sifre;

        return $this;
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
