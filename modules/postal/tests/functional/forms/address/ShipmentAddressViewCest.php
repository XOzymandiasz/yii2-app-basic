<?php

namespace app\modules\postal\tests\functional\forms\address;

use app\modules\postal\tests\fixtures\ShipmentAddressFixture;
use FunctionalTester;
use yii\helpers\Url;

class ShipmentAddressViewCest
{
    public const ROUTE_UPDATE = '/postal/shipment-address/update';
    public const ROUTE_DELETE = '/postal/shipment-address/delete';
    public const ROUTE_VIEW = '/postal/shipment-address/view';

    public function _fixtures(): array
    {
        return [
            'address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php'
            ]
        ];
    }

    public function checkRender(FunctionalTester $I): void
    {
        $address = $I->grabFixture('address', 'sender');

        $I->amOnRoute(self::ROUTE_VIEW, ['id' => $address->id]);

        $I->seeLink('Update', Url::to([static::ROUTE_UPDATE, 'id' => $address->id]));
        $I->seeLink('Delete', Url::to([static::ROUTE_DELETE, 'id' => $address->id]));
        $I->see('Id');
        $I->see('Name');
        $I->see('Street');
        $I->see('House number');
        $I->see('Apartment number');
        $I->see('City');
        $I->see('Country');
        $I->see('Postal Code');
        $I->see('Option');
    }
}