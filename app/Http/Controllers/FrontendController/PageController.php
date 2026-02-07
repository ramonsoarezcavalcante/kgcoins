<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected function safeView(string $view, array $data = [])
    {
        if (!view()->exists($view)) {
            abort(404, 'Page not found');
        }

        return view($view, $data);
    }

    // About 
    public function about()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.about', compact('bodyClass'));
    }

    // Shop
    public function shop()
    {
        try {
            $bodyClass = '';
            return $this->safeView('frontend.pages.shop', compact('bodyClass'));
        } catch (\Throwable $e) {
            report($e);
            abort(500, 'Something went wrong');
        }
    }

    // Shop Details
    public function shopDetails()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.shopDetails', compact('bodyClass'));
    }

    // Shop Details Two
    public function shopDetailsTwo()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.shopDetailsTwo', compact('bodyClass'));
    }

    // Cart
    public function cart()
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized access');
        }

        $bodyClass = '';
        return $this->safeView('frontend.pages.cart', compact('bodyClass'));
    }

    // Wishlist
    public function wishlist()
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized access');
        }

        $bodyClass = '';
        return $this->safeView('frontend.pages.wishlist', compact('bodyClass'));
    }

    // Checkout
    public function checkout()
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized access');
        }

        $bodyClass = '';
        return $this->safeView('frontend.pages.checkout', compact('bodyClass'));
    }

    // Become Seller
    public function becomeSeller()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.becomeSeller', compact('bodyClass'));
    }

    // Account
    public function account()
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized access');
        }
        
        $bodyClass = '';
        return $this->safeView('frontend.pages.account', compact('bodyClass'));
    }

    // Vendors
    public function vendor()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.vendor', compact('bodyClass'));
    }

    // Vendor Details
    public function vendorDetails()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.vendorDetails', compact('bodyClass'));
    }

    // Vendor Two
    public function vendorTwo()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.vendorTwo', compact('bodyClass'));
    }

    // Vendor Two Details
    public function vendorTwoDetails()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.vendorTwoDetails', compact('bodyClass'));
    }

    // Blog
    public function blog()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.blog', compact('bodyClass'));
    }

    // Blog Details
    public function blogDetails()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.blogDetails', compact('bodyClass'));
    }

    // Contact 
    public function contact()
    {
        $bodyClass = '';
        return $this->safeView('frontend.pages.contact', compact('bodyClass'));
    }
}
