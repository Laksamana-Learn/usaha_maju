<?php

namespace App\Models;

use App\Models\Pengguna;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favorite extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "user_id",
        "product_id",
    ];
    
    
    public function product(): BelongsTo
    {   
        return $this -> belongsTo(Product::class, 'product_id', 'product_id');
    }
    
    public function user(): BelongsTo
    {   
        return $this -> belongsTo(Pengguna::class, 'user_id', 'id');
    }
}
