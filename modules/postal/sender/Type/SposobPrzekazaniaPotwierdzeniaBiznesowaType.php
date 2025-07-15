<?php

namespace app\modules\postal\sender\Type;

enum SposobPrzekazaniaPotwierdzeniaBiznesowaType: string {
    case LIST_ZWYKLY_PRIORYTETOWY = 'LIST_ZWYKLY_PRIORYTETOWY';
    case EKSPRES24 = 'EKSPRES24';
}
