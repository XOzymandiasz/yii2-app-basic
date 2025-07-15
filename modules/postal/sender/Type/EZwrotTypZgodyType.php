<?php

namespace app\modules\postal\sender\Type;

enum EZwrotTypZgodyType: string {
    case ZGODA_BRAK = 'ZGODA_BRAK';
    case ZGODA_AUTOMATYCZNA = 'ZGODA_AUTOMATYCZNA';
    case ZGODA_INDYWIDUALNA = 'ZGODA_INDYWIDUALNA';
}
