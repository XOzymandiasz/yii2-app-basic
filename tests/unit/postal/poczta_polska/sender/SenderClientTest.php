<?php

namespace unit\postal\poczta_polska\sender;


use app\modules\postal\modules\poczta_polska\sender\EnumType\GabarytType;
use app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderClassMap;
use app\modules\postal\modules\poczta_polska\sender\ServiceType\Add;
use app\modules\postal\modules\poczta_polska\sender\ServiceType\Clear;
use app\modules\postal\modules\poczta_polska\sender\ServiceType\Create;
use app\modules\postal\modules\poczta_polska\sender\ServiceType\Delete;
use app\modules\postal\modules\poczta_polska\sender\ServiceType\Get;
use app\modules\postal\modules\poczta_polska\sender\ServiceType\Hello;
use app\modules\postal\modules\poczta_polska\sender\ServiceType\Send;
use app\modules\postal\modules\poczta_polska\sender\ServiceType\Update;
use app\modules\postal\modules\poczta_polska\sender\StructType\AccountType;
use app\modules\postal\modules\poczta_polska\sender\StructType\AddShipment;
use app\modules\postal\modules\poczta_polska\sender\StructType\AddShipmentResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\AdresType;
use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\CreateEnvelopeBufor;
use app\modules\postal\modules\poczta_polska\sender\StructType\EPOType;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetAccountList;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeList;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetGuid;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetOutboxBook;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPrintForParcel;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPrintForParcelResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetProfilList;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetUrzedyNadania;
use app\modules\postal\modules\poczta_polska\sender\StructType\Hello as HelloStruct;
use app\modules\postal\modules\poczta_polska\sender\StructType\ListWartosciowyKrajowyType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PaczkaPocztowaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrintType;
use app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaPoleconaKrajowaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\SendEnvelope;
use app\modules\postal\modules\poczta_polska\sender\StructType\SendEnvelopeResponseType;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateEnvelopeBufor;
use Codeception\Test\Unit;
use Dotenv\Dotenv;
use InvalidArgumentException;
use UnitTester;
use WsdlToPhp\PackageBase\SoapClientInterface;

/**
 * @property UnitTester $tester
 */
class SenderClientTest extends Unit
{
    private array $guids;

    private PrzesylkaType $shipmentType;

    private ?AdresType $customerAddressType = null;

    private ?ProfilType $profileType = null;


