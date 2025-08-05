<?php

namespace app\modules\postal\forms;

use app\modules\postal\Module;
use app\modules\postal\sender\EnumType\FormatType;
use app\modules\postal\sender\EnumType\KategoriaType;
use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\repositories\ShipmentRepository;
use app\modules\postal\sender\repositories\BufforRepository;
use app\modules\postal\sender\StructType\AddShipmentResponse;
use app\modules\postal\sender\StructType\BuforType;
use app\modules\postal\sender\StructType\PrzesylkaType;
use app\modules\postal\builders\PocztaPolskaCreateShipmentFactory;
use Throwable;
use yii\base\InvalidConfigException;
use yii\db\StaleObjectException;
use yii\helpers\ArrayHelper;

class PocztaPolskaShipmentForm extends ShipmentForm
{


    protected const CATEGORY_DEFAULT = KategoriaType::VALUE_PRIORYTETOWA;
    protected const FORMAT_DEFAULT = FormatType::VALUE_S;
    public bool $isRegistered = true;

    public ?int $idBuffor = null;
    public ?string $description = null;
    public ?int $mass = 500;

    public string $category = self::CATEGORY_DEFAULT;
    public ?string $format = self::FORMAT_DEFAULT;

    public ?ShipmentRepository $shipmentService = null;

    /**
     * @var BuforType[]
     */
    public array $buffors = [];

    public function init(): void
    {
        parent::init();
        if (empty($this->buffors)) {
            //$this->buffors = Yii::createObject(BufforRepository::class)->getAll();
            $this->buffors = $this->getBufforService()->getAll();
        }
    }

    public function rules(): array
    {
        return [
            [['category'], 'required'],
            [['category', 'format'], 'string'],
            [['isRegistered'], 'boolean'],
            [['!idBuffor', 'mass'], 'integer'],
            ['category', 'in', 'range' => array_keys(self::getCategoriesNames())],
            ['format', 'in', 'range' => array_keys(self::getFormatTypes())],
            [['description'], 'string', 'max' => 500],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'category' => Module::t('poczta-polska', 'Category'),
            'format' => Module::t('poczta-polska', 'Format'),
            'description' => Module::t('poczta-polska', 'Description'),
            'shipperAddressForm' => Module::t('poczta-polska', 'Shippeer Address'),
            'isRegistered' => Module::t('poczta-polska', 'Registered'),
            'mass' => Module::t('poczta-polska', 'Mass'),
        ];
    }

    //public function save(bool $validate = true): bool
    //{
//
    //    //@todo create ActiveRecord: PostalShipment
    //    return $validate;
    //}


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

    /**
     * @throws StaleObjectException
     * @throws Throwable
     */
    public function addShipment(): bool
    {
        $this->shipmentService = $this->getShipmentService();

        $response = $this->shipmentService->add($this->createShipment(), $this->idBuffor);

        if($response === null)
        {
            return false;
        }

        $model = $this->getModel();

        $model->guid = $response->getGuid();
        $model->number = $response->getNumerNadania();
        $model->update(false);

        return true;
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


    protected function getBufforService(): BufforRepository
    {
        return new BufforRepository(
            PocztaPolskaSenderOptions::testInstance()
        );
    }
    /**
     * @throws InvalidConfigException
     */
    protected function getShipmentService(): ShipmentRepository
    {
        if ($this->shipmentService === null) {
            $options = PocztaPolskaSenderOptions::testInstance();
            $this->shipmentService = new ShipmentRepository($options);
        }
        return $this->shipmentService;
    }


    //public function validate($attributeNames = null, $clearErrors = true): bool
    //{
    //    return parent::validate($attributeNames, $clearErrors)
    //        && $this->getAddressForm()->validate($attributeNames, $clearErrors)
    //        && $this->getShipperAddressForm()->validate($attributeNames, $clearErrors);
    //}
//
//
    //public function load($data, $formName = null): bool
    //{
    //    return parent::load($data, $formName)
    //        && $this->getAddressForm()->load($data, $formName)
    //        && $this->getShipperAddressForm()->load($data, $formName);
    //}

}
