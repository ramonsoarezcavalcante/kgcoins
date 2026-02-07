@extends('frontend.layouts.app')
@section('title', 'Vendor Two Details')
@section('content')
    <!-- ============================ header area ============================ -->
    @include('frontend.includes.headers.headerTwo')
    <!-- ============================ header area end ============================ -->

    <!-- ========================= Breadcrumb Start =============================== -->
    <div class="breadcrumb mb-0 py-26 bg-main-two-50">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <h6 class="mb-0">Vendor Details</h6>
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
                    <li class="text-sm text-main-600">Vendor Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ========================= Breadcrumb End =============================== -->

    <!-- ============================== Vendor Two Details Start =============================== -->
    <section class="vendor-two-details py-80">
        <div class="container container-lg">
            <div class="vendor-two-details-wrapper d-flex flex-wrap align-items-start gap-24">
                <!-- Shop Sidebar Start ============================ -->
                <div class="shop-sidebar">
                    <button type="button"
                        class="shop-sidebar__close d-lg-none d-flex w-32 h-32 flex-center border border-gray-100 rounded-circle hover-bg-main-600 bg-main-600 position-absolute inset-inline-end-0 me-10 mt-8 text-white border-main-600">
                        <i class="ph ph-x"></i>
                    </button>
                    <div class="d-flex flex-column gap-12 px-lg-0 px-3 py-lg-0 py-4">
                        <div class="bg-neutral-600 rounded-8 p-24">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="w-80 h-80 flex-center bg-white rounded-8 flex-shrink-0">
                                    <img src="{{asset('assets/images/thumbs/vendors-two-icon1.png')}}" alt="img" />
                                </span>
                                <div class="d-flex flex-column gap-24">
                                    <button type="button"
                                        class="text-uppercase group border border-white px-16 py-8 rounded-pill text-white text-sm hover-bg-main-two-600 hover-text-white hover-border-main-two-600 transition-2 flex-center gap-8 w-100">
                                        FOLLOW
                                        <span class="text-xl d-flex text-main-two-600 group-item-white transition-2">
                                            <i class="ph ph-storefront"></i></span>
                                    </button>
                                    <button type="button"
                                        class="text-uppercase group border border-white px-16 py-8 rounded-pill text-white text-sm hover-bg-main-two-600 hover-text-white hover-border-main-two-600 transition-2 flex-center gap-8 w-100">
                                        Chat Now
                                        <span class="text-xl d-flex text-main-two-600 group-item-white transition-2">
                                            <i class="ph ph-storefront"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-32">
                                <h6 class="text-white fw-semibold mb-12">
                                    <a href="{{route('vendor.two.details')}}" class="">Baishakhi Plus</a>
                                </h6>
                                <span class="text-xs text-white mb-12">480589 Followers</span>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-white">4.8</span>
                                    <span class="text-xs fw-medium text-white">(12K)</span>
                                </div>
                            </div>
                            <div class="mt-32 d-flex flex-column gap-8">
                                <a href="javascript:void(0)"
                                    class="px-16 py-12 border text-white border-neutral-500 w-100 rounded-4 hover-bg-main-600 hover-border-main-600">About
                                    Store</a>
                                <a href="javascript:void(0)"
                                    class="px-16 py-12 border text-white border-neutral-500 w-100 rounded-4 hover-bg-main-600 hover-border-main-600">Products</a>
                                <a href="javascript:void(0)"
                                    class="px-16 py-12 border text-white border-neutral-500 w-100 rounded-4 hover-bg-main-600 hover-border-main-600">Return
                                    Policy</a>
                                <a href="javascript:void(0)"
                                    class="px-16 py-12 border text-white border-neutral-500 w-100 rounded-4 hover-bg-main-600 hover-border-main-600">Shipping
                                    Policy</a>
                                <a href="javascript:void(0)"
                                    class="px-16 py-12 border text-white border-neutral-500 w-100 rounded-4 hover-bg-main-600 hover-border-main-600">Contact
                                    Seller</a>
                            </div>
                        </div>
                        <div class="border border-gray-50 rounded-8 p-24">
                            <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">
                                Product Category
                            </h6>
                            <ul class="max-h-540 overflow-y-auto scroll-sm">
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Mobile &
                                        Accessories (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Laptop
                                        (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Electronics
                                        (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Smart Watch
                                        (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Storage
                                        (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Portable
                                        Devices (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Action
                                        Camera (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Smart
                                        Gadget (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Monitor
                                        (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Smart TV
                                        (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Camera
                                        (12)</a>
                                </li>
                                <li class="mb-24">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Monitor
                                        Stand (12)</a>
                                </li>
                                <li class="mb-0">
                                    <a href="{{route('shop.details.two')}}" class="text-gray-900 hover-text-main-600">Headphone
                                        (12)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-sidebar border border-gray-100 rounded-8 p-32 mb-40">
                            <h6 class="text-xl mb-32 pb-32 border-bottom border-gray-100">
                                Best Sell Products
                            </h6>
                            <div class="d-flex flex-column gap-24">
                                <div class="d-flex align-items-center flex-sm-nowrap flex-wrap gap-16">
                                    <a href="{{route('blog.details')}}"
                                        class="w-100 h-100 rounded-4 overflow-hidden w-76 h-76 flex-shrink-0 bg-color-three flex-center">
                                        <img src="{{asset('assets/images/thumbs/best-selling-img1.png')}}" alt="img"
                                            class="" />
                                    </a>
                                    <div class="flex-grow-1">
                                        <h6 class="text-lg mb-8 fw-medium">
                                            <a href="{{route('shop.details.two')}}" class="text-line-3">Man Fashion Shoe</a>
                                        </h6>
                                        <div class="flex-align gap-6">
                                            <div class="flex-align gap-4">
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs fw-medium text-neutral-500">4.8</span>
                                            <span class="text-xs fw-medium text-neutral-500">(12K)</span>
                                        </div>
                                        <h6 class="text-md mb-0 mt-4">
                                            $25
                                        </h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-sm-nowrap flex-wrap gap-16">
                                    <a href="{{route('blog.details')}}"
                                        class="w-100 h-100 rounded-4 overflow-hidden w-76 h-76 flex-shrink-0 bg-color-three flex-center">
                                        <img src="{{asset('assets/images/thumbs/best-selling-img2.png')}}" alt="img"
                                            class="" />
                                    </a>
                                    <div class="flex-grow-1">
                                        <h6 class="text-lg mb-8 fw-medium">
                                            <a href="{{route('shop.details.two')}}" class="text-line-3">Woman Fashion Bag</a>
                                        </h6>
                                        <div class="flex-align gap-6">
                                            <div class="flex-align gap-4">
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs fw-medium text-neutral-500">4.8</span>
                                            <span class="text-xs fw-medium text-neutral-500">(12K)</span>
                                        </div>
                                        <h6 class="text-md mb-0 mt-4">
                                            $25
                                        </h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-sm-nowrap flex-wrap gap-16">
                                    <a href="{{route('blog.details')}}"
                                        class="w-100 h-100 rounded-4 overflow-hidden w-76 h-76 flex-shrink-0 bg-color-three flex-center">
                                        <img src="{{asset('assets/images/thumbs/best-selling-img3.png')}}" alt="img"
                                            class="" />
                                    </a>
                                    <div class="flex-grow-1">
                                        <h6 class="text-lg mb-8 fw-medium">
                                            <a href="{{route('shop.details.two')}}" class="text-line-3">Woman Fashion Tops</a>
                                        </h6>
                                        <div class="flex-align gap-6">
                                            <div class="flex-align gap-4">
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs fw-medium text-neutral-500">4.8</span>
                                            <span class="text-xs fw-medium text-neutral-500">(12K)</span>
                                        </div>
                                        <h6 class="text-md mb-0 mt-4">
                                            $25
                                        </h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-sm-nowrap flex-wrap gap-16">
                                    <a href="{{route('blog.details')}}"
                                        class="w-100 h-100 rounded-4 overflow-hidden w-76 h-76 flex-shrink-0 bg-color-three flex-center">
                                        <img src="{{asset('assets/images/thumbs/best-selling-img4.png')}}" alt="img"
                                            class="" />
                                    </a>
                                    <div class="flex-grow-1">
                                        <h6 class="text-lg mb-8 fw-medium">
                                            <a href="{{route('shop.details.two')}}" class="text-line-3">Woman Fashion Hat</a>
                                        </h6>
                                        <div class="flex-align gap-6">
                                            <div class="flex-align gap-4">
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs fw-medium text-neutral-500">4.8</span>
                                            <span class="text-xs fw-medium text-neutral-500">(12K)</span>
                                        </div>
                                        <h6 class="text-md mb-0 mt-4">
                                            $25
                                        </h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-sm-nowrap flex-wrap gap-16">
                                    <a href="{{route('blog.details')}}"
                                        class="w-100 h-100 rounded-4 overflow-hidden w-76 h-76 flex-shrink-0 bg-color-three flex-center">
                                        <img src="{{asset('assets/images/thumbs/best-selling-img5.png')}}" alt="img"
                                            class="" />
                                    </a>
                                    <div class="flex-grow-1">
                                        <h6 class="text-lg mb-8 fw-medium">
                                            <a href="{{route('shop.details.two')}}" class="text-line-3">Woman Fashion</a>
                                        </h6>
                                        <div class="flex-align gap-6">
                                            <div class="flex-align gap-4">
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs fw-medium text-neutral-500">4.8</span>
                                            <span class="text-xs fw-medium text-neutral-500">(12K)</span>
                                        </div>
                                        <h6 class="text-md mb-0 mt-4">
                                            $25
                                        </h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-sm-nowrap flex-wrap gap-16">
                                    <a href="{{route('blog.details')}}"
                                        class="w-100 h-100 rounded-4 overflow-hidden w-76 h-76 flex-shrink-0 bg-color-three flex-center">
                                        <img src="{{asset('assets/images/thumbs/best-selling-img6.png')}}" alt="img"
                                            class="" />
                                    </a>
                                    <div class="flex-grow-1">
                                        <h6 class="text-lg mb-8 fw-medium">
                                            <a href="{{route('shop.details.two')}}" class="text-line-3">Woman Fashion Bag</a>
                                        </h6>
                                        <div class="flex-align gap-6">
                                            <div class="flex-align gap-4">
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs fw-medium text-neutral-500">4.8</span>
                                            <span class="text-xs fw-medium text-neutral-500">(12K)</span>
                                        </div>
                                        <h6 class="text-md mb-0 mt-4">
                                            $25
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Sidebar end ============================ -->

                <div class="vendor-two-details__contents">
                    <!-- Inner Banner Start ============================ -->
                    <div class="inner-banner-two bg-img rounded-16 overflow-hidden"
                        data-background-image="{{asset('assets/images/thumbs/inner-banner-two-bg.png')}}">
                        <div class="row">
                            <div class="col-6 d-xl-block d-none"></div>
                            <div class="col-xl-6 d-xl-flex">
                                <div class="text-center py-32">
                                    <h6 class="text-white">Daily Offer</h6>
                                    <h3 class="my-32 text-white">
                                        SALE 48% OFF
                                    </h3>
                                    <a href="{{route('shop')}}"
                                        class="btn btn-main d-inline-flex align-items-center rounded-8 gap-8">
                                        Shop Now
                                        <span class="icon text-xl d-flex"><i class="ph ph-shopping-cart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Inner Banner end ============================ -->

                    <!-- Search Filter Start ============================ -->
                    <div class="d-flex align-items-center justify-content-between flex-wrap mt-40 mb-32 gap-16">
                        <form action="#" class="input-group w-100 max-w-418">
                            @csrf
                            <input type="text" class="form-control common-input rounded-start-3"
                                placeholder="Searching..." />
                            <button type="submit"
                                class="input-group-text border-0 bg-main-two-600 rounded-end-3 text-white text-2xl hover-bg-main-two-700 px-24">
                                <i class="ph ph-magnifying-glass"></i>
                            </button>
                        </form>

                        <div
                            class="d-flex align-items-center justify-content-between justify-content-sm-end gap-16 flex-grow-1">
                            <span class="text-gray-900">Showing 1-20 of 85 result</span>
                            <div class="d-flex align-items-center gap-8 d-sm-flex d-none">
                                <button type="button"
                                    class="grid-btn text-2xl d-flex w-48 h-48 border border-neutral-100 rounded-8 justify-content-center align-items-center border-main-600 text-white bg-main-600">
                                    <i class="ph ph-squares-four"></i>
                                </button>
                                <button type="button"
                                    class="list-btn text-2xl d-flex w-48 h-48 border border-neutral-100 rounded-8 justify-content-center align-items-center">
                                    <i class="ph ph-list-bullets"></i>
                                </button>
                            </div>
                            <div class="flex-align gap-8">
                                <span class="text-gray-900 flex-shrink-0 d-sm-block d-none">Sort by:</span>
                                <select
                                    class="common-input form-select rounded-pill border border-gray-100 d-inline-block ps-20 pe-36 h-48 py-0 fw-medium">
                                    <option value="1">Latest</option>
                                    <option value="1">Old</option>
                                </select>
                            </div>
                            <button type="button"
                                class="w-48 h-48 d-lg-none d-flex flex-center border border-gray-100 rounded-6 text-2xl sidebar-btn">
                                <i class="ph-bold ph-funnel"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Search Filter end ============================ -->

                    <!-- Products Start ============================ -->
                    <div class="list-grid-wrapper grid-cols-4">
                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img1.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax
                                        Mini 12 Instant Film Camera
                                        - Green</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>

                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img2.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Midnight
                                        Noir Leather Jacket</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>

                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img3.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Urban
                                        Rebel Combat Boots</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>

                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img4.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Velvet
                                        Blossom Dress</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img1.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax
                                        Mini 12 Instant Film Camera
                                        - Green</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>

                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img2.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Midnight
                                        Noir Leather Jacket</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>

                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img3.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Urban
                                        Rebel Combat Boots</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>

                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img4.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Velvet
                                        Blossom Dress</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img1.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax
                                        Mini 12 Instant Film Camera
                                        - Green</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>

                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img2.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Midnight
                                        Noir Leather Jacket</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>

                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img3.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Urban
                                        Rebel Combat Boots</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>

                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                    <img src="{{asset('assets/images/thumbs/trending-three-img4.png')}}" alt="img"
                                        class="w-auto max-w-unset" />
                                </a>
                                <div
                                    class="position-absolute inset-block-start-0 inset-inline-start-0 mt-16 ms-16 z-1 d-flex flex-column gap-8">
                                    <span
                                        class="text-main-two-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">-29%</span>
                                    <span
                                        class="text-neutral-600 w-40 h-40 d-flex justify-content-center align-items-center bg-white rounded-circle shadow-sm text-xs fw-semibold">HOT</span>
                                </div>

                                <div
                                    class="bg-white p-2 rounded-pill z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16 shadow-sm">
                                    <button type="button"
                                        class="expand-btn w-40 h-40 text-md d-flex justify-content-center align-items-center rounded-circle hover-bg-main-two-600 hover-text-white">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                    <div class="expand-icons gap-20 my-20">
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="text-neutral-600 text-xl flex-center hover-text-main-two-600">
                                            <i class="ph ph-shuffle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__content mt-16 w-100">
                                <h6 class="title text-lg fw-semibold my-16">
                                    <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Velvet
                                        Blossom Dress</a>
                                </h6>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>

                                <span
                                    class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>

                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        $28.99</span>
                                    <span class="text-heading text-md fw-semibold">$14.99
                                        <span class="text-gray-500 fw-normal">/Qty</span>
                                    </span>
                                </div>
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                    tabindex="0">
                                    Add To Cart
                                    <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Products end ============================ -->
                </div>
            </div>
        </div>
    </section>
    <!-- ============================== Vendor Two Details End =============================== -->

    <!-- ========================== Shipping Section Start ============================ -->
    <section class="shipping mb-24 mt-80" id="shipping">
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
