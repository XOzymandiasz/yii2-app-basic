<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateAccount StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateAccount extends AbstractStructBase
{
    /**
     * The account
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\AccountType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\AccountType $account = null;
    /**
     * Constructor method for updateAccount
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AccountType $account
     * @uses UpdateAccount::setAccount()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\AccountType $account = null)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AccountType|null
     */
    public function getAccount(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\AccountType
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AccountType $account
     * @return \app\modules\postal\sender\StructType\UpdateAccount
     */
    public function setAccount(?\app\modules\postal\modules\poczta_polska\sender\StructType\AccountType $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
}
