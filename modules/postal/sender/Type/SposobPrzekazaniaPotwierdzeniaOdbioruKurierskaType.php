<?php

namespace app\modules\postal\sender\Type;

enum SposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType: string {
    case MIEJSKI_DO_3H_DO_5KM = 'MIEJSKI_DO_3H_DO_5KM';
    case MIEJSKI_DO_3H_DO_10KM = 'MIEJSKI_DO_3H_DO_10KM';
    case MIEJSKI_DO_3H_DO_15KM = 'MIEJSKI_DO_3H_DO_15KM';
    case MIEJSKI_DO_3H_POWYZEJ_15KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    case BEZPOSREDNI_DO_20KG = 'BEZPOSREDNI_DO_20KG';
    case EKSPRES24 = 'EKSPRES24';
    case LIST_ZWYKLY_PRIORYTETOWY = 'LIST_ZWYKLY_PRIORYTETOWY';
}
