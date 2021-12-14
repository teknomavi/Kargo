<?php
namespace Teknomavi\Kargo\Company\Ptt\Helper\Shipment;

class GonderiyiKargoyaGonderResponse
{
    /**
     * @var string
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
     * @return \Teknomavi\Kargo\Company\Ptt\Helper\Shipment\GonderiyiKargoyaGonderResponse
     */
    public function setGonderiyiKargoyaGonderResult($GonderiyiKargoyaGonderResult)
    {
        $this->GonderiyiKargoyaGonderResult = $GonderiyiKargoyaGonderResult;

        return $this;
    }
}
