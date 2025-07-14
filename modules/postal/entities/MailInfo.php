<?php

namespace app\modules\postal\entities;


use app\modules\postal\Module;
use yii\base\Model;

class MailInfo extends Model
{
    public string $number;
    public string $dispatchCountryCode;
    public string $dispatchCountryName;
    public string $recipientCountryCode;
    public string $recipientCountryName;
    public string $typeOfMailCode;
    public string $typeOfMailName;
    public bool $finished;
    /**
     * @var MailInfoEvent[]
     */
    public array $events;

    public function __construct(array $config = [])
    {
        if (isset($config['events'])) {
            $this->prepareEvents($config['events']);
        }
        parent::__construct($config);
    }


    public function __toString(): string
    {
        return $this->number;
    }

    protected function prepareEvents(array &$events): void
    {
        foreach ($events as &$event) {
            if (!$event instanceof MailInfoEvent) {
                $event = new MailInfoEvent($event);
            }
        }
    }


    public function attributeLabels(): array
    {
        return [
            'number' => Module::t('poczta-polska', 'Number'),
            'dispatchCountryCode' => Module::t('poczta-polska', 'Dispatch Country Code'),
            'dispatchCountryName' => Module::t('poczta-polska', 'Dispatch Country Name'),
            'recipientCountryCode' => Module::t('poczta-polska', 'Recipient Country Code'),
            'recipientCountryName' => Module::t('poczta-polska', 'Recipient Country Name'),
            'typeOfMailCode' => Module::t('poczta-polska', 'Type of Mail Code'),
            'typeOfMailName' => Module::t('poczta-polska', 'Type of Mail Name'),
        ];
    }


}
