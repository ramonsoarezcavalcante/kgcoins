@extends('frontend.layouts.app')
@section('title', 'Index Three')
@section('content')

    <!-- ============================ header area ============================ -->
    @include('frontend.includes.headers.headerThree')
    <!-- ============================ header area end 
============================ -->

    <!-- ==================================== Banner Three Start =================================== -->
    <section class="banner-three bg-img position-relative"
        data-background-image="{{ asset('assets/images/shape/line-pattern.png') }}">
        <img src="{{ asset('assets/images/shape/star-shape.png') }}" alt="Shape"
            class="animation star-shape animation-rotate">
        <img src="{{ asset('assets/images/shape/star-shape.png') }}" alt="Shape"
            class="animation star-shape style-two animation-rotate">
        <img src="{{ asset('assets/images/shape/line-shape.png') }}" alt="Shape"
            class="animation line-shape opacity-75 animation-rotate">

        <h1
            class="display-200 text-white opacity-25 position-absolute inset-inline-end-0 inset-block-end-0 mb-0 line-height-73">
            Fashion</h1>

        <div class="flex-align">
            <button type="button" id="banner-three-prev"
                class="slick-prev slick-arrow flex-center rounded-circle border border-white hover-border-main-600 text-white text-2xl hover-bg-main-600 hover-text-white transition-1 position-absolute top-50 translate-middle-y inset-inline-start-0 ms-lg-5 ms-32">
                <i class="ph ph-caret-left"></i>
            </button>
            <button type="button" id="banner-three-next"
                class="slick-next slick-arrow flex-center rounded-circle border border-white hover-border-main-600 text-white text-2xl hover-bg-main-600 hover-text-white transition-1 position-absolute top-50 translate-middle-y inset-inline-end-0 me-lg-5 me-32">
                <i class="ph ph-caret-right"></i>
            </button>
        </div>

        <div class="container container-lg">
            <div class="banner-three-slider">
                <div class="">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6">
                            <div class="span3">
                                <span class="text-white mb-8 h6 animate-left-right animation-delay-08">UP TO 50% OFF</span>
                                <h1 class="text-white display-one animate-left-right animation-delay-1">New
                                    <span class="fw-normal text-main-two-600 font-heading-four">Style</span> Just For You.
                                </h1>
                                <p class="text-white max-w-472 text-2xl mb-24Up animate-left-right animation-delay-12">You
                                    appear ordinary if you dress simply. We are able to help you.</p>
                                <a href="{{route('shop')}}"
                                    class="btn btn-outline-white d-inline-flex align-items-center rounded-pill gap-8 mt-lg-4 mt-sm-1 animate-left-right animation-delay-15"
                                    tabindex="0">
                                    Shop Now<span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center" data-tilt data-tilt-max="16" data-tilt-speed="500"
                                data-tilt-perspective="5000" data-tilt-scale="1.06">
                                <img src="{{ asset('assets/images/thumbs/banner-three-img1.png') }}" alt="Thumb"
                                    class="animate-scale animation-delay-12">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6">
                            <div class="span3">
                                <span class="text-white mb-8 h6 animate-left-right animation-delay-08">UP TO 50% OFF</span>
                                <h1 class="text-white display-one animate-left-right animation-delay-1">New
                                    <span class="fw-normal text-main-two-600 font-heading-four">Style</span> Just For You.
                                </h1>
                                <p class="text-white max-w-472 text-2xl mb-24Up animate-left-right animation-delay-12">You
                                    appear ordinary if you dress simply. We are able to help you.</p>
                                <a href="{{route('indexThree')}}"
                                    class="btn btn-outline-white d-inline-flex align-items-center rounded-pill gap-8 mt-lg-4 mt-sm-1 animate-left-right animation-delay-15"
                                    tabindex="0">
                                    Shop Now<span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center" data-tilt data-tilt-max="16" data-tilt-speed="500"
                                data-tilt-perspective="5000" data-tilt-scale="1.06">
                                <img src="{{ asset('assets/images/thumbs/banner-three-img2.png') }}" alt="Thumb"
                                    class="animate-scale animation-delay-12">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6">
                            <div class="span3">
                                <span class="text-white mb-8 h6 animate-left-right animation-delay-08">UP TO 50% OFF</span>
                                <h1 class="text-white display-one animate-left-right animation-delay-1">New
                                    <span class="fw-normal text-main-two-600 font-heading-four">Style</span> Just For You.
                                </h1>
                                <p class="text-white max-w-472 text-2xl mb-24Up animate-left-right animation-delay-12">You
                                    appear ordinary if you dress simply. We are able to help you.</p>
                                <a href="{{route('indexThree')}}"
                                    class="btn btn-outline-white d-inline-flex align-items-center rounded-pill gap-8 mt-lg-4 mt-sm-1 animate-left-right animation-delay-15"
                                    tabindex="0">
                                    Shop Now<span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center" data-tilt data-tilt-max="16" data-tilt-speed="500"
                                data-tilt-perspective="5000" data-tilt-scale="1.06">
                                <img src="{{ asset('assets/images/thumbs/banner-three-img3.png') }}" alt="Thumb"
                                    class="animate-scale animation-delay-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================== Banner Three End =================================== -->

    <!-- ============================== Promotional Banner Three Start ========================== -->
    <section class="promo-three pt-120  wow bounce overflow-hidden">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="promo-three-item bg-img rounded-16 overflow-hidden"
                        data-background-image="{{ asset('assets/images/thumbs/promo-three-img-1.png') }}">
                        <div class="text-start">
                            <span class="text-white mb-24">Free Shipping Over Order $150</span>
                            <h2 class="text-white fw-medium mb-0 max-w-375">Woman <span
                                    class="fw-normal text-white font-heading-four wow bounceInDown" data-wow-duration="1s"
                                    data-wow-delay=".5s">Spring</span> Collection</h2>
                            <a href="{{route('indexThree')}}"
                                class="btn btn-outline-white d-inline-flex align-items-center rounded-pill gap-8 mt-48"
                                tabindex="0">
                                Explore Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="promo-three-item bg-img rounded-16 overflow-hidden"
                        data-background-image="{{ asset('assets/images/thumbs/promo-three-img-2.png') }}">
                        <div class="text-start">
                            <span class="text-white mb-24">Men Fashion Discover</span>
                            <h2 class="text-white fw-medium mb-0 max-w-375">New <span
                                    class="fw-normal text-white font-heading-four wow bounceInDown" data-wow-duration="1s"
                                    data-wow-delay=".7s">Style</span> Sale 35% Off</h2>
                            <a href="{{route('indexThree')}}"
                                class="btn btn-outline-white d-inline-flex align-items-center rounded-pill gap-8 mt-48"
                                tabindex="0">
                                Explore Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================== Promotional Banner Three End ========================== -->

    <!-- ============================ Feature Three Section start =============================== -->
    <div class="feature feature-three mt-0 py-120 overflow-hidden" id="featureSection">
        <div class="container container-lg">
            <div class="section-heading text-center">
                <h5 class="mb-0 wow bounceIn text-uppercase">Popular Categories</h5>
            </div>
            <div class="position-relative arrow-center">
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
                <div class="feature-three-item-wrapper">
                    <div class="feature-item text-center" data-aos="zoom-in" data-aos-duration="800">
                        <div class="feature-item__thumb bg-yellow-light max-w-260 max-h-260 rounded-circle w-100 h-100">
                            <a href="{{route('indexThree')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/features-three-img1.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-20">
                            <h6 class="text-lg mb-8"><a href="{{route('indexThree')}}" class="text-inherit">Men's Fashion</a></h6>
                            <span class="text-sm text-gray-900">180 Items</span>
                        </div>
                    </div>
                    <div class="feature-item text-center" data-aos="zoom-in" data-aos-duration="800">
                        <div class="feature-item__thumb bg-danger-light max-w-260 max-h-260 rounded-circle w-100 h-100">
                            <a href="{{route('indexThree')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/features-three-img2.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-20">
                            <h6 class="text-lg mb-8"><a href="{{route('indexThree')}}" class="text-inherit">Women's Fashion</a></h6>
                            <span class="text-sm text-gray-900">220 Items</span>
                        </div>
                    </div>
                    <div class="feature-item text-center" data-aos="zoom-in" data-aos-duration="800">
                        <div class="feature-item__thumb bg-purple-light max-w-260 max-h-260 rounded-circle w-100 h-100">
                            <a href="{{route('indexThree')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/features-three-img3.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-20">
                            <h6 class="text-lg mb-8"><a href="{{route('indexThree')}}" class="text-inherit">Kid’s Fashion</a></h6>
                            <span class="text-sm text-gray-900">205 Items</span>
                        </div>
                    </div>
                    <div class="feature-item text-center" data-aos="zoom-in" data-aos-duration="800">
                        <div class="feature-item__thumb bg-danger-light max-w-260 max-h-260 rounded-circle w-100 h-100">
                            <a href="{{route('indexThree')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/features-three-img4.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-20">
                            <h6 class="text-lg mb-8"><a href="{{route('indexThree')}}" class="text-inherit">Fashion Glass</a></h6>
                            <span class="text-sm text-gray-900">68 Items</span>
                        </div>
                    </div>
                    <div class="feature-item text-center" data-aos="zoom-in" data-aos-duration="800">
                        <div class="feature-item__thumb bg-warning-light max-w-260 max-h-260 rounded-circle w-100 h-100">
                            <a href="{{route('indexThree')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/features-three-img5.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-20">
                            <h6 class="text-lg mb-8"><a href="{{route('indexThree')}}" class="text-inherit">Shoes Collection</a></h6>
                            <span class="text-sm text-gray-900">190 Items</span>
                        </div>
                    </div>
                    <div class="feature-item text-center" data-aos="zoom-in" data-aos-duration="800">
                        <div class="feature-item__thumb bg-success-light max-w-260 max-h-260 rounded-circle w-100 h-100">
                            <a href="{{route('indexThree')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/features-three-img6.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-20">
                            <h6 class="text-lg mb-8"><a href="{{route('indexThree')}}" class="text-inherit">Bag Collection</a></h6>
                            <span class="text-sm text-gray-900">128 Items</span>
                        </div>
                    </div>
                    <div class="feature-item text-center" data-aos="zoom-in" data-aos-duration="800">
                        <div class="feature-item__thumb max-w-260 max-h-260 rounded-circle w-100 h-100">
                            <a href="{{route('indexThree')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/features-three-img3.png') }}" alt="img">
                            </a>
                        </div>
                        <div class="feature-item__content mt-20">
                            <h6 class="text-lg mb-8"><a href="{{route('indexThree')}}" class="text-inherit">Men's Fashion</a></h6>
                            <span class="text-sm text-gray-900">180 Items</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Feature Three Section End =============================== -->

    <!-- text slider -->
    <div class="text-slider-section overflow-hidden bg-neutral-600 py-28" data-aos="fade-up">
        <div class="text-slider d-flex align-items-center gap-4">
            <div class="d-flex flex-nowrap flex-shrink-0 flx-align gap-32">
                <span class="flex-shrink-0">
                    <img src="{{ asset('assets/images/icon/star-color.png') }}" alt="img">
                </span>
                <h4 class="text-white flex-grow-1 mb-0 fw-medium">T-Shirt Offer</h4>
            </div>
            <div class="d-flex flex-nowrap flex-shrink-0 flx-align gap-32">
                <span class="flex-shrink-0">
                    <img src="{{ asset('assets/images/icon/star-color.png') }}" alt="img">
                </span>
                <h4 class="text-white flex-grow-1 mb-0 fw-medium">Best Selling Offer</h4>
            </div>
            <div class="d-flex flex-nowrap flex-shrink-0 flx-align gap-32">
                <span class="flex-shrink-0">
                    <img src="{{ asset('assets/images/icon/star-color.png') }}" alt="img">
                </span>
                <h4 class="text-white flex-grow-1 mb-0 fw-medium">Limited Offer Sales</h4>
            </div>
            <div class="d-flex flex-nowrap flex-shrink-0 flx-align gap-32">
                <span class="flex-shrink-0">
                    <img src="{{ asset('assets/images/icon/star-color.png') }}" alt="img">
                </span>
                <h4 class="text-white flex-grow-1 mb-0 fw-medium">Spring Collection</h4>
            </div>
            <div class="d-flex flex-nowrap flex-shrink-0 flx-align gap-32">
                <span class="flex-shrink-0">
                    <img src="{{ asset('assets/images/icon/star-color.png') }}" alt="img">
                </span>
                <h4 class="text-white flex-grow-1 mb-0 fw-medium">Hot Deal Products</h4>
            </div>
            <div class="d-flex flex-nowrap flex-shrink-0 flx-align gap-32">
                <span class="flex-shrink-0">
                    <img src="{{ asset('assets/images/icon/star-color.png') }}" alt="img">
                </span>
                <h4 class="text-white flex-grow-1 mb-0 fw-medium"> Our Services</h4>
            </div>
        </div>
    </div>
    <!-- text slider end 
