<?php

namespace app\modules\postal\sender\Type;

class ErrorType
{
    /**
     * @var null | int
     */
    private ?int $errorNumber = null;

    /**
     * @var null | string
     */
    private ?string $errorDesc = null;

    /**
     * @var null | string
     */
    private ?string $guid = null;

    /**
     * @return null | int
     */
    public function getErrorNumber() : ?int
    {
        return $this->errorNumber;
    }

    /**
     * @param null | int $errorNumber
     * @return static
     */
    public function withErrorNumber(?int $errorNumber) : static
    {
        $new = clone $this;
        $new->errorNumber = $errorNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getErrorDesc() : ?string
    {
        return $this->errorDesc;
    }

    /**
     * @param null | string $errorDesc
     * @return static
     */
    public function withErrorDesc(?string $errorDesc) : static
    {
        $new = clone $this;
        $new->errorDesc = $errorDesc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGuid() : ?string
    {
        return $this->guid;
    }

    /**
     * @param null | string $guid
     * @return static
     */
    public function withGuid(?string $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }
}

