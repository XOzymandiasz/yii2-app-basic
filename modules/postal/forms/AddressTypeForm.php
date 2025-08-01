<?php

namespace app\modules\postal\forms;

use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\Module;
use app\modules\postal\sender\StructType\AdresType;
use yii\base\Model;
use yii\db\Exception;

class AddressTypeForm extends Model
{
    public const DEFAULT_COUNTRY = 'PL';

    public string $name = '';
    public string $postal_code = '';
    public string $city = '';
    public string $option = ShipmentForm::SCENARIO_DIRECTION_OUT;
    public ?string $direction = null;
    public ?string $street = null;
    public ?string $name_2 = null;
    public ?string $house_number = null;
    public ?string $apartment_number = null;
    public ?string $phone = null;
    public ?string $email = null;
    public ?string $mobile = null;
    public ?string $contact_person = null;
    public ?string $taxID = null;
    public string $country = self::DEFAULT_COUNTRY;
    private ?ShipmentAddress $model = null;

    public function rules(): array
    {
        return [
            [['name', 'city', 'postal_code', 'option'], 'required'],
            ['!direction', 'string'],
            [['name', 'name_2'], 'string', 'max' => 60],
            [['street'], 'string', 'max' => 255],
            [['option'], 'in', 'range' => array_keys(ShipmentForm::getDirectionsNames())],
            [['house_number', 'apartment_number'], 'string', 'max' => 11],
            [['city'], 'string', 'max' => 63],
            [['postal_code'], 'string', 'max' => 10],
            [['postal_code'], 'match', 'pattern' => '/^\d+$/', 'message' =>
                Module::t('poczta-polska', 'Postal code must contain only digits.')],
            [['country'], 'string', 'max' => 40],
            [['phone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50, 'min' => 6],
            [['mobile', 'contact_person', 'taxID'], 'string'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'name' => Module::t('postal', 'Name'),
            'name_2' => Module::t('postal', 'Secondary Name'),
            'street' => Module::t('postal', 'Street'),
            'house_number' => Module::t('postal', 'House Number'),
            'apartment_number' => Module::t('postal', 'Apartment Number'),
            'city' => Module::t('postal', 'City'),
            'postal_code' => Module::t('postal', 'Postal Code'),
            'country' => Module::t('postal', 'Country'),
            'phone' => Module::t('postal', 'Phone'),
            'email' => Module::t('postal', 'Email'),
            'mobile' => Module::t('postal', 'Mobile'),
            'contact_person' => Module::t('postal', 'Contact Person'),
            'taxID' => Module::t('postal', 'Tax ID'),
            'option' => Module::t('postal', 'Option'),
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

    /**
     * @throws Exception
     */
    public function save(bool $validate = true): bool
    {
        if ($validate && !$this->validate()) {
            return false;
        }

        $model = $this->getModel();

        $model->name = $this->name;
        $model->street = $this->street;
        $model->postal_code = $this->postal_code;
        $model->house_number = $this->house_number;
        $model->apartment_number = $this->apartment_number;
        $model->city = $this->city;
        $model->name_2 = $this->name_2;
        $model->country = $this->country;
        $model->phone = $this->phone;
        $model->email = $this->email;
        $model->mobile = $this->mobile;
        $model->contact_person = $this->contact_person;
        $model->taxID = $this->taxID;
        $model->option = $this->option;


        return $model->save(false);
    }

    public function setModel(ShipmentAddress $model): void
    {
        $this->model = $model;
        $this->name = $model->name;
        $this->street = $model->street;
        $this->postal_code = $model->postal_code;
        $this->house_number = $model->house_number;
        $this->apartment_number = $model->apartment_number;
        $this->city = $model->city;
        $this->name_2 = $model->name_2;
        $this->country = $model->country;
        $this->phone = $model->phone;
        $this->email = $model->email;
        $this->mobile = $model->mobile;
        $this->contact_person = $model->contact_person;
        $this->taxID = $model->taxID;
        $this->option = $model->option;
    }

    public function getModel(): ShipmentAddress
    {
        if ($this->model === null) {
            $this->model = new ShipmentAddress();
        }
        return $this->model;
    }
}
