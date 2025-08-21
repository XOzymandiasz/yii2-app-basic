<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/test_db.php';

use app\models\User;
use app\modules\postal\components\ShipmentRelationComponent;
use app\modules\postal\components\ShipmentUrlComponent;
use app\modules\postal\Module as PostalModule;
use app\modules\postal\modules\poczta_polska\Module as PocztaPolskaModule;
use yii\caching\FileCache;

/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'basic-tests',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'language' => 'en-US',
    'components' => [
        'db' => $db,
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
            'messageClass' => 'yii\symfonymailer\Message'
        ],
        'cache' => [
            'class' => FileCache::class,
        ],
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'user' => [
            'identityClass' => 'app\models\User',
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
            // but if you absolutely need it set cookie domain to localhost
            /*
            'csrfCookie' => [
                'domain' => 'localhost',
            ],
            */
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\\i18n\\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                ],
            ],
        ],
    ],
    'modules' => [
        'postal' => [
            'class' => PostalModule::class,
            'modules' => [
                'poczta_polska' => [
                    'class' => PocztaPolskaModule::class,
                ],
            ],
            'shipmentRelation' => [
                'class' => ShipmentRelationComponent::class,
                'userClass' => User::class,
                'allowRelated' => [
                    User::class
                ],
            ],
            'shipmentUrl' => [
                'class' => ShipmentUrlComponent::class
            ]
        ]

    ],
    'params' => $params,
];
