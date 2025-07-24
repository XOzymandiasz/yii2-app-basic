<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for downloadIWDContentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DownloadIWDContentResponse extends AbstractStructBase
{
    /**
     * The IWDContent
     * @var string|null
     */
    protected ?string $IWDContent = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for downloadIWDContentResponse
     * @uses DownloadIWDContentResponse::setIWDContent()
     * @uses DownloadIWDContentResponse::setError()
     * @param string $iWDContent
     * @param \app\modules\postal\sender\StructType\ErrorType[] $error
     */
    public function __construct(?string $iWDContent = null, ?array $error = null)
    {
        $this
            ->setIWDContent($iWDContent)
            ->setError($error);
    }
    /**
     * Get IWDContent value
     * @return string|null
     */
    public function getIWDContent(): ?string
    {
        return $this->IWDContent;
    }
    /**
     * Set IWDContent value
     * @param string $iWDContent
     * @return \app\modules\postal\sender\StructType\DownloadIWDContentResponse
     */
    public function setIWDContent(?string $iWDContent = null): self
    {
        // validation for constraint: string
        if (!is_null($iWDContent) && !is_string($iWDContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iWDContent, true), gettype($iWDContent)), __LINE__);
        }
        $this->IWDContent = $iWDContent;
        
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
        foreach ($values as $downloadIWDContentResponseErrorItem) {
            // validation for constraint: itemType
            if (!$downloadIWDContentResponseErrorItem instanceof \app\modules\postal\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($downloadIWDContentResponseErrorItem) ? get_class($downloadIWDContentResponseErrorItem) : sprintf('%s(%s)', gettype($downloadIWDContentResponseErrorItem), var_export($downloadIWDContentResponseErrorItem, true));
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
     * @return \app\modules\postal\sender\StructType\DownloadIWDContentResponse
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
     * @return \app\modules\postal\sender\StructType\DownloadIWDContentResponse
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
