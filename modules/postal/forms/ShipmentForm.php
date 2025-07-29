<?php

namespace app\modules\postal\forms;

use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\models\ShipmentContent;
use app\modules\postal\models\ShipmentDirectionInterface;
use yii\base\Model;
use yii\helpers\ArrayHelper;

class ShipmentForm extends Model
{
    public const SCENARIO_DIRECTION_IN = ShipmentDirectionInterface::DIRECTION_IN;
    public const SCENARIO_DIRECTION_OUT = ShipmentDirectionInterface::DIRECTION_OUT;


    public string $number = '';
    public string $direction = '';

    private ?Shipment $model = null;

    public function rules(): array
    {
        return [
            [['finish_at', 'number', 'direction'], 'required'],
            ['!direction', 'in', 'range' => array_keys(static::getDirectionNames())],
            [['finish_at'], 'required', 'on' => self::SCENARIO_DIRECTION_IN],
        ];
    }

    public static function getDirectionNames(): array
    {
        return Shipment::getDirectionsNames();
    }

    public static function getAddressesNames(): array
    {
        return ShipmentAddress::find()
            ->select(['name', 'id'])
            ->indexBy('id')
            ->column();
    }


    public function getModel(): Shipment
    {
        if ($this->model === null) {
            $this->model = new Shipment();
        }
        return $this->model;
    }

    public function setModel(Shipment $model): void
    {
        $this->model = $model;
        $this->number = $model->number;
        $this->guid = $model->guid;
        $this->finished_at = $model->finished_at;
        $this->provider = $model->provider;
        $this->direction = $model->direction;
    }

    public static function getContentNames(): array
    {
        return
            ArrayHelper::map(
                ShipmentContent::find()->all(),
                'id',
                'name'
            );
    }


}