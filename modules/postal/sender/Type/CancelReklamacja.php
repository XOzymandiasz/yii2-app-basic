<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelReklamacja implements RequestInterface
{
    /**
     * @var int
     */
    private int $idRelkamacja;

    /**
     * Constructor
     *
     * @param int $idRelkamacja
     */
    public function __construct(int $idRelkamacja)
    {
        $this->idRelkamacja = $idRelkamacja;
    }

    /**
     * @return int
     */
    public function getIdRelkamacja() : int
    {
        return $this->idRelkamacja;
    }

    /**
     * @param int $idRelkamacja
     * @return static
     */
    public function withIdRelkamacja(int $idRelkamacja) : static
    {
        $new = clone $this;
        $new->idRelkamacja = $idRelkamacja;

        return $new;
    }
}

