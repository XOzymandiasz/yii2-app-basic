<?php

namespace app\modules\postal\sender\Type;

enum SposobNadaniaType: string {
    case WERYFIKACJA_WEZEL_DOCELOWY = 'WERYFIKACJA_WEZEL_DOCELOWY';
    case WERYFIKACJA_WEZEL_NADAWCZY = 'WERYFIKACJA_WEZEL_NADAWCZY';
}
