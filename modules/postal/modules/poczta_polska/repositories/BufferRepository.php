<?php

namespace app\modules\postal\modules\poczta_polska\repositories;


use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType;
use app\modules\postal\modules\poczta_polska\services\BufferService;

class BufferRepository extends BaseRepository
{

    protected array $serviceConfig = [
        'class' => BufferService::class,
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
     * @var return BuforType[]
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

    public function getById(int $id): BuforType|null
    {
        foreach ($this->getAll() as $buffer) {
            if ($buffer->getidBufor() == $id) {
                return $buffer;
            }
        }

        return null;
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

    public function send(int $idBuffer, ?int $urzadNadania = null, ?array $pakiet = null): bool
    {
        $response = $this->getService()->send($idBuffer, $urzadNadania, $pakiet);

        if($response){
            if (empty($response->getError())){
                return true;
            }
            $this->warning(__METHOD__, null, $response);
        }

        $this->warning(__METHOD__, 'response is null');

        return false;
    }

    protected function getService(): BufferService
    {
        return parent::getService();
    }
}
