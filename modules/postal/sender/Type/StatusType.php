<?php

namespace app\modules\postal\sender\Type;

enum StatusType: string {
    case NIEPOTWIERDZONA = 'NIEPOTWIERDZONA';
    case POTWIERDZONA = 'POTWIERDZONA';
    case NOWA = 'NOWA';
    case BRAK = 'BRAK';
}
