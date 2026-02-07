@extends('frontend.layouts.app')
@section('title', 'Vendor')
@section('content')
    <!-- ============================ header area ============================ -->
    @include('frontend.includes.headers.headerTwo')
    <!-- ============================ header area end ============================ -->

    <!-- ========================= Breadcrumb Start =============================== -->
    <div class="breadcrumb mb-0 py-26 bg-main-50">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <h6 class="mb-0">Shop</h6>
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
                    <li class="text-sm text-main-600">Vendor List</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ========================= Breadcrumb End =============================== -->

    <!-- =================================== Vendors List section start ===================================== -->
    <section class="vendors-list py-80">
        <div class="container container-lg">
            <div class="flex-between flex-wrap gap-8 mb-40">
                <span class="text-neutral-600 fw-medium px-40 py-12 rounded-pill border border-neutral-100">Showing 1-20 of
                    85 results</span>

                <div class="flex-align gap-16">
                    <form action="#" class="search-form__wrapper position-relative d-block">
                        @csrf
                        <input type="text" class="search-form__input common-input py-13 ps-16 pe-18 rounded-pill pe-44"
                            placeholder="Search vendors by name or ID..." />
                        <button type="submit"
                            class="w-32 h-32 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
                            <i class="ph ph-magnifying-glass"></i>
                        </button>
                    </form>
                    <div class="flex-align gap-8">
                        <span class="text-gray-900 flex-shrink-0">Sort by:</span>
                        <select
                            class="common-input form-select rounded-pill border border-gray-100 d-inline-block ps-20 pe-36 h-48 py-0 fw-medium">
                            <option value="1">Latest</option>
                            <option value="1">Old</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row gy-4 vendor-card-wrapper">
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="200">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo1.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">Organic Market</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo2.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">Safeway</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo3.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">Food Max</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo4.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">HRmart</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="200">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo5.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">Lucky Supermarket</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo6.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">Arico Farmer</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo7.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">Farmer Market</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo8.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">Foodsco</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="200">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo1.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">Organic Market</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo2.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">Safeway</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo3.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">Food Max</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="{{asset('assets/images/thumbs/vendor-logo4.png')}}" alt="img"
                                class="vendor-card__logo m-12" />
                            <h6 class="title mt-32">
                                <a href="{{route('vendor.details')}}" class="">HRmart</a>
                            </h6>
                            <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                            <a href="{{route('shop')}}"
                                class="bg-white text-neutral-600 hover-bg-main-600 hover-text-white rounded-pill py-6 px-16 text-12 mt-8">$5
                                off Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img1.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img2.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img3.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img4.png')}}" alt="img" />
                            </div>
                            <div class="vendor-card__item bg-white rounded-circle flex-center">
                                <img src="{{asset('assets/images/thumbs/vendor-img5.png')}}" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination flex-center flex-wrap gap-16">
                <li class="page-item">
                    <a class="page-link h-64 w-64 flex-center text-xxl rounded-circle fw-medium text-neutral-600 border border-gray-100"
                        href="#">
                        <i class="ph-bold ph-arrow-left"></i>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link h-64 w-64 flex-center text-md rounded-circle fw-medium text-neutral-600 border border-gray-100"
                        href="#">01</a>
                </li>
                <li class="page-item">
                    <a class="page-link h-64 w-64 flex-center text-md rounded-circle fw-medium text-neutral-600 border border-gray-100"
                        href="#">02</a>
                </li>
                <li class="page-item">
                    <a class="page-link h-64 w-64 flex-center text-md rounded-circle fw-medium text-neutral-600 border border-gray-100"
                        href="#">03</a>
                </li>
                <li class="page-item">
                    <a class="page-link h-64 w-64 flex-center text-md rounded-circle fw-medium text-neutral-600 border border-gray-100"
                        href="#">04</a>
                </li>
                <li class="page-item">
                    <a class="page-link h-64 w-64 flex-center text-md rounded-circle fw-medium text-neutral-600 border border-gray-100"
                        href="#">05</a>
                </li>
                <li class="page-item">
                    <a class="page-link h-64 w-64 flex-center text-md rounded-circle fw-medium text-neutral-600 border border-gray-100"
                        href="#">06</a>
                </li>
                <li class="page-item">
                    <a class="page-link h-64 w-64 flex-center text-md rounded-circle fw-medium text-neutral-600 border border-gray-100"
                        href="#">07</a>
                </li>
                <li class="page-item">
                    <a class="page-link h-64 w-64 flex-center text-xxl rounded-circle fw-medium text-neutral-600 border border-gray-100"
                        href="#">
                        <i class="ph-bold ph-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- =================================== Vendors List section End ===================================== -->

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

    <!-- =============================== Newsletter Section Start ============================ -->
    <div class="newsletter">
        <div class="container container-lg">
            <div class="newsletter-box position-relative rounded-16 flex-align gap-16 flex-wrap z-1">
                <img src="{{asset('assets/images/bg/newsletter-bg.png')}}" alt="img"
                    class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6" />
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="">
                            <h1 class="text-white mb-12" data-aos="fade-down" data-aos-duration="800">
                                Don't Miss Out on Grocery Deals
                            </h1>
                            <p class="text-white h5 mb-0" data-aos="fade-up" data-aos-duration="800">
                                SING UP FOR THE UPDATE NEWSLETTER
                            </p>
                            <form action="#" class="position-relative mt-40" data-aos="zoom-in"
                                data-aos-duration="800">
                                @csrf
                                <input type="email"
                                    class="form-control common-input rounded-pill text-white py-22 px-16 pe-144"
                                    placeholder="Your email address..." />
                                <button type="submit"
                                    class="btn btn-main-two rounded-pill position-absolute top-50 translate-middle-y inset-inline-end-0 me-10">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 text-center d-xl-block d-none">
                        <img src="{{asset('assets/images/thumbs/newsletter-img.png')}}" alt="img" data-aos="zoom-in"
                            data-aos-duration="800" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============================== Newsletter Section End ============================ -->

    <!-- ========================== footer area ============================ -->
    @include('frontend.includes.footers.footerTwo')
    <!-- ========================== footer area end ============================ -->
@endsection
