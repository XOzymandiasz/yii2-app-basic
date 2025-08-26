<?php

namespace app\modules\postal\tests\unit\components;

use app\modules\postal\components\ShipmentUrlComponent;
use app\modules\postal\models\ShipmentProviderInterface;
use app\modules\postal\ModuleEnsureTrait;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class ShipmentUrlComponentTest extends Unit
{
    use ModuleEnsureTrait;

    public ShipmentUrlComponent $component;

    public function _before(): void
    {
        parent::_before();
        $this->component = self::ensureModule()->shipmentUrl;
    }

    public function testGetAfterCreateUrl():void
    {
        $url = $this->component->getAfterCreateUrl(
            123,
            ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA
        );

        $this->tester->assertStringContainsString('/postal/poczta_polska/shipment/create-from-shipment', $url);
        $this->tester->assertStringContainsString('id=123', $url);
    }

    public function testGetAfterCreateWithInvalidProvider():void
    {
        $url = $this->component->getAfterCreateUrl(123, "Wacek's shop");

        $this->tester->assertNull($url);
    }

    public function testGetAfterUpdateUrl():void
    {
        $url = $this->component->getAfterUpdateUrl(
            123,
            'abc',
            ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA
        );

        $this->tester->assertStringContainsString('/postal/poczta_polska/shipment/update', $url);
        $this->tester->assertStringContainsString('bufferId=123', $url);
        $this->tester->assertStringContainsString('guid=abc', $url);
    }

    public function testGetAfterUpdateWithInvalidProvider():void
    {
        $url = $this->component->getAfterUpdateUrl(123,'abc', "Sklep u wacka");

        $this->tester->assertNull($url);
    }



}