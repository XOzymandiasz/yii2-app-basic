<?php

namespace app\modules\postal\modules\poczta_polska\forms;

use app\modules\postal\Module as PostalModule;
use app\modules\postal\modules\poczta_polska\repositories\EnvelopeRepository;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType;
use yii\base\InvalidConfigException;
use yii\base\Model;

class BufferForm extends Model
{
    public ?string $regionId = null;
    public ?string $sendAt = null;
    public bool $isActive = false;
    public ?int $profilId = null;
    public ?int $bufferId = null;
    public ?int $dispatchOfficeId = null;
    public ?string $name = null;

    public function rules(): array
    {
        return [
            [['dispatchOfficeId', 'profilId'], 'required'],
            [['!bufferId', 'dispatchOfficeId', 'profilId'], 'integer'],
            [['sendAt', 'name'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['isActive'], 'boolean'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'sendAt' => PostalModule::t('poczta-polska', 'Send at'),
            'dispatchOfficeId' => PostalModule::t('poczta-polska', 'Dispatch Office'),
            'isActive' => PostalModule::t('poczta-polska', 'Is active'),
            'name' => PostalModule::t('poczta-polska', 'Name'),
            'profile' => PostalModule::t('poczta-polska', 'Profile'),
            'profilId' => PostalModule::t('poczta-polska', 'Profil'),
            'regionId' => PostalModule::t('poczta-polska', 'Region'),
        ];
    }

    /**
     * @throws InvalidConfigException
     */
    public function getProfilesNames(ProfileRepository $repository): array
    {
        $models = $repository->getList();
        $names = [];

        foreach ($models as $model) {
            $names[$model->getIdProfil()] = static::getProfileName($model);
        }
        return $names;
    }

    /**
     * @throws InvalidConfigException
     */
    public function create(EnvelopeRepository $bufferRepository, ProfileRepository $profileRepository): bool
    {
        return $bufferRepository->create($this->createType($profileRepository));
    }

    /**
     * @throws InvalidConfigException
     */
    public function update(EnvelopeRepository $bufferRepository, ProfileRepository $profileRepository): bool
    {
        return $bufferRepository->update($this->createType($profileRepository));
    }

    public function setBuforType(BuforType $buforType): void
    {
        $this->profilId = $buforType->getProfil()->getIdProfil();
        $this->sendAt = $buforType->getDataNadania();
        $this->dispatchOfficeId = $buforType->getUrzadNadania();
        $this->isActive = $buforType->getActive();
        $this->name = $buforType->getOpis();
        $this->bufferId = $buforType->getIdBufor();
    }

    /**
     * @throws InvalidConfigException
     */
    protected function createType(ProfileRepository $repository): BuforType
    {
        $buffer = (new BuforType())
            ->setActive($this->isActive)
            ->setUrzadNadania($this->dispatchOfficeId)
            ->setOpis($this->name)
            ->setDataNadania($this->sendAt)
            ->setIdBufor($this->bufferId);

        if ($this->profilId !== null) {
            $buffer->setProfil($repository->getList()[$this->profilId]);
        }

        return $buffer;
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
