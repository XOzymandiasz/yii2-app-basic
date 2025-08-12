<?php

namespace tests\unit\postal\poczta_polska\repositories;

use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */

class ProfileRepositoryTest extends Unit
{
    private ProfileRepository $repository;

    public function _before(): void
    {
        parent::_before();
        $this->repository = new ProfileRepository(
            PocztaPolskaSenderOptions::testInstance()
        );
    }

    public function testGetAll(): void
    {
        $response = $this->repository->getList();

        $this->tester->assertIsArray($response);
    }

    public function testCreate(): void
    {
        $profile = $this->getProfilType();

        $response = $this->repository->create($profile);

        $this->tester->assertTrue($response);
    }

    public function testUpdate(): void
    {
        $profiles = $this->repository->getList();
        $profile = reset($profiles);
        $profileName = $profile->getNazwa();
        $profileId = $profile->getIdProfil();

        $profile->setNazwa('ProfileNameUpdateTest');
        $response = $this->repository->update($profile);

        $updatedProfile = $this->repository->getById($profileId);

        $this->tester->assertTrue($response);
        $this->tester->assertNotEquals($profileName, $updatedProfile->getNazwa());
    }

    protected function getProfilType(
        string $shortName = 'Test short name',
        string $name = 'Test name',
        string $street = 'Test street',
        string $city = 'Test city',
        string $postalCode = '88888',
    ): ProfilType
    {
        return (new ProfilType())
            ->setNazwaSkrocona($shortName)
            ->setNazwa($name)
            ->setMiejscowosc($city)
            ->setKodPocztowy($postalCode)
            ->setUlica($street);
    }


}