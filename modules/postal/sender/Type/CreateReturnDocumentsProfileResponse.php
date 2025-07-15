<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateReturnDocumentsProfileResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private bool $result;

    /**
     * @var null | int
     */
    private ?int $idProfile = null;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return bool
     */
    public function getResult() : bool
    {
        return $this->result;
    }

    /**
     * @param bool $result
     * @return static
     */
    public function withResult(bool $result) : static
    {
        $new = clone $this;
        $new->result = $result;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdProfile() : ?int
    {
        return $this->idProfile;
    }

    /**
     * @param null | int $idProfile
     * @return static
     */
    public function withIdProfile(?int $idProfile) : static
    {
        $new = clone $this;
        $new->idProfile = $idProfile;

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

