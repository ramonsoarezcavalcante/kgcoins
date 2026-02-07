<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Search Box Start Here ==================== -->
<form action="#" class="search-box">
    @csrf
    <button type="button"
        class="search-box__close position-absolute inset-block-start-0 inset-inline-end-0 m-16 w-48 h-48 border border-gray-100 rounded-circle flex-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1">
        <i class="ph ph-x"></i>
    </button>
    <div class="container">
        <div class="position-relative">
            <input type="text" class="form-control py-16 px-24 text-xl rounded-pill pe-64"
                placeholder="Search for a product or brand">
            <button type="submit"
                class="w-48 h-48 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
                <i class="ph ph-magnifying-glass"></i>
            </button>
        </div>
    </div>
</form>
<!-- ==================== Search Box End Here ==================== -->
<!-- ============================ navbar Start ============================ -->
@include('frontend.includes.partials.navbar')
<!-- ============================ navbar end ============================ -->
<!-- ============================ ======================= Middle Top Start ========================= -->
<div class="header-top bg-main-600 flex-between">
    <div class="container container-lg">
        <div class="flex-between flex-wrap gap-8">

            <div class="d-flex align-items-center gap-10">
                <span class="text-md fw-medium text-white d-none d-md-flex">Until the end of the sale:</span>
                <span class="text-md fw-medium text-white d-flex d-md-none">Sale end:</span>
                <div class="d-flex align-items-center gap-10" id="countdown25">
                    <div class="d-flex align-items-center gap-4 text-white">
                        <strong class="text-md fw-semibold days">35</strong>
                        <span class="text-xs">Days</span>
                    </div>
                    <div class="d-flex align-items-center gap-4 text-white">
                        <strong class="text-md fw-semibold hours">14</strong>
                        <span class="text-xs">Hours</span>
                    </div>
                    <div class="d-flex align-items-center gap-4 text-white">
                        <strong class="text-md fw-semibold minutes">54</strong>
                        <span class="text-xs">Minutes</span>
                    </div>
                    <div class="d-flex align-items-center gap-4 text-white">
                        <strong class="text-md fw-semibold seconds">28 </strong>
                        <span class="text-xs">Sec.</span>
                    </div>
                </div>
            </div>

            <ul class="flex-align flex-wrap d-none d-xl-flex">
                <li class="border-right-item pe-12 me-12">
                    <span class="text-white text-sm">
                        Buy one get one free on
                        <span class="text-yellow">first order</span> </span>
                </li>
                <li class="border-right-item pe-12 me-12">
                    <a href="javascript:void(0)"
                        class="text-white text-sm d-flex align-items-center gap-4 hover-text-decoration-underline">
                        <img src="{{ asset('assets/images/icon/track-icon.png') }}" alt="Track Icon">
                        <span class="">Track Your Order</span>
                    </a>
                </li>
            </ul>

            <ul class="header-top__right flex-align flex-wrap gap-16 w-auto">
                <li class="d-lg-flex d-none">
                    <a href="#shipping" class="text-white text-sm hover-text-decoration-underline">Order Tracking</a>
                </li>
                <li class="d-lg-flex d-none">
                    <a href="javascript:void(0)" class="text-white text-sm hover-text-decoration-underline">About
                        Us</a>
                </li>
                <li class="on-hover-item has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">Eng</a>
                    <ul
                        class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag1.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                English
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag2.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                Japan
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag3.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                French
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag4.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                Germany
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag6.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                Bangladesh
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag5.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                South Korea
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">USD</a>
                    <ul
                        class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag1.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                USD
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag2.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                Yen
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag3.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                Franc
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag4.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                EURO
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag6.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                BDT
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                <img src="{{ asset('assets/images/thumbs/flag5.png') }}" alt="img"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                WON
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ======================= Middle Top End ========================= -->

