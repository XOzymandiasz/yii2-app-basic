<?php

use app\modules\postal\ModuleEnsureTrait;
use yii\base\InvalidConfigException;
use yii\db\Migration;

class m250725_112007_init_shipment extends Migration
{

    use ModuleEnsureTrait;

    public string $userTable = '';
    public string $userForeignKeyColumn = '';


    /**
     * @throws InvalidConfigException
     */
    public function init(): void
    {
        parent::init();

        $module = static::ensureModule();

        if (empty($this->userTable)) {
            $this->userTable = $module->shipmentRelation->userClass::tableName();
        }
        if (empty($this->userForeignKeyColumn)) {
            $this->userForeignKeyColumn = $module->shipmentRelation->userClass::primaryKey()[0];
        }
    }

    /**
     ** @throws Exception
     */
    public function safeUp(): void
    {
        $this->createTable('{{%shipment_content}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'is_active' => $this->boolean()->notNull()->defaultValue(0),
        ]);

        $this->createTable('{{%shipment_address}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'house_number' => $this->string(20)->notNull(),
            'postal_code' => $this->string(10)->notNull(),
            'city' => $this->string(60)->notNull(),
            'country' => $this->char(2)->notNull()->defaultValue('PL'),
            'option' => $this->char(3)->notNull(),
            'street' => $this->string(60)->null(),
            'apartment_number' => $this->string(10)->null(),
            'city_id' => $this->integer()->null(),
            'name_2' => $this->string(100)->null(),
            'phone' => $this->string(15)->null(),
            'mobile' => $this->string(15)->null(),
            'contact_person' => $this->string(15)->null(),
            'email' => $this->string(320)->null(),
            'taxID' => $this->string(15)->null(),
        ]);

        $this->createTable('{{%shipment}}', [
            'id' => $this->primaryKey(),
            'direction' => $this->char(3)->notNull(),
            'provider' => $this->char(6)->notNull(),
            'content_id' => $this->integer()->notNull(),
            'creator_id' => $this->integer()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'number' => $this->string(40)->null(),
            'guid' => $this->string(32)->null(),
            'buffer_id' => $this->integer()->null(),
            'finished_at' => $this->dateTime()->null(),
            'shipment_at' => $this->dateTime()->null(),
            'api_data' => $this->json()->null(),
        ]);

        $this->createIndex('{{%idx-shipment-direction}}', '{{%shipment}}', 'direction');
        $this->createIndex('{{%idx-shipment-provider}}', '{{%shipment}}', 'provider');

        $this->addForeignKey(
            '{{%fk_shipment-creator_id-user}}',
            '{{%shipment}}',
            'creator_id',
            $this->userTable,
            $this->userForeignKeyColumn,
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%fk_shipment-content_id-shipment_content}}',
            '{{%shipment}}',
            'content_id',
            '{{%shipment_content}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->createTable('{{%shipment_address_link}}', [
            'address_id' => $this->integer()->notNull(),
            'shipment_id' => $this->integer()->notNull(),
            'type' => $this->char(3)->notNull()
        ]);

        $this->addPrimaryKey('{{%pk_shipment_address_link}}', '{{%shipment_address_link}}', [
            'address_id',
            'shipment_id',
            'type',
        ]);

        $this->addForeignKey(
            '{{%fk_shipment_address_link-shipment}}',
            '{{%shipment_address_link}}',
            'shipment_id',
            '{{%shipment}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%fk_shipment_address_link-address}}',
            '{{%shipment_address_link}}',
            'address_id',
            '{{%shipment_address}}',
            'id',
            'CASCADE',
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
