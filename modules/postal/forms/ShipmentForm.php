<?php

namespace app\modules\postal\forms;

use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\models\ShipmentAddressLink;
use app\modules\postal\models\ShipmentContent;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\models\ShipmentProviderInterface;
use app\modules\postal\Module;
use yii\base\Model;
use yii\db\Exception;
use yii\helpers\ArrayHelper;


class ShipmentForm extends Model implements ShipmentDirectionInterface, ShipmentProviderInterface
{
    public const SCENARIO_DIRECTION_IN = ShipmentDirectionInterface::DIRECTION_IN;
    public const SCENARIO_DIRECTION_OUT = ShipmentDirectionInterface::DIRECTION_OUT;

    public string $number = '';
    public string $direction = '';
    public string $provider = '';
    public ?int $content_id = null;
    public ?int $creator_id = null;
    public ?string $guid = null;
    public ?int $buffer_id = null;
    public ?string $finished_at = null;
    public ?string $shipment_at = null;
    public ?string $api_data = null;

    private ?Shipment $model = null;

    public ?int $sender_id = null;
    public ?int $receiver_id = null;
    private ?ShipmentAddress $receiverAddress = null;
    private ?ShipmentAddress $senderAddress = null;

    public function rules(): array
    {
        return [
            [['direction', 'provider', 'content_id', 'sender_id', 'receiver_id'], 'required'],
            ['number', 'string', 'on' => self::SCENARIO_DIRECTION_OUT],
            [['content_id', 'receiver_id', 'sender_id'], 'integer', 'enableClientValidation' => false,],
            [['finished_at', 'shipment_at', 'api_data'], 'safe'],
            [['finished_at', 'shipment_at', 'api_data', 'guid'], 'default', 'value' => null],
            [['!direction'], 'in', 'range' => array_keys(static::getDirectionsNames())],
            [['provider'], 'in', 'range' => array_keys(static::getProvidersNames())],
            [['finished_at', 'number'], 'required', 'on' => self::SCENARIO_DIRECTION_IN],
            [['buffer_id'], 'integer'],
            [['number'], 'string', 'max' => 40],
            [['guid'], 'string', 'max' => 32],
            [['content_id'], 'exist', 'skipOnError' => true, 'targetClass' => ShipmentContent::class, 'targetAttribute' => ['content_id' => 'id']],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'id' => Module::t('postal', 'ID'),
            'direction' => Module::t('postal', 'Direction'),
            'number' => Module::t('postal', 'Number'),
            'provider' => Module::t('postal', 'Provider'),
            'content_id' => Module::t('postal', 'Content ID'),
            'creator_id' => Module::t('postal', 'Creator ID'),
            'guid' => Module::t('postal', 'Guid'),
            'buffer_id' => Module::t('postal', 'Buffer ID'),
            'finished_at' => Module::t('postal', 'Finished At'),
            'shipment_at' => Module::t('postal', 'Shipment At'),
            'api_data' => Module::t('postal', 'Api Data'),
            'receiver_id' => Module::t('postal', 'Receiver ID'),
            'sender_id' => Module::t('postal', 'Sender ID'),
        ];
    }

    public function load($data, $formName = null): bool
    {
        $load = parent::load($data, $formName);
        $this->getSenderAddress()->load($data, $formName);
        $this->getReceiverAddress()->load($data, $formName);
        return $load;
    }

    /**
     * @throws Exception
     */
    public function save(bool $validate = true): bool
    {
        if ($validate && !$this->validate()) {
            return false;
        }
        $model = $this->getModel();

        $model->number = $this->number;
        $model->guid = $this->guid;
        $model->buffer_id = $this->buffer_id;
        $model->finished_at = $this->finished_at;
        $model->provider = $this->provider;
        $model->direction = $this->direction;
        $model->content_id = $this->content_id;
        $model->creator_id = $this->creator_id;
        $model->shipment_at = $this->shipment_at;
        $model->api_data = $this->api_data;
        if (!$model->save(false)) {
            return false;
        }
        $this->saveAddresses();


        return true;
    }

