<?php

namespace app\modules\postal\models;

use app\modules\postal\Module;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "poczta_polska_shipment".
 *
 * @property int $id
 * @property string $number
 * @property string $created_at
 * @property string $updated_at
 * @property string $finished_at
 * @property string $shipment_at
 * @property string $api_data
 */
class PocztaPolskaShipment extends ActiveRecord
{

    public function behaviors(): array
    {
        return [
            'timestampBehavior' => [
                'class' => TimestampBehavior::class,
                'value' => function () {
                    return date('Y-m-d H:i:s');
                }
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return '{{%poczta_polska_shipment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['number'], 'required'],
            [['created_at', 'updated_at', 'finished_at', 'shipment_at'], 'safe'],
            [['api_data'], 'string'],
            [['number'], 'string', 'max' => 256],
            [['number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => Module::t('poczta-polska', 'ID'),
            'number' => Module::t('poczta-polska', 'Number'),
            'created_at' => Module::t('poczta-polska', 'Created At'),
            'updated_at' => Module::t('poczta-polska', 'Updated At'),
            'finished_at' => Module::t('poczta-polska', 'Finished At'),
            'shipment_at' => Module::t('poczta-polska', 'Shipment At'),
            'api_data' => Module::t('poczta-polska', 'Api Data'),
        ];
    }

}
