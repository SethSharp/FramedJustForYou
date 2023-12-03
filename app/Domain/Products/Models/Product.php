<?php

namespace App\Domain\Products\Models;

use App\Domain\Files\Models\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    public function mainFile(): HasOne
    {
        return $this->hasOne(File::class, 'file_id');
    }

    public function files(): BelongsToMany
    {
        return $this->belongsToMany(File::class, 'file_products')->withTimestamps();
    }
}
