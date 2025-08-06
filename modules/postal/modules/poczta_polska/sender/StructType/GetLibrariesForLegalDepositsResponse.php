<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLibrariesForLegalDepositsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetLibrariesForLegalDepositsResponse extends AbstractStructBase
{
    /**
     * The libraryForLegalDeposit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\LibraryForLegalDepositType[]
     */
    protected ?array $libraryForLegalDeposit = null;
    /**
     * Constructor method for getLibrariesForLegalDepositsResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\LibraryForLegalDepositType[] $libraryForLegalDeposit
     * @uses GetLibrariesForLegalDepositsResponse::setLibraryForLegalDeposit()
     */
    public function __construct(?array $libraryForLegalDeposit = null)
    {
        $this
            ->setLibraryForLegalDeposit($libraryForLegalDeposit);
    }
    /**
     * Get libraryForLegalDeposit value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\LibraryForLegalDepositType[]
     */
    public function getLibraryForLegalDeposit(): ?array
    {
        return $this->libraryForLegalDeposit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLibraryForLegalDeposit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLibraryForLegalDeposit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLibraryForLegalDepositForArrayConstraintFromSetLibraryForLegalDeposit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem) {
            // validation for constraint: itemType
            if (!$getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\LibraryForLegalDepositType) {
                $invalidValues[] = is_object($getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem) ? get_class($getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem) : sprintf('%s(%s)', gettype($getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem), var_export($getLibrariesForLegalDepositsResponseLibraryForLegalDepositItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The libraryForLegalDeposit property can only contain items of type \app\modules\postal\sender\StructType\LibraryForLegalDepositType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set libraryForLegalDeposit value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\LibraryForLegalDepositType[] $libraryForLegalDeposit
     * @return \app\modules\postal\sender\StructType\GetLibrariesForLegalDepositsResponse
     *@throws InvalidArgumentException
     */
    public function setLibraryForLegalDeposit(?array $libraryForLegalDeposit = null): self
    {
        // validation for constraint: array
        if ('' !== ($libraryForLegalDepositArrayErrorMessage = self::validateLibraryForLegalDepositForArrayConstraintFromSetLibraryForLegalDeposit($libraryForLegalDeposit))) {
            throw new InvalidArgumentException($libraryForLegalDepositArrayErrorMessage, __LINE__);
        }
        $this->libraryForLegalDeposit = $libraryForLegalDeposit;
        
        return $this;
    }
    /**
     * Add item to libraryForLegalDeposit value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\LibraryForLegalDepositType $item
     * @return \app\modules\postal\sender\StructType\GetLibrariesForLegalDepositsResponse
     *@throws InvalidArgumentException
     */
    public function addToLibraryForLegalDeposit(\app\modules\postal\modules\poczta_polska\sender\StructType\LibraryForLegalDepositType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\LibraryForLegalDepositType) {
            throw new InvalidArgumentException(sprintf('The libraryForLegalDeposit property can only contain items of type \app\modules\postal\sender\StructType\LibraryForLegalDepositType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->libraryForLegalDeposit[] = $item;
        
        return $this;
    }
}
