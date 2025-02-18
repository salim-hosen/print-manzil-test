<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index() {
        $products = Product::paginate(15);
        return view('merchant.product.index', compact('products'));
    }

    public function create() {
        $stores = Store::all();
        $categories = Category::all();
        return view('merchant.product.create', compact('stores', 'categories'));
    }

    public function store(Request $request) {

        $request->validate([
            'store' => 'required',
            'category' => 'required',
            'product_name' => 'required|max:255'
        ]);

        Product::create([
            'store_id' => $request->store,
            'category_id' => $request->category,
            'product_name' => $request->product_name,
            "slug" => Str::slug($request->product_name)
        ]);

        return redirect()->route('products.index')->with('success', "Product Created Successfully.");
    }

}
