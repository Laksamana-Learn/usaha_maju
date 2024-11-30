<?php

use App\Models\Detail;
use App\Models\Notification;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

// Route::resource('/products', \App\Http\Controllers\ProductController::class);


Route::get('/test', function() {
    $detail = Detail::all();

    return view('test', ['detail' => $detail]);    
});

Route::get('/', function() {
    return view('home');    
});

Route::get('/product', function() {

    $products = Product::paginate(8)->onEachSide(2);
    
    return view('products/product_page', ["products"=>$products]);    
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