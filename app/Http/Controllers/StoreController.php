<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function index() {
        $stores = Store::where('user_id', auth()->user()->id)->paginate(15);
        return view('merchant.store.index', compact('stores'));
    }

    public function create() {
        return view('merchant.store.create');
    }

    public function store(Request $request) {

        $request->validate(['store_name' => 'required|max:100']);

        Store::create([
            "store_name" => $request->store_name,
            "slug" => Str::slug($request->store_name),
            "user_id" => auth()->user()->id
        ]);
        return redirect()->route('stores.index')->with('success', "Store Created Successfully.");
    }
}
