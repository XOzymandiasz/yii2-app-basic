<?php

namespace app\modules\postal\sender\Type;

enum RelatedToAllegroChannelType: string {
    case MS = 'MS';
    case WEB_API = 'WEB_API';
    case REST_API = 'REST_API';
}
