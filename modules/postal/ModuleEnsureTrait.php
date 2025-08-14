<?php

namespace app\modules\postal;

use Yii;
use yii\base\InvalidConfigException;

trait ModuleEnsureTrait
{

    protected const MODULE_ID = 'postal';

    /**
     * @throws InvalidConfigException
     */
    public static function getModule(): Module
    {
        $module = Module::getInstance();
        if ($module === null) {
            $module = Yii::$app->getModule(static::MODULE_ID);
        }
        if ($module === null) {
            throw new InvalidConfigException('Module must be set.');
        }
        return $module;
    }

}
