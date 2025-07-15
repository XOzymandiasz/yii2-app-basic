<?php

namespace app\modules\postal\sender\Type;

class LokalizacjaGeograficznaType
{
    /**
     * @var \app\modules\postal\sender\Type\WspolrzednaGeograficznaType
     */
    private \app\modules\postal\sender\Type\WspolrzednaGeograficznaType $dlugosc;

    /**
     * @var \app\modules\postal\sender\Type\WspolrzednaGeograficznaType
     */
    private \app\modules\postal\sender\Type\WspolrzednaGeograficznaType $szerokosc;

    /**
     * @return \app\modules\postal\sender\Type\WspolrzednaGeograficznaType
     */
    public function getDlugosc() : \app\modules\postal\sender\Type\WspolrzednaGeograficznaType
    {
        return $this->dlugosc;
    }

    /**
     * @param \app\modules\postal\sender\Type\WspolrzednaGeograficznaType $dlugosc
     * @return static
     */
    public function withDlugosc(\app\modules\postal\sender\Type\WspolrzednaGeograficznaType $dlugosc) : static
    {
        $new = clone $this;
        $new->dlugosc = $dlugosc;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\WspolrzednaGeograficznaType
     */
    public function getSzerokosc() : \app\modules\postal\sender\Type\WspolrzednaGeograficznaType
    {
        return $this->szerokosc;
    }

    /**
     * @param \app\modules\postal\sender\Type\WspolrzednaGeograficznaType $szerokosc
     * @return static
     */
    public function withSzerokosc(\app\modules\postal\sender\Type\WspolrzednaGeograficznaType $szerokosc) : static
    {
        $new = clone $this;
        $new->szerokosc = $szerokosc;

        return $new;
    }
}

