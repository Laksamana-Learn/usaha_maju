<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Modal;
use App\Models\Detail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Product extends Model
{   
    use HasFactory, SoftDeletes; 

    protected $fillable = [
        'product_id',
        'nama',
        'category_id',
        'slug',
        'deskripsi',
        'harga',
        'stok',
        'foto',
    ];
    //

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->nama);
        });

        static::updating(function ($product) {
            $product->slug = Str::slug($product->nama);
        });
    }


    public function modal(): HasMany
    {
        return $this ->hasMany(Modal::class);
    }

    public function detail(): HasMany
    {
        return $this ->hasMany(Detail::class);
    }
    
    public function category(): BelongsTo
    {   
        return $this -> belongsTo(Category::class, 'category_id', 'id');
    }

    public function setNameAttribute($value) {
        $this -> attributes['nama'] = $value;
        $this -> attributes['slug'] = Str::slug($value);

    }
    
}

