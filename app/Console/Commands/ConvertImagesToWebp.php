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
        $folderPath = 'images/team';
        $files = Storage::disk('s3')->files($folderPath);

        foreach ($files as $file) {
            $imageContent = Storage::disk('s3')->get($file);

            if ($this->option('dry-run')) {
                $this->info('Image: ' . $file);
            } else {
                $img = Image::make($imageContent)
                    ->encode('webp');

                $convertedPath = $folderPath . '/' . pathinfo($file, PATHINFO_FILENAME) . '.webp';

                $this->info('Storing and converting: ' . $file);
                Storage::disk('s3')->put($convertedPath, $img, 'public');
            }
        }

        $this->info('Image processing complete.');
    }
}
