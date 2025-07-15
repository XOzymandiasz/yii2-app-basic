<?php

namespace app\modules\postal\sender\Type;

enum PrintFormatEnum: string {
    case PDF_FORMAT = 'PDF_FORMAT';
    case ZPL_FORMAT = 'ZPL_FORMAT';
}
