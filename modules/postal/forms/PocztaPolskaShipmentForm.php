<?php

namespace app\modules\postal\forms;

use app\modules\postal\models\Shipment;
use app\modules\postal\Module;
use app\modules\postal\sender\EnumType\FormatType;
use app\modules\postal\sender\EnumType\KategoriaType;
use app\modules\postal\sender\repositories\ShipmentRepository;
use app\modules\postal\sender\StructType\BuforType;
use app\modules\postal\sender\StructType\PrzesylkaType;
use app\modules\postal\builders\PocztaPolskaCreateShipmentFactory;
use Throwable;
use yii\db\StaleObjectException;
use yii\helpers\ArrayHelper;

class PocztaPolskaShipmentForm extends ShipmentForm
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
            [['description'], 'string', 'max' => 500], #todo: check is this written out to label
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


    public static function getBufforFullName(BuforType $buffer): string
    {
        return $buffer->getOpis() . ' ' . $buffer->getDataNadania();
    }

}
