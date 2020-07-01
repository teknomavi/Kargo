<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\Test;
use Teknomavi\Kargo\CargoFactory;
use Teknomavi\Kargo\Model\Package;

class TestFunctions
{
    public static $options = array(
        "username" => "",
        "password" => ""
    );

    public static function TestGetPackageInfoByReferenceNumber($cargoKey)
    {
        $provider = CargoFactory::initServiceProvider("Yurtici", self::$options);
        $packageInfo = $provider->getPackageInfoByReferenceNumber($cargoKey);
        print_r($packageInfo);
    }
    public static function TestGetShipmentStatusByReferenceNumber($cargoKey)
    {
        $provider = CargoFactory::initServiceProvider("Yurtici", self::$options);
        $packageInfo = $provider->getShipmentStatusByReferenceNumber($cargoKey);
        print_r($packageInfo);
    }
    public static function TestGetShipmentStatusByReferenceNumberList($keyList)
    {
        $provider = CargoFactory::initServiceProvider("Yurtici", self::$options);
        $packageInfos = $provider->getShipmentStatusByReferenceNumberList($keyList);
        print_r($packageInfos);
    }
    public static function TestCreateShipment()
    {
        $provider = CargoFactory::initServiceProvider("Yurtici", self::$options);
        $package = new Package();
        $package->setPaymentType(Package::PAYMENT_TYPE_SHIPPER_PAY);
        $package->setNumberOfPackages(1); // Daha sonra toplu da denenecek
        $package->setConsigneeName("ABC Sirketi Muhendislik AS");
        $package->setConsigneeTown("KADIKOY");
        $package->setConsigneeCity("ISTANBUL");
        $package->setConsigneeAddress("TEST SOKAGI TEST CADDESI");
        $package->setConsigneeEmail("testUser@gtest.com");
        $package->setConsigneeCountry("Turkey");
        $package->setConsigneeMobilPhone("05555555555");
        $package->setConsigneePostalCode("76543");
        $package->setInvoiceNo("TESTTES");
        $package->setReferenceNo("9999XXXXXXY"); // cargo Key I suppose
        $package->setPackageType(Package::PACKAGE_TYPE_BOX);
        $package->setShipmentType(Package::SHIPMENT_TYPE_PREPAID);
        $provider->addPackage($package);
        $package2 = new Package();
        $package2->setPaymentType(Package::PAYMENT_TYPE_SHIPPER_PAY);
        $package2->setNumberOfPackages(1); // Daha sonra toplu da denenecek
        $package2->setConsigneeName("TEST Muhendislik Musavirlik AS");
        $package2->setConsigneeTown("CANKAYA");
        $package2->setConsigneeCity("ANKARA");
        $package2->setConsigneeAddress("TEST CADDESI TEST SOKAGI");
        $package2->setConsigneeEmail("testCONSIGNEE@gmail.com");
        $package2->setConsigneeCountry("Turkey");
        $package2->setConsigneeMobilPhone("05555555555");
        $package2->setConsigneePostalCode("76543");
        $package2->setInvoiceNo("TESTTES");
        $package2->setReferenceNo("9999XXXXXX"); // cargo Key I suppose
        $package2->setPackageType(Package::PACKAGE_TYPE_BOX);
        $package2->setShipmentType(Package::SHIPMENT_TYPE_PREPAID);
        $provider->addPackage($package2);
        $res = $provider->sendPackages();
        print_r($res);
    }
}



TestFunctions::TestCreateShipment();
TestFunctions::TestGetShipmentStatusByReferenceNumber("9999XXXXXX");
TestFunctions::TestGetPackageInfoByReferenceNumber("9999XXXXXX");
//TestFunctions::TestGetShipmentStatusByReferenceNumberList(["", ""]);
