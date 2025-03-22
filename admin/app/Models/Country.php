<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    //
    protected $fillable = ['code', 'name', 'states'];

    public function customerDetail(): HasMany{
        return $this->hasMany(CustomerDetail::class);
    }

    public function orderDetail(): HasMany{
        return $this->hasMany(OrderDetail::class);
    }
}
