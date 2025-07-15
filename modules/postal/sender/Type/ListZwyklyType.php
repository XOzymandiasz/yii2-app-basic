<?php

namespace app\modules\postal\sender\Type;

class ListZwyklyType extends PrzesylkaNieRejestrowanaType
{
    /**
     * @var null | \app\modules\postal\sender\Type\OplacaOdbiorcaType
     */
    private ?\app\modules\postal\sender\Type\OplacaOdbiorcaType $oplacaOdbiorca = null;

    /**
     * @var null | string
     */
    private ?string $mpk = null;

    /**
     * Identifier library for legal deposit from
     *  list downloaded using the getLibrariesForLegalDeposits method
     *
     * @var null | string
     */
    private ?string $idLibraryForLegalDeposit = null;

    /**
     * @var string
     */
    private string $guid;

    /**
     * @var null | string
     */
    private ?string $pakietGuid = null;

    /**
     * @var null | string
     */
    private ?string $opakowanieGuid = null;

    /**
     * @var null | string
     */
    private ?string $opis = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $planowanaDataNadania = null;

    /**
     * @var null | int
     */
    private ?int $ilosc = null;

    /**
     * @var null | bool
     */
    private ?bool $posteRestante = null;

    /**
     * @var null | \app\modules\postal\sender\Type\KategoriaType
     */
    private ?\app\modules\postal\sender\Type\KategoriaType $kategoria = null;

    /**
     * @var null | \app\modules\postal\sender\Type\GabarytType
     */
    private ?\app\modules\postal\sender\Type\GabarytType $gabaryt = null;

    /**
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | bool
     */
    private ?bool $egzemplarzBiblioteczny = null;

    /**
     * @var null | bool
     */
    private ?bool $dlaOciemnialych = null;

    /**
     * @var null | bool
     */
    private ?bool $obszarMiasto = null;

    /**
     * @var null | bool
     */
    private ?bool $miejscowa = null;

    /**
     * @return null | \app\modules\postal\sender\Type\OplacaOdbiorcaType
     */
    public function getOplacaOdbiorca() : ?\app\modules\postal\sender\Type\OplacaOdbiorcaType
    {
        return $this->oplacaOdbiorca;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\OplacaOdbiorcaType $oplacaOdbiorca
     * @return static
     */
    public function withOplacaOdbiorca(?\app\modules\postal\sender\Type\OplacaOdbiorcaType $oplacaOdbiorca) : static
    {
        $new = clone $this;
        $new->oplacaOdbiorca = $oplacaOdbiorca;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMpk() : ?string
    {
        return $this->mpk;
    }

    /**
     * @param null | string $mpk
     * @return static
     */
    public function withMpk(?string $mpk) : static
    {
        $new = clone $this;
        $new->mpk = $mpk;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdLibraryForLegalDeposit() : ?string
    {
        return $this->idLibraryForLegalDeposit;
    }

    /**
     * @param null | string $idLibraryForLegalDeposit
     * @return static
     */
    public function withIdLibraryForLegalDeposit(?string $idLibraryForLegalDeposit) : static
    {
        $new = clone $this;
        $new->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;

        return $new;
    }

    /**
     * @return string
     */
    public function getGuid() : string
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     * @return static
     */
    public function withGuid(string $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPakietGuid() : ?string
    {
        return $this->pakietGuid;
    }

    /**
     * @param null | string $pakietGuid
     * @return static
     */
    public function withPakietGuid(?string $pakietGuid) : static
    {
        $new = clone $this;
        $new->pakietGuid = $pakietGuid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOpakowanieGuid() : ?string
    {
        return $this->opakowanieGuid;
    }

    /**
     * @param null | string $opakowanieGuid
     * @return static
     */
    public function withOpakowanieGuid(?string $opakowanieGuid) : static
    {
        $new = clone $this;
        $new->opakowanieGuid = $opakowanieGuid;

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
     * @return null | \DateTimeInterface
     */
    public function getPlanowanaDataNadania() : ?\DateTimeInterface
    {
        return $this->planowanaDataNadania;
    }

    /**
     * @param null | \DateTimeInterface $planowanaDataNadania
     * @return static
     */
    public function withPlanowanaDataNadania(?\DateTimeInterface $planowanaDataNadania) : static
    {
        $new = clone $this;
        $new->planowanaDataNadania = $planowanaDataNadania;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIlosc() : ?int
    {
        return $this->ilosc;
    }

    /**
     * @param null | int $ilosc
     * @return static
     */
    public function withIlosc(?int $ilosc) : static
    {
        $new = clone $this;
        $new->ilosc = $ilosc;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPosteRestante() : ?bool
    {
        return $this->posteRestante;
    }

    /**
     * @param null | bool $posteRestante
     * @return static
     */
    public function withPosteRestante(?bool $posteRestante) : static
    {
        $new = clone $this;
        $new->posteRestante = $posteRestante;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\KategoriaType
     */
    public function getKategoria() : ?\app\modules\postal\sender\Type\KategoriaType
    {
        return $this->kategoria;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\KategoriaType $kategoria
     * @return static
     */
    public function withKategoria(?\app\modules\postal\sender\Type\KategoriaType $kategoria) : static
    {
        $new = clone $this;
        $new->kategoria = $kategoria;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\GabarytType
     */
    public function getGabaryt() : ?\app\modules\postal\sender\Type\GabarytType
    {
        return $this->gabaryt;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\GabarytType $gabaryt
     * @return static
     */
    public function withGabaryt(?\app\modules\postal\sender\Type\GabarytType $gabaryt) : static
    {
        $new = clone $this;
        $new->gabaryt = $gabaryt;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMasa() : ?int
    {
        return $this->masa;
    }

    /**
     * @param null | int $masa
     * @return static
     */
    public function withMasa(?int $masa) : static
    {
        $new = clone $this;
        $new->masa = $masa;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getEgzemplarzBiblioteczny() : ?bool
    {
        return $this->egzemplarzBiblioteczny;
    }

    /**
     * @param null | bool $egzemplarzBiblioteczny
     * @return static
     */
    public function withEgzemplarzBiblioteczny(?bool $egzemplarzBiblioteczny) : static
    {
        $new = clone $this;
        $new->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getDlaOciemnialych() : ?bool
    {
        return $this->dlaOciemnialych;
    }

    /**
     * @param null | bool $dlaOciemnialych
     * @return static
     */
    public function withDlaOciemnialych(?bool $dlaOciemnialych) : static
    {
        $new = clone $this;
        $new->dlaOciemnialych = $dlaOciemnialych;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getObszarMiasto() : ?bool
    {
        return $this->obszarMiasto;
    }

    /**
     * @param null | bool $obszarMiasto
     * @return static
     */
    public function withObszarMiasto(?bool $obszarMiasto) : static
    {
        $new = clone $this;
        $new->obszarMiasto = $obszarMiasto;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getMiejscowa() : ?bool
    {
        return $this->miejscowa;
    }

    /**
     * @param null | bool $miejscowa
     * @return static
     */
    public function withMiejscowa(?bool $miejscowa) : static
    {
        $new = clone $this;
        $new->miejscowa = $miejscowa;

        return $new;
    }
}

