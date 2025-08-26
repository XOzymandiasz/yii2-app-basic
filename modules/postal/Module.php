<?php

namespace app\modules\postal;

use app\modules\postal\components\ShipmentRelationComponent;
use app\modules\postal\components\ShipmentUrlComponent;
use app\modules\postal\events\ShipmentEvent;
use app\modules\postal\models\Shipment;
use Yii;
use yii\base\Module as BaseModule;
use yii\di\Instance;

/**
 * @property ShipmentUrlComponent $shipmentUrl
 * @property ShipmentRelationComponent $shipmentRelation
 */
class Module extends BaseModule
{

    public const EVENT_AFTER_CREATE_SHIPMENT_OUT = 'afterCreateShipmentOut';
    public const EVENT_AFTER_CREATE_SHIPMENT_IN = 'afterCreateShipmentIn';

    /**
     * @var string|array|ShipmentRelationComponent
     */
    public $shipmentRelation = [
        'class' => ShipmentRelationComponent::class,
    ];

    /**
     * @var string|array|ShipmentRelationComponent
     */
    public $shipmentUrl = [
        'class' => ShipmentUrlComponent::class,
    ];

    public bool $isOnlyCreator = true;

    public function init(): void
    {
        parent::init();

        Yii::setAlias('@edzima/postal', __DIR__);
        Yii::configure($this, require __DIR__ . '/config.php');

        $this->shipmentRelation = Instance::ensure($this->shipmentRelation, ShipmentRelationComponent::class, $this);
        $this->shipmentUrl = Instance::ensure($this->shipmentUrl, ShipmentUrlComponent::class, $this);
        $this->shipmentUrl->moduleId = $this->uniqueId;

        static::registerTranslations();
    }

    public static function registerTranslations(): void
    {
        Yii::$app->i18n->translations['edzima/postal/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@edzima/postal/messages',
            'fileMap' => [
                'edzima/postal/poczta-polska' => 'poczta-polska.php',
                'edzima/postal/common' => 'common.php',
                'edzima/postal/postal' => 'postal.php',
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null): string
    {
        return Yii::t('edzima/postal/' . $category, $message, $params, $language);
    }

    public function afterCreateInShipment(Shipment $model): void
    {
        if ($model->getIsInDirection()) {
            $event = new ShipmentEvent([
                'model' => $model
            ]);
            $this->trigger(static::EVENT_AFTER_CREATE_SHIPMENT_IN, $event);
        }
    }

    public function afterCreateOutShipment(Shipment $model): void
    {
        if ($model->getIsOutDirection()) {
            $event = new ShipmentEvent([
                'model' => $model
            ]);
            $this->trigger(static::EVENT_AFTER_CREATE_SHIPMENT_OUT, $event);
        }
    }
}
