<?php

namespace app\modules\postal\sender\Type;

enum SerwisNierejestrowanaZNumeremType: string {
    case NIEREJESTROWANA = 'NIEREJESTROWANA';
    case HANDLOWA = 'HANDLOWA';
    case LIST_BIZNESOWY = 'LIST_BIZNESOWY';
    case MARKETINGOWA = 'MARKETINGOWA';
}
