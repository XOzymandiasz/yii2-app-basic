<?php

namespace app\modules\postal\models;

use Yii;

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
class ShipmentAddressLinkContent extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shipment_address_link';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
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

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'address_id' => Yii::t('app', 'Address ID'),
            'shipment_id' => Yii::t('app', 'Shipment ID'),
            'type' => Yii::t('app', 'Type'),
        ];
    }

    /**
     * Gets query for [[Address]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAddress()
    {
        return $this->hasOne(ShipmentAddress::class, ['id' => 'address_id']);
    }

    /**
     * Gets query for [[Shipment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipment()
    {
        return $this->hasOne(Shipment::class, ['id' => 'shipment_id']);
    }

}
