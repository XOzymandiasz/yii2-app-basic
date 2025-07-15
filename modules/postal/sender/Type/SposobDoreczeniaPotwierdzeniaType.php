<?php

namespace app\modules\postal\sender\Type;

enum SposobDoreczeniaPotwierdzeniaType: string {
    case TELEFON = 'TELEFON';
    case TELEFAX = 'TELEFAX';
    case SMS = 'SMS';
    case EMAIL = 'EMAIL';
}
