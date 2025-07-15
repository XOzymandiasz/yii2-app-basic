<?php

namespace app\modules\postal\sender\Type;

enum ZwrotDokumentowPocztex2021Enum: string {
    case POCZTEX_KURIER = 'POCZTEX_KURIER';
    case LIST_POLECONY_PRIORYTETOWY = 'LIST_POLECONY_PRIORYTETOWY';
    case LIST_POLECONY_EKONOMICZNY = 'LIST_POLECONY_EKONOMICZNY';
}
