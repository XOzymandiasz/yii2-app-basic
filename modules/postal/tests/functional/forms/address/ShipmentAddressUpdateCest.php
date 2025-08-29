<?php

namespace app\modules\postal\tests\functional\forms\address;

use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\tests\fixtures\ShipmentAddressFixture;
use app\modules\postal\tests\fixtures\UserFixture;
use Codeception\Util\HttpCode;
use FunctionalTester;

class ShipmentAddressUpdateCest
{
    private const ROUTE_UPDATE = '/postal/shipment-address/update';
    private const ROUTE_VIEW = '/postal/shipment-address/view';
    private const ROUTE_LOG_IN = 'site/login';

    public function _fixtures(): array
    {
        return [
            'address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php'
            ],
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ],
        ];
    }

    public function checkRender(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');

        $I->amLoggedInAs($user->id);

        $model = $I->grabFixture('address', 'sender');

        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => $model->id]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Update Shipment Address', 'h1');
        $I->seeElement('form');
        $I->seeElement('input', ['name' => 'AddressTypeForm[name]']);
        $I->seeInField('#shipmentaddress-name', $model->name);
        $I->seeElement('input', ['name' => 'AddressTypeForm[street]']);
        $I->seeInField('#shipmentaddress-street', $model->street);
        $I->seeElement('input', ['name' => 'AddressTypeForm[house_number]']);
        $I->seeInField('#shipmentaddress-house_number', $model->house_number);
        $I->seeElement('input', ['name' => 'AddressTypeForm[apartment_number]']);
        $I->seeInField('#shipmentaddress-apartment_number', $model->apartment_number);
        $I->seeElement('input', ['name' => 'AddressTypeForm[postal_code]']);
        $I->seeInField('#shipmentaddress-postal_code', $model->postal_code);
        $I->seeElement('input', ['name' => 'AddressTypeForm[city]']);
        $I->seeInField('#shipmentaddress-name', $model->city);
        $I->seeElement('input', ['name' => 'AddressTypeForm[country]']);
        $I->seeInField('#shipmentaddress-name', $model->country);
    }

    public function checkGuestCannotAccessCreate(FunctionalTester $I): void
    {
        $I->amOnRoute(static::ROUTE_UPDATE);

        $I->seeResponseCodeIs(HttpCode::OK);

        $I->seeInCurrentUrl(static::ROUTE_LOG_IN);
    }

}