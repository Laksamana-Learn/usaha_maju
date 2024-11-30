<?php

namespace App\Models;

use App\Models\Modal;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

class Detail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'nama_product',
        'tanggal',
        'modal',
        'terjual',
        'harga_jual',
        'untung'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Apply your formula here
            $model->untung = ($model->terjual * $model->harga_jual) - ($model->terjual * $model->modal);

            // Mengubah Stok di table Product
            $product = Product::where('product_id', $model->product_id)->first();
            if ($product) {
                $product->stok -= $model->terjual;
                // Ensure stock doesn't go negative
                if ($product->stok < 0) {
                    throw new \Exception("Stok tidak cukup.");
                }
                $product->save(); // Save the product after adjusting stock
            } else {
                throw new \Exception("Produk tidak ditemukan.");
            }
        });

        static::updating(function ($model) {
            // Reapply your formula if needed
            $model->untung = ($model->terjual * $model->harga_jual) - ($model->terjual * $model->modal);

            $originalTerjual = $model->getOriginal('terjual');
            if ($model->terjual != $originalTerjual) {
                $product = Product::where('product_id', $model->product_id)->first();
                if ($product) {
                    $product->stok += $originalTerjual; // Restore original sold amount
                    $product->stok -= $model->terjual; // Deduct new sold amount
                    if ($product->stok < 0) {
                        throw new \Exception("Stok tidak cukup.");
                    }
                    $product->save();
                } else {
                    throw new \Exception("Produk tidak ditemukan saat updating.");
                }
            }                                
        });
    }
    
    public function product(): BelongsTo
    {   
        return $this -> belongsTo(Product::class, 'product_id', 'product_id');
    }


    
    public function modal(): BelongsTo
    {   
        return $this -> belongsTo(Modal::class, 'modal', 'modal');
    }
}
