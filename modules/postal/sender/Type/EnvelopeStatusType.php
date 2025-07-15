<?php

namespace app\modules\postal\sender\Type;

enum EnvelopeStatusType: string {
    case WYSLANY = 'WYSLANY';
    case DOSTARCZONY = 'DOSTARCZONY';
    case PRZYJETY = 'PRZYJETY';
    case WALIDOWANY = 'WALIDOWANY';
    case BLEDNY = 'BLEDNY';
}
