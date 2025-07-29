<?php

namespace app\modules\postal\forms;

use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\Module;
use app\modules\postal\sender\StructType\AdresType;
use yii\base\Model;

/**
 *
 *
 * @property-write AdresType $structModel
 * @property ShipmentAddress $model
 */
class AddressTypeForm extends Model
{
    public const DEFAULT_COUNTRY = 'PL';

    public string $name = '';
    public string $street = '';
    public string $postalCode = '';
    public string $city = '';
    public ?string $name2 = null;
    public ?string $houseNumber = null;
    public ?string $apartmentNumber = null;
    public ?string $phone = null;
    public ?string $email = null;
    public ?string $mobile = null;
    public ?string $contactPerson = null;
    public ?string $taxID = null;
    public ?string $country = self::DEFAULT_COUNTRY;
    private ?ShipmentAddress $shipmentAddress = null;

    public function rules(): array
    {
        return [
            [['name', 'street', 'city', 'postalCode'], 'required'],
            [['name', 'name2'], 'string', 'max' => 60],
            [['street'], 'string', 'max' => 255],
            [['houseNumber', 'apartmentNumber'], 'string', 'max' => 11],
            [['city'], 'string', 'max' => 63],
            [['postalCode'], 'string', 'max' => 10],
            [['postalCode'], 'match', 'pattern' => '/^\d+$/', 'message' =>
                Module::t('poczta-polska', 'Postal code must contain only digits.')],
            [['country'], 'string', 'max' => 40],
            [['phone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50, 'min' => 6],
            [['mobile', 'contactPerson', 'taxID'], 'string'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'name' => Module::t('poczta-polska', 'Name'),
            'name2' => Module::t('poczta-polska', 'Secondary Name'),
            'street' => Module::t('poczta-polska', 'Street'),
            'houseNumber' => Module::t('poczta-polska', 'House Number'),
            'apartmentNumber' => Module::t('poczta-polska', 'Apartment Number'),
            'city' => Module::t('poczta-polska', 'City'),
            'postalCode' => Module::t('poczta-polska', 'Postal Code'),
            'country' => Module::t('poczta-polska', 'Country'),
            'phone' => Module::t('poczta-polska', 'Phone'),
            'email' => Module::t('poczta-polska', 'Email'),
            'mobile' => Module::t('poczta-polska', 'Mobile'),
            'contactPerson' => Module::t('poczta-polska', 'Contact Person'),
            'taxID' => Module::t('poczta-polska', 'tax ID'),
        ];
    }

    public function setStructModel(AdresType $model): void
    {
        $this->name = $model->getNazwa();
        $this->name2 = $model->getNazwa2();
        $this->street = $model->getUlica();
        $this->houseNumber = $model->getNumerDomu();
        $this->apartmentNumber = $model->getNumerLokalu();
        $this->city = $model->getMiejscowosc();
        $this->postalCode = $model->getKodPocztowy();
        $this->country = $model->getKraj();
        $this->phone = $model->getTelefon();
        $this->email = $model->getEmail();
        $this->mobile = $model->getMobile();
        $this->contactPerson = $model->getOsobaKontaktowa();
        $this->taxID = $model->getNip();
    }

    public function createModel(): AdresType
    {
        return (new AdresType())
            ->setNazwa($this->name)
            ->setUlica($this->street)
            ->setNumerDomu($this->houseNumber)
            ->setNumerLokalu($this->apartmentNumber)
            ->setMiejscowosc($this->city)
            ->setKodPocztowy($this->postalCode)
            ->setKraj($this->country)
            ->setNazwa2($this->name2)
            ->setTelefon($this->phone)
            ->setEmail($this->email)
            ->setMobile($this->mobile)
            ->setOsobaKontaktowa($this->contactPerson)
            ->setNip($this->taxID);
    }

    public function save()
    {
        //@todo create ShipmentAddress
    }

    public function setModel(ShipmentAddress $model): void
    {
        $this->shipmentAddress = $model;
        $this->name = $model->name;
        $this->street = $model->street;
        $this->name2 = $model->name2;
        $this->houseNumber = $model->house_number;
        $this->apartmentNumber = $model->apartment_number;
        $this->city = $model->city;

    }

    public function getModel(): ShipmentAddress
    {
        if ($this->shipmentAddress) {
            $this->shipmentAddress = new ShipmentAddress();
        }
        return $this->shipmentAddress;
    }
}
