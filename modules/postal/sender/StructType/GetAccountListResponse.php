<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAccountListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccountListResponse extends AbstractStructBase
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\AccountType[]
     */
    protected ?array $account = null;
    /**
     * Constructor method for getAccountListResponse
     * @uses GetAccountListResponse::setAccount()
     * @param \app\modules\postal\sender\StructType\AccountType[] $account
     */
    public function __construct(?array $account = null)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \app\modules\postal\sender\StructType\AccountType[]
     */
    public function getAccount(): ?array
    {
        return $this->account;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountForArrayConstraintFromSetAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccountListResponseAccountItem) {
            // validation for constraint: itemType
            if (!$getAccountListResponseAccountItem instanceof \app\modules\postal\sender\StructType\AccountType) {
                $invalidValues[] = is_object($getAccountListResponseAccountItem) ? get_class($getAccountListResponseAccountItem) : sprintf('%s(%s)', gettype($getAccountListResponseAccountItem), var_export($getAccountListResponseAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The account property can only contain items of type \app\modules\postal\sender\StructType\AccountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set account value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\AccountType[] $account
     * @return \app\modules\postal\sender\StructType\GetAccountListResponse
     */
    public function setAccount(?array $account = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountArrayErrorMessage = self::validateAccountForArrayConstraintFromSetAccount($account))) {
            throw new InvalidArgumentException($accountArrayErrorMessage, __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
    /**
     * Add item to account value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\AccountType $item
     * @return \app\modules\postal\sender\StructType\GetAccountListResponse
     */
    public function addToAccount(\app\modules\postal\sender\StructType\AccountType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\AccountType) {
            throw new InvalidArgumentException(sprintf('The account property can only contain items of type \app\modules\postal\sender\StructType\AccountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->account[] = $item;
        
        return $this;
    }
}
