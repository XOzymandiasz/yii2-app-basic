<?php

namespace tests\unit\postal\poczta_polska\repositories;

use app\modules\postal\modules\poczta_polska\repositories\BufferRepository;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\repositories\ShipmentRepository;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
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
        $response = $this->repository->getAll();

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

    # @todo [Error] Class "tests\unit\postal\poczta_polska\repositories\ShipmentRepositoryTest" not found
    public function testSend(): void
    {
        $address = ShipmentRepositoryTest::getAddress();
        $shipment = ShipmentRepositoryTest::getShipment($address);
        $buffers = $this->repository->getAll();
        $firstBuffer = reset($buffers);

        if($firstBuffer){
            $addResponse = $this->getShipmentRepository()->add($shipment, $firstBuffer->getIdBufor());

            $sendResponse = $this->repository->send($firstBuffer->getIdBufor());

            $this->tester->assertNotFalse($addResponse);
            $this->tester->assertNotFalse($sendResponse);
        }
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