    protected function setUp(): void
    {
        parent::setUp();

        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 4));
        $dotenv->load();
    }

    public function testHello(): void
    {
        $hello = new Hello($this->getDefaultOptions());

        $response = $hello->hello(new HelloStruct('Adam'));

        $this->tester->assertSame('Hello Adam', $response->getOut());
    }

    public function testAddShipmentWithEmptyShipments(): void
    {
        $response = $this->addShipment([], null);

        $this->tester->assertNull($response->getRetval());
    }

    public function testCreateGuids(): void
    {
        $this->giveGuids(6);

        $this->tester->assertIsArray($this->guids);

        foreach ($this->guids as $guid) {
            $this->tester->assertIsString($guid);
            $this->tester->assertEquals(32, strlen($guid));
        }
    }

    public function testAddShipmentWithNullShipmentValues(): void
    {
        $this->shipmentType = new PrzesylkaPoleconaKrajowaType(KategoriaType::VALUE_EKONOMICZNA);


        $response = $this->addShipment([$this->shipmentType], null);


        $errorOne = $response->getRetval()[0]->getError()[0]->getErrorDesc();
        $errorTwo = $response->getRetval()[0]->getError()[1]->getErrorDesc();
        $errorThree = $response->getRetval()[0]->getError()[2]->getErrorDesc();

        $this->tester->assertSame('Pole nazwa adresata nie może być puste', $errorOne);
        $this->tester->assertSame('Pole miejscowość adresata nie może być puste', $errorTwo);
        $this->tester->assertSame('Atrybut Kod pocztowy adresata jest wymagany', $errorThree);


    }

    public function testAddShipmentWithOnlyGuid(): void
    {
        $this->giveGuids(1);
        $this->shipmentType = (new PrzesylkaPoleconaKrajowaType(KategoriaType::VALUE_EKONOMICZNA))
            ->setGuid($this->guids[0]);


        $response = $this->addShipment([$this->shipmentType], null);


        $errorOne = $response->getRetval()[0]->getError()[0]->getErrorDesc();
        $errorTwo = $response->getRetval()[0]->getError()[1]->getErrorDesc();
        $errorThree = $response->getRetval()[0]->getError()[2]->getErrorDesc();

        $this->tester->assertSame('Pole nazwa adresata nie może być puste', $errorOne);
        $this->tester->assertSame('Pole miejscowość adresata nie może być puste', $errorTwo);
        $this->tester->assertSame('Atrybut Kod pocztowy adresata jest wymagany', $errorThree);
    }

    public function testAddShipmentWithOnlyAddress(): void
    {
        $this->giveAddressType();
        $this->shipmentType = (new PrzesylkaPoleconaKrajowaType(KategoriaType::VALUE_EKONOMICZNA))
            ->setAdres($this->customerAddressType);


        $response = $this->addShipment([$this->shipmentType], null);

        $guid = $response->getRetval()[0]->getGuid();

        $this->tester->assertIsString($guid);
        $this->tester->assertEquals(32, strlen($guid));
        $this->tester->assertNotFalse($response);
    }

    public function testAddShipmentWithTooShortGuid(): void
    {
        $this->giveAddressType();

        $this->tester->expectThrowable(InvalidArgumentException::class, function () {
            $this->shipmentType = (new PrzesylkaPoleconaKrajowaType(KategoriaType::VALUE_EKONOMICZNA))
                ->setAdres($this->customerAddressType)
                ->setGuid('SHORT GUID');
        });
    }

    public function testAddShipmentWithInvalidGuid(): void
    {
        $this->giveAddressType();

        $this->shipmentType = (new PrzesylkaPoleconaKrajowaType(KategoriaType::VALUE_EKONOMICZNA))
            ->setAdres($this->customerAddressType)
            ->setGuid('BAD GUID BUT CORRECT LENGTH!!!!!');

        $response = $this->addShipment([$this->shipmentType], null);

        codecept_debug($response);
        $error = $response->getRetval()[0]->getError();
        $this->tester->assertIsArray($error);
        $this->tester->assertNotEmpty($error);
        $this->tester->assertSame('Guid jest nieprawidłowy', $error[0]->getErrorDesc());
    }

    public function testCorrectAddShipmentAndClear(): void
    {
        $this->giveGuids(1);
        $this->giveAddressType();
        $this->giveProfilType();
        $this->givePrzesylkaPoleconaKrajowaType($this->guids[0]);
        $add = new Add($this->getDefaultOptions());
        $clear = new Clear($this->getDefaultOptions());

        $addResponse = $add->addShipment(new AddShipment([$this->shipmentType], null));
        $clearResponse = $clear->clearEnvelopeByGuids($this->guids, null);

        $this->tester->assertNotNull($addResponse);
        $this->tester->assertEmpty($addResponse->getRetval()[0]->getError());
        $this->tester->assertNotNull($clearResponse);
        $this->tester->assertEmpty($clearResponse->getError());

    }

    public function testAddMultipleShipments(): void
    {
        $this->giveGuids(3);
        $this->giveAddressType();
        $this->giveProfilType();

        $shipments = [];
        foreach ($this->guids as $guid) {
            $this->givePrzesylkaPoleconaKrajowaType($guid);
            $shipments[] = $this->shipmentType;
        }

        $response = $this->addShipment($shipments, null);

        $this->tester->assertNotNull($response);
    }

    public function testCreateProfileAndDelete(): void
    {
        $this->giveProfilType();
        $create = new Create($this->getDefaultOptions());
        $get = new Get($this->getDefaultOptions());
        $update = new Update($this->getDefaultOptions());
        $delete = new Delete($this->getDefaultOptions());

        $accounts = $get->getAccountList(new GetAccountList())->getAccount();
        /**
         * @var AccountType $account
         */
        $account = reset($accounts);

        $createResponse = $create->createProfil($this->profileType);
        $profiles = $get->getProfilList(new GetProfilList())->getProfil();

        $account->setProfil($profiles);
        $updateResponse = $update->updateAccount($account);


        $profileId = 0;
        foreach ($profiles as $profile) {
            if ($profile->getNazwa() == 'CodeceptTest')
            {
                $profileId = $profile->getIdProfil();
                break;
            }
        }

        $deleteResponse = $delete->deleteReturnDocumentsProfile($profileId); //@todo: brak uprawnien

        codecept_debug($deleteResponse);

        $this->tester->assertNotNull($accounts);
        $this->tester->assertNotNull($createResponse);
        $this->tester->assertEmpty($createResponse->getError());
        $this->tester->assertNotNull($updateResponse);
        $this->tester->assertEmpty($updateResponse->getError());
        $this->tester->assertNotNull($deleteResponse);
        $this->tester->assertEmpty($deleteResponse->getError());
        $this->tester->assertEmpty(array_diff($profiles, $account->getProfil()));
    }

    public function testPrintParcel(): void
    {
        $this->giveGuids(1);
        $this->giveAddressType();
        $this->giveProfilType();
        $this->givePrzesylkaPoleconaKrajowaType($this->guids[0]);

        $this->addShipment([$this->shipmentType], null);

        $this->printForParcel($this->guids, 'nazwaTestowa');

        $this->tester->assertFileExists('nazwaTestowa.pdf');
    }

    public function testPrintMultipleParcel(): void
    {
        $this->giveGuids(3);
        $this->giveAddressType();
        $this->giveProfilType();

        $shipments = [];
        foreach ($this->guids as $guid) {
            $this->givePrzesylkaPoleconaKrajowaType($guid);
            $shipments[] = $this->shipmentType;
        }

        $this->addShipment($shipments, null);

        $this->printForParcel($this->guids, 'nazwaTestowa');

        $this->tester->assertFileExists('nazwaTestowa.pdf');
    }

    protected function printForParcel(
        array  $guids,
        string $name = 'label',
        string $kind = 'ADDRESS_LABEL_BY_GUID',
        string $method = 'ALL_PARCELS_IN_ONE_FILE',
        string $format = 'PDF_FORMAT',
        string $resolution = 'DPI_300'
    ): bool|GetPrintForParcelResponse
    {
        $printType = new PrintType($kind, $method, $format, $resolution);

        $get = new Get($this->getDefaultOptions());

        $result = $get->getPrintForParcel(new GetPrintForParcel($guids, $printType));

        file_put_contents($name . '.pdf', $result->getPrintResult()[0]->getPrint());

        return $result;
    }

    public function testGetBufforsList(): void
    {
        $getService = new Get($this->getDefaultOptions());

        codecept_debug($getService->getEnvelopeList('2024-01-01','2026-01-01'));
    }

    public function testClearAllBuffors(): void
    {
        $get = new Get($this->getDefaultOptions());

        $buffors = $get
            ->getEnvelopeBuforList()
            ->getBufor();
        $clear = new Clear($this->getDefaultOptions());

        foreach ($buffors as $buffor) {
            $clear->clearEnvelope(
                $buffor->getIdBufor()
            );
        }

        $this->tester->assertEmpty(
            $get->getEnvelopeBuforList()->getBufor()
        );


    }

    protected function clearAllBuffors(): void
    {
        $buffors = (new Get($this->getDefaultOptions()))
            ->getEnvelopeBuforList()
            ->getBufor();
        $clear = new Clear($this->getDefaultOptions());

        foreach ($buffors as $buffor) {
            $clear->clearEnvelope(
                $buffor->getIdBufor()
            );
        }
    }

    public function testCreateMultipleBuffors(): void
    {
        $bufforOne = new BuforType();
        $bufforOne->setIdBufor(1)
            ->setOpis('Test Buffor One');
        $bufforTwo = new BuforType();
        $bufforTwo->setOpis('Test Buffor Two');;

        $createService = new Create($this->getDefaultOptions());
        $response = $createService->createEnvelopeBufor(
            new CreateEnvelopeBufor([
                $bufforOne,
                $bufforTwo
            ])
        );
        $this->tester->assertNotFalse($response);
        $createdBuffors = $response->getCreatedBufor();
        $this->tester->assertNotEmpty($createdBuffors);
        $this->tester->assertCount(2, $createdBuffors);
        $createdBufforOne = $createdBuffors[0];
        $this->tester->assertSame('Test Buffor One', $createdBufforOne->getOpis());
    }

    public function testUpdateEnvelopeBufor(): void
    {
        $get = new Get($this->getDefaultOptions());
        $update = new Update($this->getDefaultOptions());

        /**
         * @var BuforType[] $buffers
         */
        $buffers = $get->getEnvelopeBuforList()->getBufor();
        $buffer = reset($buffers);

        $buffer->setOpis('Test Update Buffer One');

        codecept_debug($buffer->getIdBufor());

        $response = $update->updateEnvelopeBufor([$buffer]);

        //codecept_debug($response);
        codecept_debug($response->getError());


    }

    public function testSendEnvelope()
    {
        $this->giveGuids(1);
        $this->giveAddressType();
        $this->giveProfilType();
        $this->givePrzesylkaPoleconaKrajowaType($this->guids[0]);

        $bufforOne = new BuforType();
        $bufforOne->setIdBufor(1)
            ->setOpis('SendEnvelopmentTest');

        $createService = new Create($this->getDefaultOptions());
        $bufforResponse = $createService->createEnvelopeBufor(
            new CreateEnvelopeBufor([
                $bufforOne
            ])
        )->getCreatedBufor();

        $get = new Get($this->getDefaultOptions());
        $urzadNadania = $get->getUrzedyNadania(new GetUrzedyNadania())->getUrzedyNadania()[0]->getUrzadNadania();

        $addResponse = $this->addShipment([$this->shipmentType], $bufforResponse[0]->getIdBufor());
        $sendEnvelopeResponse = $this->docker-sendEnvelope($bufforResponse[0]->getIdBufor(), $urzadNadania);
        $envelopeId = $sendEnvelopeResponse->getIdEnvelope();

        //$outboxBookResponse = $get->getOutboxBook($envelopeId, false);
        //file_put_contents('outboxBookResponse.pdf', $outboxBookResponse->getPdfContent());

        $this->tester->assertNotFalse($addResponse);
        $this->tester->assertNotFalse($sendEnvelopeResponse);
        $this->tester->assertNotNull($envelopeId);

        $createdBuffor = $bufforResponse[0]->getIdBufor();
        $this->tester->assertSame('SendEnvelopmentTest', $bufforResponse[0]->getOpis());
    }

    public function testTwoBufforsWithTwoShippers(): void
    {
        $this->clearEnvelope();
        $this->giveGuids(1);
        $get = new Get($this->getDefaultOptions());
        $urzadNadania = $get->getUrzedyNadania(new GetUrzedyNadania())->getUrzedyNadania()[0]->getUrzadNadania();

        $get = new Get($this->getDefaultOptions());
        $profiles = $get->getProfilList(new GetProfilList())->getProfil();

        foreach ($this->guids as $idx => $guid) {
            $this->giveAddressType();

            $this->profileType = $profiles[$idx];

            $this->givePrzesylkaPoleconaKrajowaType($guid);

            $bufforResponse = $this->createBuffor()->getCreatedBufor();

            $buffor = $get->getEnvelopeBuforList();

            $envelope = $get->getEnvelopeList(new GetEnvelopeList());

            codecept_debug($buffor);

            $addResponse = $this->addShipment([$this->shipmentType], $bufforResponse[0]->getIdBufor(), false);

            $sendEnvelopeResponse = $this->sendEnvelope($bufforResponse[0]->getIdBufor(), $urzadNadania, null);
            $envelopeId = $sendEnvelopeResponse->getIdEnvelope();

            codecept_debug($sendEnvelopeResponse);

            $get = new Get($this->getDefaultOptions());
            $outboxBookResponse = $get->getOutboxBook(new GetOutboxBook($envelopeId));

        }

        $this->PrintForParcel($this->guids);

        file_put_contents('outboxBookResponse.pdf', $outboxBookResponse->getPdfContent());


        $this->tester->assertNotFalse($sendEnvelopeResponse);
        $this->tester->assertNotNull($envelopeId);

    }

    public function testGetShipments():void
    {
        $get = new Get($this->getDefaultOptions());
        $bufferList = $get->getEnvelopeBuforList()->getBufor();
        $buffer = reset($bufferList);

        $shipments = $get->getEnvelopeBufor($buffer->getIdBufor())->getPrzesylka();

        $this->tester->assertIsArray($shipments);
        $this->tester->assertNotNull($shipments);
    }

    public function testPrintForParcelListWartosciowyKrajowyType()
    {

        $shipment = (new listWartosciowyKrajowyType(
            null,
            null,
            100,
            1,
            KategoriaType::VALUE_EKONOMICZNA))
            ->setNumerNadania('00459007710267878966');

        $this->performParcelTest($shipment);
    }

    public function testPrintForParcelListZwyklyFirmowyType()
    {
        $shipment = (new listWartosciowyKrajowyType(
            null,
            null,
            100,
            1,
            KategoriaType::VALUE_EKONOMICZNA))
            ->setNumerNadania('00459007730267878966');

        $this->performParcelTest($shipment);
    }


    public function testPrintForParcelPrzesylkaPoleconaKrajowa()
    {

        $shipment = (new PrzesylkaPoleconaKrajowaType(KategoriaType::VALUE_PRIORYTETOWA))
            ->setIloscPotwierdzenOdbioru(1)
            ->setNumerNadania('00459007730267878966');

        $this->performParcelTest($shipment);

    }

    public function testPrintForParcelPaczkaPocztowa()
    {
        $shipment = (new PaczkaPocztowaType(KategoriaType::VALUE_PRIORYTETOWA, GabarytType::VALUE_GABARYT_A))
            ->setIloscPotwierdzenOdbioru(1)
            ->setNumerNadania('00459007730267878966');

        $this->performParcelTest($shipment);
    }

    public function testAddlistZwyklyFirmowyType(): void
    {
        $this->clearEnvelope();

        $this->giveAddressType();

        $this->giveGuids(1);

        $shipment = (new listWartosciowyKrajowyType(
            null,
            null,
            100,
            1,
            KategoriaType::VALUE_PRIORYTETOWA))
            ->setGuid($this->guids[0])
            ->setAdres($this->customerAddressType)
            ->setNumerNadania('RR123456785PL');

        $result = $this->addShipment([$shipment], null);

        $this->tester->assertNotFalse($result);
    }


    protected function getShipment(
        string    $type,
        int       $guid,
        AdresType $address,
        string    $category,
        string    $dimensions,
        ?int      $mass,
        ?int      $numberOfAcknowledgements,
        ?int      $value
    )
    {
        $shipment = (new $type($category, $dimensions))
            ->setGuid($guid)
            ->setAddress($address);

        if ($mass) $shipment->setMasa($mass);
        if ($numberOfAcknowledgements) $shipment->setIloscPotwierdzenOdbioru($numberOfAcknowledgements);
        if ($value) $shipment->setIloscPotwierdzenOdbioru($value);

        return $shipment;
    }

    protected function performParcelTest(PrzesylkaType $shipment): void
    {
        $this->clearEnvelope();
        $address = $this->giveAddressType();
        $this->giveGuids(1);

        $shipment->setAdres($address)
            ->setGuid($this->guids[0]);

        $addResult = $this->addShipment([$shipment], null);

        codecept_debug($addResult);

        $result = $this->PrintForParcel($this->guids);

        file_put_contents('label.pdf', $result->getPrintResult()[0]->getPrint());


        codecept_debug($result->getPrintResult()[0]->getPrint());

        $this->tester->assertNotFalse($addResult);
        $this->tester->assertNotFalse($result);
    }

    protected function giveProfilType(
        string  $name = 'CodeceptTest',
        string  $street = 'Leborska',
        string  $city = 'Warszawa',
        string  $postalCode = '81212',
        ?int    $idProfil = null,
        ?string $nazwaSkrocona = null,
        ?string $fax = null,
        ?string $mpk = null,
        ?string $houseNumber = null,
        ?string $country = null,
        ?string $phone = null,
        ?string $email = null,
        ?string $mobile = null
    ): void
    {
        $this->profileType = (new ProfilType())
            ->setNazwa($name)
            ->setUlica($street)
            ->setNumerDomu($houseNumber)
            ->setMiejscowosc($city)
            ->setKodPocztowy($postalCode)
            ->setKraj($country)
            ->setTelefon($phone)
            ->setEmail($email)
            ->setMobile($mobile)
            ->setIdProfil($idProfil)
            ->setNazwaSkrocona($nazwaSkrocona)
            ->setFax($fax)
            ->setMpk($mpk);
    }

    protected function giveAddressType(
        string  $name = 'Janowski',
        string  $street = 'Reskowska',
        string  $city = 'Gdańsk',
        string  $postalCode = '83222',
        ?string $name2 = null,
        ?string $houseNumber = null,
        ?string $suiteNumber = null,
        ?string $country = null,
        ?string $phone = null,
        ?string $email = null,
        ?string $mobile = null,
        ?string $contactPerson = null,
        ?string $NIP = null
    ): void
    {
        $this->customerAddressType = (new AdresType())
            ->setNazwa($name)
            ->setUlica($street)
            ->setNumerDomu($houseNumber)
            ->setNumerLokalu($suiteNumber)
            ->setMiejscowosc($city)
            ->setKodPocztowy($postalCode)
            ->setKraj($country)
            ->setTelefon($phone)
            ->setEmail($email)
            ->setMobile($mobile)
            ->setNazwa2($name2)
            ->setOsobaKontaktowa($contactPerson)
            ->setNip($NIP);
    }

    private function givePrzesylkaPoleconaKrajowaType(
        string                       $guid,
        int                          $numberOfPickups = 1,
        string                       $category = KategoriaType::VALUE_PRIORYTETOWA,
        ?string                      $shipmentNumber = null,
        ?EPOType                     $EPOType = null,
        ?PotwierdzenieDoreczeniaType $acknowledgmentOfPickup = null,
        ?string                      $idLibraryForLegalDeposit = null,
        ?string                      $specialConditions = null,
        ?bool                        $posteRestante = null,
        ?string                      $dimension = null,
        ?string                      $format = null,
        ?int                         $mass = null,
        ?bool                        $libraryCopy = null,
        ?bool                        $forBlindPeople = null,
        ?bool                        $urbanArea = null,
        ?bool                        $local = null,
        ?bool                        $customerShipmentNumber = null

    ): void
    {
        $this->shipmentType = (new PrzesylkaPoleconaKrajowaType(KategoriaType::VALUE_PRIORYTETOWA))
            ->setGuid($guid)
            ->setNadawca($this->profileType)
            ->setAdres($this->customerAddressType)
            ->setNumerNadania($shipmentNumber)
            ->setIloscPotwierdzenOdbioru($numberOfPickups)
            ->setKategoria($category)
            ->setEpo($EPOType)
            ->setPotwierdzenieDoreczenia($acknowledgmentOfPickup)
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setZasadySpecjalne($specialConditions)
            ->setPosteRestante($posteRestante)
            ->setGabaryt($dimension)
            ->setFormat($format)
            ->setMpk($mass)
            ->setEgzemplarzBiblioteczny($libraryCopy)
            ->setDlaOciemnialych($forBlindPeople)
            ->setObszarMiasto($urbanArea)
            ->setMiejscowa($local)
            ->setNumerPrzesylkiKlienta($customerShipmentNumber);
    }


    protected function giveGuids(int $count): void
    {
        $get = new Get($this->getDefaultOptions());
        $this->guids = $get->getGuid(new GetGuid($count))->getGuid();
    }

    public function clearEnvelope(?int $idBufor = null): void
    {
        $clear = new Clear($this->getDefaultOptions());
        $clear->clearEnvelope($idBufor);
    }

    protected function addShipment(array $shipments, ?int $idBufor): AddShipmentResponse|bool
    {
        $add = new Add($this->getDefaultOptions());
        return $add->addShipment(new AddShipment($shipments, $idBufor));
    }


    protected function sendEnvelope(?int $idBufor, ?int $urzadNadania, ?ProfilType $shipperAdresType = null): SendEnvelopeResponseType|bool
    {
        $send = new Send($this->getDefaultOptions());
        return $send->sendEnvelope($idBufor, $urzadNadania, $shipperAdresType);
    }

    protected function getDefaultOptions(bool $useLocalWSDL = true, array $config = []): array
    {
        $wsdlURL = $useLocalWSDL ? codecept_data_dir() . 'web-service/en.wsdl' : 'https://en-testwebapi.poczta-polska.pl/websrv/?wsdl';

        return array_merge([
            SoapClientInterface::WSDL_URL => $wsdlURL,
            SoapClientInterface::WSDL_LOCATION => 'https://en-testwebapi.poczta-polska.pl/websrv/labs.php',
            SoapClientInterface::WSDL_CLASSMAP => PocztaPolskaSenderClassMap::get(),
            SoapClientInterface::WSDL_LOGIN => $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_USERNAME'],
            SoapClientInterface::WSDL_PASSWORD => $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_PASSWORD'],
            SoapClientInterface::WSDL_CACHE_WSDL => WSDL_CACHE_NONE,
        ], $config);
    }


}
