<?php

namespace functional\postal\forms\content;

use app\modules\postal\models\ShipmentContent;
use app\modules\postal\Module;
use Codeception\Util\HttpCode;
use FunctionalTester;
use tests\fixtures\ShipmentContentFixture;
use Yii;

class ShipmentContentUpdateCest
{

    private const ROUTE_UPDATE = 'postal/shipment-content/update';
    private const ROUTE_VIEW = 'postal/shipment-content/view';
    private const ROUTE_INDEX = 'postal/shipment-content/index';
    public function _fixtures(): array
    {
        return [
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
            ],
        ];
    }

    public function checkRender(FunctionalTester $I): void
    {
        $module = Yii::$app->getModule('postal');
        $user = $module->userClass::findOne(['name' => 'admin']);
        $I->amLoggedInAs($user);

        $model = $I->grabFixture('content', 'content_1');

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

        $I->seeInCurrentUrl(static::ROUTE_INDEX);

        $I->see(Module::t('postal', 'You must be logged in to view this page.'));
    }

    public function checkUpdateNotFound(FunctionalTester $I): void
    {
        $module = Yii::$app->getModule('postal');
        $user   = $module->userClass::findOne(['name' => 'admin']);
        $I->amLoggedInAs($user);

        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => 999999]);
        $I->seeResponseCodeIs(HttpCode::NOT_FOUND);
    }

    public function checkUpdatePostValid(FunctionalTester $I): void
    {
        $module = Yii::$app->getModule('postal');
        $user = $module->userClass::findOne(['name' => 'admin']);
        $I->amLoggedInAs($user);

        $model = $I->grabFixture('content', 'content_1');
        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => $model->id]);

        $I->submitForm('#shipment-content-form', [
            'ShipmentContent[name]' => 'Documents',
            'ShipmentContent[is_active]' => 1,
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);

        $id = (int) $I->grabFromCurrentUrl('~id=(\d+)~');
        $I->seeInCurrentUrl(static::ROUTE_VIEW . '?id=' . $id);

        $I->seeRecord(ShipmentContent::class, [
            'id'        => $id,
            'name'      => 'Documents',
            'is_active' => 1,
        ]);
    }

    public function checkUpdatePostInvalid(FunctionalTester $I): void
    {
        $module = Yii::$app->getModule('postal');
        $user = $module->userClass::findOne(['name' => 'admin']);
        $I->amLoggedInAs($user);

        $model = $I->grabFixture('content', 'content_1');
        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => $model->id]);

        $I->submitForm('#shipment-content-form', [
            'ShipmentContent[name]' => '',
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeInCurrentUrl(static::ROUTE_VIEW, ['id' => $model->id]);
        $I->see($model->name);
    }

}