<?php

namespace app\modules\postal\sender\Type;

class PrzesylkaEZwrotPocztex2021Type extends PrzesylkaRejestrowanaType
{
    /**
     * @var string
     */
    private string $numerNadaniaZwrot;

    /**
     * @var null | int
     */
    private ?int $idSklepEZwrot = null;

    /**
     * Format przesyłki:
     *  S -
     *  M -
     *  L -
     *  XL -
     *  2XL -
     *
     * @var \app\modules\postal\sender\Type\FormatPocztex2021Type
     */
    private \app\modules\postal\sender\Type\FormatPocztex2021Type $format;

    /**
     * @return string
     */
    public function getNumerNadaniaZwrot() : string
    {
        return $this->numerNadaniaZwrot;
    }

    /**
     * @param string $numerNadaniaZwrot
     * @return static
     */
    public function withNumerNadaniaZwrot(string $numerNadaniaZwrot) : static
    {
        $new = clone $this;
        $new->numerNadaniaZwrot = $numerNadaniaZwrot;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdSklepEZwrot() : ?int
    {
        return $this->idSklepEZwrot;
    }

    /**
     * @param null | int $idSklepEZwrot
     * @return static
     */
    public function withIdSklepEZwrot(?int $idSklepEZwrot) : static
    {
        $new = clone $this;
        $new->idSklepEZwrot = $idSklepEZwrot;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\FormatPocztex2021Type
     */
    public function getFormat() : \app\modules\postal\sender\Type\FormatPocztex2021Type
    {
        return $this->format;
    }

    /**
     * @param \app\modules\postal\sender\Type\FormatPocztex2021Type $format
     * @return static
     */
    public function withFormat(\app\modules\postal\sender\Type\FormatPocztex2021Type $format) : static
    {
        $new = clone $this;
        $new->format = $format;

        return $new;
    }
}

