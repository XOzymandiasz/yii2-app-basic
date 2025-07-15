<?php

namespace app\modules\postal\sender\Type;

enum MiejscePozostawieniaZawiadomieniaODoreczeniuEnum: string {
    case SKRZYNKA_ADRESATA = 'SKRZYNKA_ADRESATA';
    case DRZWI_MIESZKANIA = 'DRZWI_MIESZKANIA';
    case INNE_WIDOCZNE_MIEJSCE = 'INNE_WIDOCZNE_MIEJSCE';
    case SKRYTKA_POCZTOWA = 'SKRYTKA_POCZTOWA';
}
