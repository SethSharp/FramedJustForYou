<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ConvertImagesToWebp extends Command
{
    protected $signature = 'convert';
    protected $description = 'Convert images from png to webp';

    public function handle(): void
    {
        $folderPath = 'images';
        $files = Storage::disk('s3')->files($folderPath);

        foreach ($files as $file) {
            $imageContent = Storage::disk('s3')->get($file);

            $img = Image::make($imageContent)
                ->encode('webp');
            
            $convertedPath = $folderPath . '/converted/' . pathinfo($file, PATHINFO_FILENAME) . '.webp';
            Storage::disk('s3')->put($convertedPath, $img, 'public');

            break;
        }

        $this->info('Image processing complete.');
    }
}
