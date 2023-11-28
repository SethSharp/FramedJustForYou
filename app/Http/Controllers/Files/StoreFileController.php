<?php

namespace App\Http\Controllers\Files;

use App\Domain\Files\Models\File;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Files\StoreFileRequest;

class StoreFileController extends Controller
{
    public function __invoke(StoreFileRequest $request)
    {
        $img = Image::make($request->file('file'))
            ->fit(300)
            ->encode();

        $path = $request->file('file')->hashName(path: 'development/products');

        Storage::disk(
            app()->environment('local')
                ? 'public'
                : config('filesystems.default')
        )->put($path, $img, 'public');

        File::create([
            'path' => app()->environment('local')
                ? $path
                : Storage::url($path)
        ]);

        return back()->with('success', 'Image Successfully Saved');
    }
}
