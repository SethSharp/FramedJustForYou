<?php

namespace App\Domain\Files\Actions;

use App\Domain\Files\Models\File;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class StoreFileAction
{
    public function __invoke(UploadedFile $file): File
    {
        $img = Image::make($file)
            ->fit(300)
            ->encode();

        $path = $file->hashName(path: 'categories');

        Storage::disk(
            app()->environment('local')
                ? 'public'
                : config('filesystems.default')
        )->put($path, $img, 'public');

        return File::create([
            'path' => app()->environment('local')
                ? $path
                : Storage::url($path)
        ]);
    }
}
