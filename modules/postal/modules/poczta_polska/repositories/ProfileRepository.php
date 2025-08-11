<?php

namespace app\modules\postal\modules\poczta_polska\repositories;

use app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType;
use app\modules\postal\modules\services\ProfileService;
use yii\helpers\ArrayHelper;

class ProfileRepository extends BaseRepository
{

    /**
     * @var ProfilType[]
     */
    private array $profiles = [];


    protected $serviceConfig = [
        'class' => ProfileService::class,
    ];

    // #todo: add delete method

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
     */
    public function getList(bool $refresh = false): array
    {
        if ($refresh || empty($this->profiles)) {
            $response = $this->getService()->getList();
            if (!$response) {
                $this->warning(__METHOD__, 'response is null');
            }

            $this->profiles = ArrayHelper::index($response->getProfil(),
                function (ProfilType $profile) {
                    return $profile->getIdProfil();
                }
            );

        }

        return $this->profiles;
    }

    protected function getService(): ProfileService
    {
        return parent::getService();
    }

}
