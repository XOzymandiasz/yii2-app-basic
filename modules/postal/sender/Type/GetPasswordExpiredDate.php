<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPasswordExpiredDate implements RequestInterface
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
}

