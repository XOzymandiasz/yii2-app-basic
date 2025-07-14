<?php

namespace app\modules\postal\entities;

use app\modules\postal\Module;
use yii\base\Model;

class MailInfoEvent extends Model
{
    public string $code;
    public string $name;
    public string $time;
    public bool $finished;
    public bool $canceled;
    public MailInfoEventOffice $postOffice;

    public ?MailInfoEventStates $state = null;

    public function __construct(array $config = [])
    {
        $this->prepareConfig($config);
        parent::__construct($config);
    }


    protected function prepareConfig(array &$config = []): void
    {
        $this->preparePostOfficeConfig($config);
        $this->prepareStateConfig($config);
    }

    protected function preparePostOfficeConfig(array &$config = []): void
    {
        if (isset($config['postOffice']) && !$config['postOffice'] instanceof MailInfoEventOffice) {
            $config['postOffice'] = new MailInfoEventOffice($config['postOffice']);
        }
    }

    protected function prepareStateConfig(array &$config = []): void
    {
        if (isset($config['state']) && !$config['state'] instanceof MailInfoEventStates) {
            $config['state'] = new MailInfoEventStates($config['state']);
        }
    }

    public function attributeLabels(): array
    {
        return [
            'code' => Module::t('poczta-polska', 'Event code'),
            'name' => Module::t('poczta-polska', 'Event name'),
            'time' => Module::t('poczta-polska', 'Event time'),
            'finished' => Module::t('poczta-polska', 'Finished'),
            'canceled' => Module::t('poczta-polska', 'Canceled'),
            'postOffice' => Module::t('poczta-polska', 'Post Office'),
            'state' => Module::t('poczta-polska', 'State'),
        ];
    }
}


