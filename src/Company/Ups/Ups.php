<?php

class Ups extends \Teknomavi\Kargo\Company\CompanyAbstract implements \Teknomavi\Kargo\Company\CompanyInterface
{


    public function hasCreateShipmentServices(): bool
    {
        return true;
    }

    public function hasPackageQueryServices(): bool
    {
        return true;
    }
}
