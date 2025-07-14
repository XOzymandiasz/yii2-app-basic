<?php

namespace tests\unit\postal;

use _support\PocztaPolskaShipmentTrackerMock;
use app\modules\postal\components\ShipmentInterface;
use app\modules\postal\models\PocztaPolskaShipmentCheckForm;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class PocztaPolskaShipmentCheckFormTest extends Unit
{
    private ShipmentInterface $tracker;

    public function testEmpty()
    {
        $model = new PocztaPolskaShipmentCheckForm();
        $this->tester->assertFalse($model->validate());
        $this->tester->assertSame(
            'Shipment Number cannot be blank.',
            $model->getFirstError('number')
        );
    }

    public function testAboveMaximumLength()
    {
        $model = new PocztaPolskaShipmentCheckForm();

        $model->number = str_repeat('a', 300);
        codecept_debug($model->number);
        $this->tester->assertFalse($model->validate());
        $this->tester->assertSame(
            'Shipment Number should contain at most 255 characters.',
            $model->getFirstError('number')
        );
    }

    public function testCorrectNumber()
    {
        $model = new PocztaPolskaShipmentCheckForm();
        $model->number = "00459007730267878966";
        $this->tester->assertTrue($model->validate());
        $this->tester->assertFalse($model->hasErrors('number'));
    }



}
