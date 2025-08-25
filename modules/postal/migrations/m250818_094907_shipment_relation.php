<?php

use app\modules\postal\components\ShipmentRelationComponent;
use app\modules\postal\ModuleEnsureTrait;
use yii\base\InvalidConfigException;
use yii\db\Migration;

class m250818_094907_shipment_relation extends Migration
{

    use ModuleEnsureTrait;

    public array $relations = [];

    public ?ShipmentRelationComponent $relation = null;


    /**
     * @throws InvalidConfigException
     */
    public function init(): void
    {
        parent::init();
        if ($this->relation === null) {
            $this->relation = static::ensureModule()->shipmentRelation;
        }

        if (empty($this->relations)) {
            $this->relations = $this->relation->allowRelated;
        }
    }

    public function safeUp(): void
    {

        foreach ($this->relations as $refClass) {
            $this->setRelationDb($refClass);
            $tableName = $this->generateRelationTableName($refClass);
            $this->createTable($tableName, [
                'shipment_id' => $this->integer()->notNull(),
                'entity_id' => $this->integer()->notNull(),
                'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
                'updated_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            ]);

            $this->addPrimaryKey(
                $this->baseName($tableName) . '_PK',
                $tableName,
                ['shipment_id', 'entity_id']
            );

            $this->addForeignKey(
                $this->baseName($tableName) . '_FK_entity',
                $tableName,
                'entity_id',
                $refClass::tableName(),
                $this->relation->getPrimaryKey($refClass),
                'CASCADE',
                'CASCADE'
            );

            $this->addForeignKey(
                $this->baseName($tableName) . '_FK_shipment',
                $tableName,
                'shipment_id',
                $this->relation->getBaseTableName(),
                'id',
                'CASCADE',
                'CASCADE'
            );
        }
    }


    public function safeDown(): void
    {
        foreach (array_reverse($this->relations, true) as $refClass) {
            $this->setRelationDb($refClass);
            $tableName = $this->generateRelationTableName($refClass);

            $this->dropForeignKey($this->baseName($tableName) . '_FK_entity', $tableName);
            $this->dropForeignKey($this->baseName($tableName) . '_FK_shipment', $tableName);

            $this->dropPrimaryKey($this->baseName($tableName) . 'PK', $tableName);
            $this->dropTable($tableName);
        }

    }

    private function setRelationDb(string $refClass): void
    {
        $this->db = $this->relation->getRelatedDb($refClass);

    }


    protected function generateRelationTableName(string $refClass): string
    {
        return $this->relation->getRelatedTableName($refClass);
    }

    private function baseName(string $tableName): string
    {
        return trim($tableName, '{}%');
    }
}
