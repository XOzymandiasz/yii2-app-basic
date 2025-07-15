<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetGuidResponse implements ResultInterface
{
    /**
     * @var non-empty-array<int<0,99>, mixed>
     */
    private array $guid;

    /**
     * @return non-empty-array<int<0,99>, mixed>
     */
    public function getGuid() : array
    {
        return $this->guid;
    }

    /**
     * @param non-empty-array<int<0,99>, mixed> $guid
     * @return static
     */
    public function withGuid(array $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }
}

