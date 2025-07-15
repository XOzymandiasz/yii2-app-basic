<?php

namespace app\modules\postal\sender\Type;

class PlatnikType
{
    /**
     * @var null | \app\modules\postal\sender\Type\UiszczaOplateType
     */
    private ?\app\modules\postal\sender\Type\UiszczaOplateType $uiszczaOplate = null;

    /**
     * @var null | \app\modules\postal\sender\Type\AdresType
     */
    private ?\app\modules\postal\sender\Type\AdresType $adresPlatnika = null;

    /**
     * @return null | \app\modules\postal\sender\Type\UiszczaOplateType
     */
    public function getUiszczaOplate() : ?\app\modules\postal\sender\Type\UiszczaOplateType
    {
        return $this->uiszczaOplate;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\UiszczaOplateType $uiszczaOplate
     * @return static
     */
    public function withUiszczaOplate(?\app\modules\postal\sender\Type\UiszczaOplateType $uiszczaOplate) : static
    {
        $new = clone $this;
        $new->uiszczaOplate = $uiszczaOplate;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\AdresType
     */
    public function getAdresPlatnika() : ?\app\modules\postal\sender\Type\AdresType
    {
        return $this->adresPlatnika;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\AdresType $adresPlatnika
     * @return static
     */
    public function withAdresPlatnika(?\app\modules\postal\sender\Type\AdresType $adresPlatnika) : static
    {
        $new = clone $this;
        $new->adresPlatnika = $adresPlatnika;

        return $new;
    }
}

