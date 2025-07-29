<?php

namespace unit\postal\forms;

use _support\UnitModelTrait;
use app\modules\postal\forms\ContentTypeForm;
use app\modules\postal\models\ShipmentContent;
use Codeception\Test\Unit;
use UnitTester;
use yii\base\Model;

/**
 * @property UnitTester $tester
 * */

class ContentTypeFormTest extends Unit
{
    use UnitModelTrait;
    private ContentTypeForm $model;

    protected function _before(): void
    {
        $this->model = new ContentTypeForm();
    }

    public function testValidationRequiredFields(): void
    {
        $this->model->name = 'Wezwanie';
        $this->model->is_active = 1;

        $this->thenSuccessValidate();
    }

    public function testValidationWithoutRequiredFields(): void
    {
        $this->model->name = '';

        $this->thenUnsuccessValidate(['name']);
        $this->thenSeeError('Name cannot be blank.', 'name');
    }

    public function testValidationWithTooLongName(): void
    {
        $this->model->name = str_repeat('x', 256);


        $this->thenUnsuccessValidate(['name']);
        $this->thenSeeError('Name should contain at most 255 characters.', 'name');
    }

    public function testSetModel(): void
    {
        $shipmentModel = new ShipmentContent();
        $shipmentModel->name = 'nazwa';
        $shipmentModel->is_active = 1;

        $this->model->setModel($shipmentModel);

        $this->tester->assertSame('nazwa', $this->model->name);
        $this->tester->assertSame(1, $this->model->is_active);
    }

    public function testGetModel(): void
    {
        $shipmentModel = new ShipmentContent();
        $shipmentModel->name = 'nazwa';
        $shipmentModel->is_active = 1;

        $this->model->setModel($shipmentModel);
        $shipmentModel = $this->model->getModel();

        $this->assertInstanceOf(ShipmentContent::class, $shipmentModel);
    }

    public function testGetModelWithoutSetting(): void
    {
        $shipmentModel = $this->model->getModel();

        $this->assertInstanceOf(ShipmentContent::class, $shipmentModel);
    }

    public function getModel(): Model
    {
        return $this->model;
    }
}