<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lokalizacjaGeograficznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LokalizacjaGeograficznaType extends AbstractStructBase
{
    /**
     * The dlugosc
     * @var \app\modules\postal\sender\StructType\WspolrzednaGeograficznaType|null
     */
    protected ?\app\modules\postal\sender\StructType\WspolrzednaGeograficznaType $dlugosc = null;
    /**
     * The szerokosc
     * @var \app\modules\postal\sender\StructType\WspolrzednaGeograficznaType|null
     */
    protected ?\app\modules\postal\sender\StructType\WspolrzednaGeograficznaType $szerokosc = null;
    /**
     * Constructor method for lokalizacjaGeograficznaType
     * @uses LokalizacjaGeograficznaType::setDlugosc()
     * @uses LokalizacjaGeograficznaType::setSzerokosc()
     * @param \app\modules\postal\sender\StructType\WspolrzednaGeograficznaType $dlugosc
     * @param \app\modules\postal\sender\StructType\WspolrzednaGeograficznaType $szerokosc
     */
    public function __construct(?\app\modules\postal\sender\StructType\WspolrzednaGeograficznaType $dlugosc = null, ?\app\modules\postal\sender\StructType\WspolrzednaGeograficznaType $szerokosc = null)
    {
        $this
            ->setDlugosc($dlugosc)
            ->setSzerokosc($szerokosc);
    }
    /**
     * Get dlugosc value
     * @return \app\modules\postal\sender\StructType\WspolrzednaGeograficznaType|null
     */
    public function getDlugosc(): ?\app\modules\postal\sender\StructType\WspolrzednaGeograficznaType
    {
        return $this->dlugosc;
    }
    /**
     * Set dlugosc value
     * @param \app\modules\postal\sender\StructType\WspolrzednaGeograficznaType $dlugosc
     * @return \app\modules\postal\sender\StructType\LokalizacjaGeograficznaType
     */
    public function setDlugosc(?\app\modules\postal\sender\StructType\WspolrzednaGeograficznaType $dlugosc = null): self
    {
        $this->dlugosc = $dlugosc;
        
        return $this;
    }
    /**
     * Get szerokosc value
     * @return \app\modules\postal\sender\StructType\WspolrzednaGeograficznaType|null
     */
    public function getSzerokosc(): ?\app\modules\postal\sender\StructType\WspolrzednaGeograficznaType
    {
        return $this->szerokosc;
    }
    /**
     * Set szerokosc value
     * @param \app\modules\postal\sender\StructType\WspolrzednaGeograficznaType $szerokosc
     * @return \app\modules\postal\sender\StructType\LokalizacjaGeograficznaType
     */
    public function setSzerokosc(?\app\modules\postal\sender\StructType\WspolrzednaGeograficznaType $szerokosc = null): self
    {
        $this->szerokosc = $szerokosc;
        
        return $this;
    }
}
