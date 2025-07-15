<?php

namespace app\modules\postal\sender\Type;

enum StatusAccountType: string {
    case WYLACZONY = 'WYLACZONY';
    case ZABLOKOWANY = 'ZABLOKOWANY';
    case ODBLOKOWANY = 'ODBLOKOWANY';
}
