<?php

namespace app\modules\postal\sender\Type;

enum ZawartoscSpecjalnaEnum: string {
    case OWADY = 'OWADY';
    case PLYNY_LUB_GAZY = 'PLYNY_LUB_GAZY';
    case PRZEDMIOTY_LATWO_TLUKACE_SIE_I_SZKLO = 'PRZEDMIOTY_LATWO_TLUKACE_SIE_I_SZKLO';
    case RZECZY_LAMLIWE_I_KRUCHE = 'RZECZY_LAMLIWE_I_KRUCHE';
    case ZYWE_PTAKI = 'ZYWE_PTAKI';
    case ZYWE_ROSLINY = 'ZYWE_ROSLINY';
}
