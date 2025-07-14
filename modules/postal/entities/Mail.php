<?php

namespace app\modules\postal\entities;

use app\modules\postal\components\ShipmentInterface;
use app\modules\postal\Module;
use \yii\base\Model;

class Mail extends Model implements ShipmentInterface
{

    public final const STATUS_FOUND = 0;
    public final const STATUS_FOUND_MANY = 1;
    public final const STATUS_NOT_FOUND = -1;
    public final const STATUS_NUMBER_MISSING = -2;

    public int $mailStatus;
    public string $number;
    public MailInfo $mailInfo;

    public function __construct(array $config = [])
    {
        $this->prepareConfig($config);
        parent::__construct($config);
    }

    protected function prepareConfig(array &$config = []): void
    {
        if (isset($config['mailInfo']) && !$config['mailInfo'] instanceof MailInfo) {
            $config['mailInfo'] = new MailInfo($config['mailInfo']);
        }
    }

    public function attributeLabels(): array
    {
        return [
            'mailStatus' => Module::t('poczta-polska', 'Mail Status'),
            'number' => Module::t('poczta-polska', 'Mail number'),
            'mailInfo' => Module::t('poczta-polska', 'Mail informations'),
            'mailStatusName' => Module::t('poczta-polska', 'Mail Status'),
        ];
    }

    public function getMailStatusName(): string
    {
        return static::getStatusNames()[$this->mailStatus];
    }

    public function isFound(): bool
    {
        return $this->mailStatus === self::STATUS_FOUND;
    }

    public function isFoundMany(): bool
    {
        return $this->mailStatus === self::STATUS_FOUND_MANY;
    }

    public function isNotFound(): bool
    {
        return $this->mailStatus === self::STATUS_NOT_FOUND;
    }

    public function isNumberMissing(): bool
    {
        return $this->mailStatus === self::STATUS_NUMBER_MISSING;
    }

    public function getShipmentNumber(): string
    {
        return $this->number;
    }

    public function getFinishedAt(): ?string
    {
        $events = $this->mailInfo->events ?? [];
        foreach ($events as $event) {
            if ($event->finished) {
                return $event->time;
            }
        }
        return null;
    }


    public function getShipmentAt(): ?string
    {
        $events = $this->mailInfo->events ?? [];
        foreach ($events as $event) {
            $state = $event->state;
            if ( isset($state) && $state->isShipped()) {
                return $event->time;
            }
        }
        return null;
    }

    public static function getStatusNames(): array
    {
        return [
            self::STATUS_FOUND => Module::t('poczta-polska', 'Found'),
            self::STATUS_FOUND_MANY => Module::t('poczta-polska', 'Found many'),
            self::STATUS_NOT_FOUND => Module::t('poczta-polska', 'Not Found'),
            self::STATUS_NUMBER_MISSING => Module::t('poczta-polska', 'Delivery number missing'),
        ];
    }


}
