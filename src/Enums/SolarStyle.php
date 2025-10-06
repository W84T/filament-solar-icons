<?php

namespace W84T\Icons\SolarIcons\Enums;

use Filafly\Icons\Contracts\StyleEnum;

enum SolarStyle: string implements StyleEnum
{
    case Bold = '-bold';
    case BoldDuotone = '-bold-duotone';
    case Broken = '-broken';
    case LineDuotone = '-line-duotone';
    case Linear = '-linear';
    case Outline = '-outline';

    public function getStyleName(): string
    {
        return match ($this) {
            self::Bold => 'bold',
            self::BoldDuotone => 'bold-duotone',
            self::Broken => 'broken',
            self::LineDuotone => 'line-duotone',
            self::Linear => 'linear',
            self::Outline => 'outline',
        };
    }

    public function getEnumSuffix(): string
    {
        return match ($this) {
            self::Bold => 'Bold',
            self::BoldDuotone => 'BoldDuotone',
            self::Broken => 'Broken',
            self::LineDuotone => 'LineDuotone',
            self::Linear => 'Linear',
            self::Outline => 'Outline',
        };
    }

    public static function getStyleNames(): array
    {
        return ['bold', 'bold-duotone', 'broken', 'line-duotone', 'linear', 'outline'];
    }

    public static function fromStyleName(string $styleName): ?self
    {
        return match (strtolower($styleName)) {
            'bold' => self::Bold,
            'bold-duotone' => self::BoldDuotone,
            'broken' => self::Broken,
            'line-duotone' => self::LineDuotone,
            'linear' => self::Linear,
            'outline' => self::Outline,
            default => null,
        };
    }
}
