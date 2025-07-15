<?php

namespace app\modules\postal\sender\Type;

enum TerminPaczkowaType: string {
    case PACZKA_24 = 'PACZKA_24';
    case PACZKA_48 = 'PACZKA_48';
    case PACZKA_EKSTRA_24 = 'PACZKA_EKSTRA_24';
}
