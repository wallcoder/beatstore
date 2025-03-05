<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Content extends Model
{
    protected $fillable = ['product_id', 'license_id', 'content_path'];

    public function product(): BelongsTo{
        return $this->belongsTo(Product::class);
    }

    public function license(): BelongsTo{
        return $this->belongsTo(License::class);
    }

    public function cartItem(): HasMany{
        return $this->hasMany(CartItem::class);
    }

    public function orderItem(): HasMany{
        return $this->hasMany(OrderItem::class);
    }
}
