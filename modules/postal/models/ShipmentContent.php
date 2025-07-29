<?php

namespace app\modules\postal\models;

use app\modules\postal\Module;
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

    public function rules(): array
    {
        return [
            [['is_active'], 'default', 'value' => 0],
            [['name'], 'required'],
            [['is_active'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels(): array
    {
        return [
            'id' => Module::t('postal', 'ID'),
            'name' => Module::t('postal', 'Name'),
            'is_active' => Module::t('postal', 'Is Active'),
        ];
    }

}
