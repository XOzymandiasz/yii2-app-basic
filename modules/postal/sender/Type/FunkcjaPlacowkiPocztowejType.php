<?php

namespace app\modules\postal\sender\Type;

enum FunkcjaPlacowkiPocztowejType: string {
    case NADAWCZA = 'NADAWCZA';
    case ODDAWCZA = 'ODDAWCZA';
    case NADAWCZOODDAWCZA = 'NADAWCZO-ODDAWCZA';
}
