<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAccountListResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\AccountType>
     */
    private array $account;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\AccountType>
     */
    public function getAccount() : array
    {
        return $this->account;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\AccountType> $account
     * @return static
     */
    public function withAccount(array $account) : static
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }
}