============================ -->

    <!-- ========================= Trending Products Start ================================ -->
    <section class="trending-products-three py-120 overflow-hidden">
        <div class="container container-lg">
            <div class="section-heading mb-24">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 text-uppercase">Trending Products</h5>
                    <ul class="nav common-tab style-two nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-sale-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-sale" type="button" role="tab" aria-controls="pills-sale"
                                aria-selected="true">On Sale</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-featured-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-featured" type="button" role="tab"
                                aria-controls="pills-featured" aria-selected="false">Featured Products</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-rated-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-rated" type="button" role="tab" aria-controls="pills-rated"
                                aria-selected="false">Best Rated</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-sale" role="tabpanel" aria-labelledby="pills-sale-tab"
                    tabindex="0">
                    <div class="row g-12">
                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown12">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax
                                            Mini 12 Instant Film Camera - Green</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown13">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Midnight Noir Leather Jacket</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown14">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Urban Rebel Combat Boots</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img4.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown15">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Velvet Blossom Dress</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-featured" role="tabpanel" aria-labelledby="pills-featured-tab"
                    tabindex="0">
                    <div class="row g-12">
                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown16">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown17">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Midnight Noir Leather Jacket</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown18">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Urban Rebel Combat Boots</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img4.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown19">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Velvet Blossom Dress</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-rated" role="tabpanel" aria-labelledby="pills-rated-tab"
                    tabindex="0">
                    <div class="row g-12">
                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown20">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown21">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Midnight Noir Leather Jacket</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown22">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Urban Rebel Combat Boots</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                        <img src="{{ asset('assets/images/thumbs/trending-three-img4.png') }}"
                                            alt="img" class="w-auto max-w-unset">
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

                                    <div class="countdown position-absolute start-50 inset-block-end-0 mb-20 translate-middle-x w-100"
                                        id="countdown23">
                                        <ul class="countdown-list style-four flex-center flex-wrap gap-8">
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="days text-2xl text-main-two-600 fw-medium"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="hours text-2xl text-main-two-600 fw-medium"></span>Hour
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="minutes text-2xl text-main-two-600 fw-medium"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-lg bg-neutral-600">
                                                <span class="seconds text-2xl text-main-two-600 fw-medium"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content mt-16 w-100">
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                            tabindex="0">Velvet Blossom Dress</a>
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
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <a href="{{route('cart')}}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= Trending Products End ================================ -->


    <!-- ========================= Discount Three Start ================================ -->
    <section class="discount-three overflow-hidden">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-xl-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="discount-three-item bg-img rounded-16 overflow-hidden"
                        data-background-image="{{ asset('assets/images/thumbs/discount-three-img1.png') }}">
                        <div class="text-start">
                            <span class="fw-medium text-neutral-600 mb-4 text-uppercase">35% off the all order</span>
                            <h6 class="fw-semibold mb-0 max-w-375">Spring Collection</h6>
                            <a href="{{route('indexThree')}}" class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                tabindex="0">
                                Shop Now
                                <span class="text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="discount-three-item bg-img rounded-16 overflow-hidden"
                        data-background-image="{{ asset('assets/images/thumbs/discount-three-img2.png') }}">
                        <div class="text-start">
                            <span class="fw-medium text-neutral-600 mb-4 text-uppercase">35% off the all order</span>
                            <h6 class="fw-semibold mb-0 max-w-375">Spring Collection</h6>
                            <a href="{{route('indexThree')}}" class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                tabindex="0">
                                Shop Now
                                <span class="text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="discount-three-item bg-img rounded-16 overflow-hidden"
                        data-background-image="{{ asset('assets/images/thumbs/discount-three-img3.png') }}">
                        <div class="text-start">
                            <span class="fw-medium text-neutral-600 mb-4 text-uppercase">Get 25% off the all order</span>
                            <h6 class="fw-semibold mb-0 max-w-375">Black Friday</h6>
                            <a href="{{route('indexThree')}}" class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                tabindex="0">
                                Shop Now
                                <span class="text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= Discount Three End ================================ -->

    <!-- ========================== New Arrival Three Section Start ===================================== -->
    <section class="new-arrival-three py-120 overflow-hidden">
        <div class="container container-lg">
            <div class="section-heading text-center wow bounceIn">
                <h5 class="mb-0 text-uppercase wow bounceIn">New Arrivals</h5>
            </div>
            <ul class="nav common-tab style-two nav-pills justify-content-center mb-40 wow bounceIn" id="pills-tabThree"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                        aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Jacket-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Jacket" type="button" role="tab" aria-controls="pills-Jacket"
                        aria-selected="false">Jacket</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Shoes-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Shoes" type="button" role="tab" aria-controls="pills-Shoes"
                        aria-selected="false">Shoes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Hats-tab" data-bs-toggle="pill" data-bs-target="#pills-Hats"
                        type="button" role="tab" aria-controls="pills-Hats" aria-selected="false">Hats</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Goggles-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Goggles" type="button" role="tab" aria-controls="pills-Goggles"
                        aria-selected="false">Goggles</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Bags-tab" data-bs-toggle="pill" data-bs-target="#pills-Bags"
                        type="button" role="tab" aria-controls="pills-Bags" aria-selected="false">Bags</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Jeans-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Jeans" type="button" role="tab" aria-controls="pills-Jeans"
                        aria-selected="false">Jeans</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContentThree">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                    aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="new-arrival-three-wrapper">
                        <div class="row gy-4">
                            <div class="col-xl-4">
                                <div class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100"
                                    data-aos="zoom-in" data-aos-duration="800">
                                    <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                        data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img1.png') }}">
                                        <div class="py-32 pe-32 text-end">
                                            <span class="text-uppercase fw-semibold text-neutral-600 text-md">Summer
                                                offer</span>
                                            <h5 class="mb-0">Get 85% Off</h5>
                                            <a href="{{route('indexThree')}}"
                                                class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                tabindex="0">
                                                Shop Now
                                                <span class="text-xl d-flex"><i
                                                        class="ph ph-shopping-cart-simple"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Velvet Blossom Dress</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Midnight Noir Leather Jacket</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-24">
                            <div class="row gy-4">
                                <div class="col-xl-8">
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Oasis Linen Jumpsuit</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Velvet Rose Clutch</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Echoes of Elegance Trench Coat
                                                        </a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4" data-aos="zoom-in" data-aos-duration="800">
                                    <div
                                        class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100">
                                        <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                            data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img2.png') }}">
                                            <div class="py-32 pe-32 text-end">
                                                <span class="text-uppercase fw-semibold text-neutral-600 text-sm">Get
                                                    extra discount on first order</span>
                                                <h5 class="mb-0 text-white fw-medium">Spring Collection</h5>
                                                <a href="{{route('indexThree')}}"
                                                    class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                    tabindex="0">
                                                    Shop Now
                                                    <span class="text-xl d-flex"><i
                                                            class="ph ph-shopping-cart-simple"></i></span>
                                                </a>
                                            </div>
                                            <div
                                                class="bg-neutral-600 rounded-circle p-lg-5 p-md-4 p--24 max-w-260 max-h-260 w-100 h-100 ms-auto">
                                                <div
                                                    class="bg-white bg-opacity-10 w-100 h-100 rounded-circle d-flex justify-content-center align-items-center">
                                                    <h3 class="text-white mb-0 fw-medium">45% <br> Off</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Jacket" role="tabpanel" aria-labelledby="pills-Jacket-tab"
                    tabindex="0">
                    <div class="new-arrival-three-wrapper">
                        <div class="row gy-4">
                            <div class="col-xl-4">
                                <div class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100"
                                    data-aos="zoom-in" data-aos-duration="800">
                                    <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                        data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img1.png') }}">
                                        <div class="py-32 pe-32 text-end">
                                            <span class="text-uppercase fw-semibold text-neutral-600 text-md">Summer
                                                offer</span>
                                            <h5 class="mb-0">Get 85% Off</h5>
                                            <a href="{{route('indexThree')}}"
                                                class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                tabindex="0">
                                                Shop Now
                                                <span class="text-xl d-flex"><i
                                                        class="ph ph-shopping-cart-simple"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Velvet Blossom Dress</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Midnight Noir Leather Jacket</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-24">
                            <div class="row gy-4">
                                <div class="col-xl-8">
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Oasis Linen Jumpsuit</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Velvet Rose Clutch</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Echoes of Elegance Trench Coat
                                                        </a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4" data-aos="zoom-in" data-aos-duration="800">
                                    <div
                                        class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100">
                                        <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                            data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img2.png') }}">
                                            <div class="py-32 pe-32 text-end">
                                                <span class="text-uppercase fw-semibold text-neutral-600 text-sm">Get
                                                    extra discount on first order</span>
                                                <h5 class="mb-0 text-white fw-medium">Spring Collection</h5>
                                                <a href="{{route('indexThree')}}"
                                                    class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                    tabindex="0">
                                                    Shop Now
                                                    <span class="text-xl d-flex"><i
                                                            class="ph ph-shopping-cart-simple"></i></span>
                                                </a>
                                            </div>
                                            <div
                                                class="bg-neutral-600 rounded-circle p-lg-5 p-md-4 p--24 max-w-260 max-h-260 w-100 h-100 ms-auto">
                                                <div
                                                    class="bg-white bg-opacity-10 w-100 h-100 rounded-circle d-flex justify-content-center align-items-center">
                                                    <h3 class="text-white mb-0 fw-medium">45% <br> Off</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Shoes" role="tabpanel" aria-labelledby="pills-Shoes-tab"
                    tabindex="0">
                    <div class="new-arrival-three-wrapper">
                        <div class="row gy-4">
                            <div class="col-xl-4">
                                <div class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100"
                                    data-aos="zoom-in" data-aos-duration="800">
                                    <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                        data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img1.png') }}">
                                        <div class="py-32 pe-32 text-end">
                                            <span class="text-uppercase fw-semibold text-neutral-600 text-md">Summer
                                                offer</span>
                                            <h5 class="mb-0">Get 85% Off</h5>
                                            <a href="{{route('indexThree')}}"
                                                class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                tabindex="0">
                                                Shop Now
                                                <span class="text-xl d-flex"><i
                                                        class="ph ph-shopping-cart-simple"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Velvet Blossom Dress</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Midnight Noir Leather Jacket</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-24">
                            <div class="row gy-4">
                                <div class="col-xl-8">
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Oasis Linen Jumpsuit</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Velvet Rose Clutch</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Echoes of Elegance Trench Coat
                                                        </a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4" data-aos="zoom-in" data-aos-duration="800">
                                    <div
                                        class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100">
                                        <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                            data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img2.png') }}">
                                            <div class="py-32 pe-32 text-end">
                                                <span class="text-uppercase fw-semibold text-neutral-600 text-sm">Get
                                                    extra discount on first order</span>
                                                <h5 class="mb-0 text-white fw-medium">Spring Collection</h5>
                                                <a href="{{route('indexThree')}}"
                                                    class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                    tabindex="0">
                                                    Shop Now
                                                    <span class="text-xl d-flex"><i
                                                            class="ph ph-shopping-cart-simple"></i></span>
                                                </a>
                                            </div>
                                            <div
                                                class="bg-neutral-600 rounded-circle p-lg-5 p-md-4 p--24 max-w-260 max-h-260 w-100 h-100 ms-auto">
                                                <div
                                                    class="bg-white bg-opacity-10 w-100 h-100 rounded-circle d-flex justify-content-center align-items-center">
                                                    <h3 class="text-white mb-0 fw-medium">45% <br> Off</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Hats" role="tabpanel" aria-labelledby="pills-Hats-tab"
                    tabindex="0">
                    <div class="new-arrival-three-wrapper">
                        <div class="row gy-4">
                            <div class="col-xl-4">
                                <div class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100"
                                    data-aos="zoom-in" data-aos-duration="800">
                                    <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                        data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img1.png') }}">
                                        <div class="py-32 pe-32 text-end">
                                            <span class="text-uppercase fw-semibold text-neutral-600 text-md">Summer
                                                offer</span>
                                            <h5 class="mb-0">Get 85% Off</h5>
                                            <a href="{{route('indexThree')}}"
                                                class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                tabindex="0">
                                                Shop Now
                                                <span class="text-xl d-flex"><i
                                                        class="ph ph-shopping-cart-simple"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Velvet Blossom Dress</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Midnight Noir Leather Jacket</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-24">
                            <div class="row gy-4">
                                <div class="col-xl-8">
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Oasis Linen Jumpsuit</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Velvet Rose Clutch</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Echoes of Elegance Trench Coat
                                                        </a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4" data-aos="zoom-in" data-aos-duration="800">
                                    <div
                                        class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100">
                                        <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                            data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img2.png') }}">
                                            <div class="py-32 pe-32 text-end">
                                                <span class="text-uppercase fw-semibold text-neutral-600 text-sm">Get
                                                    extra discount on first order</span>
                                                <h5 class="mb-0 text-white fw-medium">Spring Collection</h5>
                                                <a href="{{route('indexThree')}}"
                                                    class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                    tabindex="0">
                                                    Shop Now
                                                    <span class="text-xl d-flex"><i
                                                            class="ph ph-shopping-cart-simple"></i></span>
                                                </a>
                                            </div>
                                            <div
                                                class="bg-neutral-600 rounded-circle p-lg-5 p-md-4 p--24 max-w-260 max-h-260 w-100 h-100 ms-auto">
                                                <div
                                                    class="bg-white bg-opacity-10 w-100 h-100 rounded-circle d-flex justify-content-center align-items-center">
                                                    <h3 class="text-white mb-0 fw-medium">45% <br> Off</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Goggles" role="tabpanel" aria-labelledby="pills-Goggles-tab"
                    tabindex="0">
                    <div class="new-arrival-three-wrapper">
                        <div class="row gy-4">
                            <div class="col-xl-4">
                                <div class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100"
                                    data-aos="zoom-in" data-aos-duration="800">
                                    <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                        data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img1.png') }}">
                                        <div class="py-32 pe-32 text-end">
                                            <span class="text-uppercase fw-semibold text-neutral-600 text-md">Summer
                                                offer</span>
                                            <h5 class="mb-0">Get 85% Off</h5>
                                            <a href="{{route('indexThree')}}"
                                                class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                tabindex="0">
                                                Shop Now
                                                <span class="text-xl d-flex"><i
                                                        class="ph ph-shopping-cart-simple"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Velvet Blossom Dress</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Midnight Noir Leather Jacket</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-24">
                            <div class="row gy-4">
                                <div class="col-xl-8">
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Oasis Linen Jumpsuit</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Velvet Rose Clutch</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Echoes of Elegance Trench Coat
                                                        </a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4" data-aos="zoom-in" data-aos-duration="800">
                                    <div
                                        class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100">
                                        <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                            data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img2.png') }}">
                                            <div class="py-32 pe-32 text-end">
                                                <span class="text-uppercase fw-semibold text-neutral-600 text-sm">Get
                                                    extra discount on first order</span>
                                                <h5 class="mb-0 text-white fw-medium">Spring Collection</h5>
                                                <a href="{{route('indexThree')}}"
                                                    class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                    tabindex="0">
                                                    Shop Now
                                                    <span class="text-xl d-flex"><i
                                                            class="ph ph-shopping-cart-simple"></i></span>
                                                </a>
                                            </div>
                                            <div
                                                class="bg-neutral-600 rounded-circle p-lg-5 p-md-4 p--24 max-w-260 max-h-260 w-100 h-100 ms-auto">
                                                <div
                                                    class="bg-white bg-opacity-10 w-100 h-100 rounded-circle d-flex justify-content-center align-items-center">
                                                    <h3 class="text-white mb-0 fw-medium">45% <br> Off</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Bags" role="tabpanel" aria-labelledby="pills-Bags-tab"
                    tabindex="0">
                    <div class="new-arrival-three-wrapper">
                        <div class="row gy-4">
                            <div class="col-xl-4">
                                <div class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100"
                                    data-aos="zoom-in" data-aos-duration="800">
                                    <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                        data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img1.png') }}">
                                        <div class="py-32 pe-32 text-end">
                                            <span class="text-uppercase fw-semibold text-neutral-600 text-md">Summer
                                                offer</span>
                                            <h5 class="mb-0">Get 85% Off</h5>
                                            <a href="{{route('indexThree')}}"
                                                class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                tabindex="0">
                                                Shop Now
                                                <span class="text-xl d-flex"><i
                                                        class="ph ph-shopping-cart-simple"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Velvet Blossom Dress</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Midnight Noir Leather Jacket</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-24">
                            <div class="row gy-4">
                                <div class="col-xl-8">
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Oasis Linen Jumpsuit</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Velvet Rose Clutch</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Echoes of Elegance Trench Coat
                                                        </a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4" data-aos="zoom-in" data-aos-duration="800">
                                    <div
                                        class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100">
                                        <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                            data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img2.png') }}">
                                            <div class="py-32 pe-32 text-end">
                                                <span class="text-uppercase fw-semibold text-neutral-600 text-sm">Get
                                                    extra discount on first order</span>
                                                <h5 class="mb-0 text-white fw-medium">Spring Collection</h5>
                                                <a href="{{route('indexThree')}}"
                                                    class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                    tabindex="0">
                                                    Shop Now
                                                    <span class="text-xl d-flex"><i
                                                            class="ph ph-shopping-cart-simple"></i></span>
                                                </a>
                                            </div>
                                            <div
                                                class="bg-neutral-600 rounded-circle p-lg-5 p-md-4 p--24 max-w-260 max-h-260 w-100 h-100 ms-auto">
                                                <div
                                                    class="bg-white bg-opacity-10 w-100 h-100 rounded-circle d-flex justify-content-center align-items-center">
                                                    <h3 class="text-white mb-0 fw-medium">45% <br> Off</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Jeans" role="tabpanel" aria-labelledby="pills-Jeans-tab"
                    tabindex="0">
                    <div class="new-arrival-three-wrapper">
                        <div class="row gy-4">
                            <div class="col-xl-4">
                                <div class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100"
                                    data-aos="zoom-in" data-aos-duration="800">
                                    <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                        data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img1.png') }}">
                                        <div class="py-32 pe-32 text-end">
                                            <span class="text-uppercase fw-semibold text-neutral-600 text-md">Summer
                                                offer</span>
                                            <h5 class="mb-0">Get 85% Off</h5>
                                            <a href="{{route('indexThree')}}"
                                                class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                tabindex="0">
                                                Shop Now
                                                <span class="text-xl d-flex"><i
                                                        class="ph ph-shopping-cart-simple"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Velvet Blossom Dress</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                        <div
                                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                    <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                        alt="img" class="w-auto max-w-unset">
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
                                                    <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                        tabindex="0">Midnight Noir Leather Jacket</a>
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
                                                    <span
                                                        class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                        $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                            class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>
                                                <a href="{{route('cart')}}"
                                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                    tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-24">
                            <div class="row gy-4">
                                <div class="col-xl-8">
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img1.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Oasis Linen Jumpsuit</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Velvet Rose Clutch</a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                            <div
                                                class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                                <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                                    <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                        <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                            alt="img" class="w-auto max-w-unset">
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
                                                        <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                            tabindex="0">Echoes of Elegance Trench Coat
                                                        </a>
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
                                                        <span
                                                            class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                                            $28.99</span>
                                                        <span class="text-heading text-md fw-semibold ">$14.99 <span
                                                                class="text-gray-500 fw-normal">/Qty</span> </span>
                                                    </div>
                                                    <a href="{{route('cart')}}"
                                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                                        tabindex="0">
                                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4" data-aos="zoom-in" data-aos-duration="800">
                                    <div
                                        class="rounded-24 overflow-hidden border border-main-two-600 p-16 bg-color-three h-100">
                                        <div class="bg-img w-100 h-100 min-h-485 rounded-24 overflow-hidden"
                                            data-background-image="{{ asset('assets/images/thumbs/new-arrival-promo-img2.png') }}">
                                            <div class="py-32 pe-32 text-end">
                                                <span class="text-uppercase fw-semibold text-neutral-600 text-sm">Get
                                                    extra discount on first order</span>
                                                <h5 class="mb-0 text-white fw-medium">Spring Collection</h5>
                                                <a href="{{route('indexThree')}}"
                                                    class="btn btn-black rounded-pill gap-8 mt-32 flex-align d-inline-flex"
                                                    tabindex="0">
                                                    Shop Now
                                                    <span class="text-xl d-flex"><i
                                                            class="ph ph-shopping-cart-simple"></i></span>
                                                </a>
                                            </div>
                                            <div
                                                class="bg-neutral-600 rounded-circle p-lg-5 p-md-4 p--24 max-w-260 max-h-260 w-100 h-100 ms-auto">
                                                <div
                                                    class="bg-white bg-opacity-10 w-100 h-100 rounded-circle d-flex justify-content-center align-items-center">
                                                    <h3 class="text-white mb-0 fw-medium">45% <br> Off</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== New Arrival Three Section End ===================================== -->


    <!-- ================================ Deals Section Start =================================== -->
    <section class="deals pb-120">
        <div class="container container-lg">
            <div class="bg-neutral-600 rounded-48 bg-img"
                data-background-image="{{ asset('assets/images/bg/pattern-two.png') }}">
                <div class="row gy-4 align-items-center">
                    <div class="col-xl-6 d-md-block d-none">
                        <div class="position-relative px-24">
                            <ul class="products-group">
                                <li class="products-group__list pt-12">
                                    <span
                                        class="w-32 h-32 border border-white rounded-circle flex-center position-relative overflow-hidden border-2 bg-blur cursor-pointer">
                                        <span class="w-12 h-12 rounded-circle bg-white"></span>
                                    </span>
                                    <div
                                        class="products-group__card product-card w-100 p-16 border border-gray-100 hover-border-main-600 max-w-340 rounded-16 transition-2 bg-white position-absolute bottom-100 start-50 min-width-max-content rotate-10 transition-2">
                                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}"
                                                    alt="img" class="w-auto max-w-unset">
                                            </a>
                                            <button type="button"
                                                class="z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16  text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                                <i class="ph-fill ph-heart text-main-two-600"></i>
                                            </button>
                                        </div>
                                        <div class="product-card__content mt-16 w-100">
                                            <h6 class="title text-2xl fw-semibold my-8">
                                                <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                    tabindex="0">Women's fashion Bag</a>
                                            </h6>
                                            <div class="product-card__price mt-8 mb-8">
                                                <span class="text-neutral-600 text-lg fw-semibold">$24.00 USD</span>
                                                <span
                                                    class="text-gray-400 text-lg fw-semibold text-decoration-line-through">
                                                    $25.00 USD</span>
                                            </div>
                                            <div class="flex-align gap-6">
                                                <span class="text-lg fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg fw-medium text-gray-500">4.8</span>
                                                <span class="text-lg fw-medium text-gray-500">(12K)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="products-group__list pt-12">
                                    <span
                                        class="w-32 h-32 border border-white rounded-circle flex-center position-relative overflow-hidden border-2 bg-blur cursor-pointer">
                                        <span class="w-12 h-12 rounded-circle bg-white"></span>
                                    </span>
                                    <div
                                        class="products-group__card product-card w-100 p-16 border border-gray-100 hover-border-main-600 max-w-340 rounded-16 transition-2 bg-white position-absolute bottom-100 start-50 min-width-max-content rotate-10 transition-2">
                                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                <img src="{{ asset('assets/images/thumbs/trending-three-img4.png') }}"
                                                    alt="img" class="w-auto max-w-unset">
                                            </a>
                                            <button type="button"
                                                class="z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16  text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                                <i class="ph-fill ph-heart text-main-two-600"></i>
                                            </button>
                                        </div>
                                        <div class="product-card__content mt-16 w-100">
                                            <h6 class="title text-2xl fw-semibold my-8">
                                                <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                    tabindex="0">Echoes of Elegance Trench Coat
                                                </a>
                                            </h6>
                                            <div class="product-card__price mt-8 mb-8">
                                                <span class="text-neutral-600 text-lg fw-semibold">$24.00 USD</span>
                                                <span
                                                    class="text-gray-400 text-lg fw-semibold text-decoration-line-through">
                                                    $25.00 USD</span>
                                            </div>
                                            <div class="flex-align gap-6">
                                                <span class="text-lg fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg fw-medium text-gray-500">4.8</span>
                                                <span class="text-lg fw-medium text-gray-500">(12K)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="products-group__list pt-12">
                                    <span
                                        class="w-32 h-32 border border-white rounded-circle flex-center position-relative overflow-hidden border-2 bg-blur cursor-pointer">
                                        <span class="w-12 h-12 rounded-circle bg-white"></span>
                                    </span>
                                    <div
                                        class="products-group__card product-card w-100 p-16 border border-gray-100 hover-border-main-600 max-w-340 rounded-16 transition-2 bg-white position-absolute bottom-100 start-50 min-width-max-content rotate-10 transition-2">
                                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                                <img src="{{ asset('assets/images/thumbs/trending-three-img2.png') }}"
                                                    alt="img" class="w-auto max-w-unset">
                                            </a>
                                            <button type="button"
                                                class="z-1 position-absolute inset-inline-end-0 inset-block-start-0 me-16 mt-16  text-neutral-600 text-xl flex-center hover-text-main-two-600 wishlist-btn">
                                                <i class="ph-fill ph-heart text-main-two-600"></i>
                                            </button>
                                        </div>
                                        <div class="product-card__content mt-16 w-100">
                                            <h6 class="title text-2xl fw-semibold my-8">
                                                <a href="{{route('shop.details.two')}}" class="link text-line-2"
                                                    tabindex="0">Ivory Lace Peplum Top</a>
                                            </h6>
                                            <div class="product-card__price mt-8 mb-8">
                                                <span class="text-neutral-600 text-lg fw-semibold">$24.00 USD</span>
                                                <span
                                                    class="text-gray-400 text-lg fw-semibold text-decoration-line-through">
                                                    $25.00 USD</span>
                                            </div>
                                            <div class="flex-align gap-6">
                                                <span class="text-lg fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg fw-medium text-gray-500">4.8</span>
                                                <span class="text-lg fw-medium text-gray-500">(12K)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="text-end" data-aos="fade-up" data-aos-duration="600">
                                <img src="{{ asset('assets/images/thumbs/deals-img.png') }}" alt="img"
                                    class="pe-xxl-5 pe-lg-4 deals__img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" data-aos="zoom-in">
                        <div class="p-56-px">
                            <div class="text-center border border-white rounded-80 rounded-top-right-0 p-56-px">
                                <div class="p-56-px bg-white rounded-80 rounded-top-right-0">
                                    <div class="max-w-472 mx-auto">
                                        <span
                                            class="text-white bg-neutral-600 py-8 px-16 rounded-pill fw-medium text-md mb-32 text-uppercase">Only
                                            For Today</span>
                                        <h3 class="mb-32 fw-medium text-uppercase">Deal of The Day</h3>
                                        <p class="text-neutral-600">Deal of the day for deals on consumer fashion cloths
                                            for many other great daily offers</p>
                                    </div>
                                    <div class="mt-48">
                                        <div class="countdown" id="countdown24">
                                            <ul class="countdown-list style-four flex-center flex-wrap gap-24">
                                                <li>
                                                    <span
                                                        class="days flex-center w-80 h-80 fw-semibold text-white rounded-16 bg-main-two-600 text-28"></span>
                                                    <span
                                                        class="mt-8 text-neutral-600 text-xl text-uppercase fw-medium d-block text-center">Days</span>
                                                </li>
                                                <li>
                                                    <span
                                                        class="hours flex-center w-80 h-80 fw-semibold text-white rounded-16 bg-main-two-600 text-28"></span>
                                                    <span
                                                        class="mt-8 text-neutral-600 text-xl text-uppercase fw-medium d-block text-center">Hour</span>
                                                </li>
                                                <li>
                                                    <span
                                                        class="minutes flex-center w-80 h-80 fw-semibold text-white rounded-16 bg-main-two-600 text-28"></span>
                                                    <span
                                                        class="mt-8 text-neutral-600 text-xl text-uppercase fw-medium d-block text-center">Min</span>
                                                </li>
                                                <li>
                                                    <span
                                                        class="seconds flex-center  w-80 h-80 fw-semibold text-white rounded-16 bg-main-two-600 text-28"></span>
                                                    <span
                                                        class="mt-8 text-neutral-600 text-xl text-uppercase fw-medium d-block text-center">Sec</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================ Deals Section End =================================== -->

    <!-- ============================= Popular Products Three start ============================ -->
    <section class="popular-products-three pb-120 overflow-hidden">
        <div class="container container-lg">
            <div class="section-heading mb-24">
                <h5 class="mb-0 text-uppercase wow fadeInLeft">Popular Products</h5>
            </div>
            <div class="row gy-4">
                <div class="col-xxl-3 col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                    <div
                        class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/trending-three-img7.png') }}" alt="img"
                                    class="w-auto max-w-unset">
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
                                <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax Mini
                                    12 Instant Film Camera - Green</a>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="{{route('cart')}}"
                                class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}" alt="img"
                                    class="w-auto max-w-unset">
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
                                <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax Mini
                                    12 Instant Film Camera - Green</a>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="{{route('cart')}}"
                                class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/trending-three-img8.png') }}" alt="img"
                                    class="w-auto max-w-unset">
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
                                <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax Mini
                                    12 Instant Film Camera - Green</a>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="{{route('cart')}}"
                                class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/trending-three-img9.png') }}" alt="img"
                                    class="w-auto max-w-unset">
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
                                <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax Mini
                                    12 Instant Film Camera - Green</a>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="{{route('cart')}}"
                                class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                    <div
                        class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/trending-three-img3.png') }}" alt="img"
                                    class="w-auto max-w-unset">
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
                                <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax Mini
                                    12 Instant Film Camera - Green</a>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="{{route('cart')}}"
                                class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/trending-three-img5.png') }}" alt="img"
                                    class="w-auto max-w-unset">
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
                                <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax Mini
                                    12 Instant Film Camera - Green</a>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="{{route('cart')}}"
                                class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/trending-three-img10.png') }}" alt="img"
                                    class="w-auto max-w-unset">
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
                                <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax Mini
                                    12 Instant Film Camera - Green</a>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="{{route('cart')}}"
                                class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                            <a href="{{route('shop.details.two')}}" class="w-100 h-100 flex-center">
                                <img src="{{ asset('assets/images/thumbs/trending-three-img6.png') }}" alt="img"
                                    class="w-auto max-w-unset">
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
                                <a href="{{route('shop.details.two')}}" class="link text-line-2" tabindex="0">Instax Mini
                                    12 Instant Film Camera - Green</a>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span
                                        class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="{{route('cart')}}"
                                class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium"
                                tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================= Popular Products Three End ============================ -->

    <!-- ================================ Brand Three Start ============================= -->
    <div class="top-brand pb-80 overflow-hidden">
        <div class="container container-lg">
            <div class="border border-gray-100 p-24 rounded-16">
                <div class="section-heading mb-24">
                    <div class="flex-between flex-wrap gap-8">
                        <h5 class="mb-0 text-uppercase">Top Brands</h5>
                        <div class="flex-align gap-8">
                            <button type="button" id="topBrand-prev"
                                class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-two-600 text-xl hover-bg-main-two-600 hover-text-white transition-1">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="topBrand-next"
                                class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-two-600 text-xl hover-bg-main-two-600 hover-text-white transition-1">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="top-brand__slider">
                    <div class="wow bounceIn">
                        <img src="{{ asset('assets/images/thumbs/brand-three-img1.png') }}" alt="img">
                    </div>
                    <div class="wow bounceIn">
                        <img src="{{ asset('assets/images/thumbs/brand-three-img2.png') }}" alt="img">
                    </div>
                    <div class="wow bounceIn">
                        <img src="{{ asset('assets/images/thumbs/brand-three-img3.png') }}" alt="img">
                    </div>
                    <div class="wow bounceIn">
                        <img src="{{ asset('assets/images/thumbs/brand-three-img4.png') }}" alt="img">
                    </div>
                    <div class="wow bounceIn">
                        <img src="{{ asset('assets/images/thumbs/brand-three-img5.png') }}" alt="img">
                    </div>
                    <div class="wow bounceIn">
                        <img src="{{ asset('assets/images/thumbs/brand-three-img6.png') }}" alt="img">
                    </div>
                    <div class="wow bounceIn">
                        <img src="{{ asset('assets/images/thumbs/brand-three-img7.png') }}" alt="img">
                    </div>
                    <div class="wow bounceIn">
                        <img src="{{ asset('assets/images/thumbs/brand-three-img8.png') }}" alt="img">
                    </div>
                    <div class="wow bounceIn">
                        <img src="{{ asset('assets/images/thumbs/brand-three-img5.png') }}" alt="img">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ================================ Brand Three End ============================= -->

    <!-- ========================== Shipping Section Start ============================ -->
    <section class="shipping mt-80 pb-120" id="shipping">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex-center rounded-circle bg-main-two-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-car-profile"></i></span>
                        <div class="">
                            <h6 class="mb-0">Free Shipping</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex-center rounded-circle bg-main-two-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-hand-heart"></i></span>
                        <div class="">
                            <h6 class="mb-0"> 100% Satisfaction</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex-center rounded-circle bg-main-two-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-credit-card"></i></span>
                        <div class="">
                            <h6 class="mb-0"> Secure Payments</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex-center rounded-circle bg-main-two-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-chats"></i></span>
                        <div class="">
                            <h6 class="mb-0"> 24/7 Support</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Shipping Section End ============================ -->

    <!-- ============================== Testimonial section start ======================= -->
    <section class="testimonials py-120 bg-neutral-600 bg-img overflow-hidden"
        data-background-image="{{ asset('assets/images/bg/pattern-two.png') }}">
        <div class="container container-lg">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-1">
                    <div class="section-heading mb-0 d-flex flex-column align-items-center writing-mode wow fadeInLeft">
                        <p class="text-white">Share information about your brand with your customers.</p>
                        <h5 class="text-white mb-0 text-uppercase">Customers Feedback</h5>
                    </div>
                </div>
                <div class="col-xl-11">
                    <div class="position-relative">
                        <div class="testimonials-slider mb-60">
                            <div class="testimonials-item">
                                <h6 class="text-white text-uppercase mb-8 fw-medium">ROBIUL HASAN</h6>
                                <span class="text-md text-white fw-normal">Business Owner</span>
                                <div class="flex-align gap-8 mt-24">
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
                                <p class="testimonials-item__desc text-white text-2xl fw-normal mt-40 max-w-990">Customers
                                    expressed that shopping at Asiana Fashion was a "delightful experience," highlighting
                                    the vibrant colors and unique designs that made them feel special at events </p>
                            </div>
                            <div class="testimonials-item">
                                <h6 class="text-white text-uppercase mb-8 fw-medium">SAMIYA AKTER</h6>
                                <span class="text-md text-white fw-normal">Front End Developer</span>
                                <div class="flex-align gap-8 mt-24">
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
                                <p class="testimonials-item__desc text-white text-2xl fw-normal mt-40 max-w-990">Contrary
                                    to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                    McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                            </div>
                            <div class="testimonials-item">
                                <h6 class="text-white text-uppercase mb-8 fw-medium">JOHN DOE</h6>
                                <span class="text-md text-white fw-normal">Max Model</span>
                                <div class="flex-align gap-8 mt-24">
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
                                <p class="testimonials-item__desc text-white text-2xl fw-normal mt-40 max-w-990">It is a
                                    long established fact that a reader will be distracted by the readable content of a page
                                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using 'Content here, content here'</p>
                            </div>
                            <div class="testimonials-item">
                                <h6 class="text-white text-uppercase mb-8 fw-medium">MICHEL SMITH</h6>
                                <span class="text-md text-white fw-normal">Former Model</span>
                                <div class="flex-align gap-8 mt-24">
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
                                <p class="testimonials-item__desc text-white text-2xl fw-normal mt-40 max-w-990">Many
                                    desktop publishing packages and web page editors now use Lorem Ipsum as their default
                                    model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                                    infancy. </p>
                            </div>
                            <div class="testimonials-item">
                                <h6 class="text-white text-uppercase mb-8 fw-medium">ALEX</h6>
                                <span class="text-md text-white fw-normal">Back End Developer</span>
                                <div class="flex-align gap-8 mt-24">
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
                                <p class="testimonials-item__desc text-white text-2xl fw-normal mt-40 max-w-990">There are
                                    many variations of passages of Lorem Ipsum available, but the majority have suffered
                                    alteration in some form, by injected humour, or randomised words which don't look even
                                    slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                    sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div>
                        <div class="testimonials-thumbs-slider">
                            <div class="testimonials-thumbs d-flex position-relative align-items-end justify-content-end">
                                <div class="testimonials-thumbs__img">
                                    <img src="{{ asset('assets/images/thumbs/testimonials-img1.png') }}"
                                        alt="img" class="cover-img">
                                </div>
                                <div
                                    class="testimonials-thumbs__content position-absolute transition-2 bottom-0 start-50 translate-middle-x mb-16 text-center hidden opacity-0">
                                    <h6 class="text-white text-uppercase mb-8 fw-medium">ROBIUL HASAN</h6>
                                    <span class="text-md text-white fw-normal">Business Owner</span>
                                </div>
                            </div>
                            <div class="testimonials-thumbs d-flex position-relative align-items-end justify-content-end">
                                <div class="testimonials-thumbs__img">
                                    <img src="{{ asset('assets/images/thumbs/testimonials-img2.png') }}"
                                        alt="img" class="cover-img">
                                </div>
                                <div
                                    class="testimonials-thumbs__content position-absolute transition-2 bottom-0 start-50 translate-middle-x mb-16 text-center hidden opacity-0">
                                    <h6 class="text-white text-uppercase mb-8 fw-medium">SAMIYA AKTER</h6>
                                    <span class="text-md text-white fw-normal">Front End Developer</span>
                                </div>
                            </div>
                            <div class="testimonials-thumbs d-flex position-relative align-items-end justify-content-end">
                                <div class="testimonials-thumbs__img">
                                    <img src="{{ asset('assets/images/thumbs/testimonials-img3.png') }}"
                                        alt="img" class="cover-img">
                                </div>
                                <div
                                    class="testimonials-thumbs__content position-absolute transition-2 bottom-0 start-50 translate-middle-x mb-16 text-center hidden opacity-0">
                                    <h6 class="text-white text-uppercase mb-8 fw-medium">JOHN DOE</h6>
                                    <span class="text-md text-white fw-normal">Max Model</span>
                                </div>
                            </div>
                            <div class="testimonials-thumbs d-flex position-relative align-items-end justify-content-end">
                                <div class="testimonials-thumbs__img">
                                    <img src="{{ asset('assets/images/thumbs/testimonials-img4.png') }}"
                                        alt="img" class="cover-img">
                                </div>
                                <div
                                    class="testimonials-thumbs__content position-absolute transition-2 bottom-0 start-50 translate-middle-x mb-16 text-center hidden opacity-0">
                                    <h6 class="text-white text-uppercase mb-8 fw-medium">MICHEL SMITH</h6>
                                    <span class="text-md text-white fw-normal">Former Model</span>
                                </div>
                            </div>
                            <div class="testimonials-thumbs d-flex position-relative align-items-end justify-content-end">
                                <div class="testimonials-thumbs__img">
                                    <img src="{{ asset('assets/images/thumbs/testimonials-img2.png') }}"
                                        alt="img" class="cover-img">
                                </div>
                                <div
                                    class="testimonials-thumbs__content position-absolute transition-2 bottom-0 start-50 translate-middle-x mb-16 text-center hidden opacity-0">
                                    <h6 class="text-white text-uppercase mb-8 fw-medium">ALEX</h6>
                                    <span class="text-md text-white fw-normal">Back End Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="flex-center gap-8 mt-48">
                <button type="button" id="testi-prev"
                    class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 text-white transition-1">
                    <i class="ph ph-caret-left"></i>
                </button>
                <button type="button" id="testi-next"
                    class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 text-white transition-1">
                    <i class="ph ph-caret-right"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- ============================== Testimonial section start ======================= -->

    <!-- ================================ Instagram section start ===================================== -->
    <section class="instagram py-120 overflow-hidden">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <div class="">
                        <h5 class="mb-0 text-uppercase">Instagram</h5>
                        <p class="text-gray-500">Get inspired by Carina fans from all around the world</p>
                    </div>
                    <div class="flex-align gap-16">
                        <a href="{{route('indexThree')}}"
                            class="text-sm fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                            All</a>
                        <div class="flex-align gap-8">
                            <button type="button" id="instagram-prev"
                                class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="instagram-next"
                                class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="instagram-slider">
                <div data-aos="fade-up" data-aos-duration="400">
                    <div class="instagram-item rounded-24 overflow-hidden position-relative">
                        <img src="{{ asset('assets/images/thumbs/instagram-img1.png') }}" alt="img">
                        <a href="https://www.instagram.com"
                            class="w-72 h-72 bg-black bg-opacity-50 text-white text-32 position-absolute top-50 start-50 translate-middle flex-center rounded-circle hover-bg-main-two-600 hover-text-white">
                            <i class="ph ph-instagram-logo"></i>
                        </a>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600">
                    <div class="instagram-item rounded-24 overflow-hidden position-relative">
                        <img src="{{ asset('assets/images/thumbs/instagram-img2.png') }}" alt="img">
                        <a href="https://www.instagram.com"
                            class="w-72 h-72 bg-black bg-opacity-50 text-white text-32 position-absolute top-50 start-50 translate-middle flex-center rounded-circle hover-bg-main-two-600 hover-text-white">
                            <i class="ph ph-instagram-logo"></i>
                        </a>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="800">
                    <div class="instagram-item rounded-24 overflow-hidden position-relative">
                        <img src="{{ asset('assets/images/thumbs/instagram-img3.png') }}" alt="img">
                        <a href="https://www.instagram.com"
                            class="w-72 h-72 bg-black bg-opacity-50 text-white text-32 position-absolute top-50 start-50 translate-middle flex-center rounded-circle hover-bg-main-two-600 hover-text-white">
                            <i class="ph ph-instagram-logo"></i>
                        </a>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000">
                    <div class="instagram-item rounded-24 overflow-hidden position-relative">
                        <img src="{{ asset('assets/images/thumbs/instagram-img4.png') }}" alt="img">
                        <a href="https://www.instagram.com"
                            class="w-72 h-72 bg-black bg-opacity-50 text-white text-32 position-absolute top-50 start-50 translate-middle flex-center rounded-circle hover-bg-main-two-600 hover-text-white">
                            <i class="ph ph-instagram-logo"></i>
                        </a>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1200">
                    <div class="instagram-item rounded-24 overflow-hidden position-relative">
                        <img src="{{ asset('assets/images/thumbs/instagram-img2.png') }}" alt="img">
                        <a href="https://www.instagram.com"
                            class="w-72 h-72 bg-black bg-opacity-50 text-white text-32 position-absolute top-50 start-50 translate-middle flex-center rounded-circle hover-bg-main-two-600 hover-text-white">
                            <i class="ph ph-instagram-logo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================ Instagram section end ===================================== -->

    <!-- =============================== Newsletter-two Section Start ============================ -->
    <div class="newsletter-two bg-neutral-600 py-32 overflow-hidden" data-aos="fade-up" data-aos-duration="600">
        <div class="container container-lg">
            <div class="flex-between gap-20 flex-wrap">
                <div class="flex-align gap-22">
                    <span class="d-flex"><img src="{{ asset('assets/images/icon/envelop.png') }}"
                            alt="img"></span>
                    <div>
                        <h5 class="text-white mb-12 fw-medium">Join Our Newsletter, Get 10% Off</h5>
                        <p class="text-white fw-light">Get all latest information on events, sales and offer</p>
                    </div>
                </div>
                <form action="#" class="newsletter-two__form w-50">
                    @csrf
                    <div class="flex-align gap-16">
                        <input type="text" class="common-input style-two rounded-8 flex-grow-1 py-14"
                            placeholder="Enter your email address">
                        <button type="submit" class="btn btn-main-two flex-shrink-0 rounded-8 py-16">
                            Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- =============================== Newsletter-two Section End ============================ -->

    <!-- ========================== footer area ============================ -->
    @include('frontend.includes.footers.footerThree')
    <!-- ========================== footer area end 
============================ -->
@endsection
