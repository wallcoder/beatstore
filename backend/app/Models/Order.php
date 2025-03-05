<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    protected $guarded=[];

    public function payment(): HasMany{
        return $this->hasMany(Payment::class);
    } 

    public function coupon(): BelongsTo{
        return $this->belongsTo(Coupon::class);
    }

    public function discount(): BelongsTo{
        return $this->belongsTo(Discount::class);
    }

    public function orderDetail(): HasOne{
        return $this->hasOne(OrderDetail::class);
    }

    public function orderItem(): HasMany{
        return $this->hasMany(OrderItem::class);
    }
}
