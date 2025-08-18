<?php

namespace functional\postal\forms\content;

use app\modules\postal\models\ShipmentContent;
use app\modules\postal\Module;
use Codeception\Util\HttpCode;
use FunctionalTester;
use Yii;

class ShipmentContentCreateCest
{
    /**
     * @see ShipmentContentController::actionCreate()
     */
    public const ROUTE_CREATE = 'postal/shipment-content/create';
    public const ROUTE_VIEW = 'postal/shipment-content/view';
    public const ROUTE_INDEX = 'postal/shipment-content/index';


    public function checkRender(FunctionalTester $I): void
    {
        $module = Yii::$app->getModule('postal');
        $user = $module->userClass::findOne(['name' => 'admin']);
        $I->amLoggedInAs($user);
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

        $I->seeInCurrentUrl(static::ROUTE_INDEX);

        $I->see(Module::t('postal', 'You must be logged in to view this page.'));
    }

    public function checkCreatePostValid(FunctionalTester $I): void
    {
        $module = Yii::$app->getModule('postal');
        $user = $module->userClass::findOne(['name' => 'admin']);
        $I->amLoggedInAs($user);
        $I->amOnRoute(static::ROUTE_CREATE);

        $I->submitForm('#shipment-content-form', [
            'ContentTypeForm[name]' => 'Documents',
            'ContentTypeForm[is_active]' => 1,
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);

        $id = (int) $I->grabFromCurrentUrl('~id=(\d+)~');
        $I->seeInCurrentUrl(static::ROUTE_VIEW . '?id=' . $id);

        $I->seeRecord(ShipmentContent::class, [
           'id' => $id,
           'name' => 'Documents',
           'is_active' => 1,
        ]);

    }

    public function checkCreatePostInvalid(FunctionalTester $I): void
    {
        $module = Yii::$app->getModule('postal');
        $user = $module->userClass::findOne(['name' => 'admin']);
        $I->amLoggedInAs($user);
        $I->amOnRoute(static::ROUTE_CREATE);

        $I->submitForm('#shipment-content-form', [
            'ContentTypeForm[name]' => '',
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeInCurrentUrl(static::ROUTE_CREATE);
        $I->see('Create Shipment Content', 'h1');
        $I->see('Name cannot be blank');
    }


}