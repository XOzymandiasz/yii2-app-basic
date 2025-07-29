<?php

namespace unit\postal;

use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\repositories\BufforRepository;
use Codeception\Test\Unit;
use UnitTester;

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
        $this->tester->assertIsArray($all);
    }
}
