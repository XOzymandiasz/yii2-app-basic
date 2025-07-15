<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateChecklistTemplate implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ChecklistTemplateType>
     */
    private array $checklistTemplate;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ChecklistTemplateType> $checklistTemplate
     */
    public function __construct(array $checklistTemplate)
    {
        $this->checklistTemplate = $checklistTemplate;
    }

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ChecklistTemplateType>
     */
    public function getChecklistTemplate() : array
    {
        return $this->checklistTemplate;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ChecklistTemplateType> $checklistTemplate
     * @return static
     */
    public function withChecklistTemplate(array $checklistTemplate) : static
    {
        $new = clone $this;
        $new->checklistTemplate = $checklistTemplate;

        return $new;
    }
}

