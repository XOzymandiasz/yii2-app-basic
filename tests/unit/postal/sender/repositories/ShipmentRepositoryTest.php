<?php

namespace unit\postal\sender\repositories;

use app\modules\postal\sender\EnumType\KategoriaType;
use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\repositories\ShipmentRepository;
use app\modules\postal\sender\StructType\AdresType;
use app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType;
use app\modules\postal\sender\StructType\PrzesylkaType;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class ShipmentRepositoryTest extends Unit
{
    private ShipmentRepository $repository;

    public function _before(): void
    {
        parent::_before();
        $this->repository = new ShipmentRepository(
            PocztaPolskaSenderOptions::testInstance()
        );
    }

    public function testAdd():void
    {
        $address = $this->getAddress();

        $response = $this->repository->add($this->getShipment($address));

        codecept_debug($response);

        $this->tester->assertIsString($response->getGuid());
        $this->tester->assertIsString($response->getNumerNadania());
        $this->tester->assertEmpty($response->getError());
    }

    protected function getShipment(
        AdresType $address,
        string $kategoria = KategoriaType::VALUE_PRIORYTETOWA
    ): PrzesylkaType
    {
        return (new PrzesylkaPoleconaKrajowaType($kategoria))
                ->setAdres($address);
    }

    protected function getAddress(
        string $name = 'Test name',
        string $street = 'Test street',
        string $city = 'Test city',
        string $postalCode = '88888',
    ): AdresType
    {
        return (new AdresType())
            ->setNazwa($name)
            ->setKodPocztowy($postalCode)
            ->setUlica($street)
            ->setMiejscowosc($city);
    }


}
