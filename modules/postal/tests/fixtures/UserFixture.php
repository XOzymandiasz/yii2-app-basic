<?php

namespace app\modules\postal\tests\fixtures;

use app\modules\postal\ModuleEnsureTrait;
use yii\test\ActiveFixture;

class UserFixture extends ActiveFixture
{
    use ModuleEnsureTrait;

    public $dataFile = __DIR__ . '/data/user.php';

    public function init(): void
    {
        if (empty($this->modelClass)) {
            $this->modelClass = static::ensureModule()->shipmentRelation->userClass;
        }
        parent::init();
    }

}
