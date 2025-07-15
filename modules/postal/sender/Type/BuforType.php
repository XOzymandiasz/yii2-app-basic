<?php

namespace app\modules\postal\sender\Type;

class BuforType
{
    /**
     * @var null | \app\modules\postal\sender\Type\ProfilType
     */
    private ?\app\modules\postal\sender\Type\ProfilType $profil = null;

    /**
     * @var null | int
     */
    private ?int $idKarta = null;

    /**
     * @var null | int
     */
    private ?int $idBufor = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataNadania = null;

    /**
     * @var null | int
     */
    private ?int $urzadNadania = null;

    /**
     * @var null | bool
     */
    private ?bool $active = null;

    /**
     * @var null | string
     */
    private ?string $opis = null;

    /**
     * W przypadku ustawienia TRUE zostaną
     *  zmodyfikowane planowane daty nadania dla przesyłek znajdujących
     *  się w aktualizowanym buforze.
     *  Dla przesyłek dla których wcześniej
     *  pobrano etykietę adresową
     *  zostaną wygenerowane nowe przesyłki z
     *  identycznymi parametrami
     *  jednak z NOWYM numerem nadania i GUID.
     *  Przesyłki pierwotne (tzn. te dla których pobrano wcześniej
     *  etykiety
     *  adresowe) nie będą już dostępne.
     *
     *  W przypadku ustawienia
     *  FALSE lub nie przekazania tego atrybutu,
     *  planowane daty nadania
     *  przesyłek nie będą modyfikowane.
     *
     * @var null | bool
     */
    private ?bool $aktualizujPlanowanaDateNadaniaPrzesylek = null;

    /**
     * @return null | \app\modules\postal\sender\Type\ProfilType
     */
    public function getProfil() : ?\app\modules\postal\sender\Type\ProfilType
    {
        return $this->profil;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ProfilType $profil
     * @return static
     */
    public function withProfil(?\app\modules\postal\sender\Type\ProfilType $profil) : static
    {
        $new = clone $this;
        $new->profil = $profil;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdKarta() : ?int
    {
        return $this->idKarta;
    }

    /**
     * @param null | int $idKarta
     * @return static
     */
    public function withIdKarta(?int $idKarta) : static
    {
        $new = clone $this;
        $new->idKarta = $idKarta;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdBufor() : ?int
    {
        return $this->idBufor;
    }

    /**
     * @param null | int $idBufor
     * @return static
     */
    public function withIdBufor(?int $idBufor) : static
    {
        $new = clone $this;
        $new->idBufor = $idBufor;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDataNadania() : ?\DateTimeInterface
    {
        return $this->dataNadania;
    }

    /**
     * @param null | \DateTimeInterface $dataNadania
     * @return static
     */
    public function withDataNadania(?\DateTimeInterface $dataNadania) : static
    {
        $new = clone $this;
        $new->dataNadania = $dataNadania;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getUrzadNadania() : ?int
    {
        return $this->urzadNadania;
    }

    /**
     * @param null | int $urzadNadania
     * @return static
     */
    public function withUrzadNadania(?int $urzadNadania) : static
    {
        $new = clone $this;
        $new->urzadNadania = $urzadNadania;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }

    /**
     * @param null | bool $active
     * @return static
     */
    public function withActive(?bool $active) : static
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOpis() : ?string
    {
        return $this->opis;
    }

    /**
     * @param null | string $opis
     * @return static
     */
    public function withOpis(?string $opis) : static
    {
        $new = clone $this;
        $new->opis = $opis;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getAktualizujPlanowanaDateNadaniaPrzesylek() : ?bool
    {
        return $this->aktualizujPlanowanaDateNadaniaPrzesylek;
    }

    /**
     * @param null | bool $aktualizujPlanowanaDateNadaniaPrzesylek
     * @return static
     */
    public function withAktualizujPlanowanaDateNadaniaPrzesylek(?bool $aktualizujPlanowanaDateNadaniaPrzesylek) : static
    {
        $new = clone $this;
        $new->aktualizujPlanowanaDateNadaniaPrzesylek = $aktualizujPlanowanaDateNadaniaPrzesylek;

        return $new;
    }
}

