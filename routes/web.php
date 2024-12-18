<?php

use App\Models\Detail;
use App\Models\Notification;
use App\Models\Product;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Route::resource('/products', \App\Http\Controllers\ProductController::class);


Route::get('/storage-link', function() {
    Artisan::call('storage:link');
    return 'Storage linked succesfully';
});

Route::get('/test', function() {

    return view('test', []);    
});

Route::get('/', function() {
    return view('home');    
});

Route::get('/product', function() {
    $products = Product::latest();
    
    if (request('search')) {
        $products = $products->where('nama', 'like', '%' . request('search') . '%');
    }

    
    return view('products/product_page', ["products"=>$products->paginate(8)->onEachSide(2)]);    
});

Route::get('/detail-product/{product:slug}', function(Product $product) {
    return view('products/detail_product', ['product'=>$product]);    
});

Route::get('/login', function() {
    return view('login');    
});

Route::get('/register', function() {
    return view('register');    
});

Route::get('/about-us', function() {
    return view('aboutus');    
});