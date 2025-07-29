<?php

namespace unit\postal\forms;

use app\modules\postal\forms\AddressTypeForm;
use app\modules\postal\forms\ElektronicznyNadawcaShipmentForm;
use app\modules\postal\forms\ShipperAddressTypeForm;
use app\modules\postal\sender\EnumType\KategoriaType;
use app\modules\postal\sender\EnumType\ShipmentType;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class ElektronicznyNadawcaShipmentFormTest extends Unit
{
    protected ElektronicznyNadawcaShipmentForm $model;
    protected AddressTypeForm $addressType;
    protected ShipperAddressTypeForm $shipperType;

    protected function _before(): void
    {
        $this->model = new ElektronicznyNadawcaShipmentForm();
        $this->addressType = new AddressTypeForm();
        $this->shipperType = new ShipperAddressTypeForm();
    }

    public function testRequiredFieldsValidation(): void
    {
        $this->model->shipmentType = '';
        $this->model->category = '';
        $this->model->guid = '';

        $this->assertFalse($this->model->validate());
        $this->assertSame(
            'Shipment Type cannot be blank.',
            $this->model->getFirstError('shipmentType')
        );
    }

    public function testValidShipmentTypeAndCategory(): void
    {
        $this->model->shipmentType = ShipmentType::VALUE_PRZESYLKA_POLECONA_KRAJOWA;
        $this->model->category = KategoriaType::VALUE_EKONOMICZNA;
        $this->model->guid = '12345678901234567890123456789012';

        $this->assertTrue($this->model->validate());
    }

    public function testInvalidShipmentNumberFormat(): void
    {
        $this->model->shipmentType = ShipmentType::VALUE_PRZESYLKA_POLECONA_KRAJOWA;
        $this->model->category = KategoriaType::VALUE_PRIORYTETOWA;
        $this->model->guid = '12345678901234567890123456789012';
        $this->model->shipmentNumber = 'abc123';

        $this->assertFalse($this->model->validate());
        $this->assertSame(
            'Shipment number must contain only digits and be between 10 and 20 characters long.',
            $this->model->getFirstError('shipmentNumber')
        );
    }

    public function testValidShipmentNumber(): void
    {
        $this->model->shipmentType = ShipmentType::VALUE_PRZESYLKA_POLECONA_KRAJOWA;
        $this->model->category = KategoriaType::VALUE_EKONOMICZNA;
        $this->model->guid = '12345678901234567890123456789012';
        $this->model->shipmentNumber = '12345678980';

        $this->addressType->name = "Jan Kowalski";
        $this->addressType->street = "Dmowskiego";
        $this->addressType->postalCode = "83314";
        $this->addressType->city = "Warszawa";

        $this->shipperType->name = "Jan Kowalski";
        $this->shipperType->street = "Dmowskiego";
        $this->shipperType->postalCode = "83314";
        $this->shipperType->city = "Warszawa";



        $this->assertTrue($this->model->validate());

    }


}
