<?php

namespace app\tests\functional\postal\forms\shipment;

use app\modules\postal\models\ShipmentDirectionInterface;
use Codeception\Util\HttpCode;
use FunctionalTester;
use tests\fixtures\UserFixture;

class ShipmentCreateInCest
{
    public const ROUTE_CREATE_IN = 'postal/shipment/create-out';
    public function _fixtures(): array
    {
        return [
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
        $I->amOnRoute(static::ROUTE_CREATE_IN);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Create Postal Shipment', 'h1');
        $I->seeElement('form');
        $I->seeElement('input', ['name' => 'ShipmentForm[number]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[provider]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[content_id]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[sender_id]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[receiver_id]']);

        $I->seeLink('Create Content', '/postal/shipment-content/create');
        $I->seeLink('Create Address', '/postal/shipment-address/create?direction='
            . ShipmentDirectionInterface::DIRECTION_OUT);
        $I->seeLink('Create Address', '/postal/shipment-address/create?direction='
            . ShipmentDirectionInterface::DIRECTION_IN);
        $I->seeElement('button', ['type' => 'submit']);
    }



}