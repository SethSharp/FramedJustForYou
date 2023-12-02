<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ConvertImagesToWebp extends Command
{
    protected $signature = 'convert {--dry-run}';
    protected $description = 'Convert images from png to webp';

    public function handle(): void
    {
        $folderPath = 'images/framing';
        $files = Storage::disk('s3')->files($folderPath);

        foreach ($files as $file) {
            $imageContent = Storage::disk('s3')->get($file);

            if ($this->option('dry-run')) {
                $this->info('Image: ' . $file);
            } else {
                $img = Image::make($imageContent)
                    ->encode('webp');

                $convertedPath = $folderPath . '/converted/' . pathinfo($file, PATHINFO_FILENAME) . '.webp';
                Storage::disk('s3')->put($convertedPath, $img, 'public');
            }
        }

        $this->info('Image processing complete.');
    }
}
