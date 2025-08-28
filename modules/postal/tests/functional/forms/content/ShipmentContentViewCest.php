<?php

namespace app\modules\postal\tests\functional\forms\content;

use app\modules\postal\tests\fixtures\ShipmentContentFixture;
use FunctionalTester;
use yii\helpers\Url;

class ShipmentContentViewCest
{
    public const ROUTE_UPDATE = '/postal/shipment-content/update';
    public const ROUTE_DELETE = '/postal/shipment-content/delete';
    public const ROUTE_VIEW = '/postal/shipment-content/view';

    public function _fixtures(): array
    {
        return [
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
            ]
        ];
    }

    public function checkRender(FunctionalTester $I): void
    {
        $content = $I->grabFixture('content', 'content_active');

        $I->amOnRoute(self::ROUTE_VIEW, ['id' => $content->id]);

        $I->seeLink('Update', Url::to([static::ROUTE_UPDATE, 'id' => $content->id]));
        $I->seeLink('Delete', Url::to([static::ROUTE_DELETE, 'id' => $content->id]));
        $I->see('Id');
        $I->see('Name');
        $I->see('Is Active');
    }
}