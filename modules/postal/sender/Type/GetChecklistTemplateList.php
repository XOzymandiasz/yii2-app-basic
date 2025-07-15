<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetChecklistTemplateList implements RequestInterface
{
    /**
     * @var array<int<0,max>, int>
     */
    private array $idChecklistTemplate;

    /**
     * Constructor
     *
     * @param array<int<0,max>, int> $idChecklistTemplate
     */
    public function __construct(array $idChecklistTemplate)
    {
        $this->idChecklistTemplate = $idChecklistTemplate;
    }

    /**
     * @return array<int<0,max>, int>
     */
    public function getIdChecklistTemplate() : array
    {
        return $this->idChecklistTemplate;
    }

    /**
     * @param array<int<0,max>, int> $idChecklistTemplate
     * @return static
     */
    public function withIdChecklistTemplate(array $idChecklistTemplate) : static
    {
        $new = clone $this;
        $new->idChecklistTemplate = $idChecklistTemplate;

        return $new;
    }
}

