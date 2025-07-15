<?php

namespace app\modules\postal\sender\Type;

enum StatusEPOEnum: string {
    case NIEZNANY = 'NIEZNANY';
    case NADANIE = 'NADANIE';
    case W_TRANSPORCIE = 'W_TRANSPORCIE';
    case CLO = 'CLO';
    case SMS = 'SMS';
    case W_DORECZENIU = 'W_DORECZENIU';
    case AWIZO = 'AWIZO';
    case PONOWNE_AWIZO = 'PONOWNE_AWIZO';
    case ZWROT = 'ZWROT';
    case DORECZONA = 'DORECZONA';
}
