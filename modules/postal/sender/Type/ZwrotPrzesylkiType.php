<?php

namespace app\modules\postal\sender\Type;

class ZwrotPrzesylkiType
{
    /**
     * @var null | \app\modules\postal\sender\Type\PrzyczynaZwrotuEnum
     */
    private ?\app\modules\postal\sender\Type\PrzyczynaZwrotuEnum $przyczyna = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $data = null;

    /**
     * Dodatkowy opisowy powód zwrotu przesyłki
     *
     * @var null | string
     */
    private ?string $przyczynaZwrotuDodatkowa = null;

    /**
     * @return null | \app\modules\postal\sender\Type\PrzyczynaZwrotuEnum
     */
    public function getPrzyczyna() : ?\app\modules\postal\sender\Type\PrzyczynaZwrotuEnum
    {
        return $this->przyczyna;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PrzyczynaZwrotuEnum $przyczyna
     * @return static
     */
    public function withPrzyczyna(?\app\modules\postal\sender\Type\PrzyczynaZwrotuEnum $przyczyna) : static
    {
        $new = clone $this;
        $new->przyczyna = $przyczyna;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getData() : ?\DateTimeInterface
    {
        return $this->data;
    }

    /**
     * @param null | \DateTimeInterface $data
     * @return static
     */
    public function withData(?\DateTimeInterface $data) : static
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPrzyczynaZwrotuDodatkowa() : ?string
    {
        return $this->przyczynaZwrotuDodatkowa;
    }

    /**
     * @param null | string $przyczynaZwrotuDodatkowa
     * @return static
     */
    public function withPrzyczynaZwrotuDodatkowa(?string $przyczynaZwrotuDodatkowa) : static
    {
        $new = clone $this;
        $new->przyczynaZwrotuDodatkowa = $przyczynaZwrotuDodatkowa;

        return $new;
    }
}

