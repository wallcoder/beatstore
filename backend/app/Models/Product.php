<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'image'];
    public function beat(): HasOne{
        return $this->hasOne(Beat::class);
    }

    public function content(): HasMany{
        return $this->hasMany(Content::class);
    }

    public function tag(): HasMany{
        return $this->hasMany(Tag::class);
    }
}
