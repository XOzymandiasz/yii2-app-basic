<?php

namespace tests\unit\postal\forms;

use _support\UnitModelTrait;
use app\modules\postal\forms\AddressTypeForm;
use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\models\ShipmentDirectionInterface;
use Codeception\Test\Unit;
use Throwable;
use unit\fixtures\ShipmentAddressFixture;
use UnitTester;
use yii\base\Model;
use yii\db\StaleObjectException;

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

    public function _fixtures(): array
    {
        return [
            'address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php'
            ],
        ];
    }

    public function testValidationRequiredFields(): void
    {
        $this->model->name = "Jan Kowalski";
        $this->model->house_number = "1";
        $this->model->postal_code = "83314";
        $this->model->city = "Warszawa";

        $this->thenSuccessValidate();
    }

    public function testEmptyTest(): void
    {
        $this->thenUnsuccessValidate();

        $this->thenSeeError('Name cannot be blank.', 'name');
        $this->thenSeeError('House Number cannot be blank.', 'house_number');
        $this->thenSeeError('City cannot be blank.', 'city');
        $this->thenSeeError('Postal Code cannot be blank.', 'postal_code');
    }

    public function testValidationTooLong(): void
    {
        $this->model->name = str_repeat('a', 61);
        $this->model->house_number = str_repeat('b', 13);
        $this->model->city = str_repeat('c', 64);
        $this->model->postal_code = str_repeat('1',20);


        $this->thenUnsuccessValidate();

        $this->thenSeeError('Name should contain at most 60 characters.', 'name');
        $this->thenSeeError('House Number should contain at most 11 characters.', 'house_number');
        $this->thenSeeError('City should contain at most 63 characters.', 'city');
        $this->thenSeeError('Postal Code should contain at most 10 characters.', 'postal_code');
    }

    public function testValidationEmailTooShort(): void
    {
        $this->model->name = "Firma";
        $this->model->house_number = "1";
        $this->model->postal_code = "11111";
        $this->model->city = "Miasto";
        $this->model->email = "x@x";

        $this->thenUnsuccessValidate();

        $this->thenSeeError('Email should contain at least 6 characters.', 'email');
     }

    public function testValidationInvalidPostalCode(): void
    {
        $this->model->name = "Firma";
        $this->model->house_number = "1";
        $this->model->postal_code = "11-111";
        $this->model->city = "Miasto";

        $this->thenUnsuccessValidate();

        $this->thenSeeError('Postal code must contain only digits.', 'postal_code');
    }

    public function testSave(): void
    {
        $this->model->name = "Jan Kowalski";
        $this->model->street = "Dmowskiego";
        $this->model->postal_code = "83314";
        $this->model->city = "Warszawa";
        $this->model->country = "PL";
        $this->model->house_number = "1";
        $this->model->apartment_number = "1";
        $this->model->name_2 = "Jan Kochanowski";
        $this->model->email = "firma@example.com";
        $this->model->phone = '123456789';
        $this->model->mobile = '987654321';
        $this->model->contact_person = '333333333';
        $this->model->taxID = '1234567890';

        $this->thenSuccessValidate();
        $this->thenSuccessSave();
        $this->tester->seeRecord(ShipmentAddress::class, [
            'name' => $this->model->name,
            'street' => $this->model->street,
            'postal_code' => $this->model->postal_code,
            'city' => $this->model->city,
            'country' => $this->model->country,
            'house_number' => $this->model->house_number,
            'apartment_number' => $this->model->apartment_number,
            'name_2' => $this->model->name_2,
            'email' => $this->model->email,
            'phone' => $this->model->phone,
            'mobile' => $this->model->mobile,
            'contact_person' => $this->model->contact_person,
            'taxID' => $this->model->taxID,
        ]);
    }

    public function testSetModel(): void
    {
        $model = $this->tester->grabFixture('address', 'address_1');

        $this->model->setModel($model);

        $this->tester->assertSame($model->name, $this->model->name);
        $this->tester->assertSame($model->name_2, $this->model->name_2);
        $this->tester->assertSame($model->street, $this->model->street);
        $this->tester->assertSame($model->house_number, $this->model->house_number);
        $this->tester->assertSame($model->apartment_number, $this->model->apartment_number);
        $this->tester->assertSame($model->city, $this->model->city);
        $this->tester->assertSame($model->postal_code, $this->model->postal_code);
        $this->tester->assertSame($model->country, $this->model->country);
        $this->tester->assertSame($model->phone, $this->model->phone);
        $this->tester->assertSame($model->email, $this->model->email);
        $this->tester->assertSame($model->mobile, $this->model->mobile);
        $this->tester->assertSame($model->contact_person, $this->model->contact_person);
        $this->tester->assertSame($model->taxID, $this->model->taxID);
    }

    public function testGetModel(): void
    {
        $model = $this->tester->grabFixture('address', 'address_1');

        $this->model->setModel($model);

        $gottenModel = $this->model->getModel();

        $this->tester->assertInstanceOf(ShipmentAddress::class, $gottenModel);
        $this->tester->assertSame($model->name, $gottenModel->name);
        $this->tester->assertSame($model->street, $gottenModel->street);
        $this->tester->assertSame($model->house_number, $gottenModel->house_number);
        $this->tester->assertSame($model->apartment_number, $gottenModel->apartment_number);
        $this->tester->assertSame($model->city, $gottenModel->city);
        $this->tester->assertSame($model->postal_code, $gottenModel->postal_code);
        $this->tester->assertSame($model->country, $gottenModel->country);
        $this->tester->assertSame($model->phone, $gottenModel->phone);
        $this->tester->assertSame($model->email, $gottenModel->email);
        $this->tester->assertSame($model->mobile, $gottenModel->mobile);
        $this->tester->assertSame($model->contact_person, $gottenModel->contact_person);
        $this->tester->assertSame($model->taxID, $gottenModel->taxID);
    }

    public function testUpdate(): void
    {
        $id = $this->tester->haveRecord(ShipmentAddress::class, [
            'name' => 'Jan Kowalski',
            'house_number' => '1',
            'postal_code' => '00000',
            'city' => 'Miasto',
            'country' => 'PL',
            'option' => ShipmentDirectionInterface::DIRECTION_IN,
        ]);
        $model = ShipmentAddress::findOne(['id' => $id]);

        $this->model->setModel($model);
        $this->model->name = "Update test";
        $this->model->street = "street";
        $this->model->postal_code = "11111";
        $this->model->city = "Warsaw";
        $this->model->country = "PL";
        $this->model->house_number = "2";
        $this->model->apartment_number = "3";
        $this->model->name_2 = "Second name";
        $this->model->email = "firmaX@example.com";
        $this->model->phone = '987654321';
        $this->model->mobile = '123456789';
        $this->model->contact_person = '111111111';
        $this->model->taxID = '0123456789';

        $this->assertNotNull($model);
        $this->thenSuccessValidate();
        $this->thenSuccessSave();
        $this->tester->seeRecord(ShipmentAddress::class, [
            'id' => $model->id,
            'name' => 'Update test',
            'street' => 'street',
            'postal_code' => '11111',
            'city' => 'Warsaw',
            'house_number' => '2',
            'apartment_number' => '3',
            'name_2' => 'Second name',
            'email' => 'firmaX@example.com',
            'phone' => '987654321',
            'mobile' => '123456789',
            'contact_person' => '111111111',
            'taxID' => '0123456789',
        ]);

    }

    /**
     * @throws Throwable
     * @throws StaleObjectException
     */
    public function testDelete(): void
    {
        $id = $this->tester->haveRecord(ShipmentAddress::class, [
            'name' => 'Jan Kowalski',
            'house_number' => '1',
            'postal_code' => '00000',
            'city' => 'Miasto',
            'country' => 'PL',
            'option' => ShipmentDirectionInterface::DIRECTION_IN,
        ]);

        $this->tester->seeRecord(ShipmentAddress::class, ['id' => $id]);

        $model = ShipmentAddress::findOne($id);
        $this->assertNotNull($model);
        $this->tester->assertNotFalse($model->delete());
        $this->tester->dontSeeRecord(ShipmentAddress::class, ['id' => $id]);

    }

    public function getModel(): Model
    {
        return $this->model;
    }
}
