<?php

use app\modules\postal\components\PocztaPolskaTracker;
use app\modules\postal\components\PocztaPolskaTrackerClient;
use app\modules\postal\sender\PocztaPolskaSenderOptions;

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
            'login' => $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_USERNAME'],
            'password' => $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_PASSWORD'],
            'isTest' => true,
        ],
    ],
];
