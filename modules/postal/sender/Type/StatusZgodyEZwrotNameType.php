<?php

namespace app\modules\postal\sender\Type;

enum StatusZgodyEZwrotNameType: string {
    case NOWY = 'NOWY';
    case ZAAKCEPTOWANY = 'ZAAKCEPTOWANY';
    case ODRZUCONY = 'ODRZUCONY';
}
