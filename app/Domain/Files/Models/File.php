<?php

namespace App\Domain\Files\Models;

use App\Domain\Products\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class File extends Model
{
    protected $fillable = ['path'];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'file_products');
    }
}
