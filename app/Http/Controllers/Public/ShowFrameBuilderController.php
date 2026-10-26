<?php

namespace App\Http\Controllers\Public;

use Illuminate\View\View;
use App\Support\FrameQuote;
use App\Http\Controllers\Controller;

class ShowFrameBuilderController extends Controller
{
    public function __invoke(): View
    {
        return view('pages/frame-builder', [
            'mouldings' => FrameQuote::mouldings(),
            'limits' => config('frames.limits'),
            'matBorderMm' => config('frames.pricing.mat_border_mm'),
        ]);
    }
}
