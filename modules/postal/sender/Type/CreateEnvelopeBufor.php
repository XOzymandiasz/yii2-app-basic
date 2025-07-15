<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateEnvelopeBufor implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\BuforType>
     */
    private array $bufor;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\BuforType> $bufor
     */
    public function __construct(array $bufor)
    {
        $this->bufor = $bufor;
    }

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\BuforType>
     */
    public function getBufor() : array
    {
        return $this->bufor;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\BuforType> $bufor
     * @return static
     */
    public function withBufor(array $bufor) : static
    {
        $new = clone $this;
        $new->bufor = $bufor;

        return $new;
    }
}

