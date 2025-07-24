<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotDokumentowKurierskaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZwrotDokumentowKurierskaType extends AbstractStructBase
{
    /**
     * The rodzajPocztex
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rodzajPocztex = null;
    /**
     * The rodzajList
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\RodzajListType|null
     */
    protected ?\app\modules\postal\sender\StructType\RodzajListType $rodzajList = null;
    /**
     * Constructor method for zwrotDokumentowKurierskaType
     * @uses ZwrotDokumentowKurierskaType::setRodzajPocztex()
     * @uses ZwrotDokumentowKurierskaType::setRodzajList()
     * @param string $rodzajPocztex
     * @param \app\modules\postal\sender\StructType\RodzajListType $rodzajList
     */
    public function __construct(?string $rodzajPocztex = null, ?\app\modules\postal\sender\StructType\RodzajListType $rodzajList = null)
    {
        $this
            ->setRodzajPocztex($rodzajPocztex)
            ->setRodzajList($rodzajList);
    }
    /**
     * Get rodzajPocztex value
     * @return string|null
     */
    public function getRodzajPocztex(): ?string
    {
        return $this->rodzajPocztex ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRodzajPocztex method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajPocztex method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRodzajPocztexForChoiceConstraintFromSetRodzajPocztex($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'rodzajList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property rodzajPocztex can\'t be set as the property %s is already set. Only one property must be set among these properties: rodzajPocztex, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set rodzajPocztex value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\sender\EnumType\TerminZwrotDokumentowKurierskaType::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\TerminZwrotDokumentowKurierskaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rodzajPocztex
     * @return \app\modules\postal\sender\StructType\ZwrotDokumentowKurierskaType
     */
    public function setRodzajPocztex(?string $rodzajPocztex = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\TerminZwrotDokumentowKurierskaType::valueIsValid($rodzajPocztex)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\TerminZwrotDokumentowKurierskaType', is_array($rodzajPocztex) ? implode(', ', $rodzajPocztex) : var_export($rodzajPocztex, true), implode(', ', \app\modules\postal\sender\EnumType\TerminZwrotDokumentowKurierskaType::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(rodzajPocztex, rodzajList)
        if ('' !== ($rodzajPocztexChoiceErrorMessage = self::validateRodzajPocztexForChoiceConstraintFromSetRodzajPocztex($rodzajPocztex))) {
            throw new InvalidArgumentException($rodzajPocztexChoiceErrorMessage, __LINE__);
        }
        if (is_null($rodzajPocztex) || (is_array($rodzajPocztex) && empty($rodzajPocztex))) {
            unset($this->rodzajPocztex);
        } else {
            $this->rodzajPocztex = $rodzajPocztex;
        }
        
        return $this;
    }
    /**
     * Get rodzajList value
     * @return \app\modules\postal\sender\StructType\RodzajListType|null
     */
    public function getRodzajList(): ?\app\modules\postal\sender\StructType\RodzajListType
    {
        return $this->rodzajList ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRodzajList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajList method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRodzajListForChoiceConstraintFromSetRodzajList($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'rodzajPocztex',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property rodzajList can\'t be set as the property %s is already set. Only one property must be set among these properties: rodzajList, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set rodzajList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\RodzajListType $rodzajList
     * @return \app\modules\postal\sender\StructType\ZwrotDokumentowKurierskaType
     */
    public function setRodzajList(?\app\modules\postal\sender\StructType\RodzajListType $rodzajList = null): self
    {
        // validation for constraint: choice(rodzajPocztex, rodzajList)
        if ('' !== ($rodzajListChoiceErrorMessage = self::validateRodzajListForChoiceConstraintFromSetRodzajList($rodzajList))) {
            throw new InvalidArgumentException($rodzajListChoiceErrorMessage, __LINE__);
        }
        if (is_null($rodzajList) || (is_array($rodzajList) && empty($rodzajList))) {
            unset($this->rodzajList);
        } else {
            $this->rodzajList = $rodzajList;
        }
        
        return $this;
    }
}
