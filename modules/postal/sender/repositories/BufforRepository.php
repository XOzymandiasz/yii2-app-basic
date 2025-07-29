<?php

namespace app\modules\postal\sender\repositories;


use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\ServiceType\BufforService;
use Yii;
use yii\base\Component;
use yii\db\Connection;
use yii\di\Instance;

class BufforRepository extends Component
{

    private ?BufforService $service = null;

    private PocztaPolskaSenderOptions $senderOptions;


    public function __construct(PocztaPolskaSenderOptions $senderOptions, array $config = [])
    {
        $this->senderOptions = $senderOptions;
        parent::__construct($config);
    }


    public function clear(?int $bufforId): bool
    {
        $response = $this->getService()->clearEnvelope($bufforId);
        if ($response && empty($response->getError())) {
            return true;
        }
        Yii::warning([
            'responseError' => $response->getError(),
            'lastResponseError' => $this->getService()->getLastError()
        ], __METHOD__);
        return false;
    }

    /*
     * @return BuforType[]
     */
    public function getAll(): array
    {
        $response = $this->getService()->getEnvelopeBuforList();
        if ($response && empty($response->getError())) {
            return $response->getBufor();
        }
        return [];
    }

    protected function getService(): BufforService
    {
        if ($this->service === null) {
            $this->service = new BufforService($this->senderOptions->getSoapOptions());
        }
        return $this->service;
    }
}
