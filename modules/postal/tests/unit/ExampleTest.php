<?php

namespace app\modules\postal\tests\unit;

use Codeception\Test\Unit;
use Yii;

class ExampleTest extends Unit
{
    public function testAlias()
    {
        codecept_debug(Yii::getAlias("@vendor"));
    }
}