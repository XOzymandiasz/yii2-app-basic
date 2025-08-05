<?php

namespace unit\postal\sender;

use app\modules\postal\sender\repositories\ShipmentRepository;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class AddServiceRepositoryTest extends Unit
{
    private ?ShipmentRepository $service = null;
    public function testAddService()
    {
        $this->giveAddService();

        $senderClient = new SenderClientTest('Adam');




    }


    protected function giveAddService()
    {
        if($this->service == null) {
            $this->service = new ShipmentRepository();
        }
        return $this->service;
    }

}
