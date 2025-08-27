<?php

namespace app\modules\postal\tests\unit\modules\poczta_polska\forms;

use _support\UnitModelTrait;
use app\modules\postal\modules\poczta_polska\forms\BufferForm;
use app\modules\postal\modules\poczta_polska\repositories\EnvelopeRepository;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use Codeception\Test\Unit;
use edzima\teryt\models\Region;
use UnitTester;
use yii\base\Model;

/**
 * @property UnitTester $tester
 */

class EnvelopeFormTest extends Unit
{
    use UnitModelTrait;
    protected BufferForm $model;

    private EnvelopeRepository $repository;
    private ?ProfileRepository $profileRepository = null;

    public function _before(): void
    {
        parent::_before();
        $this->repository = new EnvelopeRepository(PocztaPolskaSenderOptions::testInstance());
        $this->model = new BufferForm();
    }

    public function testEmpty(): void
    {
        $this->thenUnsuccessValidate();
        $this->thenSeeError('Dispatch Office cannot be blank.', 'dispatchOfficeId');
        $this->thenSeeError('Profil cannot be blank.', 'profilId');
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

        $this->thenSuccessValidate();
    }

    public function testCreateEmpty(): void
    {
        $this->thenUnsuccessValidate();
        $this->thenSeeError('Dispatch Office cannot be blank.', 'dispatchOfficeId');
        $this->thenSeeError('Profil cannot be blank.', 'profilId');
        $this->tester->assertTrue($this->model->create($this->repository, $this->getProfileRepository()));
    }

    public function testCreate(): void
    {
        $dispatchOffices = $this->repository->getDispatchOffices(Region::REGION_DOLNOSLASKIE);
        $dispatchOffice = reset($dispatchOffices);
        $this->model->dispatchOfficeId = $dispatchOffice->getId();

        $profiles = $this->getProfileRepository()->getList();
        $profile = reset($profiles);
        $this->model->profilId = $profile->getIdProfil();

        $this->thenSuccessValidate();
        $this->tester->assertTrue($this->model->create($this->repository, $this->getProfileRepository()));
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
