<?php

namespace app\modules\postal\sender\repositories;

use app\modules\postal\sender\services\ProfileService;
use app\modules\postal\sender\StructType\ProfilType;
use Yii;
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

    public function create(ProfilType $model): bool
    {
        $response = $this->getService()
            ->create($model);
        if ($response) {
            if (empty($response->getError())) {
                return true;
            }
            Yii::error([
                'error' => $response->getError(),
            ]);
        }
        Yii::error($this->getService()->getLastError(), __METHOD__);
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
                Yii::warning([
                    'lastResponseError' => $this->getService()->getLastError()
                ], __METHOD__);
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
