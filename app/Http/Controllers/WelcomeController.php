<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function showTreeData($subdomain){

        $store = Store::where("slug", $subdomain)->firstOrFail();
        $categories = $store->categories()->with('products')->get();

        return view('tree-data', compact('store', 'categories'));
    }


    // public function welcome(){
    //     $stores = Store::paginate(15);
    //     return view('welcome', compact('stores'));
    // }

    // public function showCategories($slug){

    //     $categories = Category::whereHas('store', function($q) use ($slug) {
    //         $q->where('slug', $slug);
    //     })->paginate(15);
    //     return view('categories', compact('categories'));
    // }

    // public function showProducts($slug){
    //     $products = Product::whereHas('category', function($q) use ($slug) {
    //         $q->where('slug', $slug);
    //     })->paginate(15);
    //     return view('products', compact('products'));
    // }
}
