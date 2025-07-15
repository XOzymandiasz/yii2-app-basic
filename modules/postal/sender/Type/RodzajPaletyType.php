<?php

namespace app\modules\postal\sender\Type;

enum RodzajPaletyType: string {
    case EUR = 'EUR';
    case POLPALETA = 'POLPALETA';
    case INNA = 'INNA';
    case PRZEMYSLOWA = 'PRZEMYSLOWA';
}
