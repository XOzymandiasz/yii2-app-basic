<?php

namespace app\modules\postal\sender\Type;

class OdbiorPrzesylkiOdNadawcyType
{
    /**
     * @var null | bool
     */
    private ?bool $wSobote = null;

    /**
     * @var null | bool
     */
    private ?bool $wNiedzieleLubSwieto = null;

    /**
     * @var null | bool
     */
    private ?bool $wGodzinachOd20Do7 = null;

    /**
     * @return null | bool
     */
    public function getWSobote() : ?bool
    {
        return $this->wSobote;
    }

    /**
     * @param null | bool $wSobote
     * @return static
     */
    public function withWSobote(?bool $wSobote) : static
    {
        $new = clone $this;
        $new->wSobote = $wSobote;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getWNiedzieleLubSwieto() : ?bool
    {
        return $this->wNiedzieleLubSwieto;
    }

    /**
     * @param null | bool $wNiedzieleLubSwieto
     * @return static
     */
    public function withWNiedzieleLubSwieto(?bool $wNiedzieleLubSwieto) : static
    {
        $new = clone $this;
        $new->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getWGodzinachOd20Do7() : ?bool
    {
        return $this->wGodzinachOd20Do7;
    }

    /**
     * @param null | bool $wGodzinachOd20Do7
     * @return static
     */
    public function withWGodzinachOd20Do7(?bool $wGodzinachOd20Do7) : static
    {
        $new = clone $this;
        $new->wGodzinachOd20Do7 = $wGodzinachOd20Do7;

        return $new;
    }
}

