<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Beat extends Model
{
    protected $fillable = ['product_id', 'streams', 'likes', 'bpm', 'key', 'genre'];

    public function product(): BelongsTo{
        return $this->belongsTo(Product::class);
    }
}
