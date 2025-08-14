<?php

namespace app\modules\postal\modules\poczta_polska\forms;

use app\modules\postal\forms\AddressTypeForm;
use app\modules\postal\Module as PostalModule;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType;


class ProfileForm extends AddressTypeForm
{
    public ?int $idProfil = null;
    public ?string $profileName = null;
    public ?string $fax = null;
    public ?string $mpk = null;

    public function rules(): array
    {
        return array_merge(parent::rules(), [
            [['country'], 'required'],
            [['!idProfil'], 'integer'],
            [['fax', 'profileName'], 'string', 'max' => 30],
            [['mpk'], 'string', 'max' => 50],
        ]);
    }

    public function attributeLabels(): array
    {
        return array_merge(parent::attributeLabels(), [
            'idProfil' => PostalModule::t('postal', 'Profile ID'),
            'profileName' => PostalModule::t('postal', 'Profile name'),
            'fax' => PostalModule::t('postal', 'Fax'),
            'mpk' => PostalModule::t('postal', 'MPK'),
        ]);
    }

    /**
     * @throws InvalidConfigException
     */
    public function create(ProfileRepository $repository): bool
    {
        return $repository->create($this->createType());
    }

    /**
     * @throws InvalidConfigException
     */
    public function update(ProfileRepository $repository): bool
    {
        return $repository->update($this->createType());
    }

    public function setProfilType(ProfilType $model): void
    {
        $this->idProfil = $model->getIdProfil();
        $this->profileName = $model->getNazwaSkrocona();
        $this->fax = $model->getFax();
        $this->mpk = $model->getMpk();
        $this->name  = $model->getNazwa();
        $this->street = $model->getUlica();
        $this->house_number = $model->getNumerDomu();
        $this->apartment_number = $model->getNumerLokalu();
        $this->city = $model->getMiejscowosc();
        $this->postal_code = $model->getKodPocztowy();
        $this->country = $model->getKraj();
        $this->name_2 = $model->getNazwa2();
        $this->phone = $model->getTelefon();
        $this->email = $model->getEmail();
        $this->mobile = $model->getMobile();
        $this->contact_person = $model->getOsobaKontaktowa();
        $this->taxID = $model->getNip();
    }

    protected function createType(): ProfilType
    {
        return (new ProfilType())
            ->setIdProfil($this->idProfil)
            ->setNazwaSkrocona($this->profileName)
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

}
