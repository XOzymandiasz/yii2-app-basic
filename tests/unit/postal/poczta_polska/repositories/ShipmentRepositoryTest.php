<?php

namespace tests\unit\postal\poczta_polska\repositories;

use app\modules\postal\modules\poczta_polska\repositories\BufferRepository;
use app\modules\postal\modules\poczta_polska\repositories\ShipmentRepository;
use app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType;
use app\modules\postal\modules\poczta_polska\sender\EnumType\PrintFormatEnum;
use app\modules\postal\modules\poczta_polska\sender\EnumType\PrintKindEnum;
use app\modules\postal\modules\poczta_polska\sender\EnumType\PrintMethodEnum;
use app\modules\postal\modules\poczta_polska\sender\EnumType\PrintResolutionEnum;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use app\modules\postal\modules\poczta_polska\sender\StructType\AdresType;
use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrintType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaPoleconaKrajowaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class ShipmentRepositoryTest extends Unit
{
    private ShipmentRepository $repository;
    private ?BufferRepository $bufferRepository = null;

    public function _before(): void
    {
        parent::_before();
        $this->repository = new ShipmentRepository(
            PocztaPolskaSenderOptions::testInstance()
        );
    }

    public function testGetList(): void
    {
        $this->bufferRepository = $this->getBufferRepository();
        /**
         * @var BuforType[] $buffers
         */
        $buffers = $this->bufferRepository->getAll();
        $firstBuffer = reset($buffers);

        $response = $this->repository->getList($firstBuffer->getIdBufor());

        $this->tester->assertIsArray($response);
    }

    public function testAdd(): void
    {
        $address = $this->getAddress();
        $shipment = $this->getShipment($address);

        $response = $this->repository->add($shipment);

        codecept_debug($response->getError());

        $this->tester->assertEmpty($response->getError());
        $this->tester->assertIsString($response->getGuid());
        $this->tester->assertIsString($response->getNumerNadania());
    }

    public function testGetLabel(): void
    {
        $address = $this->getAddress();
        $shipment = $this->getShipment($address);
        $printType = $this->getPrintType();

        $addResponse = $this->repository->add($shipment);
        $guid = $addResponse->getGuid();

        $getLabelResponse = $this->repository->getLabel($guid, $printType);

        $this->tester->assertIsString($addResponse->getGuid());
        $this->tester->assertIsString($addResponse->getNumerNadania());
        $this->tester->assertEmpty($addResponse->getError());
        $this->tester->assertIsString($getLabelResponse);
    }

    protected function getPrintType(
        ?string $format = PrintFormatEnum::VALUE_PDF_FORMAT,
        ?string $kind = PrintKindEnum::VALUE_ADDRESS_LABEL_BY_GUID,
        ?string $method = PrintMethodEnum::VALUE_EACH_PARCEL_SEPARATELY,
        ?string $resolution = PrintResolutionEnum::VALUE_DPI_300
    ): PrintType{
        return (new PrintType())
            ->setFormat($format)
            ->setKind($kind)
            ->setMethod($method)
            ->setResolution($resolution);
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

    private function getBufferRepository(): ?BufferRepository
    {
        $options = PocztaPolskaSenderOptions::testInstance();
        if (null === $this->bufferRepository) {
            $this->bufferRepository = new BufferRepository($options);
        }
        return $this->bufferRepository;
    }

}
