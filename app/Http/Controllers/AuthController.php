<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (\Auth::attempt($credentials)) {
            $authUser = auth()->user();
            return redirect($authUser->user_type == User::USER_TYPE_ADMIN ? '/admin/dashboard' : '/stores');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegister(){
        return view('auth.register');
    }

    public function register(Request $request) {
        $data = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'shop_name' => 'required|max:50',
            'password' => 'required|max:32'
        ]);

        $data['password'] = bcrypt($data['password']);
        $data['user_type'] = User::USER_TYPE_MERCHANT;
        $user = User::create($data);

        Store::create([
            "store_name" => $request->shop_name,
            "slug" => Str::slug($request->shop_name),
            "user_id" => $user->id
        ]);

        return redirect()->back()->with("success", "Registration Successful.");
    }

    public function logout(Request $request)
    {
        \Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
