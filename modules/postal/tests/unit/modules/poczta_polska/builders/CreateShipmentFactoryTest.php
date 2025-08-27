<?php

namespace app\modules\postal\tests\unit\modules\poczta_polska\builders;

use app\modules\postal\modules\poczta_polska\builders\CreateShipmentFactory;
use app\modules\postal\modules\poczta_polska\forms\ShipmentForm;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaPoleconaKrajowaType;
use Codeception\Stub;
use Codeception\Test\Unit;
use UnitTester;
use yii\base\UnknownPropertyException;

/**
 * @property UnitTester $tester
 */

class CreateShipmentFactoryTest extends Unit
{
    public function testCreateRegisteredShipmentReturnsPoleconaKrajowa(): void
    {
        $form = Stub::make(ShipmentForm::class, [
            'isRegistered' => true,
        ]);

        $result = CreateShipmentFactory::create($form);
        $this->tester->assertInstanceOf(PrzesylkaPoleconaKrajowaType::class, $result);
    }

    public function testCreateUnsupported(): void
    {
        $form = Stub::make(ShipmentForm::class, [
            'isRegistered' => false,
        ]);

        $this->tester->expectThrowable(UnknownPropertyException::class, function () use ($form) {
            CreateShipmentFactory::create($form);
        });

    }

}