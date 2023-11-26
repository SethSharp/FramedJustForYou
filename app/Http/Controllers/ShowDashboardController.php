<?php

namespace App\Http\Controllers;

use App\Domain\Files\Models\File;
use Inertia\Inertia;

class ShowDashboardController extends Controller
{
    public function __invoke()
    {
        $files = File::all();

        return Inertia::render('Management/Dashboard', [
            'files' => $files
        ]);
    }
}
