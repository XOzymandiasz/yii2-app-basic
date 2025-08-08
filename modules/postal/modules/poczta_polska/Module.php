<?php

namespace app\modules\postal\modules\poczta_polska;

use app\modules\postal\modules\poczta_polska\components\PocztaPolskaTracker;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use app\modules\postal\modules\poczta_polska\sender\repositories\RepositoriesFactory;
use Yii;
use yii\base\InvalidConfigException;
use yii\base\Module as BaseModule;

/**
 *
 * @property-read PocztaPolskaTracker $pocztaPolskaTracker
 */
class Module extends BaseModule
{
    #@todo: move to bootsrtap
    public $shipmentModelClass;

    /**
     * @var string|array|PocztaPolskaSenderOptions
     */
    public string|array|PocztaPolskaSenderOptions $senderOptions;

    public function init(): void
    {
        parent::init();
        Yii::configure($this, require(__DIR__ . '/config.php'));
    }

    /**
     * @throws InvalidConfigException
     */
    public function getPocztaPolskaTracker(): PocztaPolskaTracker
    {
        return $this->get('pocztaPolskaTracker');
    }

    public function getPocztaPolskaSenderOptions(): PocztaPolskaSenderOptions
    {
        return $this->get('pocztaPolskaSenderOptions');
    }

    public function getRepositoriesFactory(): RepositoriesFactory
    {
        //@todo fix with config from module without component
        return new RepositoriesFactory(
            PocztaPolskaSenderOptions::testInstance()
        );
        return $this->get('repositoriesFactory');
    }
}