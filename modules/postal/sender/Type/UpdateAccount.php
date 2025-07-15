<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateAccount implements RequestInterface
{
    /**
     * @var \app\modules\postal\sender\Type\AccountType
     */
    private \app\modules\postal\sender\Type\AccountType $account;

    /**
     * Constructor
     *
     * @param \app\modules\postal\sender\Type\AccountType $account
     */
    public function __construct(\app\modules\postal\sender\Type\AccountType $account)
    {
        $this->account = $account;
    }

    /**
     * @return \app\modules\postal\sender\Type\AccountType
     */
    public function getAccount() : \app\modules\postal\sender\Type\AccountType
    {
        return $this->account;
    }

    /**
     * @param \app\modules\postal\sender\Type\AccountType $account
     * @return static
     */
    public function withAccount(\app\modules\postal\sender\Type\AccountType $account) : static
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }
}

