<?php
require __DIR__.'/../vendor/autoload.php';

use Teknomavi\Kargo\CargoFactory;
use Teknomavi\Kargo\Model\Package;

$options = array( 
    "username" => "",
    "password" => ""
);
$provider = CargoFactory::initServiceProvider("Yurtici",$options);
$package = new Package();
$package->setPaymentType(Package::PAYMENT_TYPE_SHIPPER_PAY);
$package->setNumberOfPackages(1); // Daha sonra toplu da denenecek
$package->setConsigneeName("Seha Muhendislik Musavirlik AS");
$package->setConsigneeTown("CANKAYA");
$package->setConsigneeCity("ANKARA");
$package->setConsigneeAddress("AYTEN SOKAK 28/2 MEBUSEVLERI");
$package->setConsigneeEmail("selahaddinh123@gmail.com");
$package->setConsigneeCountry("Turkey");
$package->setConsigneeMobilPhone("05074320494");
$package->setConsigneePostalCode("06540");
$package->setInvoiceNo("TESTTES");
$package->setReferenceNo("99999692");// cargo Key I suppose
$package->setPackageType(Package::PACKAGE_TYPE_BOX);
$package->setShipmentType(Package::SHIPMENT_TYPE_PREPAID);
$provider->addPackage($package);
$package2 = new Package();
$package2->setPaymentType(Package::PAYMENT_TYPE_SHIPPER_PAY);
$package2->setNumberOfPackages(1); // Daha sonra toplu da denenecek
$package2->setConsigneeName("Seha Muhendislik Musavirlik AS");
$package2->setConsigneeTown("CANKAYA");
$package2->setConsigneeCity("ANKARA");
$package2->setConsigneeAddress("AYTEN SOKAK 28/2 MEBUSEVLERI");
$package2->setConsigneeEmail("selahaddinh123@gmail.com");
$package2->setConsigneeCountry("Turkey");
$package2->setConsigneeMobilPhone("05074320494");
$package2->setConsigneePostalCode("06540");
$package2->setInvoiceNo("TESTTES");
$package2->setReferenceNo("999933139692");// cargo Key I suppose
$package2->setPackageType(Package::PACKAGE_TYPE_BOX);
$package2->setShipmentType(Package::SHIPMENT_TYPE_PREPAID);
$provider->addPackage($package2);
$res = $provider->sendPackages();
print_r($res);