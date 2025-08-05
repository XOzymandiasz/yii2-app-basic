<?php

namespace app\modules\postal\sender\repositories;

use app\modules\postal\sender\services\ProfileService;
use app\modules\postal\sender\StructType\ProfilType;
use Yii;

class ProfileRepository extends BaseRepository
{

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

    protected function getService(): ProfileService
    {
        return parent::getService();
    }

}
