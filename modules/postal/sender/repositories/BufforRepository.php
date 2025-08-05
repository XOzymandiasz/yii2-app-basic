<?php

namespace app\modules\postal\sender\repositories;


use app\modules\postal\sender\services\BufforService;
use app\modules\postal\sender\StructType\BuforType;
use app\modules\postal\sender\StructType\PlacowkaPocztowaType;
use app\modules\postal\sender\StructType\ProfilType;
use Yii;
use yii\helpers\ArrayHelper;

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
     * @var ProfilType[]
     */
    private array $profiles = [];

    /**
     * @return ProfilType[]
     */
    public function getProfiles(bool $refresh = false): array
    {
        if ($refresh || empty($this->profiles)) {
            $response = $this->getService()->getProfiles();
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
