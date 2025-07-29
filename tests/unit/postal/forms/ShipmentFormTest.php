<?php

namespace unit\postal\forms;

use app\models\User;
use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentAddressLink;
use app\modules\postal\models\ShipmentContent;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\models\ShipmentProviderInterface;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */

class ShipmentFormTest extends Unit
{
    private Shipment $model;

    protected function _before(): void
    {
        $this->model = new Shipment();
    }

    public function testValidationRequiredFields(): void
    {
        $this->model->direction = 'OUT';
        $this->model->number = 'XYZ123456';
        $this->model->provider = 'DPD';
        $this->model->content_id = 1;
        $this->model->creator_id = 1;
        $this->model->created_at = date('Y-m-d H:i:s');
        $this->model->updated_at = date('Y-m-d H:i:s');
        $this->model->guid = '12345678901234567890123456789012';

        $this->tester->assertTrue($this->model->validate());
    }

    public function testValidationMissingRequiredFields(): void
    {
        $this->tester->assertFalse($this->model->validate());

        $this->tester->assertSame('Direction cannot be blank.',
            $this->model->getFirstError('direction'));
        $this->tester->assertSame('Number cannot be blank.',
            $this->model->getFirstError('number'));
        $this->tester->assertSame('Provider cannot be blank.',
            $this->model->getFirstError('provider'));
        $this->tester->assertSame('Content ID cannot be blank.',
            $this->model->getFirstError('content_id'));
        $this->tester->assertSame('Creator ID cannot be blank.',
            $this->model->getFirstError('creator_id'));
        $this->tester->assertSame('Created At cannot be blank.',
            $this->model->getFirstError('created_at'));
        $this->tester->assertSame('Updated At cannot be blank.',
            $this->model->getFirstError('updated_at'));
        $this->tester->assertSame('Guid cannot be blank.',
            $this->model->getFirstError('guid'));
    }

    public function testValidationFieldLengths(): void
    {
        $this->model->direction = 'LONG';
        $this->model->number = str_repeat('A', 41);
        $this->model->provider = str_repeat('B', 7);
        $this->model->guid = str_repeat('C', 33);
        $this->model->created_at = date('Y-m-d H:i:s');
        $this->model->updated_at = date('Y-m-d H:i:s');

        $this->tester->assertFalse($this->model->validate());

        $this->tester->assertStringContainsString('at most 3 characters', $this->model->getFirstError('direction'));
        $this->tester->assertStringContainsString('at most 40 characters', $this->model->getFirstError('number'));
        $this->tester->assertStringContainsString('at most 6 characters', $this->model->getFirstError('provider'));
        $this->tester->assertStringContainsString('at most 32 characters', $this->model->getFirstError('guid'));
    }



}