<?php

namespace app\modules\postal\forms;

use app\modules\postal\Module;
use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\repositories\BufforRepository;
use app\modules\postal\sender\repositories\ProfileRepository;
use app\modules\postal\sender\StructType\BuforType;
use app\modules\postal\sender\StructType\PlacowkaPocztowaType;
use app\modules\postal\sender\StructType\ProfilType;
use yii\base\Model;

class BufforForm extends Model
{
    public ?string $regionId = null;
    public ?string $sendAt = null;
    public bool $isActive = false;
    public ?int $profilId = null;
    public ?int $dispatchOffice = null;
    public ?string $name = null;

    private ?BufforRepository $bufforRepository = null;
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
            [['idBuffor', 'idDispatchOffice', 'isActive', 'profilId'], 'integer'],
            [['sendAt', 'name'], 'string'],
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
            'name' => Module::t('poczta-polska', 'Name'),
            'profile' => Module::t('poczta-polska', 'Profile'),
            'profilId' => Module::t('poczta-polska', 'Profil'),
            'regionId' => Module::t('poczta-polska', 'Region'),
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
            ->setUrzadNadania($this->dispatchOffice)
            ->setOpis($this->name)
            ->setDataNadania($this->sendAt);

        if ($this->profilId !== null) {
            $buffor->setProfil($this->getProfileRepository()->getList()[$this->profilId]);
        }

        return $buffor;
    }

    protected function getBufforRepository(): BufforRepository
    {
        $options = PocztaPolskaSenderOptions::testInstance();
        if (null === $this->bufforRepository) {
            $this->bufforRepository = new BufforRepository($options);
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
