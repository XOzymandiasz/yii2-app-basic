<?php

use app\modules\postal\modules\poczta_polska\components\PocztaPolskaTracker;
use app\modules\postal\modules\poczta_polska\components\PocztaPolskaTrackerClient;
use app\modules\postal\modules\poczta_polska\repositories\RepositoriesFactory;
use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;

return [
    'components' => [

        'pocztaPolskaTracker' => [
            'class' => PocztaPolskaTracker::class,
        ],
        'pocztaPolskaTrackerClient' => [
            'class' => PocztaPolskaTrackerClient::class,
        ],
        'pocztaPolskaSenderOptions' => [
            'class' => PocztaPolskaSenderOptions::class,
            //'login' => YII_ENV_TEST
            //    ? $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_USERNAME']
            //    : $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_USERNAME'],
            //'password' => YII_ENV_TEST
            //    ? $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_PASSWORD']
            //    : $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_PASSWORD'],
            //'isTest' => YII_ENV_TEST,
        ],
        'repositoriesFactory' => [
            'class' => RepositoriesFactory::class,
        ],
    ],
];
