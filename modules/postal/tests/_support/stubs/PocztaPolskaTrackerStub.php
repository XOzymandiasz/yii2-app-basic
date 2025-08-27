<?php

namespace tests\_support\stubs;

use app\modules\postal\modules\poczta_polska\components\PocztaPolskaTracker;

final class PocztaPolskaTrackerStub extends PocztaPolskaTracker{
    public function __construct(array $config = [])
    {
        parent::__construct(new PocztaPolskaTrackerClientStub(), $config);
    }
}