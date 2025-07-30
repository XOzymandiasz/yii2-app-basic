<?php

namespace app\modules\postal\forms;

use app\models\User;
use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentAddress;
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

    public int $id;
    public string $number = '';
    public string $direction = '';
    public string $provider = '';
    public int $content_id = 0;
    public int $creator_id = 0;
    public string $created_at = '';
    public string $updated_at = '';
    public string $guid = '';
    public ?string $finished_at = null;
    public ?string $shipment_at = null;
    public ?string $api_data = null;

    public ?int $receiver_id = null;
    public ?int $sender_id = null;

    private ?Shipment $model = null;

    public function rules(): array
    {
        return [
            [['finished_at', 'shipment_at', 'api_data'], 'default', 'value' => null],
            [['direction', 'number', 'provider', 'content_id', 'creator_id', 'created_at', 'updated_at', 'guid'], 'required'],
            [['content_id', 'creator_id'], 'integer'],
            [['shipper_id','sender_id', 'created_at', 'updated_at', 'finished_at', 'shipment_at', 'api_data'], 'safe'],
            ['!direction', 'in', 'range' => array_keys(static::getDirectionsNames())],
            [['finish_at'], 'required', 'on' => self::SCENARIO_DIRECTION_IN],
            [['direction'], 'string', 'max' => 3],
            [['number'], 'string', 'max' => 40],
            [['provider'], 'string', 'max' => 6],
            [['guid'], 'string', 'max' => 32],
            [['content_id'], 'exist', 'skipOnError' => true, 'targetClass' => ShipmentContent::class, 'targetAttribute' => ['content_id' => 'id']],
            [['creator_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['creator_id' => 'id']],
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
            'created_at' => Module::t('postal', 'Created At'),
            'updated_at' => Module::t('postal', 'Updated At'),
            'guid' => Module::t('postal', 'Guid'),
            'finished_at' => Module::t('postal', 'Finished At'),
            'shipment_at' => Module::t('postal', 'Shipment At'),
            'api_data' => Module::t('postal', 'Api Data'),
        ];
    }

    /**
     * @throws Exception
     */
    public function save(): bool
    {
        $model = $this->getModel();

        $model->number = $this->number;
        $model->guid = $this->guid;
        $model->finished_at = $this->finished_at;
        $model->provider = $this->provider;
        $model->direction = $this->direction;
        $model->content_id = $this->content_id;
        $model->creator_id = $this->creator_id;
        $model->created_at = $this->created_at;
        $model->updated_at = $this->updated_at;
        $model->shipment_at = $this->shipment_at;
        $model->api_data = $this->api_data;

        $this->setModel($model);

        return $this->model->save();

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
        $this->created_at = $model->created_at;
        $this->updated_at = $model->updated_at;
        $this->shipment_at = $model->shipment_at;
        $this->api_data = $model->api_data;
    }

    public static function getAddressesNames(): array
    {
        return ShipmentAddress::find()
            ->select(['name', 'id'])
            ->indexBy('id')
            ->column();
    }

    public function getContentName(): string
    {
        return static::getContentNames()[$this->content_id];
    }

    public static function getContentNames(): array
    {
        return
            ArrayHelper::map(
                ShipmentContent::find()->all(),
                'id',
                'name'
            );
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getProviderName(): string
    {
        return static::getProvidersNames()[$this->provider];
    }

    public static function getProvidersNames(): array
    {
        return [
            static::PROVIDER_POCZTA_POLSKA => Module::t('postal', 'Poczta Polska'),
            static::PROVIDER_POCZTEX_2021 => Module::t('postal', 'Pocztex2021'),
            static::PROVIDER_DHL => Module::t('postal', 'DHL'),
            static::PROVIDER_DPD => Module::t('postal', 'DPD'),
            static::PROVIDER_GLS => Module::t('postal', 'GLS'),
            static::PROVIDER_INPOST => Module::t('postal', 'Inpost'),
        ];
    }

    public function getDirection(): string
    {
        return $this->direction;
    }

    public function getDirectionName(): string
    {
        return static::getDirectionsNames()[$this->direction];
    }

    public static function getDirectionsNames(): array
    {
        return [
            static::DIRECTION_OUT => Module::t('postal', 'Out'),
            static::DIRECTION_IN => Module::t('postal', 'In'),
        ];
    }


}