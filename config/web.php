<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

use app\models\User;
use app\modules\postal\components\ShipmentRelationComponent;
use app\modules\postal\components\ShipmentUrlComponent;
use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\components\PocztaPolskaTracker;
use app\modules\postal\modules\poczta_polska\Module as PocztaPolskaModule;
use app\modules\postal\modules\poczta_polska\repositories\RepositoryFactory;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use edzima\teryt\Module as TerytModule;
use yii\bootstrap5\BootstrapAsset;
use yii\bootstrap5\BootstrapPluginAsset;
use yii\caching\FileCache;
use yii\symfonymailer\Mailer;

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'teryt'],
    'language' => 'pl-PL',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'EmN68sPZPyvfSOh6YH00KkU3q_3fmFqd',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/site/login'],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'shipment-check-form' => 'postal/poczta-polska-shipment-check/shipment-check-form',
                'create' => 'postal/poczta-polska-shipment/create',
            ],
        ],

        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'class' => BootstrapAsset::class,
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'class' => BootstrapPluginAsset::class,
                ],
            ],
        ],
    ],
    'modules' => [
        'teryt' => [
            'class' => TerytModule::class,
        ],
        'postal' => [
            'class' => Module::class,
            'modules' => [
                'poczta_polska' => [
                    'class' => PocztaPolskaModule::class,
                    'components' => [
                        'repositoriesFactory' => [
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
                    ]
                ],
            ],
            'shipmentRelation' => [
                'class' => ShipmentRelationComponent::class,
                'userClass' => User::class,
            ],
            'shipmentUrl' => [
                'class' => ShipmentUrlComponent::class
            ]
        ]

    ],

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1', '*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1', '*'],
    ];

}

return $config;
