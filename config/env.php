<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(dirname(__DIR__) . '/');
$dotenv->load();

$pocztaPolskaRequired = YII_ENV_TEST
    ? [
        'POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_USERNAME',
        'POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_PASSWORD',
    ]
    : [
        'POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_USERNAME',
        'POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_PASSWORD',
    ];

$required = array_merge($pocztaPolskaRequired);
$dotenv->required($required);

