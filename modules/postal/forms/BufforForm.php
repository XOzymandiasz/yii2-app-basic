<?php

namespace app\modules\postal\forms;

use app\modules\postal\Module;
use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\repositories\BufforRepository;
use app\modules\postal\sender\StructType\PlacowkaPocztowaType;
use app\modules\postal\sender\StructType\ProfilType;
use edzima\teryt\models\Region;
use yii\base\Model;

class BufforForm extends Model
{
    public ?int $idBuffor = null;

    public ?string $regionId = null;
    public ?string $sendAt = null;
    public bool $isActive = false;
    public ?int $dispatchOffice = null;
    public ?string $description = null;
    public ?ProfilType $profile = null;

    public ?BufforRepository $service = null;


    public function init(): void
    {
        parent::init();
        $this->service = $this->getBufforRepository();
    }

    public function rules(): array
    {
        return [
            [['idBuffor', 'idDispatchOffice', 'isActive'], 'integer'],
            [['sendAt', 'description'], 'string'],
            [['isActive'], 'boolean'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'idBuffor' => Module::t('poczta-polska', 'ID Buffor'),
            'sendAt' => Module::t('poczta-polska', 'Send at'),
            'dispatchOffice' => Module::t('poczta-polska', 'Dispatch Office'),
            'isActive' => Module::t('poczta-polska', 'Is active'),
            'description' => Module::t('poczta-polska', 'Description'),
            'profile' => Module::t('poczta-polska', 'Profile'),
        ];
    }

    public static function getRegionsNames(): array
    {
        return [
            Region::REGION_DOLNOSLASKIE => Module::t('poczta-polska', 'Lower Silesia'),
        ];
    }

    public function getDispatchOfficesNames(): array
    {
        $offices = $this->service->getDispatchesOffices();
        $names = [];
        foreach ($offices as $office) {
            $names[$office->getUrzadNadania()] = $office->getNazwaWydruk() . ': ' . $office->getUrzadNadania();
        }
        return $names;
    }

    public function getProfileNames(): array
    {
        $profiles = [];
        return $this->service->getProfileNames();
    }


    protected function getBufforRepository(): BufforRepository
    {
        $options = PocztaPolskaSenderOptions::testInstance();
        if (null === $this->service) {
            $this->service = new BufforRepository($options);
        }
        return $this->service;
    }


    public static function getDispatchOfficeName(PlacowkaPocztowaType $model): string
    {
        return $model->getMiejscowosc()
            . ' ' . $model->getUlica()
            . ' ' . $model->getNumerDomu()
            . ' (' . $model->getNazwaWydruk() . ')';
    }


}
