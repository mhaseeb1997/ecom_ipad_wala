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
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'admin'], function () {
        Route::resource('product-category', ProductCategoryController::class);
        Route::resource('product', ProductController::class);
    });
});
require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('front.index');
});

Route::get('about-us', function () {
    return view('front.about-us');
})->name('front-about-us');

Route::get('product', [FrontendController::class, 'product'])->name('front-product');
Route::get('product/detail/{slug}', [FrontendController::class, 'product_detail'])->name('front-product-detail');


//Route::get('product', function () {
//    return view('front.product');
//})->name('front-product');

//Route::get('product-detail', function () {
//    return view('front.product-detail');
//})->name('front-product-detail');
