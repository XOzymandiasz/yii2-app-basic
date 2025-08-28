<?php

namespace app\modules\postal\tests\unit;

use app\modules\postal\components\ShipmentRelationComponent;
use app\modules\postal\components\ShipmentUrlComponent;
use app\modules\postal\Module;
use app\modules\postal\ModuleEnsureTrait;
use Codeception\Test\Unit;
use UnitTester;
use Yii;

/**
 * @property UnitTester $tester
 */
class ModuleTest extends Unit
{
    use ModuleEnsureTrait;
    private Module $module;

    public function testInitEnsuresInstances(): void
    {
        $this->module = static::ensureModule();

        $this->tester->assertInstanceOf(ShipmentUrlComponent::class, $this->module->shipmentUrl);
        $this->tester->assertInstanceOf(ShipmentRelationComponent::class, $this->module->shipmentRelation);
    }

    public function testAliasIsRegistered(): void
    {
        $this->module = static::ensureModule();

        $alias = Yii::getAlias('@edzima/postal', false);
        $this->assertNotFalse($alias);
        $this->assertDirectoryExists($alias);
    }

    public function testTranslationsAreRegistered(): void
    {
        $this->module = static::ensureModule();

        $this->assertArrayHasKey('edzima/postal/*', Yii::$app->i18n->translations);
        $translated = Module::t('common', 'Save');
        $this->assertIsString($translated);
        $this->assertNotEmpty($translated);
    }
}
