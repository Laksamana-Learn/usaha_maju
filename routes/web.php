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
    return view('products/product_page');    
});

Route::get('/detail-product', function() {
    return view('products/detail_product');    
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