<?php

namespace app\modules\postal\sender\Type;

/**
 * Format przesyłki:
 *  S -
 *  M -
 *  L -
 *  XL -
 *  2XL -
 */
enum FormatPocztex2021Type: string {
    case S = 'S';
    case M = 'M';
    case L = 'L';
    case XL = 'XL';
    case Value_2XL = '2XL';
}
