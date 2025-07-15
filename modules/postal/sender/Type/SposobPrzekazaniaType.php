<?php

namespace app\modules\postal\sender\Type;

enum SposobPrzekazaniaType: string {
    case LIST_ZWYKLY_PRIOTYTET = 'LIST_ZWYKLY_PRIOTYTET';
    case POCZTEX = 'POCZTEX';
}
