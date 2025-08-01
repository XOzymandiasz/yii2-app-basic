<?php

namespace unit\postal\sender;

use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\repositories\BufforRepository;
use Codeception\Test\Unit;
use UnitTester;
use Yii;

/**
 * @property UnitTester $tester
 */
class BufforRepositoryTest extends Unit
{

    private BufforRepository $repository;


    public function _before()
    {
        parent::_before();
        $this->repository = new BufforRepository(
            PocztaPolskaSenderOptions::testInstance()
        );
    }


    public function testGetAll(): void
    {
        $all = $this->repository->getAll();
        //$all = Yii::createObject(BufforRepository::class)->getAll();
        codecept_debug($all);
        $this->tester->assertIsArray($all);
    }
}
