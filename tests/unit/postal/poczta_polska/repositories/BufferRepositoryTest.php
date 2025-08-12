<?php

namespace tests\unit\postal\poczta_polska\repositories;

use app\modules\postal\modules\poczta_polska\repositories\BufferRepository;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\repositories\ShipmentRepository;
use app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use app\modules\postal\modules\poczta_polska\sender\StructType\AdresType;
use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaPoleconaKrajowaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType;
use Codeception\Test\Unit;
use edzima\teryt\models\Region;
use InvalidArgumentException;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class BufferRepositoryTest extends Unit
{
    private BufferRepository $repository;
    private ?ProfileRepository $profileRepository = null;

    private ?ShipmentRepository $shipmentRepository = null;
    public function _before(): void
    {
        parent::_before();
        $this->repository = new BufferRepository(
            PocztaPolskaSenderOptions::testInstance()
        );
    }

    public function testGetAll(): void
    {
        $response = $this->repository->getList();

        $this->tester->assertIsArray($response);
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

    public function testCreateWithNoProfileAndClear(): void
    {
        $bufor = $this->getBuffor();

        $createResponse = $this->repository->create($bufor);
        $clearResponse = $this->repository->clear($bufor->getIdBufor());

        $this->tester->assertTrue($createResponse);
        $this->tester->assertTrue($clearResponse);
    }

    public function testCreateAndClear(): void
    {
        $profiles = $this->getProfileRepository()->getList();
        $firstProfile = reset($profiles);

        $bufor = $this->getBuffor(profileId:$firstProfile->getIdProfil());

        $createResponse = $this->repository->create($bufor);
        $clearResponse = $this->repository->clear($bufor->getIdBufor());

        $this->tester->assertTrue($createResponse);
        $this->tester->assertTrue($clearResponse);
    }

    public function testUpdate(): void
    {
        /**
         * @var BuforType[] $buffers
         */
        $buffers = $this->repository->getList();
        $firstBuffer = reset($buffers);

        $bufferId = $firstBuffer->getIdBufor();
        $bufferName = $firstBuffer->getOpis();

        $firstBuffer->setOpis('Codecept test');

        $response = $this->repository->update($firstBuffer);

        $updatedBuffer = $this->repository->getById($bufferId);

        $this->tester->assertTrue($response);
        $this->tester->assertNotEquals($bufferName, $updatedBuffer->getOpis());
    }

    public function testSend(): void
    {
        $name = 'SendEnvelopeTest';
        $address = $this->getAddress();
        $shipment = $this->getShipment($address);
        $profiles = $this->getProfileRepository()->getList();
        $firstProfile = reset($profiles);

        $bufferType = $this->getBuffor( profileId:$firstProfile->getIdProfil(), name:$name);
        $createResponse = $this->repository->create($bufferType);

        $buffers = $this->repository->getList();
        $idBuffer = 0;
        foreach ($buffers as $buffer) {
            if ($buffer->getOpis() == $name) {
                $idBuffer = $buffer->getIdBufor();
                break;
            }
        }

        $addResponse = $this->getShipmentRepository()->add($shipment, $idBuffer);
        $sendResponse = $this->repository->send($idBuffer);

        $this->tester->assertNotFalse($addResponse);
        $this->tester->assertNotFalse($createResponse);
        $this->tester->assertNotFalse($sendResponse);

    }

    protected function getBuffor(
        bool $isActive = false,
        ?string $sendAt = null,
        ?int $profileId = null,
        ?int $dispatchOffice = null,
        ?string $name = null
    ): BuforType
    {
        $bufor = (new BuforType)
                ->setActive($isActive)
                ->setUrzadNadania($dispatchOffice)
                ->setOpis($name)
                ->setDataNadania($sendAt);

        if ($profileId !== null) {
            $bufor->setProfil($this->getProfileRepository()->getList()[$profileId]);
        }

        return $bufor;
    }

    public static function getShipment(
        AdresType $address,
        string $kategoria = KategoriaType::VALUE_PRIORYTETOWA
    ): PrzesylkaType
    {
        return (new PrzesylkaPoleconaKrajowaType($kategoria))
            ->setAdres($address);
    }

    public static function getAddress(
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

    private function getProfileRepository(): ?ProfileRepository
    {
        $options = PocztaPolskaSenderOptions::testInstance();
        if (null === $this->profileRepository) {
            $this->profileRepository = new ProfileRepository($options);
        }
        return $this->profileRepository;
    }

    private function getShipmentRepository(): ?ShipmentRepository
    {
        $options = PocztaPolskaSenderOptions::testInstance();
        if (null === $this->shipmentRepository) {
            $this->shipmentRepository = new ShipmentRepository($options);
        }
        return $this->shipmentRepository;
    }

}
