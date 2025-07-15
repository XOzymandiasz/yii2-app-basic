<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddReklamacje implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ReklamowanaPrzesylkaType>
     */
    private array $reklamowanaPrzesylka;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ReklamowanaPrzesylkaType> $reklamowanaPrzesylka
     */
    public function __construct(array $reklamowanaPrzesylka)
    {
        $this->reklamowanaPrzesylka = $reklamowanaPrzesylka;
    }

    /**
     * @return non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ReklamowanaPrzesylkaType>
     */
    public function getReklamowanaPrzesylka() : array
    {
        return $this->reklamowanaPrzesylka;
    }

    /**
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ReklamowanaPrzesylkaType> $reklamowanaPrzesylka
     * @return static
     */
    public function withReklamowanaPrzesylka(array $reklamowanaPrzesylka) : static
    {
        $new = clone $this;
        $new->reklamowanaPrzesylka = $reklamowanaPrzesylka;

        return $new;
    }
}

