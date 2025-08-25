<?php

namespace app\modules\postal\integrations;

use app\modules\postal\models\query\ShipmentQuery;
use app\modules\postal\models\Shipment;
use app\modules\postal\ModuleEnsureTrait;
use yii\db\ActiveRecord;

trait PostalLinkTrait
{
    use ModuleEnsureTrait;

    public function getShipmentsOut(): ShipmentQuery
    {
        return $this->getShipments()->directionOut();
    }

    public function getShipmentsIn(): ShipmentQuery
    {
        return $this->getShipments()->directionIn();
    }

    public function getShipments(): ShipmentQuery
    {
        $module = static::ensureModule();
        $id = static::primaryKey()[0] ?? 'id';

        /**
         * @var ActiveRecord $class
         */
        $class = Shipment::class;
        return $this->hasMany($class, ['id' => 'shipment_id'])
            ->viaTable(
                $module->shipmentRelation->getRelatedTableName(static::class),
                ['entity_id' => $id]
            );
    }
}
