<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;



class ProductController extends Controller
{
    public function index() : View
    {
        $products = Product::latest()->paginate(10);

    return view('products.index', compact('products'));
    }

    function productFilter(Request $request) {
        $categories = Category::all();
        $kategoriId = $request->input('kategori');
        $kategori = Category::find($kategoriId);
        $category_product = $kategori->products;

        return view('products/product_page', ['products' => $category_product, 'categories'=>$categories]);
    }
}
