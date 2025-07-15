<?php

namespace app\modules\postal\sender\Type;

enum WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum: string {
    case BRAK = 'BRAK';
    case WYMAGANY = 'WYMAGANY';
    case NIEWYMAGANY = 'NIEWYMAGANY';
}
