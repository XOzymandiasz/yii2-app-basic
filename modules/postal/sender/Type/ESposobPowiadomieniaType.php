<?php

namespace app\modules\postal\sender\Type;

enum ESposobPowiadomieniaType: string {
    case SMS = 'SMS';
    case EMAIL = 'EMAIL';
}
