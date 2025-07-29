<?php

namespace app\modules\postal\models;

use app\models\User;
use app\modules\postal\Module;
use yii\base\InvalidConfigException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * //@todo check model and database name for geneneral shipments
 *
 * This is the model class for table "shipment".
 *
 * @property int $id
 * @property string $direction
 * @property string $number
 * @property string $provider
 * @property int $content_id
 * @property int $creator_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $guid
 * @property string|null $finished_at
 * @property string|null $shipment_at
 * @property string|null $api_data
 *
 * @property ShipmentAddress[] $addresses
 * @property ShipmentContent $content
 * @property User $creator
 * @property-read string $directionName
 * @property-read string $contentName
 * @property-read string $providerName
 * @property ShipmentAddressLink[] $shipmentAddressLinks
 */
class Shipment extends ActiveRecord implements ShipmentDirectionInterface, ShipmentProviderInterface
{
    public ?int $shipper_id = null;
    public ?int $sender_id = null;

    public function behaviors(): array
    {
        return [
            'timestampBehavior' => [
                'class' => TimestampBehavior::class,
                'value' => function () {
                    return date('Y-m-d H:i:s');
                }
            ]
        ];
    }

    public static function tableName(): string
    {
        return '{{%shipment}}';
    }

    public function rules(): array
    {
        return [
            [['finished_at', 'shipment_at', 'api_data'], 'default', 'value' => null],
            [['direction', 'number', 'provider', 'content_id', 'creator_id', 'created_at', 'updated_at', 'guid'], 'required'],
            [['content_id', 'creator_id'], 'integer'],
            [['shipper_id','sender_id', 'created_at', 'updated_at', 'finished_at', 'shipment_at', 'api_data'], 'safe'],
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
            'id' => Module::t('poczta-polska', 'ID'),
            'direction' => Module::t('poczta-polska', 'Direction'),
            'number' => Module::t('poczta-polska', 'Number'),
            'provider' => Module::t('poczta-polska', 'Provider'),
            'content_id' => Module::t('poczta-polska', 'Content ID'),
            'creator_id' => Module::t('poczta-polska', 'Creator ID'),
            'created_at' => Module::t('poczta-polska', 'Created At'),
            'updated_at' => Module::t('poczta-polska', 'Updated At'),
            'guid' => Module::t('poczta-polska', 'Guid'),
            'finished_at' => Module::t('poczta-polska', 'Finished At'),
            'shipment_at' => Module::t('poczta-polska', 'Shipment At'),
            'api_data' => Module::t('poczta-polska', 'Api Data'),
        ];
    }

    /**
     * @throws InvalidConfigException
     */
    public function getAddresses(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddress::class, ['id' => 'address_id'])->viaTable('shipment_address_link', ['shipment_id' => 'id']);
    }

    public static function getAddressesNames(): array
    {
        return ShipmentAddress::find()
            ->select(['name', 'id'])
            ->indexBy('id')
            ->column();
    }

    public function getCreator(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'creator_id']);
    }

    public function getContent(): ActiveQuery
    {
        return $this->hasOne(ShipmentContent::class, ['id' => 'content_id']);
    }

    public function getContentName(): string
    {
        return static::getContentNames()[$this->content_id];
    }

    public static function getContentNames(): array
    {
        return ShipmentContent::find()
            ->select(['name', 'id'])
            ->indexBy('id')
            ->column();
    }

    public function getShipmentAddressLinks(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddressLink::class, ['shipment_id' => 'id']);
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
