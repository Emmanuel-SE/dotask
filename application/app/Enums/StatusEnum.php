<?php

namespace App\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self pending()
 * @method static self in_progress()
 * @method static self complete()
 */
class StatusEnum extends Enum
{
    protected static function values(): \Closure
    {
        return fn(string $name): string|int => str_replace('_', ' ', mb_strtolower($name));
    }
}
