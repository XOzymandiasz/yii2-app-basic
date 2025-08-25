<?php

namespace app\modules\postal\modules\poczta_polska\forms;

use app\modules\postal\forms\ShipmentForm as BaseShipmentForm;
use app\modules\postal\models\Shipment;
use app\modules\postal\Module as BaseModule;
use app\modules\postal\modules\poczta_polska\builders\CreateShipmentFactory;
use app\modules\postal\modules\poczta_polska\repositories\EnvelopeRepository;
use app\modules\postal\modules\poczta_polska\repositories\ShipmentRepository;
use app\modules\postal\modules\poczta_polska\sender\EnumType\FormatType;
use app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaPoleconaKrajowaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType;
use Throwable;
use yii\base\InvalidConfigException;
use yii\db\StaleObjectException;
use yii\helpers\ArrayHelper;

class ShipmentForm extends BaseShipmentForm
{

    protected const CATEGORY_DEFAULT = KategoriaType::VALUE_PRIORYTETOWA;
    protected const FORMAT_DEFAULT = FormatType::VALUE_S;
    protected const MASS_DEFAULT = 500;

    public bool $isRegistered = true;
    public ?int $bufferId = null;
    public ?string $description = null;

    public ?int $mass = self::MASS_DEFAULT;
    public string $category = self::CATEGORY_DEFAULT;
    public ?string $format = self::FORMAT_DEFAULT;


    /**
     * @var BuforType[]
     */
    public array $buffers = [];

    private const MASS_LIMITS = [
        FormatType::VALUE_S => 500,
        FormatType::VALUE_M => 1000,
        FormatType::VALUE_L => 2000,
    ];


    public function rules(): array
    {
        return [
            [['category', 'bufferId'], 'required'],
            [['category', 'format'], 'string'],
            [['isRegistered'], 'boolean'],
            [['bufferId', 'mass'], 'integer'],
            [['bufferId'], 'in', 'range' => array_keys($this->getBufforsNames())],
            [['category'], 'in', 'range' => array_keys(self::getCategoriesNames())],
            [['format'], 'in', 'range' => array_keys(self::getFormatTypes())],
            [['description'], 'string', 'max' => 500],
            [['mass'], 'validateMassByFormat']
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'category' => BaseModule::t('poczta-polska', 'Category'),
            'format' => BaseModule::t('poczta-polska', 'Format'),
            'description' => BaseModule::t('poczta-polska', 'Description'),
            'shipperAddressForm' => BaseModule::t('poczta-polska', 'Shipper Address'),
            'isRegistered' => BaseModule::t('poczta-polska', 'Registered'),
            'mass' => BaseModule::t('poczta-polska', 'Mass'),
            'bufferId' => BaseModule::t('poczta-polska', 'Buffer'),
        ];
    }


    /**
     * @throws Throwable
     * @throws StaleObjectException
     */
    public function add(ShipmentRepository $repository): bool
    {
        $response = $repository->add($this->createShipment(), $this->bufferId);

        if ($response === null) {
            return false;
        }

        $model = $this->getModel();
        $model->buffer_id = $this->bufferId;
        $model->guid = $response->getGuid();
        $model->number = $response->getNumerNadania();

        $model->update(false);

        return true;
    }

    /**
     * @throws Throwable
     * @throws InvalidConfigException
     */
    public function update(ShipmentRepository $repository, int $bufferId): bool
    {
        $shipmentCopy = $repository->getOne($bufferId, $this->getModel()->guid, true);

        $this->number = '';

        if ($shipmentCopy === null) {
            return false;
        }

        $shipment = $this->createShipment();

        if ($this->getModel()->guid === null) {
            return false;
        }

        $shipment->setGuid($this->getModel()->guid);

        if (!$repository->clear($bufferId, $shipment->getGuid())){
            return false;
        }

        $response = $repository->add($shipment, $this->bufferId);
        if ($response === null) {
            $repository->add($shipmentCopy, $bufferId);
            return false;
        }

        $model = $this->getModel();
        $model->number = $response->getNumerNadania();
        $model->guid = $response->getGuid();
        $model->buffer_id = $this->buffer_id;

        $model->update(false);

        return true;
    }

    public function setShipment(PrzesylkaType $model): void
    {
        $this->description = $model->getOpis();

        if ($model instanceof PrzesylkaPoleconaKrajowaType){
            $this->format = $model->getFormat();
            $this->mass = $model->getMasa();
            $this->category = $model->getKategoria();
            $this->isRegistered = true;
        }
    }

    public function createShipment(): PrzesylkaType
    {
        return CreateShipmentFactory::create($this);
    }

    public function send(int $idBuffer, EnvelopeRepository $repository): bool
    {
        return $repository->send($idBuffer);
    }

    public function setModel(Shipment $model): void
    {
        parent::setModel($model);
        $this->description = $model->content->name;
    }

    public function validateMassByFormat(): void
    {
        $mass = (int)$this->mass;
        $format = $this->format;

        if (isset(self::MASS_LIMITS[$format])) {
            $max = self::MASS_LIMITS[$format];
            if ($mass > $max) {
                $this->addError('mass', "Mass cannot exceed {$max} g for the selected format.");
            }
        }
    }

    public function getBufforsNames(): array
    {
        return ArrayHelper::map(
            $this->buffers,
            function (BuforType $buffer) {
                return $buffer->getIdBufor();
            },
            function (BuforType $buffer) {
                return $this->getBufferFullName($buffer);
            }
        );
    }

    public static function getCategoriesNames(): array
    {
        return [
            KategoriaType::VALUE_EKONOMICZNA => BaseModule::t('poczta-polska', 'Category: Economies'),
            KategoriaType::VALUE_PRIORYTETOWA => BaseModule::t('poczta-polska', 'Category: Priority'),
        ];
    }

    public static function getFormatTypes(): array
    {
        return [
            FormatType::VALUE_S => BaseModule::t('poczta-polska', 'S'),
            FormatType::VALUE_M => BaseModule::t('poczta-polska', 'M'),
            FormatType::VALUE_L => BaseModule::t('poczta-polska', 'L'),
        ];
    }


    public static function getBufferFullName(BuforType $buffer): string
    {
        return $buffer->getOpis() . ' ' . $buffer->getDataNadania();
    }

}
