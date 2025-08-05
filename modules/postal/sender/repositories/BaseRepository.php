<?php

namespace app\modules\postal\sender\repositories;

use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\services\BaseService;
use Yii;
use yii\base\Component;

abstract class BaseRepository extends Component
{

    protected $serviceConfig = [];

    private ?BaseService $service = null;
    private PocztaPolskaSenderOptions $senderOptions;

    public function __construct(PocztaPolskaSenderOptions $senderOptions, array $config = [])
    {
        $this->senderOptions = $senderOptions;

        parent::__construct($config);
    }


    protected function getService(): BaseService
    {
        if ($this->service === null) {
            $this->service = $this->createService();
        }
        return $this->service;
    }

    protected function createService(): BaseService
    {
        $config = $this->serviceConfig;
        return Yii::createObject($config, [$this->senderOptions->getSoapOptions()]);
    }
}
