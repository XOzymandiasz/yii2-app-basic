<?php

namespace unit\postal\sender;

use _support\UnitModelTrait;
use app\modules\postal\modules\poczta_polska\forms\ProfileForm;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use app\modules\postal\modules\poczta_polska\sender\repositories\ProfileRepository;
use Codeception\Test\Unit;
use UnitTester;
use yii\base\Model;

/**
 * @property UnitTester $tester
 */
class ProfileTest extends Unit
{
    use UnitModelTrait;

    private ProfileRepository $repository;
    private ProfileForm $model;


    public function _before(): void
    {
        parent::_before();
        $this->repository = new ProfileRepository(PocztaPolskaSenderOptions::testInstance());
    }

    public function testEmpty(): void
    {
        $this->giveModel();
        $this->thenUnsuccessValidate();
        $this->thenSeeError('Name cannot be blank.', 'name');
    }


    public function testCreate(): void
    {
        $this->giveModel();
        $model = $this->model;
        $model->name = 'testName';
        $model->city = 'testCity';
        $this->thenSuccessValidate();
        $profileType = $this->model->getProfileType();
        $repository = $this->repository;
        $this->tester->assertTrue($repository->create($profileType));
        $list = $this->repository->getList();

        $this->tester->assertNotEmpty($list);
    }

    private function giveModel(array $config = []): void
    {
        $this->model = new ProfileForm($config);
    }

    public function getModel(): Model
    {
        return $this->model;
    }
}
