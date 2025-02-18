<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public Routes
// Route::get('/', [WelcomeController::class, 'welcome'])->name('page.welcome');
// Route::get('/category/{slug}', [WelcomeController::class, 'showCategories'])->name('page.categories');
// Route::get('/product/{slug}', [WelcomeController::class, 'showProducts'])->name('page.products');


Route::domain('{subdomain}.pm.test')->group(function () {
    Route::get('/', [WelcomeController::class, 'showTreeData'])->name('page.welcome');
});


Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Guest Routes login or register
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'showLogin']);
    Route::get('login', [AuthController::class, 'showLogin']);
    Route::get('register', [AuthController::class, 'showRegister']);

    Route::post('login', [AuthController::class, 'login'])->name("login");
    Route::post('register', [AuthController::class, 'register'])->name("register");
});

// Merchant Routes
Route::group(['middleware' => 'merchant'], function () {
    Route::resource('stores', StoreController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});

// Admin Routes
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', function(){ return redirect('/admin/dashboard');});
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'showMerchants']);
});

