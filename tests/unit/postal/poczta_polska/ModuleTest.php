<?php

namespace tests\unit\postal\poczta_polska;

use app\modules\postal\modules\poczta_polska\components\PocztaPolskaTracker;
use app\modules\postal\modules\poczta_polska\Module;
use app\modules\postal\modules\poczta_polska\repositories\EnvelopeRepository;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\repositories\RepositoryFactory;
use app\modules\postal\modules\poczta_polska\repositories\ShipmentRepository;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use tests\_support\stubs\PocztaPolskaTrackerStub;
use Codeception\Test\Unit;
use UnitTester;
use Yii;

/**
 * @property UnitTester $tester
 */
class ModuleTest extends Unit
{
    public Module $module;

    public function testInitEnsuresInstances(): void
    {
        $this->module = Yii::$app->getModule('postal/poczta_polska');

        $this->assertInstanceOf(PocztaPolskaTracker::class, $this->module->tracker);
        $this->assertInstanceOf(PocztaPolskaSenderOptions::class, $this->module->senderOptions);
    }

    public function testCustomDefinitionAreEnsured(): void
    {
        $this->module = new Module('postal/poczta_polska');

        $this->module->tracker = [
            'class' => PocztaPolskaTrackerStub::class,
        ];
        $this->module->init();

        $this->assertInstanceOf(PocztaPolskaTrackerStub::class, $this->module->tracker);
    }

    public function testRepositoryFactory(): void
    {
        $this->module = Yii::$app->getModule('postal/poczta_polska');

        $factory = $this->module->getRepositoryFactory();

        $this->assertInstanceOf(RepositoryFactory::class, $factory);
        $this->assertInstanceOf(ShipmentRepository::class, $factory->getShipmentRepository());
        $this->assertInstanceOf(EnvelopeRepository::class, $factory->getEnvelopeRepository());
        $this->assertInstanceOf(ProfileRepository::class, $factory->getProfileRepository());

    }


}