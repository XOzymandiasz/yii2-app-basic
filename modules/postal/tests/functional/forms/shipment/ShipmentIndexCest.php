<?php

namespace app\modules\postal\tests\functional\forms\shipment;

use app\modules\postal\tests\fixtures\ShipmentAddressFixture;
use app\modules\postal\tests\fixtures\ShipmentContentFixture;
use app\modules\postal\tests\fixtures\ShipmentFixture;
use FunctionalTester;

class ShipmentIndexCest
{
    public const ROUTE_INDEX = 'postal/shipment/index';
    public const ROUTE_VIEW = 'postal/shipment/view';
    public const ROUTE_UPDATE = 'postal/shipment/update';
    public const ROUTE_DELETE = 'postal/shipment/delete';
    public const ROUTE_CREATE_OUT = 'postal/shipment/create-out';
    public const ROUTE_CREATE_IN = 'postal/shipment/create-in';

    public function _fixtures(): array
    {
        return [
            'shipment' => [
                'class' => ShipmentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment.php'
            ],
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
            ],
            'address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php'
            ],
        ];
    }

    public function checkRender(FunctionalTester $I): void
    {
        $I->amOnRoute(self::ROUTE_INDEX);
        $I->seeResponseCodeIs(200);

        $I->see('Postal Shipments', 'h1');

        $I->seeLink('Create In Postal Shipment', self::ROUTE_CREATE_IN);
        $I->seeLink('Create Out Postal Shipment', self::ROUTE_CREATE_OUT);
    }



}