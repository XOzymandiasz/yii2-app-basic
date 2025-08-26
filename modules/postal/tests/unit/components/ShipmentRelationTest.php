<?php

namespace app\modules\postal\tests\unit\components;

use app\modules\postal\components\ShipmentRelationComponent;
use app\modules\postal\ModuleEnsureTrait;
use app\modules\postal\tests\fixtures\ShipmentFixture;
use app\modules\postal\tests\fixtures\UserFixture;
use app\modules\postal\tests\stubs\WeirdTableStub;
use Codeception\Test\Unit;
use stdClass;
use UnitTester;
use yii\base\InvalidArgumentException;

/**
 * @property UnitTester $tester
 */

class ShipmentRelationTest extends Unit
{
    use ModuleEnsureTrait;

    public ShipmentRelationComponent $component;

    protected function _before(): void
    {
        $this->component = $this->ensureModule()->shipmentRelation;
    }

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

    public function testInitWithoutUserClass(): void
    {
        $this->tester->expectThrowable(InvalidArgumentException::class, function () {
            (new ShipmentRelationComponent())->init();
        });
    }

    public function testInitWithDuplicates():void
    {
        $user = $this->tester->grabFixture('user', 'user');

        $component = new ShipmentRelationComponent([
            'userClass' => $user::class,
            'allowRelated' => [$user::class]
        ]);

        $component->init();

        $this->tester->assertSame($component->allowRelated, [$user::class]);
    }

    public function testNotAllowed(): void
    {
        $cases = [
            'getRelatedTableName' => function (string $class) {
                $this->component->getRelatedTableName($class);},
            'getRelatedDb' => function (string $class) {
                $this->component->getRelatedDb($class);},
            'getPrimaryKey' => function (string $class) {
                $this->component->getPrimaryKey($class);},
            'saveShipmentRelation'=> function (string $class) {
                $this->component->saveShipmentRelation(1, $class, '1');},
        ];

        $notAllowedClass = stdClass::class;

        foreach ($cases as $name => $call) {
            $this->tester->expectThrowable(
                InvalidArgumentException::class,
                fn() => $call($notAllowedClass)
            );
        }
    }

    public function testGetPrimaryKey(): void
    {
        $user = $this->tester->grabFixture('user', 'user');
        $idName = $this->component->getPrimaryKey($user::class);

        $this->tester->assertSame('id', $idName);
        $this->tester->assertIsString($idName);
    }

    public function testGetSameConnection(): void
    {
        $user = $this->tester->grabFixture('user', 'user');
        $this->tester->assertSame($user::getDb(), $this->component->getRelatedDb($user::class));
    }

    public function testGetRelatedTableName(): void
    {
        $user = $this->tester->grabFixture('user', 'user');

        $this->tester->assertSame('{{%shipment_user}}',
            $this->component->getRelatedTableName($user::class));
        $this->tester->assertSame('{{%shipment-user}}',
            $this->component->getRelatedTableName($user::class, '-'));
        $this->tester->assertSame('{{%shipment_user}}',
            $this->component->getRelatedTableName($user::class, ';DROP'));
        $this->tester->assertSame('{{%shipment_links_user}}',
            $this->component->getRelatedTableName($user::class, '_links_'));
    }

    public function testGetRelatedTableNameWithWeirdTable(): void
    {
        $this->component->allowRelated[] = WeirdTableStub::class;
        $result = $this->component->getRelatedTableName(WeirdTableStub::class);

        $this->tester->assertSame('{{%shipment_userlog}}', $result);
    }

    public function testSaveShipmentRelation(): void
    {
        $shipment = $this->tester->grabFixture('shipment', 'shipment_in_PP');
        $user = $this->tester->grabFixture('user', 'user');

        $this->tester->assertSame(0, $user->getShipments()->count());

        $this->component->saveShipmentRelation($shipment->id, $this->component->userClass, $user->id);

        $this->tester->assertSame(1, $user->getShipments()->count());
        $this->tester->assertSame(1, $user->getShipmentsIn()->count());
        $this->tester->assertSame(0, $user->getShipmentsOut()->count());
    }
}