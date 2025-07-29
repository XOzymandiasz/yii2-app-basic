<?php

namespace app\modules\postal\forms;

use app\modules\postal\Module;
use yii\base\Model;

class ContentTypeForm extends Model
{
    public int $id;
    public string $name;
    public int $is_active;

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