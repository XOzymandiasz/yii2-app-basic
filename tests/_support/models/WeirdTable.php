<?php

namespace tests\_support\models;

use yii\db\ActiveRecord;

class WeirdTable extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%User-Log}}';
    }

    public static function primaryKey(): array
    {
        return ['id'];
    }
}
