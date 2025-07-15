<?php

namespace app\modules\postal\sender\Type;

enum DokumentTowarzyszacyRodzajEnum: string {
    case LICENCJA = 'LICENCJA';
    case CERTYFIKAT = 'CERTYFIKAT';
    case FAKTURA = 'FAKTURA';
}