    protected function saveAddresses(): void
    {
        $model = $this->getModel();
        $model->unlinkAll('addressLinks', true);
        $sender = $this->getSenderAddress();
        $sender->save();
        $model->link('addressLinks',
            new ShipmentAddressLink([
                    'shipment_id' => $model->id,
                    'address_id' => $sender->id,
                    'type' => ShipmentDirectionInterface::DIRECTION_IN,
                ]
            ));
        $receiver = $this->getReceiverAddress();
        $receiver->save();
        $model->link('addressLinks',
            new ShipmentAddressLink([
                    'shipment_id' => $model->id,
                    'address_id' => $receiver->id,
                    'type' => ShipmentDirectionInterface::DIRECTION_OUT,
                ]
            ));

    }

    public function getModel(): Shipment
    {
        if ($this->model === null) {
            $this->model = new Shipment();
        }
        return $this->model;
    }

    public function setModel(Shipment $model): void
    {
        $this->model = $model;

        $this->number = $model->number;
        $this->guid = $model->guid;
        $this->buffer_id = $model->buffer_id;
        $this->finished_at = $model->finished_at;
        $this->provider = $model->provider;
        $this->direction = $model->direction;
        $this->content_id = $model->content_id;
        $this->creator_id = $model->creator_id;
        $this->shipment_at = $model->shipment_at;
        $this->api_data = $model->api_data;

        $senderAddressLink = $model->getSenderAddress()->one();
        $this->senderAddress = $senderAddressLink;
        $this->sender_id = $senderAddressLink->id;

        $receiverAddress = $model->receiverAddress;
        $this->receiverAddress = $receiverAddress;
        $this->receiver_id = $receiverAddress->id ?? null;

    }

    public static function getAddressesNames(): array
    {
        return Shipment::getAddressesNames();
    }


    public function getReceiverAddressesNames(): array
    {
        return $this->isInScenario() ? ArrayHelper::map(
            ShipmentAddress::find()
                ->where(['option' => ShipmentDirectionInterface::DIRECTION_OUT])
                ->all(),
            'id',
            'fullInfo'
        ) : $this->getAddressesNames();
    }

    public function getSenderAddressesNames(): array
    {
        return $this->isOutScenario() ? ArrayHelper::map(
            ShipmentAddress::find()
                ->where(['option' => ShipmentDirectionInterface::DIRECTION_IN])
                ->all(),
            'id',
            'fullInfo'
        ) : $this->getAddressesNames();
    }

    public function getContentNames(): array
    {
        $models = ShipmentContent::find()
            ->andWhere(['is_active' => true])
            ->orFilterWhere(['id' => $this->getModel()->content_id])
            ->all();
        return ArrayHelper::map($models, 'id', 'name');
    }

    public function getProvider(): string
    {
        return $this->model ? $this->model->getProvider() : '';
    }

    public function getProviderName(): string
    {
        return $this->model ? $this->model->getProviderName() : '';
    }

    public static function getProvidersNames(): array
    {
        return Shipment::getProvidersNames();
    }

    public function getDirection(): string
    {
        return $this->model ? $this->model->getDirection() : '';
    }

    public function getDirectionName(): string
    {
        return $this->model ? $this->model->getDirectionName() : '';
    }

    public static function getDirectionsNames(): array
    {
        return Shipment::getDirectionsNames();
    }

    public function getReceiverAddress(): ?ShipmentAddress
    {
        if (!$this->receiverAddress) {
            $this->receiverAddress = new ShipmentAddress();
        }
        if (!empty($this->receiver_id) && $this->receiver_id !== $this->receiverAddress->id) {
            $this->receiverAddress = ShipmentAddress::findOne($this->receiver_id);
        }
        return $this->receiverAddress;
    }

    public function setReceiverAddress(?ShipmentAddress $receiverAddress): void
    {
        $this->receiverAddress = $receiverAddress;
    }

    public function getSenderAddress(): ?ShipmentAddress
    {
        if (!$this->senderAddress) {
            $this->senderAddress = new ShipmentAddress();
        }
        if (!empty($this->sender_id) && $this->sender_id !== $this->senderAddress->id) {
            $this->senderAddress = ShipmentAddress::findOne($this->sender_id);
        }
        return $this->senderAddress;
    }

    public function setSenderAddress(?ShipmentAddress $senderAddress): void
    {
        $this->senderAddress = $senderAddress;
    }

    public function isInScenario(): bool
    {
        return $this->getScenario() === static::SCENARIO_DIRECTION_IN;
    }

    public function isOutScenario(): bool
    {
        return $this->getScenario() === static::SCENARIO_DIRECTION_OUT;

    }


}
