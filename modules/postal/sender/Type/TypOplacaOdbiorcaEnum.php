<?php

namespace app\modules\postal\sender\Type;

enum TypOplacaOdbiorcaEnum: string {
    case ADRESAT_INDYWIDUALNY = 'ADRESAT_INDYWIDUALNY';
    case ADRESAT_UMOWNY = 'ADRESAT_UMOWNY';
    case ODDZIAL = 'ODDZIAL';
}
