<?php

namespace app\modules\postal\sender\Type;

/**
 * Określa format przesyłki.
 *  Format S:
 *  Maksymalne
 *  wymiary koperty [mm]: 160 x 230 x 20.
 *  Maksymalna waga [g]: 500
 *
 *  Format
 *  M:
 *  Maksymalne wymiary koperty [mm]: 230 x 325 x 20.
 *  Maksymalna waga
 *  [g]: 1000
 *
 *  Format L:
 *  Maksymalna suma wymiarów koperty
 *  [mm]: 900.
 *  Maksymalna długość
 *  najdłuższego boku [mm]: 600
 *  Rulony
 *  Maksymalna waga [g]: 2000
 */
enum FormatType: string {
    case S = 'S';
    case M = 'M';
    case L = 'L';
}
