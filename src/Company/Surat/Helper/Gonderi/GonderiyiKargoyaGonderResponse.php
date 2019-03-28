<?php

namespace Teknomavi\Kargo\Company\Surat\Helper\Gonderi;

class GonderiyiKargoyaGonderResponse
{

    /**
     * @var string $GonderiyiKargoyaGonderResult
     */
    protected $GonderiyiKargoyaGonderResult = null;

    /**
     * @param string $GonderiyiKargoyaGonderResult
     */
    public function __construct($GonderiyiKargoyaGonderResult)
    {
        $this->GonderiyiKargoyaGonderResult = $GonderiyiKargoyaGonderResult;
    }

    /**
     * @return string
     */
    public function getGonderiyiKargoyaGonderResult()
    {
        return $this->GonderiyiKargoyaGonderResult;
    }

    /**
     * @param string $GonderiyiKargoyaGonderResult
     *
     * @return \Teknomavi\Kargo\Company\Surat\Helper\Gonderi\GonderiyiKargoyaGonderResponse
     */
    public function setGonderiyiKargoyaGonderResult($GonderiyiKargoyaGonderResult)
    {
        $this->GonderiyiKargoyaGonderResult = $GonderiyiKargoyaGonderResult;
        return $this;
    }

}
