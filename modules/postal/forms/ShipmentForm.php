<?php

namespace app\modules\postal\forms;

use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\models\ShipmentContent;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\models\ShipmentProviderInterface;
use app\modules\postal\Module;
use Yii;
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
    public int $content_id = 0;
    public int $creator_id = 0;
    public string $guid = '';
    public ?string $finished_at = null;
    public ?string $shipment_at = null;
    public ?string $api_data = null;

    private ?Shipment $model = null;

    public ?int $sender_id = null;
    public ?int $receiver_id = null;
    private ?ShipmentAddress $receiverAddress = null;
    private ?ShipmentAddress $senderAddress = null;

    public function scenarios(): array
    {
        $scenarios = parent::scenarios();

        $scenarios[self::SCENARIO_DIRECTION_OUT] = ['number', 'guid', 'provider', 'direction', 'content_id',
            'creator_id', 'shipment_at', 'api_data', 'sender_id', 'receiver_id'];
        $scenarios[self::SCENARIO_DIRECTION_IN] = ['number', 'guid', 'provider', 'direction', 'content_id',
            'creator_id', 'shipment_at', 'api_data', 'receiverAddress', 'senderAddress', 'finished_at'];

        return $scenarios;
    }

    public function rules(): array
    {
        return [
            [['direction', 'number', 'provider', 'content_id', 'guid', 'sender_id', 'receiver_id'], 'required'],
            [['content_id', 'receiver_id', 'sender_id'], 'integer'],
            [['finished_at', 'shipment_at', 'api_data'], 'safe'],
            [['finished_at', 'shipment_at', 'api_data', 'guid'], 'default', 'value' => null],
            [['!direction'], 'in', 'range' => array_keys(static::getDirectionsNames())],
            [['provider'], 'in', 'range' => array_keys(static::getProvidersNames())],
            [['finish_at'], 'required', 'on' => self::SCENARIO_DIRECTION_IN],
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
            'finished_at' => Module::t('postal', 'Finished At'),
            'shipment_at' => Module::t('postal', 'Shipment At'),
            'api_data' => Module::t('postal', 'Api Data'),
        ];
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

        if ($this->senderAddress) {
            Yii::$app->db->createCommand()->insert('{{%shipment_address_link}}', [
                'shipment_id' => $model->id,
                'address_id' => $this->senderAddress->id,
                'type' => ShipmentDirectionInterface::DIRECTION_OUT,
            ])->execute();
        }

        if ($this->receiverAddress) {
            Yii::$app->db->createCommand()->insert('{{%shipment_address_link}}', [
                'shipment_id' => $model->id,
                'address_id' => $this->receiverAddress->id,
                'type' => ShipmentDirectionInterface::DIRECTION_IN,
            ])->execute();
        }


        return true;
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
        $this->finished_at = $model->finished_at;
        $this->provider = $model->provider;
        $this->direction = $model->direction;
        $this->content_id = $model->content_id;
        $this->creator_id = $model->creator_id;
        $this->shipment_at = $model->shipment_at;
        $this->api_data = $model->api_data;
    }

    public static function getAddressesNames(): array
    {
        return Shipment::getAddressesNames();
    }

    public function getContentName(): string
    {
        return static::getContentNames()[$this->content_id];
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
        return $this->receiverAddress;
    }

    public function setReceiverAddress(?ShipmentAddress $receiverAddress): void
    {
        $this->receiverAddress = $receiverAddress;
    }

    public function getSenderAddress(): ?ShipmentAddress
    {
        return $this->senderAddress;
    }

    public function setSenderAddress(?ShipmentAddress $senderAddress): void
    {
        $this->senderAddress = $senderAddress;
    }

    public function getID(): int
    {
        return $this->model->id;
    }

}
