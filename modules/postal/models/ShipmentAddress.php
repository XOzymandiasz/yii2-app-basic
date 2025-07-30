<?php

namespace app\modules\postal\models;

use app\modules\postal\Module;
use yii\base\InvalidConfigException;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "shipment_address".
 *
 * @property int $id
 * @property string $name
 * @property string|null $street
 * @property string $house_number
 * @property string|null $apartment_number
 * @property string $postal_code
 * @property string $city
 * @property int|null $city_id
 * @property string $country
 * @property string|null $name_2
 * @property string|null $phone
 * @property string|null $mobile
 * @property string|null $contact_person
 * @property string|null $email
 * @property string|null $taxID
 *
 *
 * @property ShipmentAddressLink[] $shipmentAddressLinks
 * @property Shipment[] $shipments
 */
class ShipmentAddress extends ActiveRecord
{

    public static function tableName(): string
    {
        return '{{%shipment_address}}';
    }

    public function rules(): array
    {
        return [
            [['street', 'apartment_number', 'name2', 'phone', 'mobile', 'contact_person', 'email'], 'default', 'value' => null],
            [['country'], 'default', 'value' => 'PL'],
            [['name', 'house_number', 'postal_code', 'city', 'taxID'], 'required'],
            [['name', 'street', 'city'], 'string', 'max' => 255],
            [['taxID'], 'string', 'max' => 15],
            [['phone', 'mobile', 'contact_person'], 'string', 'max' => 11],
            [['house_number', 'apartment_number', 'postal_code'], 'string', 'max' => 10],
            [['country'], 'string', 'max' => 2],
        ];
    }


    public function attributeLabels(): array
    {
        return [
            'id' => Module::t('postal', 'ID'),
            'name' => Module::t('postal', 'Name'),
            'street' => Module::t('postal', 'Street'),
            'house_number' => Module::t('postal', 'House Number'),
            'apartment_number' => Module::t('postal', 'Apartment Number'),
            'postal_code' => Module::t('postal', 'Postal Code'),
            'city' => Module::t('postal', 'City'),
            'country' => Module::t('postal', 'Country'),
            'phone' => Module::t('postal', 'Phone'),
            'mobile' => Module::t('postal', 'Mobile'),
            'contact_person' => Module::t('app', 'Contact Person'),
            'email' => Module::t('postal', 'Email'),
            'name2' => Module::t('postal', 'Alternative Name'),
            'city_id' => Module::t('postal', 'City ID'),
            'taxID' => Module::t('postal', 'Tax ID'),
        ];
    }


    public function getShipmentAddressLinks(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddressLink::class, ['address_id' => 'id']);
    }


    /**
     * @throws InvalidConfigException
     */
    public function getShipments(): ActiveQuery
    {
        return $this->hasMany(Shipment::class, ['id' => 'shipment_id'])->viaTable('shipment_address_link', ['address_id' => 'id']);
    }

}
