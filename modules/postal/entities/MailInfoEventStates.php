<?php

namespace app\modules\postal\entities;

use app\modules\postal\Module;
use yii\base\Model;
class MailInfoEventStates extends Model
{
    public string $code;
    public string $name;
    public final const STATE_AVISO = 'AW';
    public final const STATE_DELIVERED = 'DO';
    public final const STATE_IN_DELIVERY = 'DOR';
    public final const STATE_SHIPPED = 'NA';
    public final const STATE_CUSTOM_CLEARANCE = 'OCP';
    public final const STATE_READY_FOR_PICK_UP = 'ODB';
    public final const STATE_PICKED_UP_AT_THE_POINT = 'OP';
    public final const STATE_PREPARED = 'PRZ';
    public final const STATE_IN_TRANSIT = 'TR';
    public final const STATE_DEPARTURE_PROM_POLAND = 'WYPL';
    public final const STATE_RETURNED = 'ZW';


    public function isShipped(): bool
    {
        return $this->code === self::STATE_SHIPPED;
    }

    public function isSent(): bool
    {
        return $this->code === self::STATE_DEPARTURE_PROM_POLAND;
    }
    public function attributeLabels(): array
    {
        return [
          'code' => Module::t('poczta-polska', 'State code'),
          'name' => Module::t('poczta-polska', 'State name'),
        ];
    }

    public static function getStateNames(): array
    {
        return [
            self::STATE_AVISO => Module::t('poczta-polska', 'Aviso'),
            self::STATE_DELIVERED => Module::t('poczta-polska', 'Delivered'),
            self::STATE_IN_DELIVERY => Module::t('poczta-polska', 'In delivery'),
            self::STATE_SHIPPED => Module::t('poczta-polska', 'Shipped'),
            self::STATE_CUSTOM_CLEARANCE => Module::t('poczta-polska', 'Custom clearance'),
            self::STATE_READY_FOR_PICK_UP => Module::t('poczta-polska', 'Ready for pick up'),
            self::STATE_PICKED_UP_AT_THE_POINT => Module::t('poczta-polska', 'Picked up at the point'),
            self::STATE_PREPARED => Module::t('poczta-polska', 'Prepared'),
            self::STATE_IN_TRANSIT => Module::t('poczta-polska', 'In transit'),
            self::STATE_DEPARTURE_PROM_POLAND => Module::t('poczta-polska', 'Departure from Poland'),
            self::STATE_RETURNED => Module::t('poczta-polska', 'Returned'),
        ];
    }


}
