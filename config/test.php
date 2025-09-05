<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/test_db.php';

use app\models\User;
use XOzymandias\Yii2Postal\components\ShipmentRelationComponent;
use XOzymandias\Yii2Postal\components\ShipmentUrlComponent;
use XOzymandias\Yii2Postal\Module as PostalModule;
use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaTracker;
use XOzymandias\Yii2Postal\modules\poczta_polska\Module as PocztaPolskaModule;
use XOzymandias\Yii2Postal\modules\poczta_polska\repositories\RepositoryFactory;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
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
            'identityClass' => app\models\User::class,
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
                    'components' => [
                        'repositoryFactory' => [
                            'class' => RepositoryFactory::class,
                            'repositoryConfig' => [
                                'cache' => [
                                    'class' => FileCache::class
                                ]
                            ]
                        ],
                    ],
                    'tracker' => [
                        'class' => PocztaPolskaTracker::class,
                    ],
                    'senderOptions' => [
                        'class' => PocztaPolskaSenderOptions::class,
                        'login' => 'majsterw@o2.pl',
                        'password' => 'SdsSds123123',
                        'isTest' => true
                    ]
                ],
            ],
            'shipmentRelation' => [
                'class' => ShipmentRelationComponent::class,
                'userClass' => User::class,
            ],
            'shipmentUrl' => [
                'class' => ShipmentUrlComponent::class,
            ],

        ]

    ],
    'params' => $params,
];
