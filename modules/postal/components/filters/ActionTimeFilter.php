<?php

namespace app\modules\postal\components\filters;

use Yii;
use yii\base\ActionFilter;

class ActionTimeFilter extends ActionFilter
{
    private $beforeTime;

    public function beforeAction($action): bool
    {
        $this->beforeTime = microtime(true);
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {
        $time = microtime(true) - $this->beforeTime;
        Yii::warning($time);
        return parent::afterAction($action, $result);
    }

}
