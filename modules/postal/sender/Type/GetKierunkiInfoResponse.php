<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetKierunkiInfoResponse implements ResultInterface
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $lastUpdate;

    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\UslugiType>
     */
    private array $usluga;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return \DateTimeInterface
     */
    public function getLastUpdate() : \DateTimeInterface
    {
        return $this->lastUpdate;
    }

    /**
     * @param \DateTimeInterface $lastUpdate
     * @return static
     */
    public function withLastUpdate(\DateTimeInterface $lastUpdate) : static
    {
        $new = clone $this;
        $new->lastUpdate = $lastUpdate;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\UslugiType>
     */
    public function getUsluga() : array
    {
        return $this->usluga;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\UslugiType> $usluga
     * @return static
     */
    public function withUsluga(array $usluga) : static
    {
        $new = clone $this;
        $new->usluga = $usluga;

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

