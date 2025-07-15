<?php

namespace app\modules\postal\sender\Type;

class ReklamacjaRozpatrzonaType
{
    /**
     * @var null | string
     */
    private ?string $guid = null;

    /**
     * @var null | string
     */
    private ?string $numerNadania = null;

    /**
     * @var null | \app\modules\postal\sender\Type\RozstrzygniecieType
     */
    private ?\app\modules\postal\sender\Type\RozstrzygniecieType $rozstrzygniecie = null;

    /**
     * @var null | int
     */
    private ?int $przyznaneOdszkodowanie = null;

    /**
     * @var null | string
     */
    private ?string $uzasadnienie = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataRozpatrzenia = null;

    /**
     * @var null | string
     */
    private ?string $nazwaJednostkiRozpatrujacej = null;

    /**
     * @var null | string
     */
    private ?string $osobaRozpatrujaca = null;

    /**
     * @var null | string
     */
    private ?string $idReklamacja = null;

    /**
     * @var null | string
     */
    private ?string $numerReklamacji = null;

    /**
     * @return null | string
     */
    public function getGuid() : ?string
    {
        return $this->guid;
    }

    /**
     * @param null | string $guid
     * @return static
     */
    public function withGuid(?string $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerNadania() : ?string
    {
        return $this->numerNadania;
    }

    /**
     * @param null | string $numerNadania
     * @return static
     */
    public function withNumerNadania(?string $numerNadania) : static
    {
        $new = clone $this;
        $new->numerNadania = $numerNadania;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\RozstrzygniecieType
     */
    public function getRozstrzygniecie() : ?\app\modules\postal\sender\Type\RozstrzygniecieType
    {
        return $this->rozstrzygniecie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\RozstrzygniecieType $rozstrzygniecie
     * @return static
     */
    public function withRozstrzygniecie(?\app\modules\postal\sender\Type\RozstrzygniecieType $rozstrzygniecie) : static
    {
        $new = clone $this;
        $new->rozstrzygniecie = $rozstrzygniecie;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPrzyznaneOdszkodowanie() : ?int
    {
        return $this->przyznaneOdszkodowanie;
    }

    /**
     * @param null | int $przyznaneOdszkodowanie
     * @return static
     */
    public function withPrzyznaneOdszkodowanie(?int $przyznaneOdszkodowanie) : static
    {
        $new = clone $this;
        $new->przyznaneOdszkodowanie = $przyznaneOdszkodowanie;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUzasadnienie() : ?string
    {
        return $this->uzasadnienie;
    }

    /**
     * @param null | string $uzasadnienie
     * @return static
     */
    public function withUzasadnienie(?string $uzasadnienie) : static
    {
        $new = clone $this;
        $new->uzasadnienie = $uzasadnienie;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDataRozpatrzenia() : ?\DateTimeInterface
    {
        return $this->dataRozpatrzenia;
    }

    /**
     * @param null | \DateTimeInterface $dataRozpatrzenia
     * @return static
     */
    public function withDataRozpatrzenia(?\DateTimeInterface $dataRozpatrzenia) : static
    {
        $new = clone $this;
        $new->dataRozpatrzenia = $dataRozpatrzenia;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNazwaJednostkiRozpatrujacej() : ?string
    {
        return $this->nazwaJednostkiRozpatrujacej;
    }

    /**
     * @param null | string $nazwaJednostkiRozpatrujacej
     * @return static
     */
    public function withNazwaJednostkiRozpatrujacej(?string $nazwaJednostkiRozpatrujacej) : static
    {
        $new = clone $this;
        $new->nazwaJednostkiRozpatrujacej = $nazwaJednostkiRozpatrujacej;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOsobaRozpatrujaca() : ?string
    {
        return $this->osobaRozpatrujaca;
    }

    /**
     * @param null | string $osobaRozpatrujaca
     * @return static
     */
    public function withOsobaRozpatrujaca(?string $osobaRozpatrujaca) : static
    {
        $new = clone $this;
        $new->osobaRozpatrujaca = $osobaRozpatrujaca;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdReklamacja() : ?string
    {
        return $this->idReklamacja;
    }

    /**
     * @param null | string $idReklamacja
     * @return static
     */
    public function withIdReklamacja(?string $idReklamacja) : static
    {
        $new = clone $this;
        $new->idReklamacja = $idReklamacja;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerReklamacji() : ?string
    {
        return $this->numerReklamacji;
    }

    /**
     * @param null | string $numerReklamacji
     * @return static
     */
    public function withNumerReklamacji(?string $numerReklamacji) : static
    {
        $new = clone $this;
        $new->numerReklamacji = $numerReklamacji;

        return $new;
    }
}

