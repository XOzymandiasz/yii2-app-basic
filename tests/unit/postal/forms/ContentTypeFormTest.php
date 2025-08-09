<?php

namespace tests\unit\postal\forms;

use _support\UnitModelTrait;
use app\modules\postal\forms\ContentTypeForm;
use app\modules\postal\models\ShipmentContent;
use Codeception\Test\Unit;
use Throwable;
use unit\fixtures\ShipmentContentFixture;
use UnitTester;
use yii\base\Model;
use yii\db\StaleObjectException;

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
    public function _fixtures(): array
    {
        return [
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
            ],
        ];
    }

    public function testValidationRequiredFields(): void
    {
        $this->model->name = 'Wezwanie';
        $this->model->is_active = 1;

        $this->thenSuccessValidate();
    }

    public function testEmpty(): void
    {
        $this->model->name = '';

        $this->thenUnsuccessValidate();
        $this->thenSeeError('Name cannot be blank.', 'name');
    }

    public function testValidationWithTooLongName(): void
    {
        $this->model->name = str_repeat('x', 256);


        $this->thenUnsuccessValidate();
        $this->thenSeeError('Name should contain at most 255 characters.', 'name');
    }

    public function testSave(): void
    {
        $this->model->name = 'Name';
        $this->model->is_active = 1;

        $this->thenSuccessValidate();
        $this->thenSuccessSave();
        $this->tester->seeRecord(ShipmentContent::class, [
           'name' => 'Name',
           'is_active' => 1,
        ]);
    }

    public function testSetModel(): void
    {
        $model = $this->tester->grabFixture('content', 'content_1');

        $this->model->setModel($model);

        $this->tester->assertSame($model->name, $this->model->name);
        $this->tester->assertSame($model->is_active, $this->model->is_active);
    }

    public function testGetModel(): void
    {
        $model = $this->tester->grabFixture('content', 'content_1');

        $this->model->setModel($model);
        $gottenModel = $this->model->getModel();

        $this->tester->assertSame($this->model->name, $gottenModel->name);
        $this->tester->assertSame($this->model->is_active, $gottenModel->is_active);

    }

    public function testGetModelWithoutSetModel(): void
    {
        $model = $this->model->getModel();

        $this->assertInstanceOf(ShipmentContent::class, $model);
    }

    public function testUpdate(): void
    {
        $id = $this->tester->haveRecord(ShipmentContent::class, [
            'name' => 'Documents',
        ]);
        $model = ShipmentContent::findOne(['id' => $id]);

        $this->model->setModel($model);
        $this->model->name = 'Changed name';
        $this->model->is_active = 0;

        $this->assertNotNull($model);
        $this->thenSuccessValidate();
        $this->thenSuccessSave();
        $this->tester->seeRecord(ShipmentContent::class, [
            'id' => $model->id,
            'name' => 'Changed name',
            'is_active' => 0,
        ]);
    }

    /**
     * @throws Throwable
     * @throws StaleObjectException
     */
    public function testDelete(): void
    {
        $id = $this->tester->haveRecord(ShipmentContent::class, [
            'name' => 'Documents',
        ]);
        $this->tester->seeRecord(ShipmentContent::class, ['id' => $id]);

        $model = ShipmentContent::findOne($id);
        $this->assertNotNull($model);

        $this->tester->assertNotFalse($model->delete());
        $this->tester->dontSeeRecord(ShipmentContent::class, ['id' => $id]);
    }

    public function getModel(): Model
    {
        return $this->model;
    }

}