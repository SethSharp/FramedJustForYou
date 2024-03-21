<?php

namespace App\Http\Controllers\Public;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class ShowAboutController extends Controller
{
    public function __invoke(): View
    {
        return view('pages/about', [
            'team' => config('framed.team')
        ]);
    }
}
