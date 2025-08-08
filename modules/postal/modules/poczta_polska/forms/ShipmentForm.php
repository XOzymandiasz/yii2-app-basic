<?php

namespace app\modules\postal\modules\poczta_polska\forms;

use app\modules\postal\forms\ShipmentForm as PostalShipmentForm;
use app\modules\postal\models\Shipment;
use app\modules\postal\Module as PostalModule;
use app\modules\postal\modules\poczta_polska\builders\PocztaPolskaCreateShipmentFactory;
use app\modules\postal\modules\poczta_polska\sender\EnumType\FormatType;
use app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType;
use app\modules\postal\modules\poczta_polska\sender\repositories\ShipmentRepository;
use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType;
use Throwable;
use yii\db\StaleObjectException;
use yii\helpers\ArrayHelper;

class ShipmentForm extends PostalShipmentForm
{

    protected const CATEGORY_DEFAULT = KategoriaType::VALUE_PRIORYTETOWA;
    protected const FORMAT_DEFAULT = FormatType::VALUE_S;
    protected const MASS_DEFAULT = 500;


    public bool $isRegistered = true;
    public ?int $idBuffer = null;
    public ?string $description = null;


    public ?int $mass = self::MASS_DEFAULT;
    public string $category = self::CATEGORY_DEFAULT;
    public ?string $format = self::FORMAT_DEFAULT;


    /**
     * @var BuforType[]
     */
    public array $buffors = [];


    public function rules(): array
    {
        return [
            [['category', 'idBuffer'], 'required'],
            [['category', 'format'], 'string'],
            [['isRegistered'], 'boolean'],
            [['idBuffer', 'mass'], 'integer'],
            ['idBuffer', 'in', 'range' => array_keys($this->getBufforsNames())],
            ['category', 'in', 'range' => array_keys(self::getCategoriesNames())],
            ['format', 'in', 'range' => array_keys(self::getFormatTypes())],
            [['description'], 'string', 'max' => 500],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'category' => PostalModule::t('poczta-polska', 'Category'),
            'format' => PostalModule::t('poczta-polska', 'Format'),
            'description' => PostalModule::t('poczta-polska', 'Description'),
            'shipperAddressForm' => PostalModule::t('poczta-polska', 'Shippeer Address'),
            'isRegistered' => PostalModule::t('poczta-polska', 'Registered'),
            'mass' => PostalModule::t('poczta-polska', 'Mass'),
        ];
    }


    /**
     * @throws Throwable
     * @throws StaleObjectException
     */
    public function addShipment(ShipmentRepository $repository): bool
    {

        $response = $repository->add($this->createShipment(), $this->idBuffer);

        if ($response === null) {
            return false;
        }

        $model = $this->getModel();

        $model->guid = $response->getGuid();
        $model->number = $response->getNumerNadania();
        $model->update(false);

        return true;
    }

    public function createShipment(): PrzesylkaType
    {
        return PocztaPolskaCreateShipmentFactory::create($this);
    }


    public function setModel(Shipment $model): void
    {
        parent::setModel($model);
        $this->description = $model->content->name;
    }

    public function getBufforsNames(): array
    {
        return ArrayHelper::map(
            $this->buffors,
            function (BuforType $buffer) {
                return $buffer->getIdBufor();
            },
            function (BuforType $buffer) {
                return $this->getBufforFullName($buffer);
            }
        );
    }

    public static function getCategoriesNames(): array
    {
        return [
            KategoriaType::VALUE_EKONOMICZNA => PostalModule::t('poczta-polska', 'Category: Economies'),
            KategoriaType::VALUE_PRIORYTETOWA => PostalModule::t('poczta-polska', 'Category: Priority'),
        ];
    }

    public static function getFormatTypes(): array
    {
        return [
            FormatType::VALUE_S => PostalModule::t('poczta-polska', 'S'),
            FormatType::VALUE_M => PostalModule::t('poczta-polska', 'M'),
            FormatType::VALUE_L => PostalModule::t('poczta-polska', 'L'),
        ];
    }


    public static function getBufforFullName(BuforType $buffer): string
    {
        return $buffer->getOpis() . ' ' . $buffer->getDataNadania();
    }

}
