<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaFullType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaFullType extends AbstractStructBase
{
    /**
     * The przesylkaShort
     * @var \app\modules\postal\sender\StructType\PrzesylkaShortType|null
     */
    protected ?\app\modules\postal\sender\StructType\PrzesylkaShortType $przesylkaShort = null;
    /**
     * The przesylkaFull
     * @var \app\modules\postal\sender\StructType\PrzesylkaType|null
     */
    protected ?\app\modules\postal\sender\StructType\PrzesylkaType $przesylkaFull = null;
    /**
     * Constructor method for przesylkaFullType
     * @uses PrzesylkaFullType::setPrzesylkaShort()
     * @uses PrzesylkaFullType::setPrzesylkaFull()
     * @param \app\modules\postal\sender\StructType\PrzesylkaShortType $przesylkaShort
     * @param \app\modules\postal\sender\StructType\PrzesylkaType $przesylkaFull
     */
    public function __construct(?\app\modules\postal\sender\StructType\PrzesylkaShortType $przesylkaShort = null, ?\app\modules\postal\sender\StructType\PrzesylkaType $przesylkaFull = null)
    {
        $this
            ->setPrzesylkaShort($przesylkaShort)
            ->setPrzesylkaFull($przesylkaFull);
    }
    /**
     * Get przesylkaShort value
     * @return \app\modules\postal\sender\StructType\PrzesylkaShortType|null
     */
    public function getPrzesylkaShort(): ?\app\modules\postal\sender\StructType\PrzesylkaShortType
    {
        return $this->przesylkaShort;
    }
    /**
     * Set przesylkaShort value
     * @param \app\modules\postal\sender\StructType\PrzesylkaShortType $przesylkaShort
     * @return \app\modules\postal\sender\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaShort(?\app\modules\postal\sender\StructType\PrzesylkaShortType $przesylkaShort = null): self
    {
        $this->przesylkaShort = $przesylkaShort;
        
        return $this;
    }
    /**
     * Get przesylkaFull value
     * @return \app\modules\postal\sender\StructType\PrzesylkaType|null
     */
    public function getPrzesylkaFull(): ?\app\modules\postal\sender\StructType\PrzesylkaType
    {
        return $this->przesylkaFull;
    }
    /**
     * Set przesylkaFull value
     * @param \app\modules\postal\sender\StructType\PrzesylkaType $przesylkaFull
     * @return \app\modules\postal\sender\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaFull(?\app\modules\postal\sender\StructType\PrzesylkaType $przesylkaFull = null): self
    {
        $this->przesylkaFull = $przesylkaFull;
        
        return $this;
    }
}
