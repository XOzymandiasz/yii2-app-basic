<?php

namespace app\modules\postal\modules\poczta_polska\entities;

use app\modules\postal\Module;
use yii\base\Model;

class MailInfoEventOffice extends Model
{
    public ?string $code;
    public string $name;
    public ?string $officeType;

    public function atributeLabels():array
    {
        return [
            'code' => Module::t('poczta-polska', 'Office Code'),
            'name' => Module::t('poczta-polska', 'Office Name'),
            'officeType' => Module::t('poczta-polska', 'Office Type'),
        ];
    }
}
