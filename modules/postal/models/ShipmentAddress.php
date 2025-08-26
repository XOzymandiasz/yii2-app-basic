<?php

namespace app\modules\postal\models;

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\sender\StructType\AdresType; #@todo:
use yii\base\InvalidConfigException;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "shipment_address".
 *
 * @property int $id
 * @property string $name
 * @property string $house_number
 * @property string $postal_code
 * @property string $city
 * @property string $country
 * @property string $option
 * @property int|null $city_id
 * @property string|null $street
 * @property string|null $apartment_number
 * @property string|null $name_2
 * @property string|null $phone
 * @property string|null $mobile
 * @property string|null $contact_person
 * @property string|null $email
 * @property string|null $taxID
 *
 *
 * @property ShipmentAddressLink[] $addressLinks
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
            [['street', 'apartment_number', 'name_2', 'phone', 'mobile', 'contact_person', 'email'],
                'default', 'value' => null],
            [['country'], 'default', 'value' => 'PL'],
            [['name', 'house_number', 'postal_code', 'city'], 'required'],
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
            'contact_person' => Module::t('postal', 'Contact Person'),
            'email' => Module::t('postal', 'Email'),
            'name_2' => Module::t('postal', 'Alternative Name'),
            'city_id' => Module::t('postal', 'City ID'),
            'taxID' => Module::t('postal', 'Tax ID'),
        ];
    }

    public function setAdresType(AdresType $model): void
    {
        $this->name = $model->getNazwa();
        $this->name_2 = $model->getNazwa2();
        $this->street = $model->getUlica();
        $this->house_number = $model->getNumerDomu();
        $this->apartment_number = $model->getNumerLokalu();
        $this->city = $model->getMiejscowosc();
        $this->postal_code = $model->getKodPocztowy();
        $this->country = $model->getKraj();
        $this->phone = $model->getTelefon();
        $this->email = $model->getEmail();
        $this->mobile = $model->getMobile();
        $this->contact_person = $model->getOsobaKontaktowa();
        $this->taxID = $model->getNip();
    }

    public function getAdresType(): AdresType
    {
        return (new AdresType())
            ->setNazwa($this->name)
            ->setUlica($this->street)
            ->setNumerDomu($this->house_number)
            ->setNumerLokalu($this->apartment_number)
            ->setMiejscowosc($this->city)
            ->setKodPocztowy($this->postal_code)
            ->setKraj($this->country)
            ->setNazwa2($this->name_2)
            ->setTelefon($this->phone)
            ->setEmail($this->email)
            ->setMobile($this->mobile)
            ->setOsobaKontaktowa($this->contact_person)
            ->setNip($this->taxID);
    }

    public function getAddressLinks(): ActiveQuery
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

    protected function getFormatedPostalCode(): string
    {
        return substr($this->postal_code, 0, 2) . '-' . substr($this->postal_code, 2);
    }

    public function getFullInfo(array $params = []):string
    {
        $content = [$this->getFormatedPostalCode(), $this->city, $this->street, $this->house_number];

        return implode(' ', $content);
    }

    public function getFullName(): string
    {
        $name = $this->name;
        if (!empty($this->name_2)) {
            $name .= ' ' . $this->name_2;
        }
        return $name;
    }
}
