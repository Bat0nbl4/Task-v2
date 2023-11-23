<?php

namespace App\Enums;

enum ObjectTypeEnum:string {
    case Book = 'Книга';
    case User = 'Пользователь';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
