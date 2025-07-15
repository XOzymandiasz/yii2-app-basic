<?php

namespace app\modules\postal\sender\Type;

enum PrintMethodEnum: string {
    case EACH_PARCEL_SEPARATELY = 'EACH_PARCEL_SEPARATELY';
    case ALL_PARCELS_IN_ONE_FILE = 'ALL_PARCELS_IN_ONE_FILE';
}
