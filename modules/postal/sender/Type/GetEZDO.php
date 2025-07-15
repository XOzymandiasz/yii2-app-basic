<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEZDO implements RequestInterface
{
    /**
     * @var int
     */
    private int $idEZDOPakiet;

    /**
     * Constructor
     *
     * @param int $idEZDOPakiet
     */
    public function __construct(int $idEZDOPakiet)
    {
        $this->idEZDOPakiet = $idEZDOPakiet;
    }

    /**
     * @return int
     */
    public function getIdEZDOPakiet() : int
    {
        return $this->idEZDOPakiet;
    }

    /**
     * @param int $idEZDOPakiet
     * @return static
     */
    public function withIdEZDOPakiet(int $idEZDOPakiet) : static
    {
        $new = clone $this;
        $new->idEZDOPakiet = $idEZDOPakiet;

        return $new;
    }
}

