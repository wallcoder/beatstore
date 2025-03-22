<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class License extends Model
{
    protected $fillable = ['title', 'description', 'price', 'version'];

    public function content(): HasMany{
        return $this->hasMany(Content::class);
    }

    public function licenseDetail(): HasOne{
        return $this->hasOne(LicenseDetail::class);
    }
}
