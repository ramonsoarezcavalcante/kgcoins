<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController\HomeController;
use App\Http\Controllers\FrontendController\PageController;
use App\Http\Controllers\LoyaltyController;
use App\Http\Controllers\Admin\AdminLoyaltyController;

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

        /*
        |--------------------------------------------------------------------------
        | Loyalty & Fidelity Routes
        |--------------------------------------------------------------------------
        */
        Route::prefix('loyalty')->name('loyalty.')->controller(LoyaltyController::class)->group(function () {
            Route::get('dashboard', 'showDashboard')->name('dashboard');
            Route::get('transactions', 'getTransactionHistory')->name('transactions');
            Route::get('rewards', 'showRewards')->name('rewards');
            Route::post('claim-reward', 'claimReward')->name('claim');
            Route::get('referral', 'showReferral')->name('referral');
            Route::get('benefits', 'showBenefits')->name('benefits');
            Route::get('export', 'exportData')->name('export');
        });

        /*
        |--------------------------------------------------------------------------
        | Admin Loyalty Management Routes
        |--------------------------------------------------------------------------
        */
        Route::prefix('admin/loyalty')->name('admin.loyalty.')->controller(AdminLoyaltyController::class)->group(function () {
            Route::get('dashboard', 'dashboard')->name('dashboard');

            // Tiers Management
            Route::prefix('tiers')->name('tiers.')->group(function () {
                Route::get('/', 'indexTiers')->name('index');
                Route::get('create', 'createTier')->name('create');
                Route::post('/', 'storeTier')->name('store');
                Route::get('{tier}/edit', 'editTier')->name('edit');
                Route::put('{tier}', 'updateTier')->name('update');
                Route::delete('{tier}', 'destroyTier')->name('destroy');
            });

            // Badges Management
            Route::prefix('badges')->name('badges.')->group(function () {
                Route::get('/', 'indexBadges')->name('index');
                Route::get('create', 'createBadge')->name('create');
                Route::post('/', 'storeBadge')->name('store');
                Route::get('{badge}/edit', 'editBadge')->name('edit');
                Route::put('{badge}', 'updateBadge')->name('update');
                Route::delete('{badge}', 'destroyBadge')->name('destroy');
            });

            // Points Management
            Route::prefix('points')->name('points.')->group(function () {
                Route::get('manage', 'managePoints')->name('manage');
                Route::put('user/{user}', 'updateUserPoints')->name('update');
                Route::get('transactions', 'viewTransactions')->name('transactions');
            });

            // Referrals Management
            Route::prefix('referrals')->name('referrals.')->group(function () {
                Route::get('/', 'indexReferrals')->name('index');
                Route::get('create', 'createReferral')->name('create');
                Route::post('/', 'storeReferral')->name('store');
                Route::get('{referral}/edit', 'editReferral')->name('edit');
                Route::put('{referral}', 'updateReferral')->name('update');
                Route::post('{referral}/approve', 'approveReferral')->name('approve');
                Route::post('{referral}/pay', 'payReferral')->name('pay');
                Route::delete('{referral}', 'destroyReferral')->name('destroy');
            });

            // Reports
            Route::get('export', 'exportReport')->name('export');

            // Settings
            Route::post('settings', 'updateSettings')->name('settings.update');
        });
    });
});

