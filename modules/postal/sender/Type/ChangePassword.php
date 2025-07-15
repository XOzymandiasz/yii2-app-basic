<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ChangePassword implements RequestInterface
{
    /**
     * @var string
     */
    private string $newPassword;

    /**
     * Constructor
     *
     * @param string $newPassword
     */
    public function __construct(string $newPassword)
    {
        $this->newPassword = $newPassword;
    }

    /**
     * @return string
     */
    public function getNewPassword() : string
    {
        return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return static
     */
    public function withNewPassword(string $newPassword) : static
    {
        $new = clone $this;
        $new->newPassword = $newPassword;

        return $new;
    }
}

