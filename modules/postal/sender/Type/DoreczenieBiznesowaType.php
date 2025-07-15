<?php

namespace app\modules\postal\sender\Type;

class DoreczenieBiznesowaType
{
    /**
     * @var null | bool
     */
    private ?bool $doRakWlasnych = null;

    /**
     * @return null | bool
     */
    public function getDoRakWlasnych() : ?bool
    {
        return $this->doRakWlasnych;
    }

    /**
     * @param null | bool $doRakWlasnych
     * @return static
     */
    public function withDoRakWlasnych(?bool $doRakWlasnych) : static
    {
        $new = clone $this;
        $new->doRakWlasnych = $doRakWlasnych;

        return $new;
    }
}

