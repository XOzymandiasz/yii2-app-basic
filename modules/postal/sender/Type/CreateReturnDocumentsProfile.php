<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateReturnDocumentsProfile implements RequestInterface
{
    /**
     * Returned during getting list of profiles
     *
     * @var \app\modules\postal\sender\Type\ReturnDocumentProfileType
     */
    private \app\modules\postal\sender\Type\ReturnDocumentProfileType $profile;

    /**
     * Constructor
     *
     * @param \app\modules\postal\sender\Type\ReturnDocumentProfileType $profile
     */
    public function __construct(\app\modules\postal\sender\Type\ReturnDocumentProfileType $profile)
    {
        $this->profile = $profile;
    }

    /**
     * @return \app\modules\postal\sender\Type\ReturnDocumentProfileType
     */
    public function getProfile() : \app\modules\postal\sender\Type\ReturnDocumentProfileType
    {
        return $this->profile;
    }

    /**
     * @param \app\modules\postal\sender\Type\ReturnDocumentProfileType $profile
     * @return static
     */
    public function withProfile(\app\modules\postal\sender\Type\ReturnDocumentProfileType $profile) : static
    {
        $new = clone $this;
        $new->profile = $profile;

        return $new;
    }
}

