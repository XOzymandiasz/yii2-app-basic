<?php

use app\modules\postal\Module;
use yii\base\InvalidConfigException;
use yii\db\Migration;

class m250725_112007_init_shipment extends Migration
{

    public string $userTable;
    public string $userForeignKeyColumn;


    /**
     * @throws InvalidConfigException
     */
    public function init(): void
    {
        parent::init();
        /**
         * @var Module $module
         */
        $module = Yii::$app->getModule('postal');
        if ($module === null) {
            throw new InvalidConfigException('Postal Module must be set.');
        }

        $this->userTable = $module->userTable;
        $this->userForeignKeyColumn = $module->userPrimaryKeyColumn;
    }

    public function safeUp(): void
    {
        $this->createTable('{{%shipment_content}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'is_active' => $this->boolean()->notNull()->defaultValue(0),
        ]);

        $this->createTable('{{%shipment_address}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'street' => $this->string()->null(),
            'house_number' => $this->string(10)->notNull(),
            'apartment_number' => $this->string(10)->null(),
            'postal_code' => $this->string(10)->notNull(),
            'city' => $this->string()->notNull(),
            'city_id' => $this->integer()->null(),
            'country' => $this->char(2)->notNull()->defaultValue('PL'),
            'name2' => $this->string()->null(),
            'phone' => $this->string(11)->null(),
            'mobile' => $this->string(11)->null(),
            'contact_person' => $this->string(11)->null(),
            'email' => $this->string()->null(),
            'taxID' => $this->string(15)->null(),
        ]);

        $this->createTable('{{%shipment}}', [
            'id' => $this->primaryKey(),
            'direction' => $this->char(3)->notNull(),
            'number' => $this->string(40)->notNull(),
            'provider' => $this->char(6)->notNull(),
            'content_id' => $this->integer()->notNull(),
            'creator_id' => $this->integer()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'guid' => $this->string(32)->notNull(),
            'finished_at' => $this->dateTime()->null(),
            'shipment_at' => $this->dateTime()->null(),
            'api_data' => $this->json()->null(),
        ]);

        $this->createIndex('idx-shipment-direction', '{{%shipment}}', 'direction');
        $this->createIndex('idx-shipment-provider', '{{%shipment}}', 'provider');

        $this->addForeignKey(
            '{{%fk_shipment-creator_id-user}}',
            '{{%shipment}}',
            'creator_id',
            $this->userTable,
            $this->userForeignKeyColumn,
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%fk_shipment-content_id-shipment_content}}',
            '{{%shipment}}',
            'content_id',
            '{{%shipment_content}}',
            'id',
            'CASCADE'
        );

        $this->createTable('{{%shipment_address_link}}', [
            'address_id' => $this->integer()->notNull(),
            'shipment_id' => $this->integer()->notNull(),
            'type' => $this->char(3)->notNull()
        ]);

        $this->addPrimaryKey('{{%pk_shipment_address_link}}', '{{%shipment_address_link}}', [
            '{{%address_id}}',
            '{{%shipment_id}}'
        ]);

        $this->addForeignKey(
            '{{%fk_shipment_address_link-shipment}}',
            '{{%shipment_address_link}}',
            'shipment_id',
            '{{%shipment}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%fk_shipment_address_link-address}}',
            '{{%shipment_address_link}}',
            'address_id',
            '{{%shipment_address}}',
            'id',
            'CASCADE'
        );

    }

    public function safeDown(): void
    {

        $this->dropTable('{{%shipment_address_link}}');
        $this->dropTable('{{%shipment}}');
        $this->dropTable('{{%shipment_address}}');
        $this->dropTable('{{%shipment_content}}');

    }
}
