<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProfilListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetProfilListResponse extends AbstractStructBase
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType[]
     */
    protected ?array $profil = null;
    /**
     * Constructor method for getProfilListResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType[] $profil
     * @uses GetProfilListResponse::setProfil()
     */
    public function __construct(?array $profil = null)
    {
        $this
            ->setProfil($profil);
    }
    /**
     * Get profil value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType[]
     */
    public function getProfil(): ?array
    {
        return $this->profil;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProfil method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfil method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfilForArrayConstraintFromSetProfil(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProfilListResponseProfilItem) {
            // validation for constraint: itemType
            if (!$getProfilListResponseProfilItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType) {
                $invalidValues[] = is_object($getProfilListResponseProfilItem) ? get_class($getProfilListResponseProfilItem) : sprintf('%s(%s)', gettype($getProfilListResponseProfilItem), var_export($getProfilListResponseProfilItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The profil property can only contain items of type \app\modules\postal\sender\StructType\ProfilType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set profil value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType[] $profil
     * @return \app\modules\postal\sender\StructType\GetProfilListResponse
     *@throws InvalidArgumentException
     */
    public function setProfil(?array $profil = null): self
    {
        // validation for constraint: array
        if ('' !== ($profilArrayErrorMessage = self::validateProfilForArrayConstraintFromSetProfil($profil))) {
            throw new InvalidArgumentException($profilArrayErrorMessage, __LINE__);
        }
        $this->profil = $profil;
        
        return $this;
    }
    /**
     * Add item to profil value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $item
     * @return \app\modules\postal\sender\StructType\GetProfilListResponse
     *@throws InvalidArgumentException
     */
    public function addToProfil(\app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType) {
            throw new InvalidArgumentException(sprintf('The profil property can only contain items of type \app\modules\postal\sender\StructType\ProfilType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->profil[] = $item;
        
        return $this;
    }
}
