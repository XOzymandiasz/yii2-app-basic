<?php

namespace app\modules\postal\sender\Type;

enum CustomsDeclarationContentEnum: string {
    case GOODS_SALE = 'GOODS_SALE';
    case GOODS_RETURN = 'GOODS_RETURN';
    case GIFT = 'GIFT';
    case COMMERCIAL_SAMPLE = 'COMMERCIAL_SAMPLE';
    case DOCUMENT = 'DOCUMENT';
    case OTHER = 'OTHER';
}
