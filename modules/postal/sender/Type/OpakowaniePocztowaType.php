<?php

namespace app\modules\postal\sender\Type;

enum OpakowaniePocztowaType: string {
    case PACZKA_DO_POL_KILO = 'PACZKA_DO_POL_KILO';
    case FIRMOWA_DO_1KG = 'FIRMOWA_DO_1KG';
    case GABARYT_G1 = 'GABARYT_G1';
    case GABARYT_G2 = 'GABARYT_G2';
    case GABARYT_G3 = 'GABARYT_G3';
    case GABARYT_G4 = 'GABARYT_G4';
    case GABARYT_G5 = 'GABARYT_G5';
}
