<?php

namespace app\modules\postal\tests\functional\forms\content;

use app\modules\postal\models\ShipmentContent;
use app\modules\postal\tests\fixtures\UserFixture;
use Codeception\Util\HttpCode;
use FunctionalTester;

class ShipmentContentCreateCest
{
    public const ROUTE_CREATE = 'postal/shipment-content/create';
    public const ROUTE_VIEW = 'postal/shipment-content/view';
    public const ROUTE_LOG_IN = 'site/login';

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
        codecept_debug($user);
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(static::ROUTE_CREATE);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Create Shipment Content', 'h1');
        $I->seeElement('form');
        $I->seeElement('input', ['name' => 'ContentTypeForm[name]']);
        $I->seeElement('input', ['name' => 'ContentTypeForm[is_active]']);
    }

    public function checkGuestCannotAccessCreate(FunctionalTester $I): void
    {
        $I->amOnRoute(static::ROUTE_CREATE);

        $I->seeResponseCodeIs(HttpCode::OK);

        $I->seeInCurrentUrl(static::ROUTE_LOG_IN);
    }

    public function checkCreatePostValid(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(static::ROUTE_CREATE);

        $I->submitForm('#shipment-content-form', [
            'ContentTypeForm[name]' => 'Documents',
            'ContentTypeForm[is_active]' => 0,
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);

        $I->seeRecord(ShipmentContent::class, [
            'name' => 'Documents',
            'is_active' => 0,
        ]);

        $id = $I->grabRecord(ShipmentContent::class, [
            'name' => 'Documents'
        ])->id;

        $I->seeInCurrentUrl(static::ROUTE_VIEW . '?id=' . $id);
    }

    public function checkCreatePostInvalid(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(static::ROUTE_CREATE);

        $I->submitForm('#shipment-content-form', [
            'ContentTypeForm[name]' => '',
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Create Shipment Content', 'h1');
        $I->see('Name cannot be blank');
    }


}