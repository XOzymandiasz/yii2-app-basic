<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateReturnDocumentsProfile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateReturnDocumentsProfile extends AbstractStructBase
{
    /**
     * The profile
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $profile = null;
    /**
     * Constructor method for updateReturnDocumentsProfile
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $profile
     * @uses UpdateReturnDocumentsProfile::setProfile()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $profile = null)
    {
        $this
            ->setProfile($profile);
    }
    /**
     * Get profile value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType|null
     */
    public function getProfile(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType
    {
        return $this->profile;
    }
    /**
     * Set profile value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $profile
     * @return \app\modules\postal\sender\StructType\UpdateReturnDocumentsProfile
     */
    public function setProfile(?\app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $profile = null): self
    {
        $this->profile = $profile;
        
        return $this;
    }
}
