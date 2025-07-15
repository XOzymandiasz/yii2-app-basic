<?php

namespace app\modules\postal\sender\Type;

enum ZasadySpecjalneEnum: string {
    case ADMINISTRACYJNA = 'ADMINISTRACYJNA';
    case PODATKOWA = 'PODATKOWA';
    case SADOWA_CYWILNA = 'SADOWA_CYWILNA';
    case SADOWA_KARNA = 'SADOWA_KARNA';
}
