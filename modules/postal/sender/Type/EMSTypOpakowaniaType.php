<?php

namespace app\modules\postal\sender\Type;

enum EMSTypOpakowaniaType: string {
    case ZWYKLY = 'ZWYKLY';
    case DOKUMENT_PACK = 'DOKUMENT_PACK';
    case KILO_PACK = 'KILO_PACK';
}
