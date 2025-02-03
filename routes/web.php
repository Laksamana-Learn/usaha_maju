<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Notification;
use App\Models\Pengguna;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\alert;
use function Laravel\Prompts\select;

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
})->name('home');

Route::get('/product', function(Category $kategori, Request $request) {
    $categories = Category::all();
    $products = Product::latest();
    $category_product = false;

    if (request('kategori')){
        $kategoriId = $request->input('kategori');
        $kategori = Category::find($kategoriId);
        $category_product = $kategori->products()->paginate(8)->onEachSide(2);
    }


    if (request('search')) {
        $products = $products->where('nama', 'like', '%' . request('search') . '%');
    }

    
    return view('products/product_page', ["products"=>$products->paginate(8)->onEachSide(2), "categories"=>$categories, 'category_products' => $category_product]);    
});

// Route::get('/detail-product/{product:slug}', function(Product $product) {
//     return view('products/detail_product', ['product'=>$product]);    
// });

Route::get('/login', [AuthController::class, 'viewLogin'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin']) -> name('login.submit');

Route::get('/register', [AuthController::class, 'viewRegister'])->name('register.tampil');
Route::post('/register/submit', [AuthController::class, 'submitRegister'])->name('register.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/about-us', function() {
    return view('aboutus');    
})->name('about-us');


// MIDDLEWARE BERFUNSI UNTUK MEMPROTEKSI ROUTE AGAR HANYA YANG SUDAH LOGIN DAPAT MENGAKSESNYA
Route::middleware("auth:pengguna")->group(function () {
    Route::get('/shop', [AuthController::class, 'shop']) -> name('shop');
    
});
