<?php

namespace app\modules\postal\tests\unit\modules\poczta_polska\forms;

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

    public function testRequiredFields(): void
{
    $this->model->name = "Jan Kowalski";
    $this->model->house_number = "1";
    $this->model->postal_code = "83314";
    $this->model->city = "Warszawa";
    $this->model->country = "Polska";
    $this->model->street = "Marszałkowska";
    $this->model->profileName = "Jan";


    $this->thenSuccessValidate();
}

    public function testEmptyTest(): void
    {
        $this->thenUnsuccessValidate();

        $this->thenSeeError('Name cannot be blank.', 'name');
        $this->thenSeeError('House Number cannot be blank.', 'house_number');
        $this->thenSeeError('City cannot be blank.', 'city');
        $this->thenSeeError('Postal Code cannot be blank.', 'postal_code');
    }

    public function testTooLong(): void
    {
        $this->model->name = str_repeat('a', 101);
        $this->model->name_2 = str_repeat('a', 101);
        $this->model->house_number = str_repeat('b', 21);
        $this->model->phone = str_repeat('b', 16);
        $this->model->mobile = str_repeat('f', 16);
        $this->model->contact_person = str_repeat('g', 16);
        $this->model->email = str_repeat('g', 321);
        $this->model->taxID = str_repeat('g', 16);
        $this->model->street = str_repeat('g', 61);
        $this->model->city = str_repeat('g', 61);
        $this->model->country = str_repeat('g', 73);
        $this->model->apartment_number = str_repeat('a', 11);
        $this->model->postal_code = str_repeat('a', 11);

        $this->thenUnsuccessValidate();

        $this->thenSeeError('Name should contain at most 100 characters.', 'name');
        $this->thenSeeError('Secondary Name should contain at most 100 characters.', 'name_2');
        $this->thenSeeError('Phone should contain at most 15 characters.', 'phone');
        $this->thenSeeError('Mobile should contain at most 15 characters.', 'mobile');
        $this->thenSeeError('Contact Person should contain at most 15 characters.', 'contact_person');
        $this->thenSeeError('Email should contain at most 320 characters.', 'email');
        $this->thenSeeError('Tax ID should contain at most 15 characters.', 'taxID');
        $this->thenSeeError('House Number should contain at most 20 characters.', 'house_number');
        $this->thenSeeError('City should contain at most 60 characters.', 'city');
        $this->thenSeeError('Street should contain at most 60 characters.', 'street');
        $this->thenSeeError('Country should contain at most 70 characters.', 'country');
        $this->thenSeeError('Postal Code should contain at most 10 characters.', 'postal_code');
        $this->thenSeeError('Apartment Number should contain at most 10 characters.', 'apartment_number');
    }

    public function testCreate(): void
    {
        $this->model->name = "TestName";
        $this->model->house_number = "1";
        $this->model->postal_code = "11111";
        $this->model->city = "TestCity";
        $this->model->profileName = "ProfileName";
        $this->model->street = "TestStreet";
        $this->model->country = "Polska";

        $this->thenSuccessValidate();

        $this->tester->assertTrue($this->model->create($this->repository));
    }

    public function testUpdate(): void
    {
        $name = "TestUpdateName";
        $this->model->name = $name;
        $this->model->house_number = "1";
        $this->model->postal_code = "11111";
        $this->model->city = "TestCity";
        $this->model->profileName = "ProfileName";
        $this->model->street = "TestStreet";
        $this->model->country = "Polska";

        $createResponse = $this->model->create($this->repository);

        $createdProfileId = 0;
        foreach ($this->repository->getList() as $profile) {
            if ($profile->getNazwa() === $name) {
                $createdProfileId = $profile->getIdProfil();
                break;
            }
        }

        if($createdProfileId == 0){
            $this->markTestSkipped('Profile ID not found');
        }

        $this->model->idProfil = $createdProfileId;
        $this->model->name = "newName";
        $updateResponse = $this->model->update($this->repository);

        $this->thenSuccessValidate();
        $this->tester->assertTrue($createResponse);
        $this->tester->assertTrue($updateResponse);
        $this->tester->assertNotSame($this->repository->getOne($createdProfileId)->getNazwa(), $name);
    }

    public function getModel(): Model
    {
        return $this->model;
    }
}
