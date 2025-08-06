<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createChecklistTemplateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateChecklistTemplateResponse extends AbstractStructBase
{
    /**
     * The checklistTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType[]
     */
    protected ?array $checklistTemplate = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for createChecklistTemplateResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType[] $checklistTemplate
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     *@uses CreateChecklistTemplateResponse::setChecklistTemplate()
     * @uses CreateChecklistTemplateResponse::setError()
     */
    public function __construct(?array $checklistTemplate = null, ?array $error = null)
    {
        $this
            ->setChecklistTemplate($checklistTemplate)
            ->setError($error);
    }
    /**
     * Get checklistTemplate value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType[]
     */
    public function getChecklistTemplate(): ?array
    {
        return $this->checklistTemplate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setChecklistTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChecklistTemplate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChecklistTemplateForArrayConstraintFromSetChecklistTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createChecklistTemplateResponseChecklistTemplateItem) {
            // validation for constraint: itemType
            if (!$createChecklistTemplateResponseChecklistTemplateItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType) {
                $invalidValues[] = is_object($createChecklistTemplateResponseChecklistTemplateItem) ? get_class($createChecklistTemplateResponseChecklistTemplateItem) : sprintf('%s(%s)', gettype($createChecklistTemplateResponseChecklistTemplateItem), var_export($createChecklistTemplateResponseChecklistTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The checklistTemplate property can only contain items of type \app\modules\postal\sender\StructType\ChecklistTemplateType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set checklistTemplate value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType[] $checklistTemplate
     * @return \app\modules\postal\sender\StructType\CreateChecklistTemplateResponse
     *@throws InvalidArgumentException
     */
    public function setChecklistTemplate(?array $checklistTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($checklistTemplateArrayErrorMessage = self::validateChecklistTemplateForArrayConstraintFromSetChecklistTemplate($checklistTemplate))) {
            throw new InvalidArgumentException($checklistTemplateArrayErrorMessage, __LINE__);
        }
        $this->checklistTemplate = $checklistTemplate;
        
        return $this;
    }
    /**
     * Add item to checklistTemplate value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType $item
     * @return \app\modules\postal\sender\StructType\CreateChecklistTemplateResponse
     *@throws InvalidArgumentException
     */
    public function addToChecklistTemplate(\app\modules\postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType) {
            throw new InvalidArgumentException(sprintf('The checklistTemplate property can only contain items of type \app\modules\postal\sender\StructType\ChecklistTemplateType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->checklistTemplate[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createChecklistTemplateResponseErrorItem) {
            // validation for constraint: itemType
            if (!$createChecklistTemplateResponseErrorItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($createChecklistTemplateResponseErrorItem) ? get_class($createChecklistTemplateResponseErrorItem) : sprintf('%s(%s)', gettype($createChecklistTemplateResponseErrorItem), var_export($createChecklistTemplateResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type \app\modules\postal\sender\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set error value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     * @return \app\modules\postal\sender\StructType\CreateChecklistTemplateResponse
     *@throws InvalidArgumentException
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType $item
     * @return \app\modules\postal\sender\StructType\CreateChecklistTemplateResponse
     *@throws InvalidArgumentException
     */
    public function addToError(\app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type \app\modules\postal\sender\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
}
