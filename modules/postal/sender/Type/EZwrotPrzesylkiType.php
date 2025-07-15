<?php

namespace app\modules\postal\sender\Type;

enum EZwrotPrzesylkiType: string {
    case ZWROTPACZKA48 = 'ZWROTPACZKA48';
    case ZWROTKURIEREKSPRES24 = 'ZWROTKURIEREKSPRES24';
    case ZWROTPOCZTEX2021 = 'ZWROTPOCZTEX2021';
}
