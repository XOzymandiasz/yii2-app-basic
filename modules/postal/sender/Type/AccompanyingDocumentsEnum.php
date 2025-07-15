<?php

namespace app\modules\postal\sender\Type;

enum AccompanyingDocumentsEnum: string {
    case LICENSE = 'LICENSE';
    case CERTIFICATE = 'CERTIFICATE';
    case INVOICE = 'INVOICE';
}
