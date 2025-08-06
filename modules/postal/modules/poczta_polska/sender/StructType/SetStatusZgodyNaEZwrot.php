<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setStatusZgodyNaEZwrot StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetStatusZgodyNaEZwrot extends AbstractStructBase
{
    /**
     * The statusZgody
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\StatusZgodyEZwrotType[]
     */
    protected ?array $statusZgody = null;
    /**
     * Constructor method for setStatusZgodyNaEZwrot
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\StatusZgodyEZwrotType[] $statusZgody
     * @uses SetStatusZgodyNaEZwrot::setStatusZgody()
     */
    public function __construct(?array $statusZgody = null)
    {
        $this
            ->setStatusZgody($statusZgody);
    }
    /**
     * Get statusZgody value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\StatusZgodyEZwrotType[]
     */
    public function getStatusZgody(): ?array
    {
        return $this->statusZgody;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setStatusZgody method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatusZgody method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatusZgodyForArrayConstraintFromSetStatusZgody(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setStatusZgodyNaEZwrotStatusZgodyItem) {
            // validation for constraint: itemType
            if (!$setStatusZgodyNaEZwrotStatusZgodyItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\StatusZgodyEZwrotType) {
                $invalidValues[] = is_object($setStatusZgodyNaEZwrotStatusZgodyItem) ? get_class($setStatusZgodyNaEZwrotStatusZgodyItem) : sprintf('%s(%s)', gettype($setStatusZgodyNaEZwrotStatusZgodyItem), var_export($setStatusZgodyNaEZwrotStatusZgodyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The statusZgody property can only contain items of type \app\modules\postal\sender\StructType\StatusZgodyEZwrotType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set statusZgody value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\StatusZgodyEZwrotType[] $statusZgody
     * @return \app\modules\postal\sender\StructType\SetStatusZgodyNaEZwrot
     *@throws InvalidArgumentException
     */
    public function setStatusZgody(?array $statusZgody = null): self
    {
        // validation for constraint: array
        if ('' !== ($statusZgodyArrayErrorMessage = self::validateStatusZgodyForArrayConstraintFromSetStatusZgody($statusZgody))) {
            throw new InvalidArgumentException($statusZgodyArrayErrorMessage, __LINE__);
        }
        $this->statusZgody = $statusZgody;
        
        return $this;
    }
    /**
     * Add item to statusZgody value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\StatusZgodyEZwrotType $item
     * @return \app\modules\postal\sender\StructType\SetStatusZgodyNaEZwrot
     *@throws InvalidArgumentException
     */
    public function addToStatusZgody(\app\modules\postal\modules\poczta_polska\sender\StructType\StatusZgodyEZwrotType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\StatusZgodyEZwrotType) {
            throw new InvalidArgumentException(sprintf('The statusZgody property can only contain items of type \app\modules\postal\sender\StructType\StatusZgodyEZwrotType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->statusZgody[] = $item;
        
        return $this;
    }
}
