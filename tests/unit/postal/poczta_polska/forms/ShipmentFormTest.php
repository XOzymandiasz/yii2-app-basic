<?php

namespace tests\unit\postal\poczta_polska\forms;

use _support\UnitModelTrait;
use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\modules\poczta_polska\forms\ShipmentForm;
use app\modules\postal\modules\poczta_polska\repositories\BufferRepository;
use app\modules\postal\modules\poczta_polska\repositories\ShipmentRepository;
use app\modules\postal\modules\poczta_polska\sender\EnumType\FormatType;
use app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType;
use Codeception\Test\Unit;
use Throwable;
use UnitTester;
use yii\base\Model;
use yii\db\StaleObjectException;

/**
 * @property UnitTester $tester
 */
class ShipmentFormTest extends Unit
{
    use UnitModelTrait;

    protected ShipmentForm $model;

    private ShipmentRepository $repository;
    private ?BufferRepository $bufferRepository = null;

    protected function _before(): void
    {
        parent::_before();
        $this->model = new ShipmentForm();
        $this->repository = new ShipmentRepository(PocztaPolskaSenderOptions::testInstance());
    }

    public function testValidationRequiredFields(): void
    {
        $this->model->buffers = $this->getBufferRepository()->getList();
        $buffer = reset($this->model->buffers);
        $this->model->bufferId = $buffer->getIdBufor();
        $this->model->category = KategoriaType::VALUE_PRIORYTETOWA;
        $this->model->format = FormatType::VALUE_S;
        $this->model->mass = 100;
        $this->model->description = "Some text";

        $this->thenSuccessValidate();
    }

    public function testValidationWithoutRequiredFields(): void
    {
        $this->model->category = '';

        $this->thenUnsuccessValidate();
        $this->thenSeeError('Category cannot be blank.', 'category');
    }

    public function testValidationWithTooLong(): void
    {
        $this->model->description = str_repeat('a', 501);

        $this->thenUnsuccessValidate();
        $this->thenSeeError('Description should contain at most 500 characters.', 'description');
    }

    public function testValidationOutsideAllowedScope(): void
    {
        $this->model->buffers = $this->getBufferRepository()->getList();
        $this->model->format = "XXXXXL";
        $this->model->category = "Szybka";
        $this->model->bufferId = 0;
        $this->thenUnsuccessValidate();
    }

    /**
     * @throws Throwable
     * @throws StaleObjectException
     */
    public function testCreate(): void
    {
        $this->model->buffers = $this->getBufferRepository()->getList();
        $buffer = reset($this->model->buffers);
        $this->model->bufferId = $buffer->getIdBufor();
        $this->model->category = KategoriaType::VALUE_PRIORYTETOWA;
        $this->model->format = FormatType::VALUE_S;
        $this->model->mass = 100;
        $this->model->description = "Some text";
        $this->model->setReceiverAddress($this->getShipmentAddress());
        $this->model->setSenderAddress($this->getShipmentAddress());

        $this->thenSuccessValidate();
        $shipment = $this->model->createShipment();

        $this->tester->assertInstanceOf(PrzesylkaType::class, $shipment);

    }

    /**
     * @throws Throwable
     * @throws StaleObjectException
     */
    public function testAddAndClear(): void
    {
        $this->model->buffers = $this->getBufferRepository()->getList();
        $buffer = reset($this->model->buffers);
        $this->model->bufferId = $buffer->getIdBufor();
        $this->model->category = KategoriaType::VALUE_PRIORYTETOWA;
        $this->model->format = FormatType::VALUE_S;
        $this->model->mass = 100;
        $this->model->description = "Some text";
        $this->model->setReceiverAddress($this->getShipmentAddress());
        $this->model->setSenderAddress($this->getShipmentAddress());

        $addResponse = $this->model->add($this->repository);
        $clearResponse = $this->repository->clear($this->model->bufferId, $this->model->getModel()->guid);

        $this->thenSuccessValidate();
        $this->tester->assertTrue($addResponse);
        $this->tester->assertTrue($clearResponse);
        $this->tester->assertIsString($this->model->getModel()->guid);
        $this->tester->assertIsString($this->model->getModel()->number);
    }

    public function testUpdate(): void
    {
        $description = "Other text";

        $this->model->buffers = $this->getBufferRepository()->getBuffersList();
        $buffer = reset($this->model->buffers);
        $this->model->bufferId = $buffer->getIdBufor();
        $this->model->category = KategoriaType::VALUE_PRIORYTETOWA;
        $this->model->format = FormatType::VALUE_S;
        $this->model->mass = 100;
        $this->model->description = "Some text";
        $this->model->setReceiverAddress($this->getShipmentAddress());
        $this->model->setSenderAddress($this->getShipmentAddress());

        $addResponse = $this->model->add($this->repository);
        $this->model->description = $description;

        $updateResponse = $this->model->update($this->repository, $buffer->getIdBufor());

        $updatedShipment = $this->repository->getOne($buffer->getIdBufor(), $this->model->getModel()->guid);

        $this->tester->assertTrue($addResponse);
        $this->tester->assertTrue($updateResponse);
        $this->tester->assertSame($updatedShipment->getOpis(), $description);
    }


    public function getModel(): Model
    {
        return $this->model;
    }

    public static function getShipmentAddress(
        string $name = 'Test name',
        string $street = 'Test street',
        string $city = 'Test city',
        string $postalCode = '88888',
    ): ShipmentAddress
    {
        $address = new ShipmentAddress();
        $address->name = $name;
        $address->street = $street;
        $address->city = $city;
        $address->postal_code = $postalCode;
        return $address;
    }

    public function getBufferRepository(): BufferRepository
    {
        if($this->bufferRepository === null) {
            $this->bufferRepository = new BufferRepository(PocztaPolskaSenderOptions::testInstance());
        }
        return $this->bufferRepository;
    }
}
