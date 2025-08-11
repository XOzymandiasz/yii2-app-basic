<?php

namespace unit\postal\poczta_polska\forms;

use _support\UnitModelTrait;
use app\modules\postal\modules\poczta_polska\forms\ProfileForm;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use Codeception\Test\Unit;
use UnitTester;
use yii\base\Model;

/**
 * @property UnitTester $tester
 */
class ProfileFormTest extends Unit
{
    use UnitModelTrait;
    protected ProfileForm $model;

    private ProfileRepository $repository;

    public function _before(): void
    {
        parent::_before();
        $this->repository = new ProfileRepository(PocztaPolskaSenderOptions::testInstance());
        $this->model = new ProfileForm();
    }

    public function testValidationRequiredFields(): void
    {
        $this->model->name = "Firma";
        $this->model->house_number = "1";
        $this->model->postal_code = "12345";
        $this->model->city = "Miasto";

        $this->tester->assertTrue($this->model->validate());
        $this->tester->assertEmpty($this->model->getErrors());
    }

    public function testEmptyTest(): void
    {
        $this->thenUnsuccessValidate();

        $this->thenSeeError('Name cannot be blank.', 'name');
        $this->thenSeeError('House Number cannot be blank.', 'house_number');
        $this->thenSeeError('City cannot be blank.', 'city');
        $this->thenSeeError('Postal Code cannot be blank.', 'postal_code');
    }

    public function testValidationTooLong(): void
    {
        $this->model->name = str_repeat('a', 61);
        $this->model->house_number = str_repeat('b', 13);
        $this->model->city = str_repeat('c', 64);
        $this->model->postal_code = str_repeat('1',20);
        $this->model->fax = str_repeat('1', 31);

        $this->thenUnsuccessValidate();

        $this->thenSeeError('Name should contain at most 60 characters.', 'name');
        $this->thenSeeError('House Number should contain at most 11 characters.', 'house_number');
        $this->thenSeeError('City should contain at most 63 characters.', 'city');
        $this->thenSeeError('Postal Code should contain at most 10 characters.', 'postal_code');
        $this->thenSeeError('Fax should contain at most 30 characters.', 'fax');
    }

    public function testValidationEmailTooShort(): void
    {
        $this->model->name = "Firma";
        $this->model->house_number = "1";
        $this->model->postal_code = "11111";
        $this->model->city = "Miasto";
        $this->model->email = "x@x";

        $this->thenUnsuccessValidate();

        $this->thenSeeError('Email should contain at least 6 characters.', 'email');
    }

    public function testCreate(): void
    {
        $this->model->name = "TestName";
        $this->model->house_number = "1";
        $this->model->postal_code = "11111";
        $this->model->city = "TestCity";

        $this->thenSuccessValidate();

        $this->tester->assertTrue($this->model->create($this->repository));
    }

    public function getModel(): Model
    {
        return $this->model;
    }
}
