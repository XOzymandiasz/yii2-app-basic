<?php

namespace app\tests\functional\postal\forms\content;

use app\modules\postal\tests\fixtures\UserFixture;
use Codeception\Util\HttpCode;
use FunctionalTester;
use yii\helpers\Url;

class ShipmentContentIndexCest
{
    public const ROUTE_CREATE = 'postal/shipment-content/create';
    public const ROUTE_VIEW = 'postal/shipment-content/view';
    public const ROUTE_INDEX = 'postal/shipment-content/index';

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
        $I->amOnRoute(static::ROUTE_INDEX);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Shipment Contents', 'h1');
        $I->see('Create Shipment Content', 'a.btn.btn-success');
        $I->seeLink('Create Shipment Content', Url::to([static::ROUTE_CREATE]));

    }


}