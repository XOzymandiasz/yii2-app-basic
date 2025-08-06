<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getZapowiedziFaktur StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetZapowiedziFaktur extends AbstractStructBase
{
    /**
     * The data
     * @var string|null
     */
    protected ?string $data = null;
    /**
     * Constructor method for getZapowiedziFaktur
     * @uses GetZapowiedziFaktur::setData()
     * @param string $data
     */
    public function __construct(?string $data = null)
    {
        $this
            ->setData($data);
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \app\modules\postal\sender\StructType\GetZapowiedziFaktur
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
}
