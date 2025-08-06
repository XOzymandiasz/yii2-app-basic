<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUbezpieczeniaInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUbezpieczeniaInfoResponse extends AbstractStructBase
{
    /**
     * The poziomyUbezpieczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczeniaInfoType[]
     */
    protected ?array $poziomyUbezpieczenia = null;
    /**
     * Constructor method for getUbezpieczeniaInfoResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     * @uses GetUbezpieczeniaInfoResponse::setPoziomyUbezpieczenia()
     */
    public function __construct(?array $poziomyUbezpieczenia = null)
    {
        $this
            ->setPoziomyUbezpieczenia($poziomyUbezpieczenia);
    }
    /**
     * Get poziomyUbezpieczenia value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczeniaInfoType[]
     */
    public function getPoziomyUbezpieczenia(): ?array
    {
        return $this->poziomyUbezpieczenia;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPoziomyUbezpieczenia method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPoziomyUbezpieczenia method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePoziomyUbezpieczeniaForArrayConstraintFromSetPoziomyUbezpieczenia(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem) {
            // validation for constraint: itemType
            if (!$getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczeniaInfoType) {
                $invalidValues[] = is_object($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem) ? get_class($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem) : sprintf('%s(%s)', gettype($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem), var_export($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The poziomyUbezpieczenia property can only contain items of type \app\modules\postal\sender\StructType\UbezpieczeniaInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set poziomyUbezpieczenia value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     * @return \app\modules\postal\sender\StructType\GetUbezpieczeniaInfoResponse
     *@throws InvalidArgumentException
     */
    public function setPoziomyUbezpieczenia(?array $poziomyUbezpieczenia = null): self
    {
        // validation for constraint: array
        if ('' !== ($poziomyUbezpieczeniaArrayErrorMessage = self::validatePoziomyUbezpieczeniaForArrayConstraintFromSetPoziomyUbezpieczenia($poziomyUbezpieczenia))) {
            throw new InvalidArgumentException($poziomyUbezpieczeniaArrayErrorMessage, __LINE__);
        }
        $this->poziomyUbezpieczenia = $poziomyUbezpieczenia;
        
        return $this;
    }
    /**
     * Add item to poziomyUbezpieczenia value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczeniaInfoType $item
     * @return \app\modules\postal\sender\StructType\GetUbezpieczeniaInfoResponse
     *@throws InvalidArgumentException
     */
    public function addToPoziomyUbezpieczenia(\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczeniaInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczeniaInfoType) {
            throw new InvalidArgumentException(sprintf('The poziomyUbezpieczenia property can only contain items of type \app\modules\postal\sender\StructType\UbezpieczeniaInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->poziomyUbezpieczenia[] = $item;
        
        return $this;
    }
}
