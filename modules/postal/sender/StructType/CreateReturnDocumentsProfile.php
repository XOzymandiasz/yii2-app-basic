<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createReturnDocumentsProfile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateReturnDocumentsProfile extends AbstractStructBase
{
    /**
     * The profile
     * @var \app\modules\postal\sender\StructType\ReturnDocumentProfileType|null
     */
    protected ?\app\modules\postal\sender\StructType\ReturnDocumentProfileType $profile = null;
    /**
     * Constructor method for createReturnDocumentsProfile
     * @uses CreateReturnDocumentsProfile::setProfile()
     * @param \app\modules\postal\sender\StructType\ReturnDocumentProfileType $profile
     */
    public function __construct(?\app\modules\postal\sender\StructType\ReturnDocumentProfileType $profile = null)
    {
        $this
            ->setProfile($profile);
    }
    /**
     * Get profile value
     * @return \app\modules\postal\sender\StructType\ReturnDocumentProfileType|null
     */
    public function getProfile(): ?\app\modules\postal\sender\StructType\ReturnDocumentProfileType
    {
        return $this->profile;
    }
    /**
     * Set profile value
     * @param \app\modules\postal\sender\StructType\ReturnDocumentProfileType $profile
     * @return \app\modules\postal\sender\StructType\CreateReturnDocumentsProfile
     */
    public function setProfile(?\app\modules\postal\sender\StructType\ReturnDocumentProfileType $profile = null): self
    {
        $this->profile = $profile;
        
        return $this;
    }
}
