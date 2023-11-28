<?php

namespace App\Domain\Categories\Models;

use App\Domain\Files\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $guarded = [];

    public function file(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }
}
