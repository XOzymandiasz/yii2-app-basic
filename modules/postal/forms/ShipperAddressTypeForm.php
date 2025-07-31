<?php

namespace app\modules\postal\forms;

use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\Module;
use app\modules\postal\sender\StructType\ProfilType;
use \app\modules\postal\sender\StructType\AdresType;


class ShipperAddressTypeForm extends AddressTypeForm
{
    public ?int $idProfil = null;
    public ?int $shortName = null;
    public ?string $fax = null;
    public ?string $mpk = null;

    public function rules(): array
    {
        return array_merge(parent::rules(), [
            [['idProfil', 'shortName'], 'integer'],
            [['fax'], 'string', 'max' => 30],
            [['mpk'], 'string', 'max' => 50],
        ]);
    }

    public function attributeLabels(): array
    {
        return array_merge(parent::attributeLabels(), [
            'idProfil' => Module::t('poczta-polska', 'Profile ID'),
            'shortName' => Module::t('poczta-polska', 'Short Name'),
            'fax' => Module::t('poczta-polska', 'Fax'),
            'mpk' => Module::t('poczta-polska', 'MPK'),
        ]);
    }


    public function setProfilType(ProfilType $model): void
    {
        $this->setAdresType($model);
        $this->idProfil = $model->getIdProfil();
        $this->shortName = $model->getNazwaSkrocona();
        $this->fax = $model->getFax();
        $this->mpk = $model->getMpk();
    }


    public function getProfileType(): ProfilType
    {
        return (new ProfilType())
            ->setNazwa($this->name)
            ->setNazwa2($this->name_2)
            ->setUlica($this->street)
            ->setNumerDomu($this->house_number)
            ->setNumerLokalu($this->apartment_number)
            ->setMiejscowosc($this->city)
            ->setKodPocztowy($this->postal_code)
            ->setKraj($this->country)
            ->setTelefon($this->phone)
            ->setEmail($this->email)
            ->setMobile($this->mobile)
            ->setOsobaKontaktowa($this->contact_person)
            ->setNip($this->taxID)
            ->setIdProfil($this->idProfil)
            ->setNazwaSkrocona($this->shortName)
            ->setFax($this->fax)
            ->setMpk($this->mpk);
    }

}
