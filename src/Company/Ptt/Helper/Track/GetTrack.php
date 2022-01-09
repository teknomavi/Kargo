<?php

namespace Teknomavi\Kargo\Company\Ptt\Helper\Track;

class GetTrack
{

    /**
     * @var string
     */
    public string $kullanici;

    /**
     * @var string
     */
    public string $sifre;

    /**
     * @var string
     */
    public string $referansNo;

    /**
     * @return string
     */
    public function getKullanici()
    {
        return $this->kullanici;
    }

    /**
     * @param $kullanici
     */
    public function setKullanici($kullanici): void
    {
        $this->kullanici = $kullanici;
    }

    /**
     * @return string
     */
    public function getSifre(): string
    {
        return $this->sifre;
    }

    /**
     * @param string $sifre
     */
    public function setSifre(string $sifre): void
    {
        $this->sifre = $sifre;
    }

    /**
     * @return string
     */
    public function getReferansNo(): string
    {
        return $this->referansNo;
    }

    /**
     * @param string $referansNo
     */
    public function setReferansNo(string $referansNo): void
    {
        $this->referansNo = $referansNo;
    }

    /**
     * @return \string[][]
     */
    public function query()
    {
        return ['input' => [
            'kullanici' => $this->getKullanici(),
            'sifre' => $this->getSifre(),
            'referansNo' => $this->getReferansNo()
        ]];
    }

}
