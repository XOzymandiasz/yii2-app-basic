<?php

namespace app\modules\postal\modules\poczta_polska\repositories;


use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType;
use app\modules\postal\modules\poczta_polska\services\BufferService;
use yii\base\InvalidConfigException;

class BufferRepository extends BaseRepository
{
    private const KEY_BUFFER_LIST = 'buffer:list';
    protected array $serviceConfig = [
        'class' => BufferService::class,
    ];


    public function clear(?int $bufferId): bool
    {
        $response = $this->getService()->clearEnvelope($bufferId);
        if ($response) {
            if (empty($response->getError())){
                return true;
            }
            $this->warning(__METHOD__, null, $response);
        }
        $this->warning(__METHOD__, 'response is null');
        return false;
    }

    /**
     * @throws InvalidConfigException
     */
    public function create(BuforType $model): bool
    {
        $response = $this->getService()->create($model);

        if ($response) {
            if (empty($response->getError())) {
                $key = $this->buildCacheKey(self::KEY_BUFFER_LIST);
                $this->deleteCacheValue($key);
                return true;
            }
            $this->warning(__METHOD__, null, $response);
        }

        $this->warning(__METHOD__, 'response is null');

        return false;
    }

    /**
     * @throws InvalidConfigException
     */
    public function update(BuforType $buffer): bool
    {
        $response = $this->getService()->update($buffer);

        if ($response) {
            if (empty($response->getError())) {
                $key = $this->buildCacheKey(self::KEY_BUFFER_LIST);
                $this->deleteCacheValue($key);
                return true;
            }
            $this->warning(__METHOD__, null, $response);
        }

        $this->warning(__METHOD__, 'response is null');

        return false;
    }

    /**
     * @throws InvalidConfigException
     */
    public function send(int $idBuffer, ?int $urzadNadania = null, ?array $pakiet = null): bool
    {
        $response = $this->getService()->send($idBuffer, $urzadNadania, $pakiet);

        if($response){
            if (empty($response->getError())){
                $key = $this->buildCacheKey(self::KEY_BUFFER_LIST);
                $this->deleteCacheValue($key);
                return true;
            }
            $this->warning(__METHOD__, null, $response);
        }

        $this->warning(__METHOD__, 'response is null');

        return false;
    }

    /**
     * @throws InvalidConfigException
     */
    public function getById(int $id): BuforType|null
    {
        foreach ($this->getList() as $buffer) {
            if ($buffer->getIdBufor() == $id) {
                return $buffer;
            }
        }

        return null;
    }

    /*
     * @var return BuforType[]
     */
    /**
     * @throws InvalidConfigException
     */
    public function getList(bool $refresh = false, ?int $duration = null): array
    {
        if (!$refresh) {
            $key = $this->buildCacheKey(self::KEY_BUFFER_LIST);

            $cachedResponse = $this->getCacheValue($key);
            if ($cachedResponse) {
                return $cachedResponse;
            }
        }

        $response = $this->getService()->getList();
        if ($response) {
            if(empty($response->getError())){
                $buffers = $response->getBufor();
                if($buffers){
                    $key = $this->buildCacheKey(self::KEY_BUFFER_LIST);
                    $this->setCacheValue($key, $buffers, $duration);
                    return $response->getBufor();
                }
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

    protected function getService(): BufferService
    {
        return parent::getService();
    }
}
