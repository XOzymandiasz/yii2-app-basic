<?php

namespace app\modules\postal\models;

use app\modules\postal\Module;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "shipment_address_link".
 *
 * @property int $address_id
 * @property int $shipment_id
 * @property string $type
 *
 * @property ShipmentAddress $address
 * @property Shipment $shipment
 */
class ShipmentAddressLink extends ActiveRecord implements ShipmentDirectionInterface
{


    public static function tableName(): string
    {
        return '{{%shipment_address_link}}';
    }

    public function rules(): array
    {
        return [
            [['address_id', 'shipment_id', 'type'], 'required'],
            [['address_id', 'shipment_id'], 'integer'],
            [['type'], 'string', 'max' => 3],
            [['address_id', 'shipment_id'], 'unique', 'targetAttribute' => ['address_id', 'shipment_id']],
            [['address_id'], 'exist', 'skipOnError' => true, 'targetClass' => ShipmentAddress::class, 'targetAttribute' => ['address_id' => 'id']],
            [['shipment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shipment::class, 'targetAttribute' => ['shipment_id' => 'id']],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'address_id' => Module::t('postal', 'Address ID'),
            'shipment_id' => Module::t('postal', 'Shipment ID'),
            'type' => Module::t('postal', 'Type'),
        ];
    }


    public function getAddress(): ActiveQuery
    {
        return $this->hasOne(ShipmentAddress::class, ['id' => 'address_id']);
    }


    public function getShipment(): ActiveQuery
    {
        return $this->hasOne(Shipment::class, ['id' => 'shipment_id']);
    }

    public function getDirection(): string
    {
        return $this->type;
    }

    public function getDirectionName(): string
    {
        return static::getDirectionsNames()[$this->type];
    }

    public static function getDirectionsNames()
    {
        // TODO: Implement getDirectionsNames() method.
    }
}
