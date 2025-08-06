<?php

namespace app\modules\postal;

use Yii;
use yii\base\Module as BaseModule;


class Module extends BaseModule
{

    public string $userTable = '{{%user}}';
    public string $userPrimaryKeyColumn = '{{id}}';




    public function init(): void
    {
        parent::init();
         Yii::setAlias('@edzima/postal', __DIR__);
        static::registerTranslations();
    }

    public static function registerTranslations(): void
    {
        Yii::$app->i18n->translations['edzima/postal/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@edzima/postal/messages',
            'fileMap' => [
                'edzima/postal/poczta-polska' => 'poczta-polska.php',
                'edzima/postal/common' => 'common.php',
                'edzima/postal/postal' => 'postal.php',
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null): string
    {
        return Yii::t('edzima/postal/' . $category, $message, $params, $language);
    }
}
