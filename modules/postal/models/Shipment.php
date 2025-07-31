<?php

namespace app\modules\postal\models;

use app\models\User;
use app\modules\postal\Module;
use yii\base\InvalidConfigException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
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
 * @property ShipmentAddress $senderAddress
 * @property ShipmentAddress $receiverAddress
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

    /**
     * @throws InvalidConfigException
     */
    public function getAddresses(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddress::class, ['id' => 'address_id'])
            ->viaTable('shipment_address_link', ['shipment_id' => 'id']);
    }

    public function getCreator(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'creator_id']);
    }

    public function getContent(): ActiveQuery
    {
        return $this->hasOne(ShipmentContent::class, ['id' => 'content_id']);
    }

    public function getShipmentAddressLinks(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddressLink::class, ['shipment_id' => 'id']);
    }

    public static function getAddressesNames(): array
    {
        $models = ShipmentAddress::find()->all();

        return ArrayHelper::map($models, 'id', function ($model) {
            return $model->getFullInfo();
        });
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
}