<!-- ======================= Middle Header Start ========================= -->
<header class="header-middle border-bottom border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner flex-between gap-8">
            <!-- ============================ Logo Start ============================ -->
            <div class="logo">
                <a href="{{ route('home') }}" class="link">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
                </a>
            </div>
            <!-- ============================ Logo End  -->

            <!-- ============================ form location Start ============================ -->
            <form action="#" class="flex-align flex-wrap form-location-wrapper max-w-840 w-100">
                @csrf
                <div
                    class="search-category select-style-one d-flex select-border-end-0 search-form d-sm-flex d-none text-heading-two text-sm w-100">
                    <select class="js-example-basic-single border border-neutral-40 border-end-0" name="state">
                        <option value="1" selected disabled>All categories</option>
                        <option value="1">Grocery</option>
                        <option value="1">Breakfast & Dairy</option>
                        <option value="1">Vegetables</option>
                        <option value="1">Milks and Dairies</option>
                        <option value="1">Pet Foods & Toy</option>
                        <option value="1">Breads & Bakery</option>
                        <option value="1">Fresh Seafood</option>
                        <option value="1">Fronzen Foods</option>
                        <option value="1">Noodles & Rice</option>
                        <option value="1">Ice Cream</option>
                    </select>

                    <div class="search-form__wrapper position-relative border-half-start flex-grow-1">
                        <input type="text"
                            class="common-input border-neutral-40 py-18 ps-16 pe-76 rounded-0 rounded-end pe-44 placeholder-italic placeholder-text-sm border-start-0"
                            placeholder="Search for products, categories or brands...">
                        <button type="submit"
                            class="w-64 h-44 bg-main-600 hover-bg-main-800 rounded-4 flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-6"><i
                                class="ph ph-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>
            <!-- ============================ form location Start ============================ -->

            <!-- ============================ header Middle Right Start ============================ -->
            <div class="header-right flex-align flex-shrink-0">
                <div class="flex-align gap-20">
                    <button type="button" class="search-icon flex-align d-lg-none d-flex gap-4 item-hover">
                        <span class="text-2xl text-gray-700 d-flex position-relative item-hover__text">
                            <i class="ph ph-magnifying-glass"></i>
                        </span>
                    </button>
                    @auth
                        <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="flex-align gap-4 item-hover">
                            <span class="text-xl text-gray-700 d-flex position-relative item-hover__text">
                                <i class="ph ph-sign-out"></i>
                            </span>
                            <span class="text-md text-heading-three item-hover__text d-none d-lg-flex">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endauth
                    @guest
                        <a href="{{route('register')}}" class="flex-align gap-4 item-hover">
                            <span class="text-xl text-gray-700 d-flex position-relative item-hover__text">
                                <i class="ph ph-user"></i>
                            </span>
                            <span class="text-md text-heading-three item-hover__text d-none d-lg-flex">Register</span>
                        </a>
                    @endguest
                    <a href="{{ route('wishlist') }}" class="flex-align gap-4 item-hover">
                        <span class="text-xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
                            <i class="ph ph-heart"></i>
                            <span
                                class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
                        </span>
                        <span class="text-md text-heading-three item-hover__text d-none d-lg-flex">Wishlist</span>
                    </a>
                    <a href="{{ route('cart') }}" class="flex-align gap-4 item-hover">
                        <span class="text-xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
                            <i class="ph ph-shopping-cart-simple"></i>
                            <span
                                class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
                        </span>
                        <span class="text-md text-heading-three item-hover__text d-none d-lg-flex">Cart</span>
                    </a>
                </div>
            </div>
            <!-- ============================ header Middle Right End  -->
        </nav>
    </div>
