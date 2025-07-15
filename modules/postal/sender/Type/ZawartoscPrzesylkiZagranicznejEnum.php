<?php

namespace app\modules\postal\sender\Type;

enum ZawartoscPrzesylkiZagranicznejEnum: string {
    case SPRZEDAZ_TOWARU = 'SPRZEDAZ_TOWARU';
    case ZWROT_TOWARU = 'ZWROT_TOWARU';
    case PREZENT = 'PREZENT';
    case PROBKA_HANDLOWA = 'PROBKA_HANDLOWA';
    case DOKUMENT = 'DOKUMENT';
    case INNE = 'INNE';
}
