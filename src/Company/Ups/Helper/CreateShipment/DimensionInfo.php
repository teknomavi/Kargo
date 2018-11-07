<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class DimensionInfo
{
    /**
     * @var string $DescriptionOfGoods
     */
    protected $DescriptionOfGoods = null;
    /**
     * @var float $Length
     */
    protected $Length = null;
    /**
     * @var float $Height
     */
    protected $Height = null;
    /**
     * @var float $Width
     */
    protected $Width = null;
    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @param float $Length
     * @param float $Height
     * @param float $Width
     * @param float $Weight
     */
    public function __construct($Length, $Height, $Width, $Weight)
    {
        $this->Length = $Length;
        $this->Height = $Height;
        $this->Width = $Width;
        $this->Weight = $Weight;
    }

    /**
     * @return string
     */
    public function getDescriptionOfGoods()
    {
        return $this->DescriptionOfGoods;
    }

    /**
     * @param string $DescriptionOfGoods
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo
     */
    public function setDescriptionOfGoods($DescriptionOfGoods)
    {
        $this->DescriptionOfGoods = $DescriptionOfGoods;
        return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->Length;
    }

    /**
     * @param float $Length
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo
     */
    public function setLength($Length)
    {
        $this->Length = $Length;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param float $Height
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
        return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param float $Width
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param float $Weight
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;
        return $this;
    }
}
