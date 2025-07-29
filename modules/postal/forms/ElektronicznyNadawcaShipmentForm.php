<?php

namespace app\modules\postal\forms;

use app\modules\postal\Module;
use app\modules\postal\sender\EnumType\FormatType;
use app\modules\postal\sender\EnumType\KategoriaType;
use app\modules\postal\sender\EnumType\ShipmentType;
use app\modules\postal\sender\StructType\BuforType;
use app\modules\postal\sender\StructType\PrzesylkaType;
use PocztaPolskaCreateShipmentFactory;
use yii\base\Model;
use yii\helpers\ArrayHelper;

class ShipmentForm extends Model
{

    //bufforId -> senderProfile
    //category
    //size
    //czy jest polecony


    protected const CATEGORY_DEFAULT = KategoriaType::VALUE_PRIORYTETOWA;
    protected const FORMAT_DEFAULT = FormatType::VALUE_S;
    public string $shipmentType;
    public string $guid;
    public bool $isRegistered = true;

    public ?string $description = null;
    public ?string $shipmentNumber = null;
    private ?AddressTypeForm $addressForm = null;
    private ?ShipperAddressTypeForm $shipperAddressForm = null;

    public string $category = self::CATEGORY_DEFAULT;
    public ?string $format = self::FORMAT_DEFAULT;

    /**
     * @var BuforType[]
     */
    public array $buffors = [];

//    public function init(): void
//    {
//        parent::init();
//        if (empty($this->buffors)) {
//            $this->buffors = Yii::createObject(BufforRepository::class)->getAll();
//        }
//
//    }

    public function rules(): array
    {
        return [
            [['shipmentType', 'category', 'guid'], 'required'],
            [['category', 'format', 'shipmentNumber'], 'string'],
            [['isRegistered'], 'boolean'],
            ['category', 'in', 'range' => array_keys(self::getCategoriesNames())],
            ['format', 'in', 'range' => array_keys(self::getFormatTypes())],
            [['description'], 'string', 'max' => 500],
            [['guid'], 'string', 'length' => 32],
            ['shipmentNumber', 'match', 'pattern' => '/^\d{10,20}$/',
                'message' => Module::t('poczta-polska',
                    'Shipment number must contain only digits and be between 10 and 20 characters long.')],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'category' => Module::t('poczta-polska', 'Category'),
            'format' => Module::t('poczta-polska', 'Format'),
            'description' => Module::t('poczta-polska', 'Description'),
            'guid' => Module::t('poczta-polska', 'GUID'),
            'shipmentType' => Module::t('poczta-polska', 'Shipment Type'),
            'addressForm' => Module::t('poczta-polska', 'Recipient Address'),
            'shipperAddressForm' => Module::t('poczta-polska', 'Shippeer Address'),
        ];
    }


    public function getBufforsNames(): array
    {
        return ArrayHelper::map(
            $this->buffors,
            'idBufor',
            'opis'
        );
    }

    public function createShipment(): PrzesylkaType
    {
        return PocztaPolskaCreateShipmentFactory::create($this);
    }

    public function setAddressForm(AddressTypeForm $addressForm): void
    {
        $this->addressForm = $addressForm;
    }

    public function getAddressForm(): AddressTypeForm
    {
        if ($this->addressForm === null) {
            $this->addressForm = new AddressTypeForm();
        }
        return $this->addressForm;
    }

    public function setShipperAddressForm(ShipperAddressTypeForm $shipperAddressForm): void
    {
        $this->shipperAddressForm = $shipperAddressForm;
    }

    public function getShipperAddressForm(): ShipperAddressTypeForm
    {
        if ($this->shipperAddressForm === null) {
            $this->shipperAddressForm = new ShipperAddressTypeForm();
        }
        return $this->shipperAddressForm;
    }

    public function validate($attributeNames = null, $clearErrors = true): bool
    {
        return parent::validate($attributeNames, $clearErrors)
            && $this->getAddressForm()->validate($attributeNames, $clearErrors)
            && $this->getShipperForm()->validate($attributeNames, $clearErrors);
    }


    public function load($data, $formName = null): bool
    {
        return parent::load($data, $formName)
            && $this->getAddressForm()->load($data, $formName)
            && $this->getShipperForm()->load($data, $formName);
    }

    public static function getShipmentTypes(): array
    {
        return ShipmentType::getValidValues();
    }

    public static function getCategoriesNames(): array
    {
        return [
            KategoriaType::VALUE_EKONOMICZNA => Module::t('poczta-polska', 'Category: Economies'),
            KategoriaType::VALUE_PRIORYTETOWA => Module::t('poczta-polska', 'Category: Priority'),
        ];
    }

    public static function getFormatTypes(): array
    {
        return [
            FormatType::VALUE_S => Module::t('poczta-polska', 'S'),
            FormatType::VALUE_M => Module::t('poczta-polska', 'M'),
            FormatType::VALUE_L => Module::t('poczta-polska', 'L'),
        ];
    }

}
