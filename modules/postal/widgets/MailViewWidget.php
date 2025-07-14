<?php

namespace app\modules\postal\widgets;


use app\modules\postal\entities\Mail;
use app\modules\postal\entities\MailInfoEvent;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\widgets\DetailView;

class MailViewWidget extends Widget
{
    public Mail $model;
    public bool $withEvents = true;


    /**
     * @var MailInfoEvent[]
     */
    public array $events = [];
    public array $detailViewConfig = [];

    public function init(): void
    {
        parent::init();
        if (!isset($this->detailViewConfig['attributes'])) {
            $this->detailViewConfig['attributes'] = $this->defaultAttributes();
        }
        if ($this->withEvents && empty($this->events)) {
            $this->events = $this->model->mailInfo->events;
        }

    }

    public function run()
    {
        return $this->renderDetailView() . $this->renderEvents();
    }


    protected function defaultAttributes(): array
    {
        return [
            'number'
        ];
    }

    protected function renderDetailView(): string
    {
        $options = $this->detailViewConfig;
        $options['model'] = $this->model;
        $class = ArrayHelper::getValue($options, 'class', DetailView::class);
        return $class::widget($options);
    }

    protected function renderEvents(): string
    {
        return '';
    }

}
