<?php

/*
|--------------------------------------------------------------------------
| Frame Builder seed data (POC)
|--------------------------------------------------------------------------
|
| Placeholder moulding data and pricing inputs. Replace with a sync from the
| business's framing software once one is available. Widths are in mm, prices
| in AUD. `color` and `inner_color` are used to render the CSS preview.
|
*/

return [
    'pricing' => [
        'waste_factor' => 1.15, // extra moulding for mitred corners
        'glass_per_m2' => 120.00,
        'mat_per_m2' => 90.00,
        'labour' => 35.00,
        'mat_border_mm' => 50,
    ],

    'limits' => [
        'min_cm' => 10,
        'max_cm' => 150,
    ],

    'mouldings' => [
        ['code' => 'BLK-20', 'name' => 'Slim Black', 'width_mm' => 20, 'price_per_metre' => 14.00, 'color' => '#1a1a1a', 'inner_color' => '#000000'],
        ['code' => 'WHT-30', 'name' => 'Gallery White', 'width_mm' => 30, 'price_per_metre' => 18.00, 'color' => '#f4f4f0', 'inner_color' => '#d8d8d0'],
        ['code' => 'OAK-25', 'name' => 'Natural Oak', 'width_mm' => 25, 'price_per_metre' => 22.00, 'color' => '#c8a26a', 'inner_color' => '#a07d48'],
        ['code' => 'WAL-40', 'name' => 'Walnut', 'width_mm' => 40, 'price_per_metre' => 30.00, 'color' => '#5a3d28', 'inner_color' => '#3b2615'],
        ['code' => 'GLD-50', 'name' => 'Ornate Gold', 'width_mm' => 50, 'price_per_metre' => 48.00, 'color' => '#d4af37', 'inner_color' => '#9c7f1c'],
        ['code' => 'SLV-15', 'name' => 'Brushed Silver', 'width_mm' => 15, 'price_per_metre' => 16.00, 'color' => '#b8bcc2', 'inner_color' => '#8a8e94'],
        ['code' => 'RED-35', 'name' => 'Cedar Red', 'width_mm' => 35, 'price_per_metre' => 26.00, 'color' => '#8c3b2e', 'inner_color' => '#5e2219'],
        ['code' => 'NVY-30', 'name' => 'Navy Satin', 'width_mm' => 30, 'price_per_metre' => 24.00, 'color' => '#1f3354', 'inner_color' => '#101c33'],
        ['code' => 'GRY-45', 'name' => 'Driftwood Grey', 'width_mm' => 45, 'price_per_metre' => 34.00, 'color' => '#9a948a', 'inner_color' => '#6f6a61'],
        ['code' => 'BLK-60', 'name' => 'Deep Box Black', 'width_mm' => 60, 'price_per_metre' => 42.00, 'color' => '#222222', 'inner_color' => '#0a0a0a'],
    ],
];
