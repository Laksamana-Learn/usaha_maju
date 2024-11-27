<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modal extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'nama_product',
        'modal',];
    
    public function product(): BelongsTo
    {   
        return $this -> belongsTo(Product::class, 'product_id', 'product_id');
    }
}
