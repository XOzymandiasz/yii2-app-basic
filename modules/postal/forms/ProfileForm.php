<?php

namespace app\modules\postal\forms;

use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\Module;
use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\repositories\ProfileRepository;
use app\modules\postal\sender\StructType\ProfilType;
use \app\modules\postal\sender\StructType\AdresType;


class ProfileForm extends AddressTypeForm
{
    public ?int $idProfil = null;
    public ?string $shortName = null;
    public ?string $fax = null;
    public ?string $mpk = null;

    private ?ProfileRepository $profileRepository = null;

    public function init(): void
    {
        parent::init();
        $this->profileRepository = $this->getProfileRepository();
    }

    public function rules(): array
    {
        return array_merge(parent::rules(), [
            [['idProfil'], 'integer'],
            [['fax', 'shortName'], 'string', 'max' => 30],
            [['mpk'], 'string', 'max' => 50],
        ]);
    }

    public function attributeLabels(): array
    {
        return array_merge(parent::attributeLabels(), [
            'idProfil' => Module::t('postal', 'Profile ID'),
            'shortName' => Module::t('postal', 'Short Name'),
            'fax' => Module::t('postal', 'Fax'),
            'mpk' => Module::t('postal', 'MPK'),
        ]);
    }

    public function create(): bool
    {
        return $this->getProfileRepository()->create($this->createType());
    }

    protected function createType(): ProfilType
    {
        return (new ProfilType())
            ->setIdProfil($this->idProfil)
            ->setNazwaSkrocona($this->shortName)
            ->setFax($this->fax)
            ->setMpk($this->mpk)
            ->setNazwa($this->name)
            ->setUlica($this->street)
            ->setNumerDomu($this->house_number)
            ->setNumerLokalu($this->apartment_number)
            ->setMiejscowosc($this->city)
            ->setKodPocztowy($this->postal_code)
            ->setKraj($this->country)
            ->setNazwa2($this->name_2)
            ->setTelefon($this->phone)
            ->setEmail($this->email)
            ->setMobile($this->mobile)
            ->setOsobaKontaktowa($this->contact_person)
            ->setNip($this->taxID);
    }

    private function getProfileRepository(): ?ProfileRepository
    {
        $options = PocztaPolskaSenderOptions::testInstance();
        if (null === $this->profileRepository) {
            $this->profileRepository = new ProfileRepository($options);
        }
        return $this->profileRepository;
    }


}
