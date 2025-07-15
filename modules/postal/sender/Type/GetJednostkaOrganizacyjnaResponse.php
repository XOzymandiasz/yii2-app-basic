<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetJednostkaOrganizacyjnaResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType>
     */
    private array $jednostkaOrganizacyjna;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType>
     */
    public function getJednostkaOrganizacyjna() : array
    {
        return $this->jednostkaOrganizacyjna;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType> $jednostkaOrganizacyjna
     * @return static
     */
    public function withJednostkaOrganizacyjna(array $jednostkaOrganizacyjna) : static
    {
        $new = clone $this;
        $new->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;

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

