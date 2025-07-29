<?php

namespace app\modules\postal\models;

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
 * @property ShipmentAddressLink[] $shipmentAddressLinks
 */
class PostalShipment extends ActiveRecord implements ShipmentDirectionInterface
{

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

    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return '{{%postal_shipment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['finished_at', 'shipment_at', 'api_data'], 'default', 'value' => null],
            [['direction', 'number', 'provider', 'content_id', 'creator_id', 'created_at', 'updated_at', 'guid'], 'required'],
            [['content_id', 'creator_id'], 'integer'],
            [['created_at', 'updated_at', 'finished_at', 'shipment_at', 'api_data'], 'safe'],
            [['direction'], 'string', 'max' => 3],
            [['number'], 'string', 'max' => 40],
            [['provider'], 'string', 'max' => 6],
            [['guid'], 'string', 'max' => 32],
            [['content_id'], 'exist', 'skipOnError' => true, 'targetClass' => ShipmentContent::class, 'targetAttribute' => ['content_id' => 'id']],
            [['creator_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['creator_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

    public function getContent(): ActiveQuery
    {
        return $this->hasOne(ShipmentContent::class, ['id' => 'content_id']);
    }

    public function getCreator(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'creator_id']);
    }

    public function getShipmentAddressLinks(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddressLink::class, ['shipment_id' => 'id']);
    }


    public static function getProviderList(): array
    {
//        return [
//            self::DIRECTION_IN => Module::t('poczta-polska', 'Poczta Polska'),
//            self::DIRECTION_OUT => Module::t('poczta-polska', 'Pocztex2021'),
//        ];
    }


    public function getDirection(): string
    {
        return $this->provider;
    }

    public function getDirectionName(): string
    {
        return static::getDirectionsNames()[$this->provider];
    }

    public static function getDirectionsNames(): array
    {
        return [
            static::DIRECTION_OUT => Module::t('common', 'Out'),
            static::DIRECTION_IN => Module::t('common', 'In'),
        ];
    }
}
