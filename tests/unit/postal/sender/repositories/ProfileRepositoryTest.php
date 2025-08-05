<?php

namespace unit\postal\sender\repositories;

use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\repositories\ProfileRepository;
use app\modules\postal\sender\StructType\ProfilType;
use Codeception\Test\Unit;
use UnitTester;
use yii\debug\models\search\Profile;

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