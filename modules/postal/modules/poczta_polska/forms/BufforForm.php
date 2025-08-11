<?php

namespace app\modules\postal\modules\poczta_polska\forms;

use app\modules\postal\Module as PostalModule;
use app\modules\postal\modules\poczta_polska\repositories\BufferRepository;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType;
use yii\base\Model;

class BufforForm extends Model
{
    public ?string $regionId = null;
    public ?string $sendAt = null;
    public bool $isActive = false;
    public ?int $profilId = null;
    public ?int $dispatchOfficeId = null;
    public ?string $name = null;

    private ?BufferRepository $bufforRepository = null;
    private ?ProfileRepository $profileRepository = null;

    public function init(): void
    {
        parent::init();
        $this->bufforRepository = $this->getBufforRepository();
        $this->profileRepository = $this->getProfileRepository();
    }

    public function rules(): array
    {
        return [
            [['idBuffor', 'dispatchOfficeId', 'isActive', 'profilId'], 'integer'],
            [['sendAt', 'name'], 'string'],
            [['isActive'], 'boolean'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'idBuffor' => PostalModule::t('poczta-polska', 'ID Buffor'),
            'sendAt' => PostalModule::t('poczta-polska', 'Send at'),
            'dispatchOfficeId' => PostalModule::t('poczta-polska', 'Dispatch Office'),
            'isActive' => PostalModule::t('poczta-polska', 'Is active'),
            'name' => PostalModule::t('poczta-polska', 'Name'),
            'profile' => PostalModule::t('poczta-polska', 'Profile'),
            'profilId' => PostalModule::t('poczta-polska', 'Profil'),
            'regionId' => PostalModule::t('poczta-polska', 'Region'),
        ];
    }

    public function getProfilesNames(): array
    {
        $models = $this->getProfileRepository()->getList();
        $names = [];

        foreach ($models as $model) {
            $names[$model->getIdProfil()] = static::getProfileName($model);
        }
        return $names;
    }

    public function create(): bool
    {
        return $this->getBufforRepository()->create($this->createType());
    }

    public function createType(): BuforType
    {
        $buffor = (new BuforType())
            ->setActive($this->isActive)
            ->setUrzadNadania($this->dispatchOfficeId)
            ->setOpis($this->name)
            ->setDataNadania($this->sendAt);

        if ($this->profilId !== null) {
            $buffor->setProfil($this->getProfileRepository()->getList()[$this->profilId]);
        }

        return $buffor;
    }

    protected function getBufforRepository(): BufferRepository
    {
        $options = PocztaPolskaSenderOptions::testInstance();
        if (null === $this->bufforRepository) {
            $this->bufforRepository = new BufferRepository($options);
        }
        return $this->bufforRepository;
    }

    private function getProfileRepository(): ?ProfileRepository
    {
        $options = PocztaPolskaSenderOptions::testInstance();
        if (null === $this->profileRepository) {
            $this->profileRepository = new ProfileRepository($options);
        }
        return $this->profileRepository;
    }

    public static function getProfileName(ProfilType $model): string
    {
        return $model->getNazwa()
            . ' ' . $model->getUlica()
            . ' ' . $model->getNumerDomu()
            . ' ' . $model->getMiejscowosc()
            . ' ' . $model->getKodPocztowy()
            . ' ' . $model->getKraj();
    }

    public static function getDispatchOfficeName(PlacowkaPocztowaType $model): string
    {
        return $model->getMiejscowosc()
            . ' ' . $model->getUlica()
            . ' ' . $model->getNumerDomu()
            . ' (' . $model->getNazwaWydruk() . ')';
    }
}
