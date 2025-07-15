<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetReturnDocumentsProfileListResponse implements ResultInterface
{
    /**
     * Returned during getting list of profiles
     *
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ReturnDocumentProfileType>
     */
    private array $profile;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ReturnDocumentProfileType>
     */
    public function getProfile() : array
    {
        return $this->profile;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ReturnDocumentProfileType> $profile
     * @return static
     */
    public function withProfile(array $profile) : static
    {
        $new = clone $this;
        $new->profile = $profile;

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

