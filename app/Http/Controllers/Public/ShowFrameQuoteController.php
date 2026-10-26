<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Support\FrameQuote;
use App\Http\Controllers\Controller;

class ShowFrameQuoteController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $limits = config('frames.limits');
        $codes = array_column(FrameQuote::mouldings(), 'code');

        $data = $request->validate([
            'moulding' => ['required', 'in:' . implode(',', $codes)],
            'width' => ['required', 'numeric', "min:{$limits['min_cm']}", "max:{$limits['max_cm']}"],
            'height' => ['required', 'numeric', "min:{$limits['min_cm']}", "max:{$limits['max_cm']}"],
            'mat' => ['sometimes', 'boolean'],
        ]);

        return response()->json(FrameQuote::calculate(
            $data['moulding'],
            (float) $data['width'],
            (float) $data['height'],
            $request->boolean('mat', true),
        ));
    }
}
