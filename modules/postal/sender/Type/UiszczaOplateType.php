<?php

namespace app\modules\postal\sender\Type;

enum UiszczaOplateType: string {
    case NADAWCA = 'NADAWCA';
    case ADRESAT = 'ADRESAT';
}
