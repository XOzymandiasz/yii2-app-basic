<?php

namespace app\modules\postal\models\query;

use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentDirectionInterface;
use yii\db\ActiveQuery;

/**
 * @see Shipment
 */
class ShipmentQuery extends ActiveQuery
{


    public function directionIn(): self
    {
        $this->andWhere([
            Shipment::tableName() . '.direction' => ShipmentDirectionInterface::DIRECTION_IN,
        ]);
        return $this;
    }

    public function directionOut(): self
    {
        $this->andWhere([
            Shipment::tableName() . '.direction' => ShipmentDirectionInterface::DIRECTION_OUT,
        ]);
        return $this;
    }

    /**
     * {@inheritdoc }
     * @param $db
     * @return []|Shipment[]
     */
    public function all($db = null): array
    {
        return parent::all($db);
    }

    /**
     *  {@inheritdoc }
     * @param $db
     * @return []|Shipment
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
