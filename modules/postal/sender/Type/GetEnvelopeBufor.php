<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEnvelopeBufor implements RequestInterface
{
    /**
     * @var null | int
     */
    private ?int $idBufor = null;

    /**
     * Constructor
     *
     * @param null | int $idBufor
     */
    public function __construct(?int $idBufor)
    {
        $this->idBufor = $idBufor;
    }

    /**
     * @return null | int
     */
    public function getIdBufor() : ?int
    {
        return $this->idBufor;
    }

    /**
     * @param null | int $idBufor
     * @return static
     */
    public function withIdBufor(?int $idBufor) : static
    {
        $new = clone $this;
        $new->idBufor = $idBufor;

        return $new;
    }
}

