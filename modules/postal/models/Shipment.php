<?php

namespace app\modules\postal\models;

use app\models\User;
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
class Shipment extends ActiveRecord
{
    public ?int $receiver_id = null;
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

    /**
     * @throws InvalidConfigException
     */
    public function getAddresses(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddress::class, ['id' => 'address_id'])->viaTable('shipment_address_link', ['shipment_id' => 'id']);
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
}
