<?php

namespace tests\unit\postal\forms;

use _support\UnitModelTrait;
use app\modules\postal\forms\ShipmentForm;
use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\models\ShipmentContent;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\models\ShipmentProviderInterface;
use Codeception\Test\Unit;
use tests\fixtures\ShipmentAddressFixture;
use tests\fixtures\ShipmentAddressLinkFixture;
use tests\fixtures\ShipmentContentFixture;
use tests\fixtures\ShipmentFixture;
use UnitTester;
use yii\base\Model;

/**
 * @property UnitTester $tester
 */
class ShipmentFormTest extends Unit
{
    use UnitModelTrait;

    private ShipmentForm $model;

    protected function _before(): void
    {
        $this->model = new ShipmentForm();
    }

    public function _fixtures(): array
    {
        return [
            'shipment' => [
                'class' => ShipmentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment.php'
            ],
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
            ],
            'shipment_address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php',
            ],
            'shipment_address_link' => [
                'class' => ShipmentAddressLinkFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address_link.php',
            ],
        ];
    }

    public function testCorrectValidation(): void
    {
        $this->model->direction = 'OUT';
        $this->model->number = 'XYZ123456';
        $this->model->provider = 'DPD';
        $this->model->content_id = 1;
        $this->model->creator_id = 1;
        $this->model->sender_id = 1;
        $this->model->receiver_id = 2;
        $this->model->guid = '12345678901234567890123456789012';

        $this->thenSuccessValidate();
    }

    public function testEmpty(): void
    {
        $this->thenUnsuccessValidate();

        $this->thenSeeError('Direction cannot be blank.', 'direction');
        $this->thenSeeError('Provider cannot be blank.', 'provider');
        $this->thenSeeError('Content ID cannot be blank.', 'content_id');
        $this->thenSeeError('Sender ID cannot be blank.', 'sender_id');
        $this->thenSeeError('Receiver ID cannot be blank.', 'receiver_id');

    }

    public function testIncorrectLengths(): void
    {
        $this->model->number = str_repeat('A', 41);
        $this->model->provider = str_repeat('B', 7);
        $this->model->guid = str_repeat('C', 33);

        $this->thenUnsuccessValidate(['number', 'provider', 'created_at', 'updated_at', 'guid']);

        $this->thenSeeError('Number should contain at most 40 characters.', 'number');
        $this->thenSeeError('Provider is invalid.', 'provider');
        $this->thenSeeError('Guid should contain at most 32 characters.', 'guid');
    }



    public function testSave(): void
    {
        $this->model->direction = ShipmentDirectionInterface::DIRECTION_OUT;
        $this->model->number = 'TEST123456789';
        $this->model->provider = ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA;
        $this->model->guid = 'abcdefabcdefabcdefabcdefabcd';
        $this->model->content_id = 1;
        $this->model->creator_id = 1;
        $this->model->sender_id = 1;
        $this->model->receiver_id = 2;
        $this->model->setSenderAddress(ShipmentAddress::findOne($this->model->sender_id));
        $this->model->setSenderAddress(ShipmentAddress::findOne($this->model->receiver_id));

        $this->tester->assertNotNull($this->getModel());
        $this->thenSuccessValidate();
        $this->thenSuccessSave();

        $this->tester->seeRecord(Shipment::class, [
            'number' => $this->model->number,
            'provider' => $this->model->provider,
            'content_id' => $this->model->content_id,
        ]);
    }

    public function testSetModel()
    {
        $model = $this->tester->grabFixture('shipment', 'shipment_1');

        $this->model->setModel($model);

        $this->tester->assertSame($model->number, $this->model->number);
        $this->tester->assertSame($model->guid, $this->model->guid);
        $this->tester->assertSame($model->finished_at, $this->model->finished_at);
        $this->tester->assertSame($model->provider, $this->model->provider);
        $this->tester->assertSame($model->direction, $this->model->direction);
        $this->tester->assertSame($model->content_id, $this->model->content_id);
        $this->tester->assertSame($model->creator_id, $this->model->creator_id);
        $this->tester->assertSame($model->shipment_at, $this->model->shipment_at);
        $this->tester->assertSame($model->api_data, $this->model->api_data);
    }

    public function testGetModel(): void
    {
        $model = $this->tester->grabFixture('shipment', 'shipment_1');

        $this->model->setModel($model);

        $gottenModel = $this->model->getModel();

        $this->tester->assertSame($this->model->number,     $gottenModel->number     );
        $this->tester->assertSame($this->model->guid,       $gottenModel->guid       );
        $this->tester->assertSame($this->model->finished_at,$gottenModel->finished_at);
        $this->tester->assertSame($this->model->provider,   $gottenModel->provider   );
        $this->tester->assertSame($this->model->direction,  $gottenModel->direction  );
        $this->tester->assertSame($this->model->content_id, $gottenModel->content_id );
        $this->tester->assertSame($this->model->creator_id, $gottenModel->creator_id );
        $this->tester->assertSame($this->model->shipment_at,$gottenModel->shipment_at);
        $this->tester->assertSame($this->model->api_data,   $gottenModel->api_data   );
    }

    public function testUpdate()
    {
        $model = Shipment::findOne(['id' => 1]);

        $this->model->setModel($model);
        $this->model->number = 'ABC123';
        $this->model->provider = ShipmentProviderInterface::PROVIDER_DPD;
        $this->model->guid = 'abcd';

        $this->assertNotNull($model);
        $this->thenSuccessValidate();
        $this->thenSuccessSave();

        $this->tester->seeRecord(Shipment::class, [
            'id' => $model->id,
            'number' => 'ABC123',
            'provider' => ShipmentProviderInterface::PROVIDER_DPD,
            'guid' => 'abcd',
        ]);
    }

    public function testDelete(): void
    {
        $id = $this->tester->haveRecord(Shipment::class, [
            'direction' => ShipmentDirectionInterface::DIRECTION_OUT,
            'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
            'content_id' => ShipmentContent::findOne(['id' => 1])->id,
            'creator_id' => 1,
            'number' => 'RR123456789PL'
        ]);
        $this->tester->seeRecord(Shipment::class, ['id' => $id]);

        $model = Shipment::findOne($id);
        $this->assertNotNull($model);

        $this->tester->assertNotFalse($model->delete());
        $this->tester->dontSeeRecord(Shipment::class, ['id' => $id]);
    }

    public function getModel(): Model
    {
        return $this->model;
    }
}
