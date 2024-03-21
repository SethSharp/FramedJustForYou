<?php

namespace App\Http\Controllers\Public;

use Illuminate\View\View;
use App\Support\Traits\GoogleApi;
use App\Http\Controllers\Controller;

class ShowHomeController extends Controller
{
    use GoogleApi;

    public function __invoke(): View
    {
        return view('pages/home', [
            'reviews' => $this->getRecentReviews()
        ]);
    }
}
