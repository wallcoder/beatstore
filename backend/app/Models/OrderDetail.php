<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    protected $fillable = ['order_id', 'ref_id', 'first_name', 'last_name', 'email', 'phone', 'address1', 'address2', 'city', 'state', 'zipcode', 'coountry_code'];
    public function country(): BelongsTo{
        return $this->belongsTo(Country::class);
    }

    public function order(): BelongsTo{
        return $this->belongsTo(Order::class);
    }
}
