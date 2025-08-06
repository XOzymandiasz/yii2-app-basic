<?php

namespace forms;

use _support\UnitModelTrait;
use app\modules\postal\modules\poczta_polska\forms\PocztaPolskaShipmentForm;
use app\modules\postal\modules\poczta_polska\sender\EnumType\FormatType;
use app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType;
use Codeception\Test\Unit;
use UnitTester;
use yii\base\Model;

/**
 * @property UnitTester $tester
 */
class PocztaPolskaShipmentFormTest extends Unit
{
    use UnitModelTrait;

    protected PocztaPolskaShipmentForm $model;


    protected function _before(): void
    {
        $this->model = new PocztaPolskaShipmentForm();
    }

    public function testValidationRequiredFields(): void
    {
        $this->model->category = KategoriaType::VALUE_PRIORYTETOWA;
        $this->model->format = FormatType::VALUE_S;
        $this->model->mass = 100;
        $this->model->description = "Some text";

        $this->thenSuccessValidate(['category', 'format', 'mass', 'description']);
    }

    public function testValidationWithoutRequiredFields(): void
    {
        $this->model->category = '';

        $this->thenUnsuccessValidate(['category']);
        $this->thenSeeError('Category cannot be blank.', 'category');
    }

    public function testValidationWithTooLong(): void
    {
        $this->model->description = str_repeat('a', 501);

        $this->thenUnsuccessValidate(['description']);
        $this->thenSeeError('Description should contain at most 500 characters.', 'description');
    }

    public function getModel(): Model
    {
        return $this->model;
    }
}
