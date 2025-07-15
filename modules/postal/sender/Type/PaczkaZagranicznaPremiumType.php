<?php

namespace app\modules\postal\sender\Type;

class PaczkaZagranicznaPremiumType extends PrzesylkaRejestrowanaType
{
    /**
     * @var null | \app\modules\postal\sender\Type\ZwrotType
     */
    private ?\app\modules\postal\sender\Type\ZwrotType $zwrot = null;

    /**
     * @var null | bool
     */
    private ?bool $posteRestante = null;

    /**
     * masa przesyłki podana w gramach
     *
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | \app\modules\postal\sender\Type\DeklaracjaCelna2Type
     */
    private ?\app\modules\postal\sender\Type\DeklaracjaCelna2Type $deklaracjaCelna2 = null;

    /**
     * Umożliwia określenie sposobu nadania przesyłki w
     *  ramach systemu Interconnect.
     *  Obsługiwane wartości:
     *  -
     *  ODBIOR_Z_ADRESU_PRYWATNEGO
     *  - ODBIOR_Z_ADRESU_FIRMOWEGO
     *  -
     *  NADANIE_W_PLACOWCE_POCZTOWEJ
     *
     * @var null | string
     */
    private ?string $sposobNadaniaInterconnect = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType
     */
    private ?\app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;

    /**
     * @var null | \app\modules\postal\sender\Type\UbezpieczenieType
     */
    private ?\app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie = null;

    /**
     * @var null | string
     */
    private ?string $numerPrzesylkiKlienta = null;

    /**
     * @var null | \app\modules\postal\sender\Type\SposobDoreczeniaType
     */
    private ?\app\modules\postal\sender\Type\SposobDoreczeniaType $sposobDoreczenia = null;

    /**
     * @return null | \app\modules\postal\sender\Type\ZwrotType
     */
    public function getZwrot() : ?\app\modules\postal\sender\Type\ZwrotType
    {
        return $this->zwrot;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ZwrotType $zwrot
     * @return static
     */
    public function withZwrot(?\app\modules\postal\sender\Type\ZwrotType $zwrot) : static
    {
        $new = clone $this;
        $new->zwrot = $zwrot;

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
     * @return null | \app\modules\postal\sender\Type\DeklaracjaCelna2Type
     */
    public function getDeklaracjaCelna2() : ?\app\modules\postal\sender\Type\DeklaracjaCelna2Type
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return static
     */
    public function withDeklaracjaCelna2(?\app\modules\postal\sender\Type\DeklaracjaCelna2Type $deklaracjaCelna2) : static
    {
        $new = clone $this;
        $new->deklaracjaCelna2 = $deklaracjaCelna2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSposobNadaniaInterconnect() : ?string
    {
        return $this->sposobNadaniaInterconnect;
    }

    /**
     * @param null | string $sposobNadaniaInterconnect
     * @return static
     */
    public function withSposobNadaniaInterconnect(?string $sposobNadaniaInterconnect) : static
    {
        $new = clone $this;
        $new->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia() : ?\app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return static
     */
    public function withPotwierdzenieDoreczenia(?\app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia) : static
    {
        $new = clone $this;
        $new->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\UbezpieczenieType
     */
    public function getUbezpieczenie() : ?\app\modules\postal\sender\Type\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie
     * @return static
     */
    public function withUbezpieczenie(?\app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie) : static
    {
        $new = clone $this;
        $new->ubezpieczenie = $ubezpieczenie;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerPrzesylkiKlienta() : ?string
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * @param null | string $numerPrzesylkiKlienta
     * @return static
     */
    public function withNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta) : static
    {
        $new = clone $this;
        $new->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\SposobDoreczeniaType
     */
    public function getSposobDoreczenia() : ?\app\modules\postal\sender\Type\SposobDoreczeniaType
    {
        return $this->sposobDoreczenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\SposobDoreczeniaType $sposobDoreczenia
     * @return static
     */
    public function withSposobDoreczenia(?\app\modules\postal\sender\Type\SposobDoreczeniaType $sposobDoreczenia) : static
    {
        $new = clone $this;
        $new->sposobDoreczenia = $sposobDoreczenia;

        return $new;
    }
}

