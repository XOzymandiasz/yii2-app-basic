<?php

namespace unit\postal\sender;

use _support\UnitModelTrait;
use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\repositories\BufforRepository;
use app\modules\postal\sender\repositories\ProfileRepository;
use app\modules\postal\sender\StructType\BuforType;
use Codeception\Test\Unit;
use edzima\teryt\models\Region;
use InvalidArgumentException;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class BufforRepositoryTest extends Unit
{
    private const PROFILE_ID = 772567;
    private BufforRepository $repository;
    private ?ProfileRepository $profileRepository = null;

    public function _before(): void
    {
        parent::_before();
        $this->repository = new BufforRepository(
            PocztaPolskaSenderOptions::testInstance()
        );
    }

    public function testGetAll(): void
    {
        $all = $this->repository->getAll();
        //$all = Yii::createObject(BufforRepository::class)->getAll();
        codecept_debug($all);
        $this->tester->assertIsArray($all);
    }

    public function testGetDispatchOffices(): void
    {
        $response = $this->repository->getDispatchOffices(Region::REGION_POMORSKIE);

        $this->tester->assertIsArray($response);
    }

    public function testGetDispatchOfficesWithUknownRegion(): void
    {
        $this->tester->expectThrowable(InvalidArgumentException::class, function () {
            $this->repository->getDispatchOffices('2137');
        });
    }


    public function testCreate(): void
    {
        $bufor = $this->getBuffor(profileId: self::PROFILE_ID);

        $response = $this->repository->create($bufor);

        $this->tester->assertTrue($response);
    }




    protected function getBuffor(
        bool $isActive = false,
        ?string $sendAt = null,
        ?int $profileId = null,
        ?int $dispatchOffice = null,
        ?string $name = null
    ): BuforType
    {
        return (new BuforType)
                ->setActive($isActive)
                ->setUrzadNadania($dispatchOffice)
                ->setOpis($name)
                ->setDataNadania($sendAt)
                ->setProfil($this->getProfileRepository()->getList()[$profileId]);
    }

    private function getProfileRepository(): ?ProfileRepository
    {
        $options = PocztaPolskaSenderOptions::testInstance();
        if (null === $this->profileRepository) {
            $this->profileRepository = new ProfileRepository($options);
        }
        return $this->profileRepository;
    }

}
