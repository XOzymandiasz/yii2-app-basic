<?php

namespace app\modules\postal\models;

use app\modules\postal\Module;
use app\modules\postal\ModuleEnsureTrait;
use yii\base\InvalidConfigException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "shipment".
 *
 * @property int $id
 * @property string $direction
 * @property string $provider
 * @property int $content_id
 * @property int $creator_id
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $number
 * @property string|null $guid
 * @property int|null $buffer_id
 * @property string|null $finished_at
 * @property string|null $shipment_at
 * @property string|null $api_data
 *
 * @property ShipmentAddress $senderAddress
 * @property ShipmentAddress $receiverAddress
 * @property ShipmentAddressLink[] $addressLinks
 * @property ShipmentAddress[] $addresses
 * @property ShipmentContent $content
 * @property-read IdentityInterface $creator
 * @property-read string $directionName
 * @property-read string $contentName
 * @property-read string $providerName
 */
class Shipment extends ActiveRecord implements ShipmentDirectionInterface, ShipmentProviderInterface
{
    use ModuleEnsureTrait;

    public function behaviors(): array
    {
        return [
            'timestampBehavior' => [
                'class' => TimestampBehavior::class,
                'value' => new Expression('NOW()')
            ]
        ];
    }

    public static function tableName(): string
    {
        return '{{%shipment}}';
    }

    public function getSenderAddress(): ActiveQuery
    {
        return $this->hasOne(ShipmentAddress::class, ['id' => 'address_id'])
            ->via('senderAddressLink');
    }

    public function getSenderAddressLink(): ActiveQuery
    {
        return $this->hasOne(ShipmentAddressLink::class, ['shipment_id' => 'id'])
            ->andWhere(['type' => ShipmentDirectionInterface::DIRECTION_IN]);
    }

    public function getReceiverAddress(): ActiveQuery
    {
        return $this->hasOne(ShipmentAddress::class, ['id' => 'address_id'])
            ->via('receiverAddressLink');
    }

    public function getReceiverAddressLink(): ActiveQuery
    {
        return $this->hasOne(ShipmentAddressLink::class, ['shipment_id' => 'id'])
            ->andWhere(['type' => ShipmentDirectionInterface::DIRECTION_OUT]);
    }

    /**
     * @throws InvalidConfigException
     */
    public function getAddresses(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddress::class, ['id' => 'address_id'])
            ->viaTable('{{%shipment_address_link}}', ['shipment_id' => 'id']);
    }

    public function getAddressLinks(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddressLink::class, ['shipment_id' => 'id'])->indexBy('type');
    }

    public function getCreator(): ActiveQuery
    {
        $module = static::getModule();
        /**
         * @var ActiveRecord $userClass
         */
        $userClass = $module->userClass;
        return $this->hasOne($module->userClass, [
            'creator_id' => $userClass::primaryKey()[0]
        ]);
    }

    public function getContent(): ActiveQuery
    {
        return $this->hasOne(ShipmentContent::class, ['id' => 'content_id']);
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

    public function isFinished(): bool
    {
        return !empty($this->finished_at);
    }

    public function isSent(): bool
    {
        return !empty($this->shipment_at);
    }

    public function getIsOutDirection(): bool
    {
        return $this->getDirection() === ShipmentDirectionInterface::DIRECTION_OUT;

    }

    public function getIsInDirection(): bool
    {
        return $this->getDirection() === ShipmentDirectionInterface::DIRECTION_IN;
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
