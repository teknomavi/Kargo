<?php
namespace Teknomavi\Kargo\Company\Yurtici\Helper;

use Teknomavi\Kargo\Model\Package;

// A middle class used as a struct to store package info on memory
// which doesn't have any dynamic functions and redundant field
// the primary concern here is reduction of memory footprint
class ShipmentInfo
{
    public $referenceNo;
    public $invoiceNo;
    public $consigneeName;
    public $consigneeAddress;
    public $consigneeCity;
    public $consigneeTown;
    public $consigneeMobilPhone;
    public $consigneeEmail;
    public $noOfPackages;

    // Two lightweight static functions for conversion back to package
    public static function generatePackage(ShipmentInfo $sI): Package
    {
        $package = new Package();
        $package->setReferenceNo($sI->referenceNo);
        $package->setInvoiceNo($sI->invoiceNo);
        $package->setConsigneeName($sI->consigneeName);
        $package->setConsigneeAddress($sI->consigneeAddress);
        $package->setConsigneeCity($sI->consigneeCity);
        $package->setConsigneeTown($sI->consigneeTown);
        $package->setConsigneeMobilPhone($sI->consigneeMobilPhone);
        $package->setConsigneeEmail($sI->consigneeEmail);
        $package->setNumberOfPackages($sI->noOfPackages);

        return $package;
    }

    public static function generateFromPackage(Package $p): ShipmentInfo
    {
        $sI = new ShipmentInfo();
        $sI->referenceNo = $p->getReferenceNo();
        $sI->invoiceNo = $p->getInvoiceNo();
        $sI->consigneeName = $p->getConsigneeName();
        $sI->consigneeAddress = $p->getConsigneeAddress();
        $sI->consigneeCity = $p->getConsigneeCity();
        $sI->consigneeTown = $p->getConsigneeTown();
        $sI->consigneeMobilPhone = $p->getConsigneeMobilPhone();
        $sI->consigneeEmail = $p->getConsigneeEmail();
        $sI->noOfPackages = $p->getNumberOfPackages();

        return $sI;
    }
}
