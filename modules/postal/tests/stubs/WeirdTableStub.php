<?php

namespace app\modules\postal\tests\stubs;

use yii\db\ActiveRecord;

class WeirdTableStub extends ActiveRecord
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
