<?php

namespace app\modules\postal\tests\unit\modules\poczta_polska\repositories;

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

    public function testGetList(): void
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
        $name = 'Update test name';
        $profile = $this->getProfilType(name: $name);
        $createResponse = $this->repository->create($profile);

        $profileId = 0;
        $createdProfile = null;
        foreach ($this->repository->getList() as $profile) {
            if ($profile->getNazwa() === $name) {
                $profileId = $profile->getIdProfil();
                $createdProfile = $profile;
                break;
            }
        }

        if ($createdProfile === null) {
            $this->markTestSkipped('Profile not created');
        }

        $createdProfile->setNazwa('newName');
        $updateResponse = $this->repository->update($createdProfile);


        $this->tester->assertTrue($createResponse);
        $this->tester->assertTrue($updateResponse);
        $this->tester->assertNotSame($this->repository->getOne($profileId)->getNazwa(), $name);
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