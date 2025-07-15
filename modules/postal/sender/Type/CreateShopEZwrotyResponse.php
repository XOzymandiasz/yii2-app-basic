<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateShopEZwrotyResponse implements ResultInterface
{
    /**
     * @var null | int
     */
    private ?int $idShop = null;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return null | int
     */
    public function getIdShop() : ?int
    {
        return $this->idShop;
    }

    /**
     * @param null | int $idShop
     * @return static
     */
    public function withIdShop(?int $idShop) : static
    {
        $new = clone $this;
        $new->idShop = $idShop;

        return $new;
    }

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
}

