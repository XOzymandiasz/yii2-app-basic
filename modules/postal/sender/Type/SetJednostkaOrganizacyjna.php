<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetJednostkaOrganizacyjna implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType>
     */
    private array $jednostkaOrganizacyjna;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType> $jednostkaOrganizacyjna
     */
    public function __construct(array $jednostkaOrganizacyjna)
    {
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
    }

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType>
     */
    public function getJednostkaOrganizacyjna() : array
    {
        return $this->jednostkaOrganizacyjna;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType> $jednostkaOrganizacyjna
     * @return static
     */
    public function withJednostkaOrganizacyjna(array $jednostkaOrganizacyjna) : static
    {
        $new = clone $this;
        $new->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;

        return $new;
    }
}

