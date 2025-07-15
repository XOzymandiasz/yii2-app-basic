<?php

namespace app\modules\postal\sender\Type;

/**
 * gabaryt Maksymalne wymiary przesyłki (w cm)
 *  XS: 25,0 x 20,0 x 10,0; S: 30,0 x 25,0 x 15,0; M: 35,0 x 30,0 x 20,0;
 *  L: 45,0 x 35,0 x 25,0; XL: 60,0 x 50,0 x 30,0; XXL: 90,0 x 60,0 x 35,0
 */
enum GabarytBiznesowaType: string {
    case XS = 'XS';
    case S = 'S';
    case M = 'M';
    case L = 'L';
    case XL = 'XL';
    case XXL = 'XXL';
}
