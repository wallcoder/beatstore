<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    protected $guarded = [];
    public function content() :BelongsTo{
        return $this->belongsTo(Content::class);
    }

    public function order() :BelongsTo{
        return $this->belongsTo(Order::class);
    }
}
