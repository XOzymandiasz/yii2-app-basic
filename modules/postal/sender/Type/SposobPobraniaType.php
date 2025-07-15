<?php

namespace app\modules\postal\sender\Type;

enum SposobPobraniaType: string {
    case PRZEKAZ = 'PRZEKAZ';
    case RACHUNEK_BANKOWY = 'RACHUNEK_BANKOWY';
}
