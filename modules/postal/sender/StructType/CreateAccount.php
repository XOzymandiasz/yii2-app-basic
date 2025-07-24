<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createAccount StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateAccount extends AbstractStructBase
{
    /**
     * The account
     * @var \app\modules\postal\sender\StructType\AccountType|null
     */
    protected ?\app\modules\postal\sender\StructType\AccountType $account = null;
    /**
     * Constructor method for createAccount
     * @uses CreateAccount::setAccount()
     * @param \app\modules\postal\sender\StructType\AccountType $account
     */
    public function __construct(?\app\modules\postal\sender\StructType\AccountType $account = null)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \app\modules\postal\sender\StructType\AccountType|null
     */
    public function getAccount(): ?\app\modules\postal\sender\StructType\AccountType
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \app\modules\postal\sender\StructType\AccountType $account
     * @return \app\modules\postal\sender\StructType\CreateAccount
     */
    public function setAccount(?\app\modules\postal\sender\StructType\AccountType $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
}
