<?php

namespace app\modules\postal\sender\Type;

enum RodzajPlatnosciEnum: string {
    case BLIK = 'BLIK';
    case CARD = 'CARD';
    case ONLINE = 'ONLINE';
}