</header>
<!-- ======================= Middle Header End ========================= -->
<!-- ==================== Header Start Here ==================== -->
<header class="header bg-white border-bottom-0 box-shadow-3xl py-10 z-2">
    <div class="container container-lg">
        <nav class="header-inner d-flex justify-content-between gap-8">
            <div class="flex-align menu-category-wrapper position-relative">

                <!-- ============================ Category Dropdown Start ============================ -->
                <div class="">
                    <button type="button"
                        class="category-button d-flex align-items-center gap-12 text-white bg-success-600 px-20 py-16 rounded-6 hover-bg-success-700 transition-2">
                        <span class="text-xl line-height-1"><i class="ph ph-squares-four"></i></span>
                        <span class="">Browse Categories</span>
                        <span class="line-height-1 icon transition-2"><i class="ph-bold ph-caret-down"></i></span>
                    </button>

                    <!-- ============================ Dropdown Start ============================ -->
                    <div
                        class="category-dropdown border border-success-200 shadow bg-white p-16 rounded-16 w-100 max-w-472 position-absolute inset-block-start-100 inset-inline-start-0 z-99 transition-2">
                        <div class="d-grid grid-cols-3-repeat gap-4 max-h-350 overflow-y-auto">
                            <a href="{{ route('shop') }}"
                                class="py-16 px-8 rounded-8 hover-bg-main-50 d-flex flex-column align-items-center text-center border border-white hover-border-main-100">
                                <span class="">
                                    <img src="{{ asset('assets/images/icon/category-1.png') }}" alt="Icon"
                                        class="w-40">
                                </span>
                                <span class="fw-semibold text-heading mt-16 text-sm">Vegetables</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-16 px-8 rounded-8 hover-bg-main-50 d-flex flex-column align-items-center text-center border border-white hover-border-main-100">
                                <span class="">
                                    <img src="{{ asset('assets/images/icon/category-2.png') }}" alt="Icon"
                                        class="w-40">
                                </span>
                                <span class="fw-semibold text-heading mt-16 text-sm">Milk & Cake</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-16 px-8 rounded-8 hover-bg-main-50 d-flex flex-column align-items-center text-center border border-white hover-border-main-100">
                                <span class="">
                                    <img src="{{ asset('assets/images/icon/category-3.png') }}" alt="Icon"
                                        class="w-40">
                                </span>
                                <span class="fw-semibold text-heading mt-16 text-sm">Grocery</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-16 px-8 rounded-8 hover-bg-main-50 d-flex flex-column align-items-center text-center border border-white hover-border-main-100">
                                <span class="">
                                    <img src="{{ asset('assets/images/icon/category-4.png') }}" alt="Icon"
                                        class="w-40">
                                </span>
                                <span class="fw-semibold text-heading mt-16 text-sm"> Beauty</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-16 px-8 rounded-8 hover-bg-main-50 d-flex flex-column align-items-center text-center border border-white hover-border-main-100">
                                <span class="">
                                    <img src="{{ asset('assets/images/icon/category-5.png') }}" alt="Icon"
                                        class="w-40">
                                </span>
                                <span class="fw-semibold text-heading mt-16 text-sm">Wines & Drinks</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-16 px-8 rounded-8 hover-bg-main-50 d-flex flex-column align-items-center text-center border border-white hover-border-main-100">
                                <span class="">
                                    <img src="{{ asset('assets/images/icon/category-6.png') }}" alt="Icon"
                                        class="w-40">
                                </span>
                                <span class="fw-semibold text-heading mt-16 text-sm">Snacks</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-16 px-8 rounded-8 hover-bg-main-50 d-flex flex-column align-items-center text-center border border-white hover-border-main-100">
                                <span class="">
                                    <img src="{{ asset('assets/images/icon/category-7.png') }}" alt="Icon"
                                        class="w-40">
                                </span>
                                <span class="fw-semibold text-heading mt-16 text-sm">Juice</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-16 px-8 rounded-8 hover-bg-main-50 d-flex flex-column align-items-center text-center border border-white hover-border-main-100">
                                <span class="">
                                    <img src="{{ asset('assets/images/icon/category-8.png') }}" alt="Icon"
                                        class="w-40">
                                </span>
                                <span class="fw-semibold text-heading mt-16 text-sm">Fruits</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-16 px-8 rounded-8 hover-bg-main-50 d-flex flex-column align-items-center text-center border border-white hover-border-main-100">
                                <span class="">
                                    <img src="{{ asset('assets/images/icon/category-9.png') }}" alt="Icon"
                                        class="w-40">
                                </span>
                                <span class="fw-semibold text-heading mt-16 text-sm">Tea & Coffee</span>
                            </a>
                        </div>
                    </div>
                    <!-- ============================ Dropdown end ============================ -->

                </div>
                <!-- ============================ Category Dropdown end ============================ -->

                <!-- ============================ Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- ============================ Nav Menu Start ============================ -->
                    <ul class="nav-menu flex-align ">
                        <li class="on-hover-item nav-menu__item has-submenu activePage">
                            <a href="javascript:void(0)" class="nav-menu__link text-heading-two">Home</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item activePage">
                                    <a href="{{ route('home') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Home Grocery</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('indexTwo') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Home Electronics</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('indexThree') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Home Fashion</a>
                                </li>
                            </ul>
                        </li>
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <a href="javascript:void(0)" class="nav-menu__link text-heading-two">Shop</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Shop</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop.details') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Shop Details</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop.details.two') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Shop Details Two</a>
                                </li>
                            </ul>
                        </li>
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <span
                                class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                            <a href="javascript:void(0)" class="nav-menu__link text-heading-two">Pages</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('cart') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Cart</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('wishlist') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Wishlist</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('checkout') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Checkout </a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('become.seller') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Become Seller</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('account') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Account</a>
                                </li>
                            </ul>
                        </li>
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <span
                                class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                            <a href="javascript:void(0)" class="nav-menu__link text-heading-two">Vendors</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('vendor') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Vendors </a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('vendor.details') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Vendor Details </a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('vendor.two') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Vendors Two</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('vendor.two.details') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Vendors Two Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <a href="javascript:void(0)" class="nav-menu__link text-heading-two">Blog</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('blog') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Blog</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('blog.details') }}"
                                        class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                        Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{ route('contact') }}" class="nav-menu__link text-heading-two">Contact Us</a>
                        </li>
                    </ul>
                    <!-- ============================ Nav Menu end ============================ -->
                </div>
                <!-- ============================ Menu End  -->
            </div>

            <!-- ============================ header Right Start ============================ -->
            <div class="header-right flex-align gap-20">
                <a href="tel:+(2)871382023" class="d-sm-flex align-items-center gap-16 d-none">
                    <span class="d-flex text-32">
                        <img src="{{ asset('assets/images/icon/mobile.png') }}" alt="Mobile Icon">
                    </span>
                    <span class="">
                        <span class="d-block text-heading fw-medium">Need any Help! call Us</span>
                        <span class="d-block fw-bold text-main-600 hover-text-decoration-underline">+(2) 871 382
                            023</span>
                    </span>
                </a>
                <button type="button" class="toggle-mobileMenu d-lg-none ms-3n text-gray-800 text-4xl d-flex"> <i
                        class="ph ph-list"></i> </button>
            </div>
            <!-- ============================ header Right End  -->
        </nav>
    </div>
</header>
<!-- ==================== Header End Here ==================== -->
