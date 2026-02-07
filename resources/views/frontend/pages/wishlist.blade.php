@extends('frontend.layouts.app')
@section('title', 'Wishlist')
@section('content')
    <!-- ============================ header area ============================ -->
    @include('frontend.includes.headers.headerTwo')
    <!-- ============================ header area end ============================ -->

    <!-- ========================= Breadcrumb Start =============================== -->
    <div class="breadcrumb mb-0 py-26 bg-main-two-50">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <h6 class="mb-0">My Wishlist</h6>
                <ul class="flex-align gap-8 flex-wrap">
                    <li class="text-sm">
                        <a href="{{route('home')}}" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                            <i class="ph ph-house"></i>
                            Home
                        </a>
                    </li>
                    <li class="flex-align">
                        <i class="ph ph-caret-right"></i>
                    </li>
                    <li class="text-sm text-main-600">Wishlist</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ========================= Breadcrumb End =============================== -->

    <!-- ================================ Cart Section Start ================================ -->
    <section class="cart py-80">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="cart-table border border-gray-100 rounded-8">
                        <div class="overflow-x-auto scroll-sm scroll-sm-horizontal">
                            <table class="table rounded-8 overflow-hidden">
                                <thead>
                                    <tr class="border-bottom border-neutral-100">
                                        <th class="h6 mb-0 text-lg fw-bold px-40 py-32 border-end border-neutral-100">
                                            Delete
                                        </th>
                                        <th class="h6 mb-0 text-lg fw-bold px-40 py-32 border-end border-neutral-100">
                                            Product Name
                                        </th>
                                        <th class="h6 mb-0 text-lg fw-bold px-40 py-32 border-end border-neutral-100">
                                            Unit Price
                                        </th>
                                        <th class="h6 mb-0 text-lg fw-bold px-40 py-32 border-end border-neutral-100">
                                            Stock Status
                                        </th>
                                        <th class="h6 mb-0 text-lg fw-bold px-40 py-32"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <button type="button"
                                                class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                                <i class="ph ph-x-circle text-2xl d-flex"></i>
                                                Remove
                                            </button>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <div class="table-product d-flex align-items-center gap-24">
                                                <a href="{{route('shop.details.two')}}"
                                                    class="table-product__thumb border border-gray-100 rounded-8 flex-center">
                                                    <img src="{{asset('assets/images/thumbs/product-two-img1.png')}}" alt="img" />
                                                </a>
                                                <div class="table-product__content text-start">
                                                    <h6 class="title text-lg fw-semibold mb-8">
                                                        <a href="{{route('shop.details')}}" class="link text-line-2"
                                                            tabindex="0">Taylor Farms
                                                            Broccoli Florets
                                                            Vegetables</a>
                                                    </h6>

                                                    <div class="flex-align gap-16 mb-16">
                                                        <div class="flex-align gap-6">
                                                            <span class="text-md fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-md fw-semibold text-gray-900">4.8</span>
                                                        </div>
                                                        <span class="text-sm fw-medium text-gray-200">|</span>
                                                        <span class="text-neutral-600 text-sm">128
                                                            Reviews</span>
                                                    </div>

                                                    <div class="flex-align gap-16">
                                                        <a href="{{route('cart')}}"
                                                            class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                            Camera
                                                        </a>
                                                        <a href="{{route('cart')}}"
                                                            class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                            Videos
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <span class="text-lg h6 mb-0 fw-semibold">In Stock</span>
                                        </td>
                                        <td class="px-40 py-32">
                                            <a href="{{route('cart')}}" class="btn btn-main-two rounded-8 px-64">
                                                Add To Cart
                                                <i class="ph ph-shopping-cart"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <button type="button"
                                                class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                                <i class="ph ph-x-circle text-2xl d-flex"></i>
                                                Remove
                                            </button>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <div class="table-product d-flex align-items-center gap-24">
                                                <a href="{{route('shop.details.two')}}"
                                                    class="table-product__thumb border border-gray-100 rounded-8 flex-center">
                                                    <img src="{{asset('assets/images/thumbs/product-two-img3.png')}}" alt="img" />
                                                </a>
                                                <div class="table-product__content text-start">
                                                    <h6 class="title text-lg fw-semibold mb-8">
                                                        <a href="{{route('shop.details')}}" class="link text-line-2"
                                                            tabindex="0">Smart Phone
                                                            With Intel
                                                            Celeron</a>
                                                    </h6>

                                                    <div class="flex-align gap-16 mb-16">
                                                        <div class="flex-align gap-6">
                                                            <span class="text-md fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-md fw-semibold text-gray-900">4.8</span>
                                                        </div>
                                                        <span class="text-sm fw-medium text-gray-200">|</span>
                                                        <span class="text-neutral-600 text-sm">128
                                                            Reviews</span>
                                                    </div>

                                                    <div class="flex-align gap-16">
                                                        <a href="{{route('cart')}}"
                                                            class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                            Camera
                                                        </a>
                                                        <a href="{{route('cart')}}"
                                                            class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                            Videos
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <span class="text-lg h6 mb-0 fw-semibold">In Stock</span>
                                        </td>
                                        <td class="px-40 py-32">
                                            <a href="{{route('cart')}}" class="btn btn-main-two rounded-8 px-64">
                                                Add To Cart
                                                <i class="ph ph-shopping-cart"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <button type="button"
                                                class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                                <i class="ph ph-x-circle text-2xl d-flex"></i>
                                                Remove
                                            </button>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <div class="table-product d-flex align-items-center gap-24">
                                                <a href="{{route('shop.details.two')}}"
                                                    class="table-product__thumb border border-gray-100 rounded-8 flex-center">
                                                    <img src="{{asset('assets/images/thumbs/product-two-img14.png')}}"
                                                        alt="img" />
                                                </a>
                                                <div class="table-product__content text-start">
                                                    <h6 class="title text-lg fw-semibold mb-8">
                                                        <a href="{{route('shop.details')}}" class="link text-line-2"
                                                            tabindex="0">HP Chromebook
                                                            With Intel
                                                            Celeron</a>
                                                    </h6>

                                                    <div class="flex-align gap-16 mb-16">
                                                        <div class="flex-align gap-6">
                                                            <span class="text-md fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-md fw-semibold text-gray-900">4.8</span>
                                                        </div>
                                                        <span class="text-sm fw-medium text-gray-200">|</span>
                                                        <span class="text-neutral-600 text-sm">128
                                                            Reviews</span>
                                                    </div>

                                                    <div class="flex-align gap-16">
                                                        <a href="{{route('cart')}}"
                                                            class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                            Camera
                                                        </a>
                                                        <a href="{{route('cart')}}"
                                                            class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                            Videos
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <span class="text-lg h6 mb-0 fw-semibold">In Stock</span>
                                        </td>
                                        <td class="px-40 py-32">
                                            <a href="{{route('cart')}}" class="btn btn-main-two rounded-8 px-64">
                                                Add To Cart
                                                <i class="ph ph-shopping-cart"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <button type="button"
                                                class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                                <i class="ph ph-x-circle text-2xl d-flex"></i>
                                                Remove
                                            </button>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <div class="table-product d-flex align-items-center gap-24">
                                                <a href="{{route('shop.details.two')}}"
                                                    class="table-product__thumb border border-gray-100 rounded-8 flex-center">
                                                    <img src="{{asset('assets/images/thumbs/product-two-img2.png')}}" alt="img" />
                                                </a>
                                                <div class="table-product__content text-start">
                                                    <h6 class="title text-lg fw-semibold mb-8">
                                                        <a href="{{route('shop.details')}}" class="link text-line-2"
                                                            tabindex="0">Smart watch
                                                            With Intel
                                                            Celeron</a>
                                                    </h6>

                                                    <div class="flex-align gap-16 mb-16">
                                                        <div class="flex-align gap-6">
                                                            <span class="text-md fw-medium text-warning-600 d-flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-md fw-semibold text-gray-900">4.8</span>
                                                        </div>
                                                        <span class="text-sm fw-medium text-gray-200">|</span>
                                                        <span class="text-neutral-600 text-sm">128
                                                            Reviews</span>
                                                    </div>

                                                    <div class="flex-align gap-16">
                                                        <a href="{{route('cart')}}"
                                                            class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                            Camera
                                                        </a>
                                                        <a href="{{route('cart')}}"
                                                            class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                            Videos
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                        </td>
                                        <td class="px-40 py-32 border-end border-neutral-100">
                                            <span class="text-lg h6 mb-0 fw-semibold">In Stock</span>
                                        </td>
                                        <td class="px-40 py-32">
                                            <a href="{{route('cart')}}" class="btn btn-main-two rounded-8 px-64">
                                                Add To Cart
                                                <i class="ph ph-shopping-cart"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================ Cart Section End ================================ -->

    <!-- ========================== Shipping Section Start ============================ -->
    <section class="shipping mb-24" id="shipping">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-car-profile"></i></span>
                        <div class="">
                            <h6 class="mb-0">Free Shipping</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-hand-heart"></i></span>
                        <div class="">
                            <h6 class="mb-0">100% Satisfaction</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-credit-card"></i></span>
                        <div class="">
                            <h6 class="mb-0">Secure Payments</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-chats"></i></span>
                        <div class="">
                            <h6 class="mb-0">24/7 Support</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Shipping Section End ============================ -->

    <!-- ========================== footer area ============================ -->
    @include('frontend.includes.footers.footerTwo')
    <!-- ========================== footer area end ============================ -->
@endsection
