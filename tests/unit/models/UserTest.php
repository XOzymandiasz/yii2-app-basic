<?php

namespace tests\unit\models;

use app\modules\postal\tests\fixtures\ShipmentFixture;
use app\modules\postal\tests\fixtures\UserFixture;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class UserTest extends Unit
{
    public function _fixtures(): array
    {
        return [
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ],
            'shipment' => [
                'class' => ShipmentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment.php'
            ],
        ];
    }


    public function testGetShipments()
    {
        $user = $this->tester->grabFixture('user', 'user');


        $this->tester->assertSame(0, $user->getShipments()->count());


        $shipment = $this->tester->grabFixture('shipment', 'shipment_in_PP');
        $shipment->saveAllowedRelated($user::class, $user->id);


        $this->tester->assertSame(1, $user->getShipments()->count());
        $this->tester->assertSame(1, $user->getShipmentsIn()->count());
        $this->tester->assertSame(0, $user->getShipmentsOut()->count());
    }

}
