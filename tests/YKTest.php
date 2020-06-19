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
$package->setReferenceNo("999999691");// cargo Key I suppose
$package->setPackageType(Package::PACKAGE_TYPE_BOX);
$package->setShipmentType(Package::SHIPMENT_TYPE_PREPAID);
$provider->addPackage($package);
$res = $provider->sendPackages();
print_r($res);