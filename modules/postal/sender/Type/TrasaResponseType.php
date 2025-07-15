<?php

namespace app\modules\postal\sender\Type;

class TrasaResponseType
{
    /**
     * @var bool
     */
    private bool $isMiejscowa;

    /**
     * @var string
     */
    private string $guid;

    /**
     * @return bool
     */
    public function getIsMiejscowa() : bool
    {
        return $this->isMiejscowa;
    }

    /**
     * @param bool $isMiejscowa
     * @return static
     */
    public function withIsMiejscowa(bool $isMiejscowa) : static
    {
        $new = clone $this;
        $new->isMiejscowa = $isMiejscowa;

        return $new;
    }

    /**
     * @return string
     */
    public function getGuid() : string
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     * @return static
     */
    public function withGuid(string $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }
}

