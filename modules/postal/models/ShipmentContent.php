<?php

namespace app\modules\postal\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "shipment_content".
 *
 * @property int $id
 * @property string $name
 * @property int $is_active
 */
class ShipmentContent extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%shipment_content}}';
    }

}
