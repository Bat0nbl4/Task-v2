<?php

namespace App\Enums;

enum BookEditionEnum:string {
    case Printed = 'Печатное издание';
    case Graphic = 'Графическое издание';
    case Electronic = 'Электронное издание';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
