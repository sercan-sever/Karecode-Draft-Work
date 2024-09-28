<?php

declare(strict_types=1);

trait EnumValue
{
    /**
     * @return array<string,string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
