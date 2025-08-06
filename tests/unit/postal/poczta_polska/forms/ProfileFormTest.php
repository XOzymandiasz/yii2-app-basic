<?php

namespace forms;

use app\modules\postal\modules\poczta_polska\forms\ProfileForm;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class ProfileFormTest extends Unit
{
    protected ProfileForm $model;

    protected function _before(): void
    {
        $this->model = new ProfileForm();
    }

    public function testValidationWithValidData(): void
    {
        $this->model->name = "Firma";
        $this->model->street = "Ulica";
        $this->model->postal_code = "12345";
        $this->model->city = "Miasto";

        $this->model->idProfil = 1001;
        $this->model->shortName = 77;
        $this->model->fax = "222333444";
        $this->model->mpk = "MPK-001";

        $this->tester->assertTrue($this->model->validate());
        $this->tester->assertEmpty($this->model->getErrors());
    }

    public function testValidationInvalidFaxLength(): void
    {
        $this->model->name = "Firma";
        $this->model->street = "Ulica";
        $this->model->city = "Miasto";
        $this->model->postal_code = "12345";

        $this->model->fax = str_repeat('1', 31);

        $this->tester->assertFalse($this->model->validate());
        $this->tester->assertSame('Fax should contain at most 30 characters.',
            $this->model->getFirstError('fax'));
    }

}
