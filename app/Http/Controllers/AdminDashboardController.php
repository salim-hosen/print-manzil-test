<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function showMerchants(){
        $merchants = User::where('user_type', User::USER_TYPE_MERCHANT)->paginate(15);
        return view('admin.merchant_list', compact('merchants'));
    }
}
