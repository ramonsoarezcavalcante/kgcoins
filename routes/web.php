<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController\HomeController;
use App\Http\Controllers\FrontendController\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes (CSRF Protected)
|--------------------------------------------------------------------------
| All routes are protected by Laravel's "web" middleware
| which includes CSRF protection, sessions, and cookies.
*/

Route::middleware(['web'])->group(function () {

    // Auth routes
    Auth::routes();

    /*
    |--------------------------------------------------------------------------
    | Home Pages (Public)
    |--------------------------------------------------------------------------
    */
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'indexOne')->name('home');
        Route::get('index-two', 'indexTwo')->name('indexTwo');
        Route::get('index-three', 'indexThree')->name('indexThree');
    });

    /*
    |--------------------------------------------------------------------------
    | Public Pages (No Authentication Required)
    |--------------------------------------------------------------------------
    */
    Route::controller(PageController::class)->group(function () {

        // Shop
        Route::get('shop', 'shop')->name('shop');
        Route::get('shop-details', 'shopDetails')->name('shop.details');
        Route::get('shop-details-two', 'shopDetailsTwo')->name('shop.details.two');

        // Vendors
        Route::get('vendor', 'vendor')->name('vendor');
        Route::get('vendor-details', 'vendorDetails')->name('vendor.details');
        Route::get('vendor-two', 'vendorTwo')->name('vendor.two');
        Route::get('vendor-two-details', 'vendorTwoDetails')->name('vendor.two.details');

        // Blog
        Route::get('blog', 'blog')->name('blog');
        Route::get('blog-details', 'blogDetails')->name('blog.details');

        // Contact
        Route::get('contact', 'contact')->name('contact');
        Route::get('become-seller', 'becomeSeller')->name('become.seller');
    });

    /*
    |--------------------------------------------------------------------------
    | E-Commerce Routes (Authentication Required)
    |--------------------------------------------------------------------------
    */
    Route::middleware(['auth'])->group(function () {
        Route::get('cart', [PageController::class, 'cart'])->name('cart');
        Route::get('wishlist', [PageController::class, 'wishlist'])->name('wishlist');
        Route::get('checkout', [PageController::class, 'checkout'])->name('checkout');
        Route::get('account', [PageController::class, 'account'])->name('account');
    });
});

