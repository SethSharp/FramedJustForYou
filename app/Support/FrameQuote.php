<?php

namespace App\Support;

use InvalidArgumentException;

class FrameQuote
{
    /**
     * @return array<int, array<string, mixed>>
     */
    public static function mouldings(): array
    {
        return config('frames.mouldings');
    }

    /**
     * Price a frame for artwork of the given size (cm), with an optional mat.
     *
     * @return array{moulding: string, width_cm: float, height_cm: float, breakdown: array<string, float>, total: float}
     */
    public static function calculate(string $code, float $widthCm, float $heightCm, bool $mat = true): array
    {
        $moulding = collect(self::mouldings())->firstWhere('code', $code)
            ?? throw new InvalidArgumentException("Unknown moulding [$code].");

        $pricing = config('frames.pricing');
        $matMm = $mat ? $pricing['mat_border_mm'] : 0;

        // Overall glass size: artwork plus the mat border on every side.
        $glassWm = $widthCm / 100 + 2 * $matMm / 1000;
        $glassHm = $heightCm / 100 + 2 * $matMm / 1000;

        // Moulding wraps the glass, so the outside perimeter adds the face width on each side.
        $faceM = $moulding['width_mm'] / 1000;
        $perimeter = 2 * (($glassWm + 2 * $faceM) + ($glassHm + 2 * $faceM));

        $breakdown = [
            'moulding' => $perimeter * $pricing['waste_factor'] * $moulding['price_per_metre'],
            'glass' => $glassWm * $glassHm * $pricing['glass_per_m2'],
            'mat' => $mat ? $glassWm * $glassHm * $pricing['mat_per_m2'] : 0.0,
            'labour' => (float) $pricing['labour'],
        ];
        $breakdown = array_map(fn ($v) => round($v, 2), $breakdown);

        return [
            'moulding' => $moulding['code'],
            'width_cm' => $widthCm,
            'height_cm' => $heightCm,
            'breakdown' => $breakdown,
            'total' => round(array_sum($breakdown), 2),
        ];
    }
}
