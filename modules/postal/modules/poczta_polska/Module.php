<?php

namespace app\modules\postal\modules\poczta_polska;

use app\modules\postal\modules\poczta_polska\components\PocztaPolskaTracker;
use app\modules\postal\modules\poczta_polska\repositories\RepositoryFactory;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use Yii;
use yii\base\Module as BaseModule;
use yii\di\Instance;

/**
 * @property-read PocztaPolskaTracker $tracker
 * @property-read PocztaPolskaSenderOptions $senderOptions
 */
class Module extends BaseModule
{

    /**
     * @var string|array|PocztaPolskaTracker
     */
    public string|array|PocztaPolskaTracker $tracker = [
        'class' => PocztaPolskaTracker::class,
    ];

    /**
     * @var string|array|PocztaPolskaSenderOptions
     */
    public string|array|PocztaPolskaSenderOptions $senderOptions = [
        'class' => PocztaPolskaSenderOptions::class,
    ];

    public function init(): void
    {
        parent::init();
        Yii::configure($this, require(__DIR__ . '/config.php'));

        $this->tracker = Instance::ensure($this->tracker,PocztaPolskaTracker::class, $this);
        $this->senderOptions = Instance::ensure($this->senderOptions,PocztaPolskaSenderOptions::class, $this);
    }

    public function getRepositoryFactory(): RepositoryFactory
    {
        return new RepositoryFactory(
            PocztaPolskaSenderOptions::testInstance()
        );
    }
}
