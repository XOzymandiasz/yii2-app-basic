<?php

namespace unit\postal;

use app\modules\postal\forms\AddressTypeForm;
use app\modules\postal\sender\StructType\AdresType;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */

class AddressTypeFormTest extends Unit
{
    protected AddressTypeForm $model;

    protected function _before(): void
    {
        $this->model = new AddressTypeForm();
    }

    public function testValidationRequiredFields(): void
    {
        $this->model->name = "Jan Kowalski";
        $this->model->street = "Dmowskiego";
        $this->model->postalCode = "83314";
        $this->model->city = "Warszawa";

        $this->tester->assertTrue($this->model->validate());
    }

    public function testMissingValidationRequiredFields(): void
    {
        $this->model->name = "Jan Kowalski";

        $this->tester->assertFalse($this->model->validate());
    }

    public function testValidationStringTooLong(): void
    {
        $this->model->name = str_repeat('a', 61);
        $this->model->street = str_repeat('b', 256);
        $this->model->city = str_repeat('c', 64);
        $this->model->postalCode = str_repeat('1',20);


        $this->tester->assertFalse($this->model->validate());

        $errorName = $this->model->getFirstError('name');
        $errorStreet = $this->model->getFirstError('street');
        $errorCity = $this->model->getFirstError('city');
        $errorPostalCode = $this->model->getFirstError('postalCode');

        $this->tester->assertSame('Name should contain at most 60 characters.', $errorName);
        $this->tester->assertSame('Street should contain at most 255 characters.', $errorStreet);
        $this->tester->assertSame('City should contain at most 63 characters.', $errorCity);
        $this->tester->assertSame('Postal Code should contain at most 10 characters.', $errorPostalCode);
    }

    public function testValidationEmailTooShort(): void
    {
        $this->model->name = "Firma";
        $this->model->street = "Ulica";
        $this->model->postalCode = "11111";
        $this->model->city = "Miasto";
        $this->model->email = "x@x";


        $this->tester->assertFalse($this->model->validate());
        $error = $this->model->getFirstError('email');
        $this->tester->assertSame('Email should contain at least 6 characters.', $error);
    }

    public function testValidationInvalidPostalCode(): void
    {
        $this->model->name = "Firma";
        $this->model->street = "Ulica";
        $this->model->postalCode = "11-111";
        $this->model->city = "Miasto";

        $this->tester->assertFalse($this->model->validate());

        $error = $this->model->getFirstError('postalCode');
        $this->tester->assertSame('Postal code must contain only digits.', $error);
    }


    public function testSetModel(): void
    {
        $adresType = (new AdresType())
            ->setNazwa('Firma')
            ->setNazwa2('Dział testowy')
            ->setUlica('Ulica')
            ->setNumerDomu('12A')
            ->setNumerLokalu('4')
            ->setMiejscowosc('Miasto')
            ->setKodPocztowy('11111')
            ->setKraj('Polska')
            ->setTelefon('123456789')
            ->setEmail('firma@example.com')
            ->setMobile('987654321')
            ->setOsobaKontaktowa('Jan Kowalski')
            ->setNip('1234567890');

        $this->model->setModel($adresType);

        $this->tester->assertSame('Firma', $this->model->name);
        $this->tester->assertSame('Dział testowy', $this->model->name2);
        $this->tester->assertSame('Ulica', $this->model->street);
        $this->tester->assertSame('12A', $this->model->houseNumber);
        $this->tester->assertSame('4', $this->model->apartmentNumber);
        $this->tester->assertSame('Miasto', $this->model->city);
        $this->tester->assertSame('11111', $this->model->postalCode);
        $this->tester->assertSame('Polska', $this->model->country);
        $this->tester->assertSame('123456789', $this->model->phone);
        $this->tester->assertSame('firma@example.com', $this->model->email);
        $this->tester->assertSame('987654321', $this->model->mobile);
        $this->tester->assertSame('Jan Kowalski', $this->model->contactPerson);
        $this->tester->assertSame('1234567890', $this->model->taxID);
    }

    public function testCreateModel(): void
    {
        $this->model->name = "Firma";
        $this->model->street = "Ulica";
        $this->model->houseNumber = "12A";
        $this->model->apartmentNumber = "4";
        $this->model->postalCode = "11111";
        $this->model->city = "Miasto";
        $this->model->country = "Polska";
        $this->model->phone = "123456789";
        $this->model->email = "firma@example.com";
        $this->model->mobile = "987654321";
        $this->model->contactPerson = "Jan Kowalski";
        $this->model->taxID = "1234567890";


        $addressType = $this->model->createModel();

        $this->tester->assertInstanceOf(AdresType::class, $addressType);
        $this->tester->assertSame('Firma', $addressType->getNazwa());
        $this->tester->assertSame('Ulica', $addressType->getUlica());
        $this->tester->assertSame('12A', $addressType->getNumerDomu());
        $this->tester->assertSame('4', $addressType->getNumerLokalu());
        $this->tester->assertSame('Miasto', $addressType->getMiejscowosc());
        $this->tester->assertSame('11111', $addressType->getKodPocztowy());
        $this->tester->assertSame('Polska', $addressType->getKraj());
        $this->tester->assertSame('123456789', $addressType->getTelefon());
        $this->tester->assertSame('firma@example.com', $addressType->getEmail());
        $this->tester->assertSame('987654321', $addressType->getMobile());
        $this->tester->assertSame('Jan Kowalski', $addressType->getOsobaKontaktowa());
        $this->tester->assertSame('1234567890', $addressType->getNip());
    }









}