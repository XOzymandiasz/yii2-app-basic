<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetJednostkaOrganizacyjna implements RequestInterface
{
    /**
     * @var null | \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType
     */
    private ?\app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $jednostka = null;

    /**
     * Constructor
     *
     * @param null | \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $jednostka
     */
    public function __construct(?\app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $jednostka)
    {
        $this->jednostka = $jednostka;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType
     */
    public function getJednostka() : ?\app\modules\postal\sender\Type\JednostkaOrganizacyjnaType
    {
        return $this->jednostka;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $jednostka
     * @return static
     */
    public function withJednostka(?\app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $jednostka) : static
    {
        $new = clone $this;
        $new->jednostka = $jednostka;

        return $new;
    }
}

