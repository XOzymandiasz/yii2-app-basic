<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPrintForParcel implements RequestInterface
{
    /**
     * parcels guids
     *
     * @var non-empty-array<int<0,499>, mixed>
     */
    private array $guid;

    /**
     * printout type
     *
     * @var \app\modules\postal\sender\Type\PrintType
     */
    private \app\modules\postal\sender\Type\PrintType $type;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,499>, mixed> $guid
     * @param \app\modules\postal\sender\Type\PrintType $type
     */
    public function __construct(array $guid, \app\modules\postal\sender\Type\PrintType $type)
    {
        $this->guid = $guid;
        $this->type = $type;
    }

    /**
     * @return non-empty-array<int<0,499>, mixed>
     */
    public function getGuid() : array
    {
        return $this->guid;
    }

    /**
     * @param non-empty-array<int<0,499>, mixed> $guid
     * @return static
     */
    public function withGuid(array $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\PrintType
     */
    public function getType() : \app\modules\postal\sender\Type\PrintType
    {
        return $this->type;
    }

    /**
     * @param \app\modules\postal\sender\Type\PrintType $type
     * @return static
     */
    public function withType(\app\modules\postal\sender\Type\PrintType $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }
}

