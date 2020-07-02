<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class DimensionInfo_Type2
{
    /**
     * @var string
     */
    protected $DescriptionOfGoods = null;
    /**
     * @var string
     */
    protected $Waybill = null;
    /**
     * @var float
     */
    protected $Length = null;
    /**
     * @var float
     */
    protected $Height = null;
    /**
     * @var float
     */
    protected $Width = null;
    /**
     * @var float
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo_Type2
     */
    public function setDescriptionOfGoods($DescriptionOfGoods)
    {
        $this->DescriptionOfGoods = $DescriptionOfGoods;

        return $this;
    }

    /**
     * @return string
     */
    public function getWaybill()
    {
        return $this->Waybill;
    }

    /**
     * @param string $Waybill
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo_Type2
     */
    public function setWaybill($Waybill)
    {
        $this->Waybill = $Waybill;

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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo_Type2
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo_Type2
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo_Type2
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\DimensionInfo_Type2
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;

        return $this;
    }
}
