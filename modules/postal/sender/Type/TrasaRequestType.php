<?php

namespace app\modules\postal\sender\Type;

class TrasaRequestType
{
    /**
     * @var int
     */
    private int $fromUrzadNadania;

    /**
     * @var string
     */
    private string $toKodPocztowy;

    /**
     * @var string
     */
    private string $guid;

    /**
     * @return int
     */
    public function getFromUrzadNadania() : int
    {
        return $this->fromUrzadNadania;
    }

    /**
     * @param int $fromUrzadNadania
     * @return static
     */
    public function withFromUrzadNadania(int $fromUrzadNadania) : static
    {
        $new = clone $this;
        $new->fromUrzadNadania = $fromUrzadNadania;

        return $new;
    }

    /**
     * @return string
     */
    public function getToKodPocztowy() : string
    {
        return $this->toKodPocztowy;
    }

    /**
     * @param string $toKodPocztowy
     * @return static
     */
    public function withToKodPocztowy(string $toKodPocztowy) : static
    {
        $new = clone $this;
        $new->toKodPocztowy = $toKodPocztowy;

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

