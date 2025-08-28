<?php

namespace app\modules\postal\tests\functional\forms\content;

use app\modules\postal\tests\fixtures\UserFixture;
use FunctionalTester;

class ShipmentContentIndexCest
{
    public const ROUTE_CREATE = '/postal/shipment-content/create';
    public const ROUTE_INDEX = '/postal/shipment-content/index';

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

        $I->see('Shipment Contents', 'h1');

        $I->seeLink('Create Shipment Content', static::ROUTE_CREATE);
    }

    public function checkPostSearch(FunctionalTester $I): void
    {
        $I->amOnRoute(static::ROUTE_INDEX);

        $I->see('Id');
        $I->see('Name');
        $I->see('Is Active');
        $I->seeElement('input[name="ShipmentContentPostSearch[id]"]');
        $I->seeElement('input[name="ShipmentContentPostSearch[name]"]');
        $I->seeElement('select[name="ShipmentContentPostSearch[is_active]"]');
    }

    public function createButtonNavigates(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');

        $I->amOnRoute(static::ROUTE_INDEX);

        $I->amLoggedInAs($user->id);
        $I->click('Create Shipment Content');
        $I->seeResponseCodeIs(200);
        $I->seeInCurrentUrl(static::ROUTE_CREATE);
        $I->see('Create Shipment Content', 'h1');
    }
}