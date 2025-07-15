<?php

namespace app\modules\postal\sender\Type;

class ZawartoscPocztex2021Type
{
    /**
     * @var null | \app\modules\postal\sender\Type\ZawartoscSpecjalnaEnum
     */
    private ?\app\modules\postal\sender\Type\ZawartoscSpecjalnaEnum $zawartoscSpecjalna = null;

    /**
     * @var null | string
     */
    private ?string $zawartoscInna = null;

    /**
     * @return null | \app\modules\postal\sender\Type\ZawartoscSpecjalnaEnum
     */
    public function getZawartoscSpecjalna() : ?\app\modules\postal\sender\Type\ZawartoscSpecjalnaEnum
    {
        return $this->zawartoscSpecjalna;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ZawartoscSpecjalnaEnum $zawartoscSpecjalna
     * @return static
     */
    public function withZawartoscSpecjalna(?\app\modules\postal\sender\Type\ZawartoscSpecjalnaEnum $zawartoscSpecjalna) : static
    {
        $new = clone $this;
        $new->zawartoscSpecjalna = $zawartoscSpecjalna;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZawartoscInna() : ?string
    {
        return $this->zawartoscInna;
    }

    /**
     * @param null | string $zawartoscInna
     * @return static
     */
    public function withZawartoscInna(?string $zawartoscInna) : static
    {
        $new = clone $this;
        $new->zawartoscInna = $zawartoscInna;

        return $new;
    }
}

