@extends('frontend.layouts.app')
@section('title', 'Index One')
@section('content')

    <!-- ============================ header area ================================== -->
    @include('frontend.includes.headers.headerOne')
    <!-- ============================ header area end ================================== -->

    <!-- ============================ Banner Section start =============================== -->
    <div class="banner">
        <div class="container container-lg">
            <div class="banner-item rounded-24 overflow-hidden position-relative arrow-center">
                <a href="#featureSection"
                    class="scroll-down w-84 h-84 text-center flex-center bg-main-600 rounded-circle border border-5 text-white border-white position-absolute start-50 translate-middle-x bottom-0 hover-bg-main-800">
                    <span class="icon line-height-0"><i class="ph ph-caret-double-down"></i></span>
                </a>
                <img src="{{ asset('assets/images/bg/banner-bg.png') }}" alt="img"
                    class="banner-img position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1 object-fit-cover rounded-24">

                <div class="flex-align">
                    <button type="button" id="banner-prev"
                        class="slick-prev slick-arrow flex-center rounded-circle box-shadow-4xl bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                        <i class="ph ph-caret-left"></i>
                    </button>
                    <button type="button" id="banner-next"
                        class="slick-next slick-arrow flex-center rounded-circle box-shadow-4xl bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                        <i class="ph ph-caret-right"></i>
                    </button>
                </div>

                <div class="banner-slider">
                    <div class="banner-slider__item">
                        <div class="banner-slider__inner flex-between position-relative">
                            <div class="banner-item__content">
                                <span
                                    class="fw-semibold text-success-600 text-capitalize mb-8 animate-left-right animation-delay-08">Save
                                    up to 50% off on your first order</span>
                                <h2 class="banner-item__title max-w-700 mb-30 animate-left-right animation-delay-1">Daily
                                    Grocery Order and Get <span class="text-main-600">Express</span> Delivery</h2>
                                <div class="d-flex align-items-center gap-16 animate-left-right animation-delay-12">
                                    <a href="{{route('shop')}}"
                                        class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8">
                                        Explore Shop <span class="icon text-xl d-flex"><i
                                                class="ph ph-shopping-cart-simple"></i> </span>
                                    </a>
                                    <div class="d-flex align-items-end gap-8">
                                        <span class="text-heading fst-italic text-sm">Starting at</span>
                                        <h6 class="text-danger-600 mb-0"> $60.99</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-item__thumb animate-scale animation-delay-12">
                                <img src="{{ asset('assets/images/thumbs/banner-img3.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="banner-slider__item">
                        <div class="banner-slider__inner flex-between position-relative">
                            <div class="banner-item__content">
                                <span
                                    class="fw-semibold text-success-600 text-capitalize mb-8 animate-left-right animation-delay-08">Save
                                    up to 50% off on your first order</span>
                                <h2 class="banner-item__title max-w-700 mb-30 animate-left-right animation-delay-1">Daily
                                    Grocery Order and Get <span class="text-main-600">Express</span> Delivery</h2>
                                <div class="d-flex align-items-center gap-16 animate-left-right animation-delay-12">
                                    <a href="{{route('shop')}}"
                                        class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8">
                                        Explore Shop <span class="icon text-xl d-flex"><i
                                                class="ph ph-shopping-cart-simple"></i> </span>
                                    </a>
                                    <div class="d-flex align-items-end gap-8">
                                        <span class="text-heading fst-italic text-sm">Starting at</span>
                                        <h6 class="text-danger-600 mb-0"> $60.99</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-item__thumb animate-scale animation-delay-12">
                                <img src="{{ asset('assets/images/thumbs/banner-img1.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Banner Section End =============================== -->

    <!-- ============================ Feature Section start =============================== -->
    <div class="feature" id="featureSection">
        <div class="container container-lg">
            <div class="position-relative arrow-center gradient-shadow">
                <div class="flex-align">
                    <button type="button" id="feature-item-wrapper-prev"
                        class="slick-prev slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                        <i class="ph ph-caret-left"></i>
                    </button>
                    <button type="button" id="feature-item-wrapper-next"
                        class="slick-next slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                        <i class="ph ph-caret-right"></i>
                    </button>
                </div>
                <div class="feature-item-wrapper">
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="400">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img1.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Vegetables</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="600">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img2.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Fish & Meats</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="800">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img3.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Desserts</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1000">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img4.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Drinks & Juice</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1200">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img5.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Animals Food</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1400">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img6.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Fresh Fruits</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1600">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img7.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Yummy Candy</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1800">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img2.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Fish & Meats</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2000">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img8.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Dairy & Eggs</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2200">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img9.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Snacks</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2400">
                        <div class="feature-item__thumb rounded-circle">
                            <a href="{{route('shop')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/feature-img10.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="{{route('shop')}}" class="text-inherit">Frozen Foods</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Feature Section End =============================== -->

    <!-- ======================== promotional banner Start ============================== -->
    <section class="promotional-banner pt-80">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="400">
                    <div
                        class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1 py-52 ps-40 pe-24 h-100">
                        <img src="{{ asset('assets/images/thumbs/promotional-banner-img1.png') }}" alt="img"
                            class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                        <div class="promotional-banner-item__content">
                            <h6 class="promotional-banner-item__title text-2xl max-w-184">Everyday Fresh Meat</h6>
                            <div class="d-flex align-items-end gap-8">
                                <span class="text-heading fst-italic text-sm">Starting at</span>
                                <h6 class="text-danger-600 mb-0 text-xl"> $60.99</h6>
                            </div>
                            <a href="{{route('shop')}}"
                                class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1 py-52 ps-40 pe-24 h-100">
                        <img src="{{ asset('assets/images/thumbs/promotional-banner-img2.png') }}" alt="img"
                            class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                        <div class="promotional-banner-item__content">
                            <h6 class="promotional-banner-item__title text-2xl max-w-184">Daily Fresh Vegetables</h6>
                            <div class="d-flex align-items-end gap-8">
                                <span class="text-heading fst-italic text-sm">Starting at</span>
                                <h6 class="text-danger-600 mb-0 text-xl"> $60.99</h6>
                            </div>
                            <a href="{{route('shop')}}"
                                class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1 py-52 ps-40 pe-24 h-100">
                        <img src="{{ asset('assets/images/thumbs/promotional-banner-img3.png') }}" alt="img"
                            class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                        <div class="promotional-banner-item__content">
                            <h6 class="promotional-banner-item__title text-2xl max-w-184">Everyday Fresh Milk</h6>
                            <div class="d-flex align-items-end gap-8">
                                <span class="text-heading fst-italic text-sm">Starting at</span>
                                <h6 class="text-danger-600 mb-0 text-xl"> $60.99</h6>
                            </div>
                            <a href="{{route('shop')}}"
                                class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1 py-52 ps-40 pe-24 h-100">
                        <img src="{{ asset('assets/images/thumbs/promotional-banner-img4.png') }}" alt="img"
                            class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                        <div class="promotional-banner-item__content">
                            <h6 class="promotional-banner-item__title text-2xl max-w-184">Everyday Fresh Fruits</h6>

                            <a href="{{route('shop')}}"
                                class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== promotional banner End ============================== -->
    <div class="product pt-60">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow fadeInLeft">Flash Sales Today</h5>
                    <div class="flex-align gap-16 wow fadeInRight">
                        <a href="{{route('shop')}}"
                            class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                            All Deals</a>
                        <div class="flex-align gap-8">
                            <button type="button" id="product-one-prev"
                                class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="product-one-next"
                                class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-one-slider g-12">
                <div class="" data-aos="fade-up" data-aos-duration="200">
                    <div
                        class="product-card px-20 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="{{route('cart')}}"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>

                        <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                            <img src="{{ asset('assets/images/thumbs/product-img26.png') }}" alt="img">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="mt-12">
                                <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" data-aos="fade-up" data-aos-duration="400">
                    <div
                        class="product-card px-20 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="{{route('cart')}}"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                            <img src="{{ asset('assets/images/thumbs/product-img27.png') }}" alt="img">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="mt-12">
                                <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="product-card px-20 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="{{route('cart')}}"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                            <img src="{{ asset('assets/images/thumbs/product-img28.png') }}" alt="img">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="mt-12">
                                <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="product-card px-20 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="{{route('cart')}}"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                            <img src="{{ asset('assets/images/thumbs/product-img29.png') }}" alt="img">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="mt-12">
                                <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="product-card px-20 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="{{route('cart')}}"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                            <img src="{{ asset('assets/images/thumbs/product-img30.png') }}" alt="img">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="mt-12">
                                <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" data-aos="fade-up" data-aos-duration="1200">
                    <div
                        class="product-card px-20 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="{{route('cart')}}"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                            <img src="{{ asset('assets/images/thumbs/product-img13.png') }}" alt="img">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="mt-12">
                                <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="product-card px-20 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="{{route('cart')}}"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                            <img src="{{ asset('assets/images/thumbs/product-img3.png') }}" alt="img">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            </div>
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-bold text-gray-600">4.8</span>
                                <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-bold text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="mt-12">
                                <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ========================= flash sales Start ================================ -->

    <section class="flash-sales pt-80 overflow-hidden">
        <div class="container container-lg">
            <div class="row gy-4 arrow-style-two">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="flash-sales-item rounded-16 overflow-hidden z-1 position-relative flex-align flex-0 justify-content-between gap-8 ps-56-px">
                        <img src="{{ asset('assets/images/bg/flash-sale-bg1.png') }}" alt="img"
                            class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1 flash-sales-item__bg">
                        <div class="flash-sales-item__content ms-sm-auto">
                            <h6 class="text-32 mb-8">X-Connect Smart Television</h6>
                            <p class="text-neutral-500 mb-12">Time remaining until the end of the offer.</p>
                            <div class="countdown" id="countdown1">
                                <ul class="countdown-list flex-align flex-wrap">
                                    <li
                                        class="countdown-list__item py-8 px-12 text-heading flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5">
                                        <span class="days"></span> D</li>
                                    <li
                                        class="countdown-list__item py-8 px-12 text-heading flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5">
                                        <span class="hours"></span> H</li>
                                    <li
                                        class="countdown-list__item py-8 px-12 text-heading flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5">
                                        <span class="minutes"></span> M</li>
                                    <li
                                        class="countdown-list__item py-8 px-12 text-heading flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5">
                                        <span class="seconds"></span> S</li>
                                </ul>
                            </div>
                            <a href="{{route('shop')}}"
                                class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="flash-sales-item rounded-16 overflow-hidden z-1 position-relative flex-align flex-0 justify-content-between gap-8 ps-56-px">
                        <img src="{{ asset('assets/images/bg/flash-sale-bg2.png') }}" alt="img"
                            class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1 flash-sales-item__bg">
                        <div class="flash-sales-item__content">
                            <h6 class="text-32 mb-8">Vegetables Combo Box</h6>
                            <p class="text-heading mb-12">Time remaining until the end of the offer.</p>
                            <div class="countdown" id="countdown2">
                                <ul class="countdown-list flex-align flex-wrap">
                                    <li
                                        class="countdown-list__item py-8 px-12 flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5 bg-main-600 text-white">
                                        <span class="days"></span> D</li>
                                    <li
                                        class="countdown-list__item py-8 px-12 flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5 bg-main-600 text-white">
                                        <span class="hours"></span> H</li>
                                    <li
                                        class="countdown-list__item py-8 px-12 flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5 bg-main-600 text-white">
                                        <span class="minutes"></span> M</li>
                                    <li
                                        class="countdown-list__item py-8 px-12 flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5 bg-main-600 text-white">
                                        <span class="seconds"></span> S</li>
                                </ul>
                            </div>
                            <a href="{{route('shop')}}"
                                class="btn bg-success-600 hover-bg-success-700 d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= flash sales End ================================ -->

    <!-- ========================= Recommended Start ================================ -->
    <section class="recommended overflow-hidden pt-80">
        <div class="container container-lg">
            <div class="section-heading flex-between flex-wrap gap-16">
                <h5 class="mb-0 wow fadeInLeft">Recommended for you</h5>
                <ul class="nav common-tab nav-pills wow fadeInRight" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-medium text-sm border border-white hover-border-main-600 active"
                            id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button"
                            role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-medium text-sm border border-white hover-border-main-600"
                            id="pills-grocery-tab" data-bs-toggle="pill" data-bs-target="#pills-grocery"
                            type="button" role="tab" aria-controls="pills-grocery"
                            aria-selected="false">Grocery</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-medium text-sm border border-white hover-border-main-600"
                            id="pills-fruits-tab" data-bs-toggle="pill" data-bs-target="#pills-fruits"
                            type="button" role="tab" aria-controls="pills-fruits"
                            aria-selected="false">Fruits</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-medium text-sm border border-white hover-border-main-600"
                            id="pills-juices-tab" data-bs-toggle="pill" data-bs-target="#pills-juices"
                            type="button" role="tab" aria-controls="pills-juices"
                            aria-selected="false">Juices</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-medium text-sm border border-white hover-border-main-600"
                            id="pills-vegetables-tab" data-bs-toggle="pill" data-bs-target="#pills-vegetables"
                            type="button" role="tab" aria-controls="pills-vegetables"
                            aria-selected="false">Vegetables</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-medium text-sm border border-white hover-border-main-600"
                            id="pills-snacks-tab" data-bs-toggle="pill" data-bs-target="#pills-snacks"
                            type="button" role="tab" aria-controls="pills-snacks"
                            aria-selected="false">Snacks</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-medium text-sm border border-white hover-border-main-600"
                            id="pills-organic-tab" data-bs-toggle="pill" data-bs-target="#pills-organic"
                            type="button" role="tab" aria-controls="pills-organic"
                            aria-selected="false">Organic Foods</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                    aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="row g-12">
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img7.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img8.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img9.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img10.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img11.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img12.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img13.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img14.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img15.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img16.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img17.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img18.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-grocery" role="tabpanel" aria-labelledby="pills-grocery-tab"
                    tabindex="0">
                    <div class="row g-12">
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img7.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img8.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img9.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img10.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img11.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img12.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img13.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img14.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img15.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img16.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img17.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img18.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-fruits" role="tabpanel" aria-labelledby="pills-fruits-tab"
                    tabindex="0">
                    <div class="row g-12">
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img7.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img8.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img9.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img10.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img11.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img12.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img13.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img14.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img15.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img16.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img17.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img18.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-juices" role="tabpanel" aria-labelledby="pills-juices-tab"
                    tabindex="0">
                    <div class="row g-12">
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img7.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img8.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img9.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img10.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img11.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img12.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img13.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img14.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img15.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img16.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img17.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img18.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-vegetables" role="tabpanel"
                    aria-labelledby="pills-vegetables-tab" tabindex="0">
                    <div class="row g-12">
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img7.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img8.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img9.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img10.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img11.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img12.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img13.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img14.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img15.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img16.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img17.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img18.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-snacks" role="tabpanel" aria-labelledby="pills-snacks-tab"
                    tabindex="0">
                    <div class="row g-12">
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img7.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img8.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img9.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img10.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img11.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img12.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img13.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img14.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img15.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img16.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img17.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img18.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-organic" role="tabpanel" aria-labelledby="pills-organic-tab"
                    tabindex="0">
                    <div class="row g-12">
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img7.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img8.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img9.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img10.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img11.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img12.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img13.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img14.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img15.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img16.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img17.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-100 p-12 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item">
                                <button type="button" class="wishlist-btn-two">
                                    <i class="ph-bold ph-heart"></i>
                                </button>
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img18.png') }}" alt="img">
                                </a>
                                <div class="product-card__content p-sm-2 w-100">
                                    <h6 class="title text-lg fw-semibold my-12">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>

                                    <div class="product-card__content mt-12">
                                        <div class="product-card__price mb-8">
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                    class="text-gray-500 fw-normal">/Qty</span> </span>
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                $28.99</span>
                                        </div>
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                        </div>
                                        <a href="{{route('cart')}}"
                                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= Recommended End ================================ -->

    <!-- =========================== Offer Section Start =============================== -->
    <section class="offer pt-80">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                    <div class="offer-card position-relative rounded-16 overflow-hidden p-16 ps-56-px">
                        <img src="{{ asset('assets/images/bg/offer-bg-img1.png') }}" alt="img"
                            class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100">
                        <div class="py-xl-4 max-w-392 ms-auto">
                            <div class="offer-card__logo mb-16 w-80 h-80 flex-center bg-white rounded-circle">
                                <img src="{{ asset('assets/images/thumbs/offer-logo.png') }}" alt="img">
                            </div>
                            <h5 class="mb-8">$5 off your first order</h5>
                            <div class="flex-align gap-8">
                                <span class="text-sm fw-medium text-heading">Delivery by 6:15am</span>
                                <span class="text-xs text-heading">Expire Aug 5</span>
                            </div>
                            <a href="{{route('shop')}}"
                                class="mt-16 btn bg-success-600 hover-text-white hover-bg-success-700 text-white fw-medium d-inline-flex align-items-center rounded-pill gap-8"
                                tabindex="0">
                                Shop Now
                                <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="offer-card position-relative rounded-16 overflow-hidden p-16 ps-56-px">
                        <img src="{{ asset('assets/images/bg/offer-bg-img2.png') }}" alt="img"
                            class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100">
                        <div class="py-xl-4 max-w-392">
                            <div class="offer-card__logo mb-16 w-80 h-80 flex-center bg-white rounded-circle">
                                <img src="{{ asset('assets/images/thumbs/offer-logo.png') }}" alt="img">
                            </div>
                            <h5 class="mb-8">$5 off your first order</h5>
                            <div class="flex-align gap-8">
                                <span class="text-sm fw-medium text-heading">Delivery by 6:15am</span>
                                <span class="text-sm text-success-600">Expire Aug 5</span>
                            </div>
                            <a href="{{route('shop')}}"
                                class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-heading fw-medium d-inline-flex align-items-center rounded-pill gap-8"
                                tabindex="0">
                                Shop Now
                                <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== Offer Section End =============================== -->

    <!-- ========================= hot-deals Start ================================ -->
    <section class="hot-deals pt-80 overflow-hidden">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow fadeInLeft">Hot Deals Todays</h5>
                    <div class="flex-align gap-16 wow fadeInRight">
                        <a href="{{route('shop')}}"
                            class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                            All Deals</a>
                        <div class="flex-align gap-8">
                            <button type="button" id="deals-prev"
                                class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="deals-next"
                                class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-12">
                <div class="col-md-4" data-aos="zoom-in">
                    <div
                        class="hot-deals position-relative rounded-16 bg-main-600 overflow-hidden ps-40 pe-24 pt-80 pb-120 z-1">
                        <img src="{{ asset('assets/images/shape/offer-shape.png') }}" alt="img"
                            class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">

                        <img src="{{ asset('assets/images/thumbs/basket-img.png') }}" alt="Basket Thumb"
                            class="position-absolute inset-inline-end-0 inset-block-end-0">

                        <span
                            class="text-primary-600 bg-yellow text-heading py-4 px-12 rounded-4 text-sm fw-medium">Medical
                            equipment</span>
                        <div class="">
                            <h5 class="text-white mb-8 mt-12">Deals of the day</h5>
                            <p class="fw-semibold text-success-600">Save up to 50% off on your first order</p>
                            <div class="countdown mt-24 mb-24" id="countdown4">
                                <ul class="countdown-list d-flex align-items-center flex-wrap">
                                    <li
                                        class="countdown-list__item py-8 px-12 text-heading flex-align gap-4 text-sm fw-medium colon-white">
                                        <span class="days"></span> D</li>
                                    <li
                                        class="countdown-list__item py-8 px-12 text-heading flex-align gap-4 text-sm fw-medium colon-white">
                                        <span class="hours"></span> H</li>
                                    <li
                                        class="countdown-list__item py-8 px-12 text-heading flex-align gap-4 text-sm fw-medium colon-white">
                                        <span class="minutes"></span> M</li>
                                    <li
                                        class="countdown-list__item py-8 px-12 text-heading flex-align gap-4 text-sm fw-medium colon-white">
                                        <span class="seconds"></span> S</li>
                                </ul>
                            </div>
                            <a href="{{route('shop')}}"
                                class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-main-600 fw-medium d-inline-flex align-items-center rounded-pill gap-8"
                                tabindex="0">
                                Explore Shop
                                <span class="icon text-xl d-flex"><i class="ph-bold ph-shopping-cart"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="hot-deals-slider arrow-style-two">
                        <div class="" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card px-20 pt-16 pb-40 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>

                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img26.png') }}" alt="img">
                                </a>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card px-20 pt-16 pb-40 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img27.png') }}" alt="img">
                                </a>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card px-20 pt-16 pb-40 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img28.png') }}" alt="img">
                                </a>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card px-20 pt-16 pb-40 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img29.png') }}" alt="img">
                                </a>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card px-20 pt-16 pb-40 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img30.png') }}" alt="img">
                                </a>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card px-20 pt-16 pb-40 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img13.png') }}" alt="img">
                                </a>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card px-20 pt-16 pb-40 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="{{route('cart')}}"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                                <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                                    <img src="{{ asset('assets/images/thumbs/product-img3.png') }}" alt="img">
                                </a>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8 d-flex align-items-center gap-8">
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-20">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= hot-deals End ================================ -->

    <!-- ============================ Super Discount Start ================================== -->
    <div class="pt-80">
        <div class="container container-lg">
            <div
                class="border border-main-500 bg-main-50 border-dashed rounded-8 py-20 d-flex align-items-center justify-content-evenly">
                <p class="h6 text-main-600 fw-normal">Super discount for your <a href="javascript:void(0)"
                        class="fw-bold text-decoration-underline text-main-600 hover-text-decoration-none hover-text-primary-600 ">first
                        purchase</a> </p>
                <div class="position-relative">
                    <button
                        class="copy-coupon-btn px-32 py-10 text-white text-uppercase bg-main-600 rounded-pill border-0 hover-bg-main-800 ">
                        FREE25BAC
                        <i class="ph ph-file-text text-lg line-height-1"></i>
                    </button>
                    <span
                        class="copy-text bg-main-600 text-white fw-normal position-absolute px-16 py-6 rounded-pill bottom-100 start-50 translate-middle-x min-w-max mb-8 text-xs"></span>
                </div>
                <p class="text-md text-main-600 fw-normal">Use discount code to get <span
                        class="fw-bold text-main-600">20% </span> discount for any item</p>
            </div>
        </div>
    </div>
    <!-- ============================ Super Discount End ================================== -->

    <!-- ========================== Short Product Section Start ============================== -->
    <div class="short-product pt-110">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                        <div class="p-16 bg-main-50 rounded-16 mb-32">
                            <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">Featured Products</h6>
                        </div>
                        <div class="short-product-list arrow-style-two max-h-unset">
                            <div class="d-flex flex-column gap-44">
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img1.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img2.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img3.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img4.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-44">
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img1.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img2.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img3.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img4.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="700">
                    <div
                        class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                        <div class="p-16 bg-main-50 rounded-16 mb-32">
                            <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">Top Selling Products
                            </h6>
                        </div>
                        <div class="short-product-list arrow-style-two max-h-unset">
                            <div class="d-flex flex-column gap-44">
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img5.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img6.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img7.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img8.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-44">
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img5.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img6.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img7.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img8.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                        <div class="p-16 bg-main-50 rounded-16 mb-32">
                            <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">On-sale Products</h6>
                        </div>
                        <div class="short-product-list arrow-style-two max-h-unset">
                            <div class="d-flex flex-column gap-44">
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img9.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img4.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img7.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img4.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-44">
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img9.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img4.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img7.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-align gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="{{route('shop.details')}}" class="link"><img
                                                src="{{ asset('assets/images/thumbs/short-product-img4.png') }}" alt="img"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex-align gap-6">
                                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                                            <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                            <a href="{{route('shop.details')}}" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex-align gap-8">
                                            <span class="text-heading text-md fw-semibold d-block">$1500.00</span>
                                            <span class="text-gray-400 text-md fw-semibold d-block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="900">
                    <div
                        class="product-card h-100 p-24 pt-32 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 group-item pt-32">
                        <button type="button" class="wishlist-btn-two">
                            <i class="ph-bold ph-heart"></i>
                        </button>

                        <div class="">
                            <h6 class="position-relative mb-0 pb-12 d-inline-block">Deals of the week</h6>
                            <div class="countdown mb-10" id="countdown26">
                                <ul class="countdown-list flex-align flex-wrap">
                                    <li
                                        class="countdown-list__item colon-red py-8 px-12 flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5 bg-main-600 text-white">
                                        <span class="days"></span> D
                                    </li>
                                    <li
                                        class="countdown-list__item colon-red py-8 px-12 flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5 bg-main-600 text-white">
                                        <span class="hours"></span> H
                                    </li>
                                    <li
                                        class="countdown-list__item colon-red py-8 px-12 flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5 bg-main-600 text-white">
                                        <span class="minutes"></span> M
                                    </li>
                                    <li
                                        class="countdown-list__item colon-red py-8 px-12 flex-align gap-4 text-sm fw-medium box-shadow-4xl rounded-5 bg-main-600 text-white">
                                        <span class="seconds"></span> S
                                    </li>
                                </ul>
                            </div>
                            <p class="text-neutral-300 fw-medium text-sm">Don't miss this opportunity at a special</p>
                        </div>

                        <a href="{{route('shop.details')}}" class="product-card__thumb flex-center overflow-hidden">
                            <img src="{{ asset('assets/images/thumbs/product-img32.png') }}" alt="img">
                        </a>
                        <div class="product-card__content w-100">
                            <div class="flex-align gap-4">
                                <div class="flex-align gap-2 me-4">
                                    <span class="text-12 fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-12 fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-12 fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-12 fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-12 fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <span class="text-xs fw-medium text-heading">(3)</span>
                            </div>
                            <div class="d-flex align-items-center gap-12 mt-6">
                                <h6 class="text-danger-600 mb-0 text-lg"> $60.99</h6>
                                <h6 class="text-neutral-300 fw-medium mb-0 text-lg">$79.99</h6>
                            </div>

                            <h6 class="title text-md fw-semibold mt-10 mb-0">
                                <a href="{{route('shop.details')}}" class="link text-line-2 fw-bold">Perfectly Packed Meat
                                    Combos for Delicious and Flavorful Meals Every Day</a>
                            </h6>
                            <p class="text-gray-500 text-sm mt-12 pb-12 border-bottom border-neutral-100 mb-8">This
                                product is about to run out</p>

                            <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar"
                                aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <div class="d-flex align-items-center gap-6 mt-6">
                                <span class="text-sm text-gray-500">available only:</span>
                                <h6 class="text-danger-600 mb-0 text-md fw-semibold"> $60.99</h6>
                            </div>
                            <a href="{{route('cart')}}"
                                class="product-card__cart btn bg-success-600 text-white hover-bg-success-700 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-16 w-100 justify-content-center">
                                Add To Cart <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================== Short Product Section End ============================ -->

    <!-- ============================ Brand Section Start ============================= -->
    <div class="brand py-80 overflow-hidden">
        <div class="container container-lg">
            <div class="brand-inner p-24 rounded-16">
                <div class="section-heading">
                    <div class="flex-between flex-wrap gap-8">
                        <h5 class="mb-0 wow fadeInLeft">Shop by Brands</h5>
                        <div class="flex-align gap-16 wow fadeInRight">
                            <a href="{{route('shop')}}"
                                class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                                All Deals</a>
                            <div class="flex-align gap-8">
                                <button type="button" id="brand-prev"
                                    class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                    <i class="ph ph-caret-left"></i>
                                </button>
                                <button type="button" id="brand-next"
                                    class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                    <i class="ph ph-caret-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brand-slider arrow-style-two">
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="200">
                        <img src="{{ asset('assets/images/thumbs/brand-img1.png') }}" alt="img">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="400">
                        <img src="{{ asset('assets/images/thumbs/brand-img2.png') }}" alt="img">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="600">
                        <img src="{{ asset('assets/images/thumbs/brand-img3.png') }}" alt="img">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="800">
                        <img src="{{ asset('assets/images/thumbs/brand-img4.png') }}" alt="img">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/thumbs/brand-img5.png') }}" alt="img">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="1200">
                        <img src="{{ asset('assets/images/thumbs/brand-img6.png') }}" alt="img">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="1400">
                        <img src="{{ asset('assets/images/thumbs/brand-img7.png') }}" alt="img">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="1600">
                        <img src="{{ asset('assets/images/thumbs/brand-img8.png') }}" alt="img">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="1800">
                        <img src="{{ asset('assets/images/thumbs/brand-img3.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Brand Section End ============================= -->

    <!-- ========================= best sells Start ============================ -->
    <section class="best sells pb-80">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow fadeInLeft">Daily Best Sells</h5>
                </div>
            </div>

            <div class="row g-12">
                <div class="col-xxl-8">
                    <div class="row gy-4">
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                                <div class="">
                                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                    </span>
                                    <a href="{{route('shop.details')}}"
                                        class="product-card__thumb flex-center overflow-hidden">
                                        <img src="{{ asset('assets/images/thumbs/best-sell1.png') }}" alt="img">
                                    </a>
                                    <div class="countdown" id="countdown6">
                                        <ul class="countdown-list style-three flex-align flex-wrap">
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="days"></span>Days</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="hours"></span>Hours</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="minutes"></span>Min</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="seconds"></span>Sec</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content">
                                    <div class="product-card__price mb-16">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                                <div class="">
                                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                    </span>
                                    <a href="{{route('shop.details')}}"
                                        class="product-card__thumb flex-center overflow-hidden">
                                        <img src="{{ asset('assets/images/thumbs/best-sell2.png') }}" alt="img">
                                    </a>
                                    <div class="countdown" id="countdown7">
                                        <ul class="countdown-list style-three flex-align flex-wrap">
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="days"></span>Days</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="hours"></span>Hours</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="minutes"></span>Min</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="seconds"></span>Sec</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content">
                                    <div class="product-card__price mb-16">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                                <div class="">
                                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                    </span>
                                    <a href="{{route('shop.details')}}"
                                        class="product-card__thumb flex-center overflow-hidden">
                                        <img src="{{ asset('assets/images/thumbs/best-sell3.png') }}" alt="img">
                                    </a>
                                    <div class="countdown" id="countdown8">
                                        <ul class="countdown-list style-three flex-align flex-wrap">
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="days"></span>Days</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="hours"></span>Hours</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="minutes"></span>Min</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="seconds"></span>Sec</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content">
                                    <div class="product-card__price mb-16">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                                <div class="">
                                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                    </span>
                                    <a href="{{route('shop.details')}}"
                                        class="product-card__thumb flex-center overflow-hidden">
                                        <img src="{{ asset('assets/images/thumbs/best-sell4.png') }}" alt="img">
                                    </a>
                                    <div class="countdown" id="countdown9">
                                        <ul class="countdown-list style-three flex-align flex-wrap">
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="days"></span>Days</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="hours"></span>Hours</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="minutes"></span>Min</li>
                                            <li
                                                class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium">
                                                <span class="seconds"></span>Sec</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content">
                                    <div class="product-card__price mb-16">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                            $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                        <a href="{{route('shop.details')}}" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-main-600 text-md d-flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-12">
                                        <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="position-relative rounded-16 bg-light-purple overflow-hidden p-28 z-1 h-100">
                        <div class="">
                            <img src="{{ asset('assets/images/bg/special-snacks.png') }}" alt="img"
                                class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">
                        </div>
                        <div class="py-xl-4">
                            <div class="offer-card__logo mb-16 w-80 h-80 flex-center bg-white rounded-circle">
                                <img src="{{ asset('assets/images/thumbs/offer-logo.png') }}" alt="img">
                            </div>
                            <h5 class="mb-8">$5 off your first order</h5>
                            <div class="flex-align gap-8">
                                <span class="text-sm fw-medium text-heading">Delivery by 6:15am</span>
                                <span class="text-xs text-heading">Expire Aug 5</span>
                            </div>
                            <a href="{{route('shop')}}"
                                class="mt-16 btn bg-success-600 hover-text-white hover-bg-success-700 text-white fw-medium d-inline-flex align-items-center rounded-pill gap-8"
                                tabindex="0">
                                Shop Now
                                <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= best sells End ================================ -->

    <!-- ================================ Newsletter new section Start ================================== -->
    <section class="newsletter-new">
        <div class="container container-lg">
            <div
                class="py-20 px-80-px bg-neutral-100 rounded-12 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap gap-32">
                <div class="max-w-700">
                    <h3 class="mb-30">Stay home & get your daily needs from our shop</h3>
                    <form action="#" class="d-flex gap-8 flex-wrap flex-sm-nowrap">
                        @csrf
                        <input type="text"
                            class="form-control bg-white px-20 shadow-none py-16 rounded placeholder-text-14 flex-grow-1"
                            placeholder="Enter your mail">
                        <button type="submit"
                            class="btn py-20 px-32 bg-success-600 flex-shrink-0 hover-bg-success-700 flex-grow-1">Subscribe
                            now</button>
                    </form>
                    <p class="text-heading text-sm mt-20 fw-medium">I agree that my submitted data is being collected and
                        stored.</p>
                </div>
                <div class="d-lg-block d-none">
                    <img src="{{ asset('assets/images/thumbs/newsletter-img.png') }}" alt="Thumbnail">
                </div>

            </div>
        </div>
    </section>
    <!-- ================================ Newsletter new section End ================================== -->

    <!-- ============================ footer area ================================== -->
    @include('frontend.includes.footers.footerOne')
    <!-- ============================ footer area end ================================== -->
@endsection
