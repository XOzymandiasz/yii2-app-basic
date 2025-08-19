<?php

namespace app\modules\postal\modules\poczta_polska\repositories;


use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\EnvelopeInfoType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType;
use app\modules\postal\modules\poczta_polska\services\EnvelopeService;
use yii\base\InvalidConfigException;

class EnvelopeRepository extends BaseRepository
{


    private const KEY_BUFFER_LIST = 'buffer:list';
    protected array $serviceConfig = [
        'class' => EnvelopeService::class,
    ];

    /**
     * @throws InvalidConfigException
     */
    public function create(BuforType $model): bool
    {
        $response = $this->getService()->create($model);

        if ($response) {
            if (empty($response->getError())) {
                $this->clearBufforListCache();
                return true;
            }
            $this->warning(__METHOD__, null, $response);
        }

        $this->warning(__METHOD__, 'response is null');

        return false;
    }

    public function clear(int $bufferId): bool
    {
        $response = $this->getService()->clearEnvelope($bufferId);
        if ($response) {
            if (empty($response->getError())) {
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
                $this->clearBufforListCache();
                return true;
            }
            $this->warning(__METHOD__, null, $response);
        }

        $this->warning(__METHOD__, 'response is null');

        return false;
    }


    public function send(int $idBuffer, ?int $urzadNadania = null, ?array $pakiet = null): int|null
    {
        $response = $this->getService()->send($idBuffer, $urzadNadania, $pakiet);

        if ($response) {
            if (empty($response->getError())) {
                $this->clearBufforListCache();

                return $response->getIdEnvelope();
            }
            $this->warning(__METHOD__, null, $response);
        }

        $this->warning(__METHOD__, 'response is null');

        return null;
    }

    /**
     * @throws InvalidConfigException
     */
    public function getBuffer(int $id): BuforType|null
    {
        foreach ($this->getBuffersList() as $buffer) {
            if ($buffer->getIdBufor() == $id) {
                return $buffer;
            }
        }

        return null;
    }

    /**
     * @param bool $refresh
     * @param int|null $duration
     * @return BuforType[]
     * @throws InvalidConfigException
     */
    public function getBuffersList(bool $refresh = false, ?int $duration = null): array
    {
        if (!$refresh) {
            $key = $this->buildCacheKey(self::KEY_BUFFER_LIST);

            $cachedResponse = $this->getCacheValue($key);
            if ($cachedResponse) {
                return $cachedResponse;
            }
        }

        $response = $this->getService()->getBufferList();

        if (!$response) {
            $this->warning(__METHOD__, 'response is null', $response);
            return [];
        }

        if (!empty($response->getError())) {
            $this->warning(__METHOD__, null, $response);
            return [];
        }

        $buffers = $response->getBufor();

        if (!$buffers) {
            $this->warning(__METHOD__, 'buffer list is empty', $response);
        }

        $key = $this->buildCacheKey(self::KEY_BUFFER_LIST);
        $this->setCacheValue($key, $buffers, $duration);
        return $buffers;
    }

    /**
     * @param string $startDate
     * @param string $endDate
     * @return EnvelopeInfoType[]
     */
    public function getList(string $startDate, string $endDate): array
    {
        $service = $this->getService();
        $response = $service->getList($startDate, $endDate);
        if (!$response) {
            $this->warning(__METHOD__, 'response is null');
            return [];
        }

        return $response->getEnvelopes() ?? [];
    }

    public function getSenderBook(int $idEnvelope, bool $includeUnregistered = false): ?string
    {
        $service = $this->getService();
        $response = $service->getSenderBook($idEnvelope, $includeUnregistered);
        if ($response) {
            if (empty($response->getError())) {
                return $response->getPdfContent();
            }
            $this->warning(__METHOD__, null, $response);
        }
        $this->warning(__METHOD__, 'response is null');

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

    /**
     * @throws InvalidConfigException
     */
    protected function clearBufforListCache(): void
    {
        $key = $this->buildCacheKey(self::KEY_BUFFER_LIST);
        $this->deleteCacheValue($key);
    }

    protected function getService(): EnvelopeService
    {
        return parent::getService();
    }


}
