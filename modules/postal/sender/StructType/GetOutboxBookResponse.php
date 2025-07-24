<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getOutboxBookResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOutboxBookResponse extends AbstractStructBase
{
    /**
     * The pdfContent
     * @var string|null
     */
    protected ?string $pdfContent = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getOutboxBookResponse
     * @uses GetOutboxBookResponse::setPdfContent()
     * @uses GetOutboxBookResponse::setError()
     * @param string $pdfContent
     * @param \app\modules\postal\sender\StructType\ErrorType[] $error
     */
    public function __construct(?string $pdfContent = null, ?array $error = null)
    {
        $this
            ->setPdfContent($pdfContent)
            ->setError($error);
    }
    /**
     * Get pdfContent value
     * @return string|null
     */
    public function getPdfContent(): ?string
    {
        return $this->pdfContent;
    }
    /**
     * Set pdfContent value
     * @param string $pdfContent
     * @return \app\modules\postal\sender\StructType\GetOutboxBookResponse
     */
    public function setPdfContent(?string $pdfContent = null): self
    {
        // validation for constraint: string
        if (!is_null($pdfContent) && !is_string($pdfContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfContent, true), gettype($pdfContent)), __LINE__);
        }
        $this->pdfContent = $pdfContent;
        
        return $this;
    }
    /**
     * Get error value
     * @return \app\modules\postal\sender\StructType\ErrorType[]
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
        foreach ($values as $getOutboxBookResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getOutboxBookResponseErrorItem instanceof \app\modules\postal\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($getOutboxBookResponseErrorItem) ? get_class($getOutboxBookResponseErrorItem) : sprintf('%s(%s)', gettype($getOutboxBookResponseErrorItem), var_export($getOutboxBookResponseErrorItem, true));
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
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\ErrorType[] $error
     * @return \app\modules\postal\sender\StructType\GetOutboxBookResponse
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
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\ErrorType $item
     * @return \app\modules\postal\sender\StructType\GetOutboxBookResponse
     */
    public function addToError(\app\modules\postal\sender\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type \app\modules\postal\sender\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
}
