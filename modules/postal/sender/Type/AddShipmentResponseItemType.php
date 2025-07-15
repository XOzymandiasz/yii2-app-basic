<?php

namespace app\modules\postal\sender\Type;

class AddShipmentResponseItemType
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @var null | string
     */
    private ?string $numerNadania = null;

    /**
     * @var string
     */
    private string $guid;

    /**
     * @var null | string
     */
    private ?string $numerTransakcjiOdbioru = null;

    /**
     * @var null | string
     */
    private ?string $numerListuPrzewozowego = null;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    public function getError() : array
    {
        return $this->error;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ErrorType> $error
     * @return static
     */
    public function withError(array $error) : static
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerNadania() : ?string
    {
        return $this->numerNadania;
    }

    /**
     * @param null | string $numerNadania
     * @return static
     */
    public function withNumerNadania(?string $numerNadania) : static
    {
        $new = clone $this;
        $new->numerNadania = $numerNadania;

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

    /**
     * @return null | string
     */
    public function getNumerTransakcjiOdbioru() : ?string
    {
        return $this->numerTransakcjiOdbioru;
    }

    /**
     * @param null | string $numerTransakcjiOdbioru
     * @return static
     */
    public function withNumerTransakcjiOdbioru(?string $numerTransakcjiOdbioru) : static
    {
        $new = clone $this;
        $new->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerListuPrzewozowego() : ?string
    {
        return $this->numerListuPrzewozowego;
    }

    /**
     * @param null | string $numerListuPrzewozowego
     * @return static
     */
    public function withNumerListuPrzewozowego(?string $numerListuPrzewozowego) : static
    {
        $new = clone $this;
        $new->numerListuPrzewozowego = $numerListuPrzewozowego;

        return $new;
    }
}

