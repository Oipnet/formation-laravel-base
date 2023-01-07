<?php

namespace App\Enums;

enum Colors: string
{
    case PRIMARY = 'primary';
    case SECONDARY = 'secondary';
    case SUCCESS = 'success';
    case DANGER = 'danger';
    case WARNING = 'warning';
    case INFO = 'info';
    case LIGHT = 'light';
    case DARK = 'dark';

    public static function enum(): array
    {
        return array_column(self::cases(), 'value');
    }
}
