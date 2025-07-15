<?php

namespace app\modules\postal\sender\Type;

enum RozstrzygniecieType: string {
    case UZASADNIONA = 'UZASADNIONA';
    case NIEUZASADNIONA = 'NIEUZASADNIONA';
    case NIEWNIESIONA = 'NIEWNIESIONA';
}
