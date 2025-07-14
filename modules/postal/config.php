<?php

use app\modules\postal\components\PocztaPolskaTracker;
use app\modules\postal\components\PocztaPolskaTrackerClient;

return [
    'components' => [
        'pocztaPolskaTracker' => [
            'class' => PocztaPolskaTracker::class,
        ],
        'pocztaPolskaTrackerClient' => [
            'class' => PocztaPolskaTrackerClient::class,
        ],
    ],
    'modules' => [
        'poczta-polska',
        'furgentka',
        'inpost',
    ]
];
