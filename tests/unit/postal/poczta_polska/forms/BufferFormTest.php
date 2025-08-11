<?php

namespace tests\unit\postal\poczta_polska\forms;

use _support\UnitModelTrait;
use app\modules\postal\modules\poczta_polska\forms\BufferForm;
use app\modules\postal\modules\poczta_polska\repositories\BufferRepository;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use Codeception\Test\Unit;
use edzima\teryt\models\Region;
use UnitTester;
use yii\base\Model;

/**
 * @property UnitTester $tester
 */

class BufferFormTest extends Unit
{
    use UnitModelTrait;
    protected BufferForm $model;

    private BufferRepository $repository;
    private ?ProfileRepository $profileRepository = null;

    public function _before(): void
    {
        parent::_before();
        $this->repository = new BufferRepository(PocztaPolskaSenderOptions::testInstance());
        $this->model = new BufferForm();
    }

    public function testEmpty(): void
    {
        $response = $this->model->validate();
        $this->tester->assertFalse($response);
    }

    public function testAssignIntegerToName(): void
    {
        $this->model->name = 123;
        $this->model->sendAt = 321;

        $response = $this->model->validate();

        $this->tester->assertFalse($response);
    }

    public function testGetProfilNames(): void
    {
        $profiles = $this->model->getProfilesNames($this->getProfileRepository());

        $this->tester->assertIsArray($profiles);
    }

    public function testValidate(): void
    {
        $dispatchOffices = $this->repository->getDispatchOffices(Region::REGION_DOLNOSLASKIE);
        $dispatchOffice = reset($dispatchOffices);
        $this->model->dispatchOfficeId = $dispatchOffice->getId();

        $profiles = $this->getProfileRepository()->getList();
        $profile = reset($profiles);
        $this->model->profilId = $profile->getIdProfil();

        $response = $this->model->validate();

        $this->tester->assertTrue($response);
    }

    public function testCreateEmpty(): void
    {

        $validationResponse = $this->model->validate();
        $createResponse = $this->model->create($this->repository, $this->getProfileRepository());

        $this->tester->assertFalse($validationResponse);
        $this->tester->assertTrue($createResponse);
    }

    public function testCreate(): void
    {
        $dispatchOffices = $this->repository->getDispatchOffices(Region::REGION_DOLNOSLASKIE);
        $dispatchOffice = reset($dispatchOffices);
        $this->model->dispatchOfficeId = $dispatchOffice->getId();

        $profiles = $this->getProfileRepository()->getList();
        $profile = reset($profiles);
        $this->model->profilId = $profile->getIdProfil();

        $validationResponse = $this->model->validate();
        $createResponse = $this->model->create($this->repository, $this->getProfileRepository());

        $this->tester->assertTrue($validationResponse);
        $this->tester->assertTrue($createResponse);
    }

    private function getProfileRepository(): ProfileRepository
    {
        if ($this->profileRepository === null) {
            $this->profileRepository = new ProfileRepository(PocztaPolskaSenderOptions::testInstance());
        }
        return $this->profileRepository;
    }

    public function getModel(): Model
    {
        return $this->model;
    }
}