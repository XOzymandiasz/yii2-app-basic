<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteReturnDocumentsProfile implements RequestInterface
{
    /**
     * @var int
     */
    private int $idProfile;

    /**
     * Constructor
     *
     * @param int $idProfile
     */
    public function __construct(int $idProfile)
    {
        $this->idProfile = $idProfile;
    }

    /**
     * @return int
     */
    public function getIdProfile() : int
    {
        return $this->idProfile;
    }

    /**
     * @param int $idProfile
     * @return static
     */
    public function withIdProfile(int $idProfile) : static
    {
        $new = clone $this;
        $new->idProfile = $idProfile;

        return $new;
    }
}

