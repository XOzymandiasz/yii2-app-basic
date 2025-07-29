<?php

namespace unit\postal\sender\forms;

use app\modules\postal\forms\ShipperAddressTypeForm;
use app\modules\postal\sender\StructType\ProfilType;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */

class ShipperAddressTypeFormTest extends Unit
{
    protected ShipperAddressTypeForm $model;

    protected function _before(): void
    {
        $this->model = new ShipperAddressTypeForm();
    }

    public function testValidationWithValidData(): void
    {
        $this->model->name = "Firma";
        $this->model->street = "Ulica";
        $this->model->postalCode = "12345";
        $this->model->city = "Miasto";

        $this->model->idProfil = 1001;
        $this->model->shortName = 77;
        $this->model->fax = "222333444";
        $this->model->mpk = "MPK-001";

        $this->tester->assertTrue($this->model->validate());
        $this->tester->assertEmpty($this->model->getErrors());
    }

    public function testValidationInvalidFaxLength(): void
    {
        $this->model->name = "Firma";
        $this->model->street = "Ulica";
        $this->model->city = "Miasto";
        $this->model->postalCode = "12345";

        $this->model->fax = str_repeat('1', 31);

        $this->tester->assertFalse($this->model->validate());
        $this->tester->assertSame('Fax should contain at most 30 characters.',
                                            $this->model->getFirstError('fax'));
     }

    public function testCreateModel(): void
    {
        $this->model->name = "Firma";
        $this->model->name2 = "Oddział";
        $this->model->street = "Ulica";
        $this->model->houseNumber = "12A";
        $this->model->apartmentNumber = "4";
        $this->model->postalCode = "12345";
        $this->model->city = "Miasto";
        $this->model->country = "Polska";
        $this->model->phone = "123456789";
        $this->model->email = "firma@example.com";
        $this->model->mobile = "987654321";
        $this->model->contactPerson = "Jan Kowalski";
        $this->model->taxID = "1234567890";

        $this->model->idProfil = 999;
        $this->model->shortName = '17';
        $this->model->fax = "888777666";
        $this->model->mpk = "MPK-02";

        $profil = $this->model->createModel();

        $this->tester->assertInstanceOf(ProfilType::class, $profil);

        $this->tester->assertSame("Firma", $profil->getNazwa());
        $this->tester->assertSame("Oddział", $profil->getNazwa2());
        $this->tester->assertSame("Ulica", $profil->getUlica());
        $this->tester->assertSame("12A", $profil->getNumerDomu());
        $this->tester->assertSame("4", $profil->getNumerLokalu());
        $this->tester->assertSame("Miasto", $profil->getMiejscowosc());
        $this->tester->assertSame("12345", $profil->getKodPocztowy());
        $this->tester->assertSame("Polska", $profil->getKraj());
        $this->tester->assertSame("123456789", $profil->getTelefon());
        $this->tester->assertSame("firma@example.com", $profil->getEmail());
        $this->tester->assertSame("987654321", $profil->getMobile());
        $this->tester->assertSame("Jan Kowalski", $profil->getOsobaKontaktowa());
        $this->tester->assertSame("1234567890", $profil->getNip());

        $this->tester->assertSame(999, $profil->getIdProfil());
        $this->tester->assertSame('17', $profil->getNazwaSkrocona());
        $this->tester->assertSame("888777666", $profil->getFax());
        $this->tester->assertSame("MPK-02", $profil->getMpk());
    }

    public function testSetModel(): void
    {
        $profil = (new ProfilType())
            ->setNazwa("Firma")
            ->setNazwa2("Oddział")
            ->setUlica("Ulica")
            ->setNumerDomu("12A")
            ->setNumerLokalu("4")
            ->setMiejscowosc("Miasto")
            ->setKodPocztowy("12345")
            ->setKraj("Polska")
            ->setTelefon("123456789")
            ->setEmail("firma@example.com")
            ->setMobile("987654321")
            ->setOsobaKontaktowa("Jan Kowalski")
            ->setNip("1234567890")
            ->setIdProfil(500)
            ->setNazwaSkrocona(55)
            ->setFax("fax123")
            ->setMpk("MPK-X");

        $this->model->setModel($profil);

        $this->tester->assertSame("Firma", $this->model->name);
        $this->tester->assertSame("Oddział", $this->model->name2);
        $this->tester->assertSame("Ulica", $this->model->street);
        $this->tester->assertSame("12A", $this->model->houseNumber);
        $this->tester->assertSame("4", $this->model->apartmentNumber);
        $this->tester->assertSame("Miasto", $this->model->city);
        $this->tester->assertSame("12345", $this->model->postalCode);
        $this->tester->assertSame("Polska", $this->model->country);
        $this->tester->assertSame("123456789", $this->model->phone);
        $this->tester->assertSame("firma@example.com", $this->model->email);
        $this->tester->assertSame("987654321", $this->model->mobile);
        $this->tester->assertSame("Jan Kowalski", $this->model->contactPerson);
        $this->tester->assertSame("1234567890", $this->model->taxID);

        $this->tester->assertSame(500, $this->model->idProfil);
        $this->tester->assertSame(55, $this->model->shortName);
        $this->tester->assertSame("fax123", $this->model->fax);
        $this->tester->assertSame("MPK-X", $this->model->mpk);
    }

}