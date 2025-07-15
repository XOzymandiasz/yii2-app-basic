<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetGuid implements RequestInterface
{
    /**
     * @var int
     */
    private int $ilosc;

    /**
     * Constructor
     *
     * @param int $ilosc
     */
    public function __construct(int $ilosc)
    {
        $this->ilosc = $ilosc;
    }

    /**
     * @return int
     */
    public function getIlosc() : int
    {
        return $this->ilosc;
    }

    /**
     * @param int $ilosc
     * @return static
     */
    public function withIlosc(int $ilosc) : static
    {
        $new = clone $this;
        $new->ilosc = $ilosc;

        return $new;
    }
}

