<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class WaybillList
{
    /**
     * @var string
     */
    protected $Waybill = null;

    public function __construct()
    {
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
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\WaybillList
     */
    public function setWaybill($Waybill)
    {
        $this->Waybill = $Waybill;

        return $this;
    }
}
