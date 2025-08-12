<?php

namespace app\modules\postal\modules\poczta_polska\repositories;

use app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType;
use app\modules\postal\modules\poczta_polska\services\ProfileService;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

class ProfileRepository extends BaseRepository
{
    private const KEY_PROFILE_LIST = 'profiles:list';
    /**
     * @var ProfilType[]
     */
    private array $profiles = [];


    protected array $serviceConfig = [
        'class' => ProfileService::class,
    ];

    // #todo: add delete method

    /**
     * @throws InvalidConfigException
     */
    public function create(ProfilType $model): bool
    {
        $response = $this->getService()->create($model);
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
     * @return ProfilType[]
     * @throws InvalidConfigException
     */
    public function getList(bool $refresh = false, ?int $duration = null): array
    {
        if (!$refresh) {
            $key = $this->buildCacheKey(self::KEY_PROFILE_LIST);

            $cachedResponse = $this->getCacheValue($key);
            if ($cachedResponse) {
                return $cachedResponse;
            }
        }

        if ($refresh || empty($this->profiles)) {
            $response = $this->getService()->getList();
            if (!$response) {
                $this->warning(__METHOD__, 'response is null');
                return [];
            }
            $this->profiles = ArrayHelper::index($response->getProfil(),
                function (ProfilType $profile) {
                    return $profile->getIdProfil();
                }
            );
            $key = $this->buildCacheKey(self::KEY_PROFILE_LIST);
            $this->setCacheValue($key, $this->profiles, $duration);
        }
        return $this->profiles;
    }

    /**
     * @throws InvalidConfigException
     */
    public function getById(int $id): ProfilType|null
    {
        foreach ($this->getList() as $profile) {
            if ($profile->getIdProfil() == $id) {
                return $profile;
            }
        }

        return null;
    }
    protected function getService(): ProfileService
    {
        return parent::getService();
    }

}
