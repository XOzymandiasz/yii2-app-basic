<?php

namespace tests\unit\postal\poczta_polska\repositories;

use app\modules\postal\modules\poczta_polska\repositories\EnvelopeRepository;
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
class EnvelopeRepositoryTest extends Unit
{
    private EnvelopeRepository $repository;
    private ?ProfileRepository $profileRepository = null;

    private ?ShipmentRepository $shipmentRepository = null;

    private string $sendAt = '2025-08-18';

    public function _before(): void
    {
        parent::_before();
        $this->repository = new EnvelopeRepository(
            PocztaPolskaSenderOptions::testInstance()
        );
    }

    public function testGetBuffersList(): void
    {
        $buffersList = $this->repository->getBuffersList();

        $this->tester->assertIsArray($buffersList);
    }

    public function testGetList(): void
    {
        $list = $this->repository->getList('2025-01-01', '2026-01-01');

        $this->tester->assertIsArray($list);
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
        $name = 'CodeceptCreateTest';
        $bufor = $this->getBuffer(name:$name);


        $createResponse = $this->repository->create($bufor);
        $bufferId = $this->getIdByName($name);
        $clearResponse = $this->repository->clear($bufferId);


        $this->tester->assertTrue($createResponse);
        $this->tester->assertTrue($clearResponse);
    }

    public function testCreateAndClear(): void
    {
        $name = 'CodeceptBufforCreateTest';
        $profiles = $this->getProfileRepository()->getList();
        $firstProfile = reset($profiles);
        $buffer = $this->getBuffer(
            sendAt:$this->sendAt,
            profileId: $firstProfile->getIdProfil(),
            name:$name
        );


        $createResponse = $this->repository->create($buffer);

        $bufferId = $this->getIdByName($name);
        if($bufferId == null){
            $this->markTestSkipped('Buffer ID not found');
        }

        $clearResponse = $this->repository->clear($bufferId);


        $this->tester->assertTrue($createResponse);
        $this->tester->assertTrue($clearResponse);
    }

    public function testUpdate(): void
    {
        /**
         * @var BuforType[] $buffers
         */
        $updateName = 'CodeceptBufferUpdateTest';
        $createName = 'CodeceptBufferCreateTest';
        $profiles = $this->getProfileRepository()->getList();
        $firstProfile = reset($profiles);
        $bufor = $this->getBuffer(
            sendAt: $this->sendAt,
            profileId: $firstProfile->getIdProfil(),
            name:$createName,
        );


        $createResponse = $this->repository->create($bufor);
        $bufferId = $this->getIdByName($createName);
        if($bufferId == null){
            $this->markTestSkipped('Buffer ID not found');
        }

        $createdBuffer = $this->repository->getBuffer($bufferId);
        if($createdBuffer == null){
            $this->markTestSkipped('Buffer not found');
        }
        $createdBuffer->setOpis($updateName);
        $updateResponse = $this->repository->update($createdBuffer);
        $updatedBuffer = $this->repository->getBuffer($bufferId);

        $clearResponse = $this->repository->clear($bufferId);


        $this->tester->assertTrue($createResponse);
        $this->tester->assertTrue($updateResponse);
        $this->tester->assertTrue($clearResponse);
        $this->tester->assertSame($updateName, $updatedBuffer->getOpis());
        $this->tester->assertNotSame($createName, $updatedBuffer->getOpis());
    }

    public function testSend(): void
    {
        $name = 'CodeceptSendEnvelopeTest';
        $address = $this->getAddress();
        $shipment = $this->getShipment($address);
        $profiles = $this->getProfileRepository()->getList();
        $firstProfile = reset($profiles);
        $buffer = $this->getBuffer(
            sendAt:$this->sendAt,
            profileId: $firstProfile->getIdProfil(),
            name: $name
        );


        $createResponse = $this->repository->create($buffer);
        $bufferId = $this->getIdByName($name);
        if($bufferId == null){
            $this->markTestSkipped('Buffer ID not found');
        }
        $addResponse = $this->getShipmentRepository()->add($shipment, $bufferId);
        $buffer = $this->repository->getBuffer($bufferId);
        $sendResponse = $this->repository->send($bufferId, $buffer->getUrzadNadania());


        $this->tester->assertNotFalse($addResponse);
        $this->tester->assertIsEmpty($addResponse->getError());
        $this->tester->assertNotFalse($createResponse);
        $this->tester->assertNotNull($sendResponse);
    }

    public function testGetBook(): void
    {
        $name = 'CodeceptSendEnvelopeTest';
        $address = $this->getAddress();
        $shipment = $this->getShipment($address);
        $profiles = $this->getProfileRepository()->getList();
        $firstProfile = reset($profiles);
        $buffer = $this->getBuffer(
            sendAt:$this->sendAt,
            profileId: $firstProfile->getIdProfil(),
            name: $name
        );


        $createResponse = $this->repository->create($buffer);
        $bufferId = $this->getIdByName($name);
        if($bufferId == null){
            $this->markTestSkipped('Buffer ID not found');
        }
        $addResponse = $this->getShipmentRepository()->add($shipment, $bufferId);
        $buffer = $this->repository->getBuffer($bufferId);
        $sendResponse = $this->repository->send($bufferId, $buffer->getUrzadNadania());
        $book = $this->repository->getBook($sendResponse);


        $this->tester->assertNotFalse($addResponse);
        $this->tester->assertIsEmpty($addResponse->getError());
        $this->tester->assertNotFalse($createResponse);
        $this->tester->assertNotNull($sendResponse);
        $this->tester->assertIsString($book);
    }


    protected function getIdByName(string $name): ?int
    {
        foreach ($this->repository->getBuffersList() as $bufor) {
            if ($bufor->getOpis() == $name) {
                return $bufor->getIdBufor();
            }
        }
        return null;
    }

    protected function getBuffer(
        bool    $isActive = false,
        ?string $sendAt = null,
        ?int    $profileId = null,
        ?int    $dispatchOffice = null,
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
        string    $kategoria = KategoriaType::VALUE_PRIORYTETOWA
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
