<?php

namespace App\Domain\Products\Models;

use App\Domain\Files\Models\File;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends \Illuminate\Database\Eloquent\Model
{
    public function files(): BelongsToMany
    {
        return $this->belongsToMany(File::class, 'file_products')->withTimestamps();
    }
}
