<?php

namespace app\modules\postal\sender\Type;

enum TerminRodzajPlusType: string {
    case PORANEK = 'PORANEK';
    case POLUDNIE = 'POLUDNIE';
    case STANDARD = 'STANDARD';
}
