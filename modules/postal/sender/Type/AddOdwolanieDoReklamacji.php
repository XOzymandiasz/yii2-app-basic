<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddOdwolanieDoReklamacji implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ReklamowanaPrzesylkaType>
     */
    private array $reklamacja;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ReklamowanaPrzesylkaType> $reklamacja
     */
    public function __construct(array $reklamacja)
    {
        $this->reklamacja = $reklamacja;
    }

    /**
     * @return non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ReklamowanaPrzesylkaType>
     */
    public function getReklamacja() : array
    {
        return $this->reklamacja;
    }

    /**
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ReklamowanaPrzesylkaType> $reklamacja
     * @return static
     */
    public function withReklamacja(array $reklamacja) : static
    {
        $new = clone $this;
        $new->reklamacja = $reklamacja;

        return $new;
    }
}

