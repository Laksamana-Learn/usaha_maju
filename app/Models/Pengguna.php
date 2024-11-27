<?php

namespace App\Models;

use App\Models\Favorite;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengguna extends Model
{
    Use HasFactory, SoftDeletes;

    public function favorite(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }
}
