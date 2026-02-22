@extends('frontend.layouts.app')
@section('title', 'Loja de Coins - KG Coins')
@section('content')
    <!-- ============================ header area ============================ -->
    @include('frontend.includes.headers.headerOne')
    <!-- ============================ header area end ============================ -->

    <!-- ========================= Breadcrumb Start =============================== -->
    <div class="mb-0 py-20" style="background:#1a1c28; border-bottom:1px solid rgba(124,58,237,0.15);">
        <div class="container container-lg">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-16">
                <h6 class="mb-0" style="font-family:'Exo',sans-serif; font-weight:700; color:#f1f5f9;">🛒 Loja de Coins</h6>
                <ul class="flex-align gap-8 flex-wrap" style="list-style:none; margin:0; padding:0;">
                    <li class="text-sm">
                        <a href="{{route('home')}}" class="flex-align gap-8" style="color:#64748b; text-decoration:none;">
                            <i class="ph ph-house"></i>
                            Início
                        </a>
                    </li>
                    <li class="flex-align" style="color:#4b5563;">
                        <i class="ph ph-caret-right"></i>
                    </li>
                    <li class="text-sm" style="color:#8878F5;">Loja de Coins</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ========================= Breadcrumb End =============================== -->

    <!-- =============================== Shop Section Start ======================================== -->
    <section class="shop py-80">
        <div class="container container-lg">
            <div class="row">
                <!-- Sidebar Start ============================ -->
                <div class="col-lg-3">
                    <div class="shop-sidebar">
                        <button type="button"
                            class="shop-sidebar__close d-lg-none d-flex w-32 h-32 flex-center border border-gray-100 rounded-circle hover-bg-main-600 position-absolute inset-inline-end-0 me-10 mt-8 hover-text-white hover-border-main-600">
                            <i class="ph ph-x"></i>
                        </button>
                        <div class="shop-sidebar">
                            <h6>🎮 Categorias</h6>
                            <ul style="list-style:none; padding:0; margin:0;">
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem; transition:color 0.2s;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        💰 Game Currency (45)</a>
                                </li>
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        ⚔️ Game Items (28)</a>
                                </li>
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        🚀 Boosting (19)</a>
                                </li>
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        🎮 Accounts (12)</a>
                                </li>
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        🎁 Top-Up (8)</a>
                                </li>
                                <li class="mb-0">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        🎴 Gift Cards (14)</a>
                                </li>
                            </ul>
                        </div>

                        <div class="shop-sidebar mt-4">
                            <h6>🕹️ Por Game</h6>
                            <ul style="list-style:none; padding:0; margin:0;">
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        🔥 Diablo IV (18)</a>
                                </li>
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        🌌 Path of Exile 2 (22)</a>
                                </li>
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        ⚽ FC 26 (15)</a>
                                </li>
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        ⚔️ WoW (11)</a>
                                </li>
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        💫 FFXIV (9)</a>
                                </li>
                                <li class="mb-16">
                                    <a href="{{ route('shop') }}" style="color:#94a3b8; text-decoration:none; font-size:0.875rem;"
                                        onmouseover="this.style.color='#8878F5'" onmouseout="this.style.color='#94a3b8'">
                                        🗡️ Lost Ark (8)</a>
                                </li>
                                <li class="mb-0">
                                    <a href="{{ route('shop') }}" style="color:#8878F5; text-decoration:none; font-size:0.875rem; font-weight:700;">
                                        Ver todos os games →</a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                            <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">
                                Filter by Price
                            </h6>
                            <div class="custom--range">
                                <div id="slider-range"></div>
                                <div class="flex-between flex-wrap-reverse gap-8 mt-24">
                                    <button type="button" class="btn btn-main h-40 flex-align">
                                        Filter
                                    </button>
                                    <div class="custom--range__content flex-align gap-8">
                                        <span class="text-gray-500 text-md flex-shrink-0">Price:</span>
                                        <input type="text"
                                            class="custom--range__prices text-neutral-600 text-start text-md fw-medium"
                                            id="amount" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                            <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">
                                Filter by Rating
                            </h6>
                            <div class="flex-align gap-8 position-relative mb-20">
                                <label class="position-absolute w-100 h-100 cursor-pointer" for="rating5">
                                </label>
                                <div class="common-check common-radio mb-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating5" />
                                </div>
                                <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 70%"></div>
                                </div>
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
                                <span class="text-gray-900 flex-shrink-0">124</span>
                            </div>
                            <div class="flex-align gap-8 position-relative mb-20">
                                <label class="position-absolute w-100 h-100 cursor-pointer" for="rating4">
                                </label>
                                <div class="common-check common-radio mb-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="rating4" />
                                </div>
                                <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 50%"></div>
                                </div>
                                <div class="flex-align gap-4">
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0">52</span>
                            </div>
                            <div class="flex-align gap-8 position-relative mb-20">
                                <label class="position-absolute w-100 h-100 cursor-pointer" for="rating3">
                                </label>
                                <div class="common-check common-radio mb-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="rating3" />
                                </div>
                                <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <div class="flex-align gap-4">
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0">12</span>
                            </div>
                            <div class="flex-align gap-8 position-relative mb-20">
                                <label class="position-absolute w-100 h-100 cursor-pointer" for="rating2">
                                </label>
                                <div class="common-check common-radio mb-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="rating2" />
                                </div>
                                <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 20%"></div>
                                </div>
                                <div class="flex-align gap-4">
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0">5</span>
                            </div>
                            <div class="flex-align gap-8 position-relative mb-0">
                                <label class="position-absolute w-100 h-100 cursor-pointer" for="rating1">
                                </label>
                                <div class="common-check common-radio mb-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="rating1" />
                                </div>
                                <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-pill" style="width: 5%"></div>
                                </div>
                                <div class="flex-align gap-4">
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-400 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0">2</span>
                            </div>
                        </div>
                        <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                            <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">
                                Filter by Color
                            </h6>
                            <ul class="max-h-540 overflow-y-auto scroll-sm">
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio checked-black">
                                        <input class="form-check-input" type="radio" name="color" id="color1" />
                                        <label class="form-check-label" for="color1">Black(12)</label>
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio checked-primary">
                                        <input class="form-check-input" type="radio" name="color" id="color2" />
                                        <label class="form-check-label" for="color2">Blue (12)</label>
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio checked-gray">
                                        <input class="form-check-input" type="radio" name="color" id="color3" />
                                        <label class="form-check-label" for="color3">Gray (12)</label>
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio checked-success">
                                        <input class="form-check-input" type="radio" name="color" id="color4" />
                                        <label class="form-check-label" for="color4">Green (12)</label>
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio checked-danger">
                                        <input class="form-check-input" type="radio" name="color" id="color5" />
                                        <label class="form-check-label" for="color5">Red (12)</label>
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio checked-white">
                                        <input class="form-check-input" type="radio" name="color" id="color6" />
                                        <label class="form-check-label" for="color6">White (12)</label>
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <div class="form-check common-check common-radio checked-purple">
                                        <input class="form-check-input" type="radio" name="color" id="color7" />
                                        <label class="form-check-label" for="color7">Purple (12)</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                            <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">
                                Filter by Brand
                            </h6>
                            <ul class="max-h-540 overflow-y-auto scroll-sm">
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio">
                                        <input class="form-check-input" type="radio" name="color" id="brand1" />
                                        <label class="form-check-label" for="brand1">Apple</label>
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio">
                                        <input class="form-check-input" type="radio" name="color" id="brand2" />
                                        <label class="form-check-label" for="brand2">Samsung</label>
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio">
                                        <input class="form-check-input" type="radio" name="color" id="brand3" />
                                        <label class="form-check-label" for="brand3">Microsoft</label>
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio">
                                        <input class="form-check-input" type="radio" name="color" id="brand4" />
                                        <label class="form-check-label" for="brand4">Apple</label>
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio">
                                        <input class="form-check-input" type="radio" name="color" id="brand5" />
                                        <label class="form-check-label" for="brand5">HP</label>
                                    </div>
                                </li>
                                <li class="mb-24">
                                    <div class="form-check common-check common-radio">
                                        <input class="form-check-input" type="radio" name="color" id="DELL" />
                                        <label class="form-check-label" for="DELL">DELL</label>
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <div class="form-check common-check common-radio">
                                        <input class="form-check-input" type="radio" name="color" id="Redmi" />
                                        <label class="form-check-label" for="Redmi">Redmi</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-sidebar__box rounded-8">
                            <img src="{{asset('assets/images/thumbs/advertise-img1.png')}}" alt="img" />
                        </div>
                    </div>
                </div>
                <!-- Sidebar end ============================ -->

                <!-- Content Start ============================ -->
                <div class="col-lg-9">
                    <!-- Top Start ============================ -->
                    <div class="flex-between gap-16 flex-wrap mb-40">
                        <span class="text-gray-900">Showing 1-20 of 85 result</span>
                        <div class="position-relative flex-align gap-16 flex-wrap">
                            <div class="list-grid-btns flex-align gap-16">
                                <button type="button"
                                    class="w-44 h-44 flex-center border border-gray-100 rounded-6 text-2xl list-btn">
                                    <i class="ph-bold ph-list-dashes"></i>
                                </button>
                                <button type="button"
                                    class="w-44 h-44 flex-center border border-main-600 text-white bg-main-600 rounded-6 text-2xl grid-btn">
                                    <i class="ph ph-squares-four"></i>
                                </button>
                            </div>
                            <div class="position-relative text-gray-500 flex-align gap-4 text-14">
                                <label for="sorting" class="text-inherit flex-shrink-0">Sort by:
                                </label>
                                <select class="form-control common-input px-14 py-14 text-inherit rounded-6 w-auto"
                                    id="sorting">
                                    <option value="1" selected>
                                        Popular
                                    </option>
                                    <option value="1">Latest</option>
                                    <option value="1">Trending</option>
                                    <option value="1">Matches</option>
                                </select>
                            </div>
                            <button type="button"
                                class="w-44 h-44 d-lg-none d-flex flex-center border border-gray-100 rounded-6 text-2xl sidebar-btn">
                                <i class="ph-bold ph-funnel"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top end ============================ -->

                    <div class="list-grid-wrapper">
                        <div
                            class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img1.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                                <span
                                    class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best
                                    Sale
                                </span>
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img2.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img3.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <span
                                    class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale
                                    50%
                                </span>
                                <img src="{{asset('assets/images/thumbs/product-two-img4.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img5.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img6.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img7.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img8.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <span
                                    class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale
                                    50%
                                </span>
                                <img src="{{asset('assets/images/thumbs/product-two-img9.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img10.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img11.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <span
                                    class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New
                                </span>
                                <img src="{{asset('assets/images/thumbs/product-two-img12.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img13.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img14.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <span
                                    class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best
                                    Sale
                                </span>
                                <img src="{{asset('assets/images/thumbs/product-two-img15.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <span
                                    class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                <img src="{{asset('assets/images/thumbs/product-two-img15.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img1.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                                <span
                                    class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best
                                    Sale
                                </span>
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img2.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{asset('assets/images/thumbs/product-two-img3.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor Farms
                                        Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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
                            <a href="{{route('shop.details')}}"
                                class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <span
                                    class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale
                                    50%
                                </span>
                                <img src="{{asset('assets/images/thumbs/product-two-img4.png')}}" alt="img"
                                    class="w-auto max-w-unset" />
                            </a>
                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{route('shop.details')}}" class="link text-line-2" tabindex="0">Taylor
                                        Farms Broccoli Florets
                                        Vegetables</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                </div>
                                <div class="mt-8">
                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>

                                <div class="product-card__price my-20">
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

                    <!-- Pagination Start ============================ -->
                    <ul class="pagination flex-center flex-wrap gap-16">
                        <li class="page-item">
                            <a class="page-link h-64 w-64 flex-center text-xxl rounded-8 fw-medium text-neutral-600 border border-gray-100"
                                href="#">
                                <i class="ph-bold ph-arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link h-64 w-64 flex-center text-md rounded-8 fw-medium text-neutral-600 border border-gray-100"
                                href="#">01</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link h-64 w-64 flex-center text-md rounded-8 fw-medium text-neutral-600 border border-gray-100"
                                href="#">02</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link h-64 w-64 flex-center text-md rounded-8 fw-medium text-neutral-600 border border-gray-100"
                                href="#">03</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link h-64 w-64 flex-center text-md rounded-8 fw-medium text-neutral-600 border border-gray-100"
                                href="#">04</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link h-64 w-64 flex-center text-md rounded-8 fw-medium text-neutral-600 border border-gray-100"
                                href="#">05</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link h-64 w-64 flex-center text-md rounded-8 fw-medium text-neutral-600 border border-gray-100"
                                href="#">06</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link h-64 w-64 flex-center text-md rounded-8 fw-medium text-neutral-600 border border-gray-100"
                                href="#">07</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link h-64 w-64 flex-center text-xxl rounded-8 fw-medium text-neutral-600 border border-gray-100"
                                href="#">
                                <i class="ph-bold ph-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- Pagination end ============================ -->
                </div>
                <!-- Content end ============================ -->
            </div>
        </div>
    </section>
    <!-- =============================== Shop Section End ======================================== -->

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
