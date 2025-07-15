<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateChecklistTemplateResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ChecklistTemplateType>
     */
    private array $checklistTemplate;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ChecklistTemplateType>
     */
    public function getChecklistTemplate() : array
    {
        return $this->checklistTemplate;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ChecklistTemplateType> $checklistTemplate
     * @return static
     */
    public function withChecklistTemplate(array $checklistTemplate) : static
    {
        $new = clone $this;
        $new->checklistTemplate = $checklistTemplate;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    public function getError() : array
    {
        return $this->error;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ErrorType> $error
     * @return static
     */
    public function withError(array $error) : static
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }
}

