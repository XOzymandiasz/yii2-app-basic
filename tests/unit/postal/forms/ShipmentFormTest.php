<?php

namespace unit\postal\forms;

use _support\UnitModelTrait;
use app\modules\postal\forms\ShipmentForm;
use app\modules\postal\models\Shipment;
use Codeception\Test\Unit;
use UnitTester;
use yii\base\Model;

/**
 * @property UnitTester $tester
 */

class ShipmentFormTest extends Unit
{
    use UnitModelTrait;
    private ShipmentForm $model;

    protected function _before(): void
    {
        $this->model = new ShipmentForm();
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

        $this->thenSuccessValidate(['direction','number','provider','content_id','creator_id','created_at','updated_at',
                                    'guid']);
    }

    public function testValidationMissingRequiredFields(): void
    {
        $this->thenUnsuccessValidate(['direction','number','provider','content_id','creator_id','created_at',
            'updated_at', 'guid'],false);

        $this->thenSeeError('Direction cannot be blank.','direction');
        $this->thenSeeError('Number cannot be blank.','number');
        $this->thenSeeError('Provider cannot be blank.','provider');
        $this->thenSeeError('Content ID is invalid.','content_id');
        $this->thenSeeError('Creator ID is invalid.','creator_id');
        $this->thenSeeError('Created At cannot be blank.','created_at');
        $this->thenSeeError('Updated At cannot be blank.','updated_at');
        $this->thenSeeError('Guid cannot be blank.','guid');

    }

    public function testValidationFieldLengths(): void
    {
        $this->model->number = str_repeat('A', 41);
        $this->model->provider = str_repeat('B', 7);
        $this->model->guid = str_repeat('C', 33);
        $this->model->created_at = date('Y-m-d H:i:s');
        $this->model->updated_at = date('Y-m-d H:i:s');

        $this->thenUnsuccessValidate(['number','provider','created_at', 'updated_at', 'guid']);

        $this->thenSeeError('Number should contain at most 40 characters.','number');
        $this->thenSeeError('Provider should contain at most 6 characters.','provider');
        $this->thenSeeError('Guid should contain at most 32 characters.','guid');
    }

    public function testSetModel()
    {
        $shipment = new Shipment();
        $shipment->number = 'ABC123';
        $shipment->guid = 'guid-001';
        $shipment->finished_at = '2024-01-01 12:00:00';
        $shipment->provider = 'DPD';
        $shipment->direction = ShipmentForm::SCENARIO_DIRECTION_OUT;
        $shipment->content_id = 42;
        $shipment->creator_id = 5;
        $shipment->created_at = '2024-01-01 10:00:00';
        $shipment->updated_at = '2024-01-02 10:00:00';
        $shipment->shipment_at = '2024-01-03 15:00:00';
        $shipment->api_data = '{"key":"value"}';

        $form = new ShipmentForm();
        $form->setModel($shipment);

        $this->tester->assertSame($shipment->number, $form->number);
        $this->tester->assertSame($shipment->guid, $form->guid);
        $this->tester->assertSame($shipment->finished_at, $form->finished_at);
        $this->tester->assertSame($shipment->provider, $form->provider);
        $this->tester->assertSame($shipment->direction, $form->direction);
        $this->tester->assertSame($shipment->content_id, $form->content_id);
        $this->tester->assertSame($shipment->creator_id, $form->creator_id);
        $this->tester->assertSame($shipment->created_at, $form->created_at);
        $this->tester->assertSame($shipment->updated_at, $form->updated_at);
        $this->tester->assertSame($shipment->shipment_at, $form->shipment_at);
        $this->tester->assertSame($shipment->api_data, $form->api_data);
    }

    public function getModel(): Model
    {
        return $this->model;
    }
}