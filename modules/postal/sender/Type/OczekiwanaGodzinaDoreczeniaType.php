<?php

namespace app\modules\postal\sender\Type;

enum OczekiwanaGodzinaDoreczeniaType: string {
    case DO0800 = 'DO 08:00';
    case DO0900 = 'DO 09:00';
    case DO1200 = 'DO 12:00';
    case NA1300 = 'NA 13:00';
    case NA1400 = 'NA 14:00';
    case NA1500 = 'NA 15:00';
    case NA1600 = 'NA 16:00';
    case NA1700 = 'NA 17:00';
    case NA1800 = 'NA 18:00';
    case NA1900 = 'NA 19:00';
    case NA2000 = 'NA 20:00';
}
