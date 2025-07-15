<?php

namespace app\modules\postal\sender\Type;

enum SposobZwrotuType: string {
    case LADOWO_MORSKA = 'LADOWO_MORSKA';
    case LOTNICZA = 'LOTNICZA';
}
