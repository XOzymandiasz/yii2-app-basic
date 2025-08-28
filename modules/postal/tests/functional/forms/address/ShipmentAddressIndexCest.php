<?php

namespace app\modules\postal\tests\functional\forms\address;

use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\models\ShipmentProviderInterface;
use app\modules\postal\tests\fixtures\UserFixture;
use FunctionalTester;
use yii\helpers\Url;

class ShipmentAddressIndexCest
{
    public const ROUTE_CREATE = '/postal/shipment-address/create';
    public const ROUTE_INDEX = '/postal/shipment-address/index';

    public function _fixtures(): array
    {
        return [
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ],
        ];
    }

    public function checkBasicRender(FunctionalTester $I): void
    {
        $I->amOnRoute(static::ROUTE_INDEX);

        $I->see('Shipment Address', 'h1');

        $I->seeLink('Create Shipment Address Receiver', Url::to([
            static::ROUTE_CREATE,
            'direction' => ShipmentDirectionInterface::DIRECTION_IN]));


        $I->seeLink('Create Shipment Address Sender', Url::to([
            static::ROUTE_CREATE,
            'direction' => ShipmentDirectionInterface::DIRECTION_OUT]));
    }

    public function checkPostSearch(FunctionalTester $I): void
    {
        $I->amOnRoute(static::ROUTE_INDEX);

        $I->see('Id');
        $I->see('Name');
        $I->see('Street');
        $I->see('House number');
        $I->see('Apartment number');
        $I->see('City');
        $I->see('Country');
        $I->see('Postal Code');
        $I->see('Option');
        $I->seeElement('input[name="ShipmentAddressPostSearch[id]"]');
        $I->seeElement('input[name="ShipmentAddressPostSearch[name]"]');
        $I->seeElement('input[name="ShipmentAddressPostSearch[street]"]');
        $I->seeElement('input[name="ShipmentAddressPostSearch[house_number]"]');
        $I->seeElement('input[name="ShipmentAddressPostSearch[apartment_number]"]');
        $I->seeElement('input[name="ShipmentAddressPostSearch[postal_code]"]');
        $I->seeElement('input[name="ShipmentAddressPostSearch[city]"]');
        $I->seeElement('input[name="ShipmentAddressPostSearch[country]"]');
        $I->seeElement('select[name="ShipmentAddressPostSearch[option]"]');
    }

    public function checkCreateINButtonNavigates(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');

        $I->amOnRoute(static::ROUTE_INDEX);

        $I->amLoggedInAs($user->id);
        $I->click('Create Shipment Address Receiver');
        $I->seeResponseCodeIs(200);
        $I->seeInCurrentUrl(Url::to([
            static::ROUTE_CREATE,
            'direction' => ShipmentDirectionInterface::DIRECTION_IN]));
    }

    public function checkCreateOUTButtonNavigates(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');

        $I->amOnRoute(static::ROUTE_INDEX);

        $I->amLoggedInAs($user->id);
        $I->click('Create Shipment Address Sender');
        $I->seeResponseCodeIs(200);
        $I->seeInCurrentUrl(Url::to([
            static::ROUTE_CREATE,
            'direction' => ShipmentDirectionInterface::DIRECTION_OUT]));
    }
}