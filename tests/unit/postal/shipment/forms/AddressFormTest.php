<?php

namespace unit\postal\shipment\forms;

use _support\UnitModelTrait;
use app\modules\postal\forms\AddressTypeForm;
use app\modules\postal\models\ShipmentAddress;
use Codeception\Test\Unit;
use UnitTester;
use yii\base\Model;

/**
 * @property UnitTester $tester
 */

class AddressFormTest extends Unit
{
    use UnitModelTrait;

    protected AddressTypeForm $model;

    protected function _before(): void
    {
        $this->model = new AddressTypeForm();
    }

    public function testValidationRequiredFields(): void
    {
        $this->model->name = "Jan Kowalski";
        $this->model->street = "Dmowskiego";
        $this->model->postal_code = "83314";
        $this->model->city = "Warszawa";

        $this->thenSuccessValidate(['name','street','postalCode','city']);
    }

    public function testEmptyTest(): void
    {
        $this->thenUnsuccessValidate(['name','street','postalCode','city']);

        $this->thenSeeError('Name cannot be blank.', 'name');
        $this->thenSeeError('Street cannot be blank.', 'street');
        $this->thenSeeError('City cannot be blank.', 'city');
        $this->thenSeeError('Postal Code cannot be blank.', 'postalCode');
    }

    public function testValidationStringTooLong(): void
    {
        $this->model->name = str_repeat('a', 61);
        $this->model->street = str_repeat('b', 256);
        $this->model->city = str_repeat('c', 64);
        $this->model->postalCode = str_repeat('1',20);


        $this->thenUnsuccessValidate(['name','street','postalCode','city']);

        $this->thenSeeError('Name should contain at most 60 characters.', 'name');
        $this->thenSeeError('Street should contain at most 255 characters.', 'street');
        $this->thenSeeError('City should contain at most 63 characters.', 'city');
        $this->thenSeeError('Postal Code should contain at most 10 characters.', 'postalCode');
    }

    public function testValidationEmailTooShort(): void
    {
        $this->model->name = "Firma";
        $this->model->street = "Ulica";
        $this->model->postal_code = "11111";
        $this->model->city = "Miasto";
        $this->model->email = "x@x";

        $this->thenUnsuccessValidate(['name','street','postalCode','city', 'email']);

        $this->thenSeeError('Email should contain at least 6 characters.', 'email');
     }

    public function testValidationInvalidPostalCode(): void
    {
        $this->model->name = "Firma";
        $this->model->street = "Ulica";
        $this->model->postal_code = "11-111";
        $this->model->city = "Miasto";


        $this->thenUnsuccessValidate(['name','street','postalCode','city']);

        $this->thenSeeError('Postal code must contain only digits.', 'postalCode');
    }


    public function testSetModel(): void
    {
        $adresType = new ShipmentAddress();
        $adresType->name = "Jan Kowalski";
        $adresType->street = "Dmowskiego";
        $adresType->postal_code = "83314";
        $adresType->city = "Warszawa";
        $adresType->country = "PL";
        $adresType->house_number = "1";
        $adresType->apartment_number = "1";
        $adresType->name_2 = "Jan Kochanowski";
        $adresType->email = "firma@example.com";
        $adresType->phone = '123456789';
        $adresType->mobile = '987654321';
        $adresType->contact_person = '333333333';
        $adresType->taxID = '1234567890';

        $this->model->setModel($adresType);

        $this->thenSuccessValidate(['name','street','postalCode','city',
            'country', 'house_number', 'mobile', 'contact_person', 'taxID']);

        $this->tester->assertSame('Jan Kowalski', $this->model->name);
        $this->tester->assertSame('Jan Kochanowski', $this->model->name_2);
        $this->tester->assertSame('Dmowskiego', $this->model->street);
        $this->tester->assertSame('1', $this->model->house_number);
        $this->tester->assertSame('1', $this->model->apartment_number);
        $this->tester->assertSame('Warszawa', $this->model->city);
        $this->tester->assertSame('83314', $this->model->postal_code);
        $this->tester->assertSame('PL', $this->model->country);
        $this->tester->assertSame('123456789', $this->model->phone);
        $this->tester->assertSame('firma@example.com', $this->model->email);
        $this->tester->assertSame('987654321', $this->model->mobile);
        $this->tester->assertSame('333333333', $this->model->contact_person);
        $this->tester->assertSame('1234567890', $this->model->taxID);
    }

    public function testGetModel(): void
    {
        $shipmentModel = new ShipmentAddress();
        $shipmentModel->name = "Firma";
        $shipmentModel->street = "Ulica";
        $shipmentModel->house_number = "12A";
        $shipmentModel->apartment_number = "4";
        $shipmentModel->postal_code = "11111";
        $shipmentModel->city = "Miasto";
        $shipmentModel->country = "Polska";
        $shipmentModel->phone = "123456789";
        $shipmentModel->email = "firma@example.com";
        $shipmentModel->mobile = "987654321";
        $shipmentModel->contact_person = "Jan Kowalski";
        $shipmentModel->taxID = "1234567890";

        $this->model->setModel($shipmentModel);

        $gotShipmentType = $this->model->getModel();

        $this->tester->assertInstanceOf(ShipmentAddress::class, $gotShipmentType);
        $this->tester->assertSame('Firma', $gotShipmentType->name);
        $this->tester->assertSame('Ulica', $gotShipmentType->street);
        $this->tester->assertSame('12A', $gotShipmentType->house_number);
        $this->tester->assertSame('4', $gotShipmentType->apartment_number);
        $this->tester->assertSame('Miasto', $gotShipmentType->city);
        $this->tester->assertSame('11111', $gotShipmentType->postal_code);
        $this->tester->assertSame('Polska', $gotShipmentType->country);
        $this->tester->assertSame('123456789', $gotShipmentType->phone);
        $this->tester->assertSame('firma@example.com', $gotShipmentType->email);
        $this->tester->assertSame('987654321', $gotShipmentType->mobile);
        $this->tester->assertSame('Jan Kowalski', $gotShipmentType->contact_person);
        $this->tester->assertSame('1234567890', $gotShipmentType->taxID);

        $this->thenSuccessValidate(['name','street','postalCode','city',
            'country', 'house_number', 'mobile', 'contact_person', 'taxID']);
    }


    public function getModel(): Model
    {
        return $this->model;
    }
}
