<?php

namespace app\modules\postal\sender\repositories;


use app\modules\postal\sender\services\BufforService;
use app\modules\postal\sender\StructType\BuforType;
use app\modules\postal\sender\StructType\PlacowkaPocztowaType;
use Yii;

class BufforRepository extends Component
{

    private ?BufforService $service = null;


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

    /**
     * @return PlacowkaPocztowaType[]
     */
    public function getDispatchOffices(string $regionId): array
    {

        $response = $this->getService()->getPostOffices($regionId);
        if ($response) {
            return array_filter($response->getPlacowka(), function (PlacowkaPocztowaType $model): bool {
                return $model->getIdZPO() === null;
            });
        }
        Yii::warning([
            'lastResponseError' => $this->getService()->getLastError()
        ], __METHOD__);
        return [];

    }

    public function create(BuforType $buffor): bool
    {
        $response = $this->getService()->create($buffor);

        if ($response && empty($response->getError())) {
            return true;
        }

        Yii::warning($response->getError(), __METHOD__);

        Yii::warning([
            'lastResponseError' => $this->getService()->getLastError()
        ], __METHOD__);
        return false;

    }


    protected function getService(): BufforService
    {
        if ($this->service === null) {
            $this->service = new BufforService($this->senderOptions->getSoapOptions());
        }
        return $this->service;
    }
}
