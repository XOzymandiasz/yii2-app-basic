<?php

namespace unit\postal;


use app\modules\postal\sender\PocztaPolskaSenderClient;
use app\modules\postal\sender\PocztaPolskaSenderClientFactory;
use app\modules\postal\sender\Type\AddShipment;
use app\modules\postal\sender\Type\AdresType;
use app\modules\postal\sender\Type\ClearEnvelope;
use app\modules\postal\sender\Type\EPOType;
use app\modules\postal\sender\Type\GabarytType;
use app\modules\postal\sender\Type\GetGuid;
use app\modules\postal\sender\Type\GetPlacowkiPocztowe;
use app\modules\postal\sender\Type\Hello;
use app\modules\postal\sender\Type\IdWojewodztwoType;
use app\modules\postal\sender\Type\KategoriaType;
use app\modules\postal\sender\Type\PaczkaPocztowaType;
use Codeception\Test\Unit;
use Dotenv\Dotenv;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class SenderClientTest extends Unit
{

    private PocztaPolskaSenderClient $client;

    protected function setUp(): void
    {
        parent::setUp();

        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 3));
        $dotenv->load();
    }

    public function testHi()
    {
        $this->giveClient();
        $client = $this->client;
        $response = $client->hello(new Hello('Edzima!'));
        $this->tester->assertSame('Hello Edzima!', $response->getOut());
    }

    public function testGetPlacowki()
    {
        $this->giveClient();
        $client = $this->client;
        $response = $client->getPlacowkiPocztowe(new GetPlacowkiPocztowe(IdWojewodztwoType::Value_02));
    }

    public function testAddShipmentWithEmptyPaczkaPolska():void
    {
        $this->giveClient();

        $this->clearEnvelope();

        $paczkaPocztowa = new PaczkaPocztowaType();

        $shipments = [$paczkaPocztowa];

        $this->client->addShipment(new AddShipment($shipments,null));

    }

    public function testAddShipmentWithOnlyGuid(): void
    {
        $this->giveClient();
        $this->clearEnvelope();

        $guid = $this->client->getGuid(new GetGuid(1))->getGuid();

        $shipments = (new PaczkaPocztowaType())
                            ->withGuid($guid[0]);

        $this->client->addShipment(new AddShipment([$shipments], null));
    }

    public function testAddShipmentWithEmptyShipments(): void
    {
        $this->giveClient();

        $this->clearEnvelope();

        $this->client->addShipment(new AddShipment([], null));
    }


    public function testAddTwoShipments(): void
    {
        $this->giveClient();

        $this->clearEnvelope();

        $address = $this->giveAddress('Jan Kowalski', '10A', 'Warszawa', '83334');
        $shipments = $this->givePaczkaPocztowaTypeShipments
        (
            2,
            $address,
            500,
            KategoriaType::EKONOMICZNA,
            GabarytType::GABARYT_A,
            1
        );


        $this->client->addShipment(new AddShipment($shipments, null));
    }

    public function testAddShipmentWithGuidAndAddress(): void
    {
        $this->giveClient();

        $this->clearEnvelope();

        $guid = $this->client->getGuid(new GetGuid(1))->getGuid();
        $address = $this->giveAddress('Jan Kowalski', '10A', 'Warszawa', '83334');


        $paczkaPocztowa = (new PaczkaPocztowaType())
            ->withAdres($address)
            ->withGuid($guid[0]);

        codecept_debug($guid);

        $shipments = [$paczkaPocztowa];

        $this->client->addShipment(new AddShipment($shipments, null));
    }

    public function testAddShipmentX(): void
    {
        $this->giveClient();

        $this->clearEnvelope();

        $address = $this->giveAddress('Jana', '10A', 'Warszawa', '83334');
        $shipments = $this->givePaczkaPocztowaTypeShipments
        (
            1,
            $address,
            500,
            KategoriaType::EKONOMICZNA,
            GabarytType::GABARYT_A,
            1
        );

        $this->client->addShipment(new AddShipment($shipments, null));
    }


    protected function giveAddress(
        string $name,
        string $street,
        string $city,
        string $postalCode
        ): AdresType
    {
        return (new AdresType())
            ->withNazwa($name)
            ->withNumerDomu($street)
            ->withMiejscowosc($city)
            ->withKodPocztowy($postalCode);
    }

    protected function givePaczkaPocztowaTypeShipments(
        int $count,
        AdresType $address,
        int $mass,
        KategoriaType $category,
        GabarytType $dimensions,
        int $numberOfAcknowledgements
    ): array {
        $guids = $this->client->getGuid(new GetGuid($count))->getGuid();

        $shipments = [];

        for ($i = 0; $i < $count; $i++) {
            $shipment = (new PaczkaPocztowaType())
                ->withAdres($address)
                ->withMasa($mass)
                ->withKategoria($category)
                ->withGabaryt($dimensions)
                ->withIloscPotwierdzenOdbioru($numberOfAcknowledgements)
                ->withGuid($guids[$i]);

            $shipments[] = $shipment;
        }

        return $shipments;
    }

    protected function giveClient(): void
    {
        $this->client = PocztaPolskaSenderClientFactory::factory(
            PocztaPolskaSenderClientFactory::TYPE_TEST,
            $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_USERNAME'],
            $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_PASSWORD']
        );
    }

    public function clearEnvelope(): void
    {
        $envelope = new ClearEnvelope(null);
        $this->client->clearEnvelope($envelope);
    }

}
