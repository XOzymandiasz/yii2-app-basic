<?php

namespace app\modules\postal\forms;

use app\modules\postal\models\ShipmentContent;
use app\modules\postal\Module;
use yii\base\Model;
use yii\db\Exception;

/**
 *
 * @property-read ShipmentContent $model
 */
class ContentTypeForm extends Model
{
    public string $name = '';
    public int $is_active = 0;
    public ?ShipmentContent $model = null;

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

    /**
     * @throws Exception
     */
    public function save(bool $validate = true): bool
    {
        if ($validate && !$this->validate()) {
            return false;
        }

        $model = $this->getModel();

        $model->name = $this->name;
        $model->is_active = $this->is_active;

        return $model->save(false);
    }

    public function setModel(ShipmentContent $model): void
    {
        $this->name = $model->name;
        $this->is_active = $model->is_active;
    }

    public function getModel(): ShipmentContent
    {
        if (!$this->model) {
            $this->model = new ShipmentContent();
        }
        return $this->model;
    }

    public function getID(): int
    {
        return $this->model->id;
    }

}