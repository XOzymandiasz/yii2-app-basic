<?php

namespace unit\postal\sender;

use app\modules\postal\sender\repositories\AddRepository;
use unit\postal\sender\SenderClientTest;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class AddServiceRepositoryTest extends Unit
{
    private ?AddRepository $service = null;
    public function testAddService()
    {
        $this->giveAddService();

        $senderClient = new SenderClientTest('Adam');




    }


    protected function giveAddService()
    {
        if($this->service == null) {
            $this->service = new AddRepository();
        }
        return $this->service;
    }

}
