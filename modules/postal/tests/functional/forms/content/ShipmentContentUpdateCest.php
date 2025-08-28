<?php

namespace app\modules\postal\tests\functional\forms\content;

use app\modules\postal\models\ShipmentContent;
use app\modules\postal\Module;
use app\modules\postal\tests\fixtures\ShipmentContentFixture;
use app\modules\postal\tests\fixtures\UserFixture;
use Codeception\Util\HttpCode;
use FunctionalTester;

class ShipmentContentUpdateCest
{

    private const ROUTE_UPDATE = 'postal/shipment-content/update';
    private const ROUTE_VIEW = 'postal/shipment-content/view';
    private const ROUTE_LOG_IN = 'site/login';

    public function _fixtures(): array
    {
        return [
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
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

        $model = $I->grabFixture('content', 'content_active');

        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => $model->id]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Update Shipment Content', 'h1');
        $I->seeElement('form');
        $I->seeElement('input', ['name' => 'ShipmentContent[name]']);
        $I->seeInField('#shipmentcontent-name', $model->name);
        $I->seeElement('input', ['name' => 'ShipmentContent[is_active]']);
        $I->seeInField('#shipmentcontent-is_active', $model->is_active);
    }

    public function checkGuestCannotAccessCreate(FunctionalTester $I): void
    {
        $I->amOnRoute(static::ROUTE_UPDATE);

        $I->seeResponseCodeIs(HttpCode::OK);

        $I->seeInCurrentUrl(static::ROUTE_LOG_IN);
    }

    public function checkUpdateNotFound(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);

        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => 999999]);
        $I->seeResponseCodeIs(HttpCode::NOT_FOUND);
    }

    public function checkUpdatePostValid(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);

        $model = $I->grabFixture('content', 'content_active');
        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => $model->id]);

        $I->submitForm('#shipment-content-form', [
            'ShipmentContent[name]' => 'Documents',
            'ShipmentContent[is_active]' => 1,
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);

        $I->seeRecord(ShipmentContent::class, [
            'name' => 'Documents',
            'is_active' => 1,
        ]);

        $id = $I->grabRecord(ShipmentContent::class, [
            'name' => 'documents',
        ])->id;

        $I->seeInCurrentUrl(static::ROUTE_VIEW . '?id=' . $id);
    }

    public function checkUpdateEmpty(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);

        $model = $I->grabFixture('content', 'content_active');
        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => $model->id]);

        $I->submitForm('#shipment-content-form', [
            'ShipmentContent[name]' => '',
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeInCurrentUrl(static::ROUTE_VIEW, ['id' => $model->id]);
        $I->see($model->name);
    }

}