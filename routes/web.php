<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::group(['prefix' => 'admin/1122/'], function () {
        Route::resource('product-category', ProductCategoryController::class);
        Route::resource('product', ProductController::class);
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });
});
require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('about-us', function () {
    return view('front.about-us');
})->name('front-about-us');

Route::get('product', [FrontendController::class, 'product'])->name('front-product');
Route::get('product/detail/{slug}', [FrontendController::class, 'product_detail'])->name('front-product-detail');
Route::get('checkout', [FrontendController::class, 'checkout'])->name('product_checkout');
Route::post('order-placed', [FrontendController::class, 'order_placed'])->name('order_placed');
Route::get('login', [FrontendController::class, 'auth'])->name('front-auth');
Route::post('user/register', [FrontendController::class, 'register'])->name('front-register');
Route::post('user/login', [FrontendController::class, 'login'])->name('front-login');
Route::get('user/dashboard', [FrontendController::class, 'dashboard'])->name('user_dashboard');



