<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerDetail extends Model
{
 protected $fillable = [
    'user_id', 'phone','address1','address2','city','state','zipcode','country_code'

 ];

 public function user(): BelongsTo
 {
    return $this->belongsTo(User::class);
 }

 public function country(): BelongsTo
 {
    return $this->belongsTo(Country::class);
 }

    //
}
