<?php

namespace unit\postal;

use app\modules\postal\Module;
use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\repositories\ShipmentRepository;
use Codeception\Test\Unit;
use UnitTester;
use Yii;

/**
 * @property UnitTester $tester
 */
class ModuleTest extends Unit
{

    private Module $module;

    public function testGetModuleFromApp(): void
    {
        $this->module = Yii::$app->getModule('postal');
        $repositories = $this->module->getRepositoriesFactory();
        $add = $repositories->getAddRepository();
        $this->tester->assertInstanceOf(ShipmentRepository::class, $add);

    }


    public function testCreateModuleFromConfig(): void
    {
        $this->module = new Module('postal', null, [
            'senderOptions' => [
                'class' => PocztaPolskaSenderOptions::class,
                'login' => 'test-login',
            ],
        ]);
      //  $this->tester->assertSame($this->module->senderOptions->login, 'test-login');


        $this->module->getRepositoriesFactory()->getAddRepository();
    }


}
