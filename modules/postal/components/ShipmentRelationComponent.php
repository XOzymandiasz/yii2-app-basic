<?php

namespace app\modules\postal\components;

use yii\base\Component;
use yii\base\InvalidArgumentException;
use yii\db\ActiveRecord;
use yii\db\Connection;

class ShipmentRelationComponent extends Component
{
    public const TEMPLATE_TABLE_NAME = '{{%shipment{separator}{table}}}';

    /**
     * @var string|ActiveRecord
     */
    public ?string $userClass = null;

    /**
     * @var ActiveRecord[]
     */
    public array $allowRelated = [];

    public string $templateTableName = self::TEMPLATE_TABLE_NAME;

    public function init(): void
    {
        parent::init();

        if ($this->userClass !== null) {
            $this->allowRelated[] = $this->userClass;
        } else {
            throw new InvalidArgumentException('User class must be set.');
        }

        $this->allowRelated = array_values(array_unique($this->allowRelated));
    }

    public function saveShipmentRelation(int $id, string $refClass, string $refId): void
    {
        $tableName = $this->getRelatedTableName($refClass);
        $this->getRelatedDb($refClass)
            ->createCommand()
            ->insert($tableName, [
                'shipment_id' => $id,
                'entity_id' => $refId
            ])
            ->execute();
    }

    public function getRelatedDb(string $class): Connection
    {
        $this->assertAllowed($class);
        /**
         * @var ActiveRecord $class
         */
        return $class::getDb();
    }

    public function getRelatedTableName(string $class, string $separator = '_'): string
    {
        $this->assertAllowed($class);
        /**
         * @var ActiveRecord $class
         */
        $bare = $this->sanitize(trim($class::tableName(), '{}%'));
        $sanitizedSeparator = $this->sanitizeSeparator($separator);

        return strtr($this->templateTableName, [
                '{separator}' => $sanitizedSeparator,
                '{table}' => $bare
            ]
        );
    }

    public function getBaseTableName(): string
    {
        return strtr($this->templateTableName, [
                '{separator}' => '',
                '{table}' => ''
            ]
        );
    }

    public function getPrimaryKey(string $class): string
    {
        $this->assertAllowed($class);
        /**
         * @var ActiveRecord $class
         */
        return $class::primaryKey()[0];
    }

    private function assertAllowed(string $class): void
    {
        if(!in_array($class, $this->allowRelated, true)){
            throw new InvalidArgumentException(sprintf('Class "%s" is not allowed.', $class));
        }
    }

    private function sanitize(string $name): string
    {
        return strtolower(preg_replace('/[^a-z0-9_]/i', '', $name));
    }

    private function sanitizeSeparator(string $separator): string
    {
        if (preg_match('/^[a-z0-9_-]+$/i', $separator)) {
            return strtolower($separator);
        }

        return '_';
    }
}
