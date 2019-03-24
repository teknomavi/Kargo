<?php

namespace Teknomavi\Kargo\Company\Surat\Helper\Gonderi;

/**
 * Class GonderiyiKargoyaGonder
 *
 * @package Teknomavi\Kargo\Company\Surat\Helper\Gonderi
 */
class GonderiyiKargoyaGonder
{
    /**
     * @var string $KullaniciAdi
     */
    protected $KullaniciAdi = null;
    /**
     * @var string $Sifre
     */
    protected $Sifre = null;
    /**
     * @var Gonderi $Gonderi
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
     * @param $KullaniciAdi
     *
     * @return $this
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
     * @param $Sifre
     *
     * @return $this
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
     * @param $Gonderi
     *
     * @return $this
     */
    public function setGonderi($Gonderi)
    {
        $this->Gonderi = $Gonderi;
        return $this;
    }
}
