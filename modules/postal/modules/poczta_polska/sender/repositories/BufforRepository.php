<?php

namespace app\modules\postal\modules\poczta_polska\sender\repositories;


use app\modules\postal\modules\poczta_polska\sender\services\BufforService;
use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType;

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
        if ($response) {
            if(empty($response->getError())){
                return $response->getBufor();
            }
            $this->warning(__METHOD__, null, $response);
        }
        $this->warning(__METHOD__, 'response is null', $response);
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

    public function create(BuforType $buffer): bool
    {
        $response = $this->getService()->create($buffer);

        if ($response) {
            if (empty($response->getError())) {
                return true;
            }
            $this->warning(__METHOD__, null, $response);
        }

        $this->warning(__METHOD__, 'response is null');

        return false;

    }

    public function send(int $idBufor, ?int $urzadNadania = null, ?array $pakiet = null): bool
    {
        $response = $this->getService()->send($idBufor, $urzadNadania, $pakiet);

        if($response){
            if (empty($response->getError())){
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
