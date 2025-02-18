<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::paginate(15);
        return view('merchant.category.index', compact('categories'));
    }

    public function create() {
        $stores = Store::all();
        return view('merchant.category.create', compact('stores'));
    }

    public function store(Request $request) {

        $request->validate([
            'store' => 'required|max:100',
            'category_name' => 'required|max:100'
        ]);
        Category::create([
            "store_id" => $request->store,
            "category_name" => $request->category_name,
            "slug" => Str::slug($request->category_name)
        ]);
        return redirect()->route('categories.index')->with('success', "Category Created Successfully.");
    }
}
