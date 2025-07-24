<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pocztex2021KurierType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Pocztex2021KurierType extends Pocztex2021Type
{
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\SubPocztex2021KurierType[]
     */
    protected ?array $subPrzesylka = null;
    /**
     * The punktOdbioru
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\PunktOdbioruType|null
     */
    protected ?\app\modules\postal\sender\StructType\PunktOdbioruType $punktOdbioru = null;
    /**
     * The punktNadania
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\PunktNadaniaType|null
     */
    protected ?\app\modules\postal\sender\StructType\PunktNadaniaType $punktNadania = null;
    /**
     * The kopertaPocztex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $kopertaPocztex = null;
    /**
     * The godzinaDoreczenia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $godzinaDoreczenia = null;
    /**
     * The doreczenieWeWskazanymDniu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $doreczenieWeWskazanymDniu = null;
    /**
     * The shipmentChannel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipmentChannel = null;
    /**
     * The labelExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $labelExpirationDate = null;
    /**
     * Constructor method for pocztex2021KurierType
     * @uses Pocztex2021KurierType::setSubPrzesylka()
     * @uses Pocztex2021KurierType::setPunktOdbioru()
     * @uses Pocztex2021KurierType::setPunktNadania()
     * @uses Pocztex2021KurierType::setKopertaPocztex()
     * @uses Pocztex2021KurierType::setGodzinaDoreczenia()
     * @uses Pocztex2021KurierType::setDoreczenieWeWskazanymDniu()
     * @uses Pocztex2021KurierType::setShipmentChannel()
     * @uses Pocztex2021KurierType::setLabelExpirationDate()
     * @param \app\modules\postal\sender\StructType\SubPocztex2021KurierType[] $subPrzesylka
     * @param \app\modules\postal\sender\StructType\PunktOdbioruType $punktOdbioru
     * @param \app\modules\postal\sender\StructType\PunktNadaniaType $punktNadania
     * @param bool $kopertaPocztex
     * @param string $godzinaDoreczenia
     * @param string $doreczenieWeWskazanymDniu
     * @param string $shipmentChannel
     * @param string $labelExpirationDate
     */
    public function __construct(?array $subPrzesylka = null, ?\app\modules\postal\sender\StructType\PunktOdbioruType $punktOdbioru = null, ?\app\modules\postal\sender\StructType\PunktNadaniaType $punktNadania = null, ?bool $kopertaPocztex = null, ?string $godzinaDoreczenia = null, ?string $doreczenieWeWskazanymDniu = null, ?string $shipmentChannel = null, ?string $labelExpirationDate = null)
    {
        $this
            ->setSubPrzesylka($subPrzesylka)
            ->setPunktOdbioru($punktOdbioru)
            ->setPunktNadania($punktNadania)
            ->setKopertaPocztex($kopertaPocztex)
            ->setGodzinaDoreczenia($godzinaDoreczenia)
            ->setDoreczenieWeWskazanymDniu($doreczenieWeWskazanymDniu)
            ->setShipmentChannel($shipmentChannel)
            ->setLabelExpirationDate($labelExpirationDate);
    }
    /**
     * Get subPrzesylka value
     * @return \app\modules\postal\sender\StructType\SubPocztex2021KurierType[]
     */
    public function getSubPrzesylka(): ?array
    {
        return $this->subPrzesylka;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPrzesylka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubPrzesylkaForArrayConstraintFromSetSubPrzesylka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pocztex2021KurierTypeSubPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$pocztex2021KurierTypeSubPrzesylkaItem instanceof \app\modules\postal\sender\StructType\SubPocztex2021KurierType) {
                $invalidValues[] = is_object($pocztex2021KurierTypeSubPrzesylkaItem) ? get_class($pocztex2021KurierTypeSubPrzesylkaItem) : sprintf('%s(%s)', gettype($pocztex2021KurierTypeSubPrzesylkaItem), var_export($pocztex2021KurierTypeSubPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPrzesylka property can only contain items of type \app\modules\postal\sender\StructType\SubPocztex2021KurierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set subPrzesylka value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\SubPocztex2021KurierType[] $subPrzesylka
     * @return \app\modules\postal\sender\StructType\Pocztex2021KurierType
     */
    public function setSubPrzesylka(?array $subPrzesylka = null): self
    {
        // validation for constraint: array
        if ('' !== ($subPrzesylkaArrayErrorMessage = self::validateSubPrzesylkaForArrayConstraintFromSetSubPrzesylka($subPrzesylka))) {
            throw new InvalidArgumentException($subPrzesylkaArrayErrorMessage, __LINE__);
        }
        $this->subPrzesylka = $subPrzesylka;
        
        return $this;
    }
    /**
     * Add item to subPrzesylka value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\SubPocztex2021KurierType $item
     * @return \app\modules\postal\sender\StructType\Pocztex2021KurierType
     */
    public function addToSubPrzesylka(\app\modules\postal\sender\StructType\SubPocztex2021KurierType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\SubPocztex2021KurierType) {
            throw new InvalidArgumentException(sprintf('The subPrzesylka property can only contain items of type \app\modules\postal\sender\StructType\SubPocztex2021KurierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->subPrzesylka[] = $item;
        
        return $this;
    }
    /**
     * Get punktOdbioru value
     * @return \app\modules\postal\sender\StructType\PunktOdbioruType|null
     */
    public function getPunktOdbioru(): ?\app\modules\postal\sender\StructType\PunktOdbioruType
    {
        return $this->punktOdbioru;
    }
    /**
     * Set punktOdbioru value
     * @param \app\modules\postal\sender\StructType\PunktOdbioruType $punktOdbioru
     * @return \app\modules\postal\sender\StructType\Pocztex2021KurierType
     */
    public function setPunktOdbioru(?\app\modules\postal\sender\StructType\PunktOdbioruType $punktOdbioru = null): self
    {
        $this->punktOdbioru = $punktOdbioru;
        
        return $this;
    }
    /**
     * Get punktNadania value
     * @return \app\modules\postal\sender\StructType\PunktNadaniaType|null
     */
    public function getPunktNadania(): ?\app\modules\postal\sender\StructType\PunktNadaniaType
    {
        return $this->punktNadania;
    }
    /**
     * Set punktNadania value
     * @param \app\modules\postal\sender\StructType\PunktNadaniaType $punktNadania
     * @return \app\modules\postal\sender\StructType\Pocztex2021KurierType
     */
    public function setPunktNadania(?\app\modules\postal\sender\StructType\PunktNadaniaType $punktNadania = null): self
    {
        $this->punktNadania = $punktNadania;
        
        return $this;
    }
    /**
     * Get kopertaPocztex value
     * @return bool|null
     */
    public function getKopertaPocztex(): ?bool
    {
        return $this->kopertaPocztex;
    }
    /**
     * Set kopertaPocztex value
     * @param bool $kopertaPocztex
     * @return \app\modules\postal\sender\StructType\Pocztex2021KurierType
     */
    public function setKopertaPocztex(?bool $kopertaPocztex = null): self
    {
        // validation for constraint: boolean
        if (!is_null($kopertaPocztex) && !is_bool($kopertaPocztex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($kopertaPocztex, true), gettype($kopertaPocztex)), __LINE__);
        }
        $this->kopertaPocztex = $kopertaPocztex;
        
        return $this;
    }
    /**
     * Get godzinaDoreczenia value
     * @return string|null
     */
    public function getGodzinaDoreczenia(): ?string
    {
        return $this->godzinaDoreczenia;
    }
    /**
     * Set godzinaDoreczenia value
     * @uses \app\modules\postal\sender\EnumType\GodzinaDoreczeniaPocztex2021Enum::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\GodzinaDoreczeniaPocztex2021Enum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $godzinaDoreczenia
     * @return \app\modules\postal\sender\StructType\Pocztex2021KurierType
     */
    public function setGodzinaDoreczenia(?string $godzinaDoreczenia = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\GodzinaDoreczeniaPocztex2021Enum::valueIsValid($godzinaDoreczenia)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\GodzinaDoreczeniaPocztex2021Enum', is_array($godzinaDoreczenia) ? implode(', ', $godzinaDoreczenia) : var_export($godzinaDoreczenia, true), implode(', ', \app\modules\postal\sender\EnumType\GodzinaDoreczeniaPocztex2021Enum::getValidValues())), __LINE__);
        }
        $this->godzinaDoreczenia = $godzinaDoreczenia;
        
        return $this;
    }
    /**
     * Get doreczenieWeWskazanymDniu value
     * @return string|null
     */
    public function getDoreczenieWeWskazanymDniu(): ?string
    {
        return $this->doreczenieWeWskazanymDniu;
    }
    /**
     * Set doreczenieWeWskazanymDniu value
     * @param string $doreczenieWeWskazanymDniu
     * @return \app\modules\postal\sender\StructType\Pocztex2021KurierType
     */
    public function setDoreczenieWeWskazanymDniu(?string $doreczenieWeWskazanymDniu = null): self
    {
        // validation for constraint: string
        if (!is_null($doreczenieWeWskazanymDniu) && !is_string($doreczenieWeWskazanymDniu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($doreczenieWeWskazanymDniu, true), gettype($doreczenieWeWskazanymDniu)), __LINE__);
        }
        $this->doreczenieWeWskazanymDniu = $doreczenieWeWskazanymDniu;
        
        return $this;
    }
    /**
     * Get shipmentChannel value
     * @return string|null
     */
    public function getShipmentChannel(): ?string
    {
        return $this->shipmentChannel;
    }
    /**
     * Set shipmentChannel value
     * @uses \app\modules\postal\sender\EnumType\ShipmentChannelPocztex2021Enum::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\ShipmentChannelPocztex2021Enum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shipmentChannel
     * @return \app\modules\postal\sender\StructType\Pocztex2021KurierType
     */
    public function setShipmentChannel(?string $shipmentChannel = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\ShipmentChannelPocztex2021Enum::valueIsValid($shipmentChannel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\ShipmentChannelPocztex2021Enum', is_array($shipmentChannel) ? implode(', ', $shipmentChannel) : var_export($shipmentChannel, true), implode(', ', \app\modules\postal\sender\EnumType\ShipmentChannelPocztex2021Enum::getValidValues())), __LINE__);
        }
        $this->shipmentChannel = $shipmentChannel;
        
        return $this;
    }
    /**
     * Get labelExpirationDate value
     * @return string|null
     */
    public function getLabelExpirationDate(): ?string
    {
        return $this->labelExpirationDate;
    }
    /**
     * Set labelExpirationDate value
     * @param string $labelExpirationDate
     * @return \app\modules\postal\sender\StructType\Pocztex2021KurierType
     */
    public function setLabelExpirationDate(?string $labelExpirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($labelExpirationDate) && !is_string($labelExpirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelExpirationDate, true), gettype($labelExpirationDate)), __LINE__);
        }
        $this->labelExpirationDate = $labelExpirationDate;
        
        return $this;
    }
}
