<?php

use yii\db\Migration;

class m250728_095723_create_user_table extends Migration
{
    public function safeUp(): void
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(255)->defaultValue(null),
        ]);

        $this->insert('{{%user}}', [
            'name' => 'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
        ]);
    }

    public function safeDown(): void
    {
        $this->dropTable('{{%user}}');
    }
}