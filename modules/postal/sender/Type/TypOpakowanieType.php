<?php

namespace app\modules\postal\sender\Type;

enum TypOpakowanieType: string {
    case KL1 = 'KL1';
    case KL2 = 'KL2';
    case KL3 = 'KL3';
    case S21 = 'S21';
    case S22 = 'S22';
    case S23 = 'S23';
    case P31 = 'P31';
    case P32 = 'P32';
    case P33 = 'P33';
    case SP41 = 'SP41';
    case SP42 = 'SP42';
    case WKL51 = 'WKL51';
    case K1 = 'K1';
    case K2 = 'K2';
    case K3 = 'K3';
    case P = 'P';
    case W = 'W';
}
