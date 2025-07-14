<?php

use yii\db\Migration;

class m250709_132007_create_poczta_polska_shipment_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%poczta_polska_shipment}}', [
            'id' => $this->primaryKey(),
            'number' => $this->string(256)->notNull(),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null(),
            'finished_at' => $this->dateTime()->null(),
            'shipment_at' => $this->dateTime()->null(),
            'api_data' => $this->json()->null(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%poczta_polska_shipment}}');
    }
}