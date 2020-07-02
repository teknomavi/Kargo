<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class BoxType
{
    /**
     * @var int
     */
    protected $BoxTypeCode = null;
    /**
     * @var int
     */
    protected $BoxCount = null;

    /**
     * @param int $BoxTypeCode
     * @param int $BoxCount
     */
    public function __construct($BoxTypeCode, $BoxCount)
    {
        $this->BoxTypeCode = $BoxTypeCode;
        $this->BoxCount = $BoxCount;
    }

    /**
     * @return int
     */
    public function getBoxTypeCode()
    {
        return $this->BoxTypeCode;
    }

    /**
     * @param int $BoxTypeCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\BoxType
     */
    public function setBoxTypeCode($BoxTypeCode)
    {
        $this->BoxTypeCode = $BoxTypeCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getBoxCount()
    {
        return $this->BoxCount;
    }

    /**
     * @param int $BoxCount
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\BoxType
     */
    public function setBoxCount($BoxCount)
    {
        $this->BoxCount = $BoxCount;

        return $this;
    }
}
