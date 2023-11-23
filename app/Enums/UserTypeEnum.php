<?php

namespace App\Enums;

enum UserTypeEnum:string {
    case User = 'Пользователь';
    case Publisher = 'Издатель';
    case Admin = 'Админ';

    public static function values(): array {
        return array_column(self::cases(), 'value');
    }

    public static function random_value(): string {
        foreach (self::cases() as $key => $label) {
            if ($label->name != 'Admin') {
                $arr[$key] = $label->value;
            }
        }
        return $arr[array_rand($arr)];
    }
}
