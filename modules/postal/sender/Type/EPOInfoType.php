<?php

namespace app\modules\postal\sender\Type;

class EPOInfoType
{
    /**
     * @var null | \app\modules\postal\sender\Type\AwizoPrzesylkiType
     */
    private ?\app\modules\postal\sender\Type\AwizoPrzesylkiType $awizoPrzesylki = null;

    /**
     * @var null | \app\modules\postal\sender\Type\DoreczeniePrzesylkiType
     */
    private ?\app\modules\postal\sender\Type\DoreczeniePrzesylkiType $doreczeniePrzesylki = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ZwrotPrzesylkiType
     */
    private ?\app\modules\postal\sender\Type\ZwrotPrzesylkiType $zwrotPrzesylki = null;

    /**
     * @return null | \app\modules\postal\sender\Type\AwizoPrzesylkiType
     */
    public function getAwizoPrzesylki() : ?\app\modules\postal\sender\Type\AwizoPrzesylkiType
    {
        return $this->awizoPrzesylki;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\AwizoPrzesylkiType $awizoPrzesylki
     * @return static
     */
    public function withAwizoPrzesylki(?\app\modules\postal\sender\Type\AwizoPrzesylkiType $awizoPrzesylki) : static
    {
        $new = clone $this;
        $new->awizoPrzesylki = $awizoPrzesylki;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\DoreczeniePrzesylkiType
     */
    public function getDoreczeniePrzesylki() : ?\app\modules\postal\sender\Type\DoreczeniePrzesylkiType
    {
        return $this->doreczeniePrzesylki;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @return static
     */
    public function withDoreczeniePrzesylki(?\app\modules\postal\sender\Type\DoreczeniePrzesylkiType $doreczeniePrzesylki) : static
    {
        $new = clone $this;
        $new->doreczeniePrzesylki = $doreczeniePrzesylki;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\ZwrotPrzesylkiType
     */
    public function getZwrotPrzesylki() : ?\app\modules\postal\sender\Type\ZwrotPrzesylkiType
    {
        return $this->zwrotPrzesylki;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ZwrotPrzesylkiType $zwrotPrzesylki
     * @return static
     */
    public function withZwrotPrzesylki(?\app\modules\postal\sender\Type\ZwrotPrzesylkiType $zwrotPrzesylki) : static
    {
        $new = clone $this;
        $new->zwrotPrzesylki = $zwrotPrzesylki;

        return $new;
    }
}

