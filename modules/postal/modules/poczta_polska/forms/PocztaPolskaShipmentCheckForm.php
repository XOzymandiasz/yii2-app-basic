<?php


namespace app\modules\postal\modules\poczta_polska\forms;

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\components\ShipmentInterface;
use app\modules\postal\modules\poczta_polska\components\ShipmentTrackerInterface;
use yii\base\Model;

class PocztaPolskaShipmentCheckForm extends Model
{
    public string $number = '';
    public bool $withPostInfo = false;


    public function rules(): array
    {
        return [
            [['number'], 'required'],
            [['number'], 'string', 'max' => 255],
            [['withPostInfo'], 'boolean'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'number' => Module::t('poczta-polska', 'Shipment Number'),
            'withPostInfo' => Module::t('poczta-polska', 'With Post Info'),
        ];
    }


    public function checkShipment(ShipmentTrackerInterface $tracker): ?ShipmentInterface
    {
        return $tracker->checkShipment($this->number);
    }

}
