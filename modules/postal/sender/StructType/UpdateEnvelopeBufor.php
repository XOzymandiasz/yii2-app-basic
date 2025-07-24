<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateEnvelopeBufor StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateEnvelopeBufor extends AbstractStructBase
{
    /**
     * The bufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \app\modules\postal\sender\StructType\BuforType[]
     */
    protected ?array $bufor = null;
    /**
     * Constructor method for updateEnvelopeBufor
     * @uses UpdateEnvelopeBufor::setBufor()
     * @param \app\modules\postal\sender\StructType\BuforType[] $bufor
     */
    public function __construct(?array $bufor = null)
    {
        $this
            ->setBufor($bufor);
    }
    /**
     * Get bufor value
     * @return \app\modules\postal\sender\StructType\BuforType[]
     */
    public function getBufor(): ?array
    {
        return $this->bufor;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBufor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuforForArrayConstraintFromSetBufor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $updateEnvelopeBuforBuforItem) {
            // validation for constraint: itemType
            if (!$updateEnvelopeBuforBuforItem instanceof \app\modules\postal\sender\StructType\BuforType) {
                $invalidValues[] = is_object($updateEnvelopeBuforBuforItem) ? get_class($updateEnvelopeBuforBuforItem) : sprintf('%s(%s)', gettype($updateEnvelopeBuforBuforItem), var_export($updateEnvelopeBuforBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bufor property can only contain items of type \app\modules\postal\sender\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bufor value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\BuforType[] $bufor
     * @return \app\modules\postal\sender\StructType\UpdateEnvelopeBufor
     */
    public function setBufor(?array $bufor = null): self
    {
        // validation for constraint: array
        if ('' !== ($buforArrayErrorMessage = self::validateBuforForArrayConstraintFromSetBufor($bufor))) {
            throw new InvalidArgumentException($buforArrayErrorMessage, __LINE__);
        }
        $this->bufor = $bufor;
        
        return $this;
    }
    /**
     * Add item to bufor value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\BuforType $item
     * @return \app\modules\postal\sender\StructType\UpdateEnvelopeBufor
     */
    public function addToBufor(\app\modules\postal\sender\StructType\BuforType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\BuforType) {
            throw new InvalidArgumentException(sprintf('The bufor property can only contain items of type \app\modules\postal\sender\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bufor[] = $item;
        
        return $this;
    }
}
