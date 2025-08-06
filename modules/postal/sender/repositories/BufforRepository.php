<?php

namespace app\modules\postal\sender\repositories;


use app\modules\postal\sender\services\BufforService;
use app\modules\postal\sender\StructType\BuforType;
use app\modules\postal\sender\StructType\PlacowkaPocztowaType;

class BufforRepository extends BaseRepository
{

    protected $serviceConfig = [
        'class' => BufforService::class,
    ];


    public function clear(?int $bufforId): bool
    {
        $response = $this->getService()->clearEnvelope($bufforId);
        if ($response && empty($response->getError())) {
            return true;
        }
        $this->warning(__METHOD__, null, $response);
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
        $this->warning(__METHOD__, null, $response);
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

        $this->warning(__METHOD__);

        return [];
    }

    public function create(BuforType $buffor): bool
    {
        $response = $this->getService()->create($buffor);

        if ($response) {
            if (empty($response->getError())) {
                return true;
            }
            $this->warning(__METHOD__, null, $response);
        }

        $this->warning(__METHOD__, 'response is null');

        return false;

    }

    protected function getService(): BufforService
    {
        return parent::getService();
    }
}
