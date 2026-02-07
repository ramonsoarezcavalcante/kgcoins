<!--==================== Preloader Start ====================-->
<div class="preloader">
    <img src="{{ asset('assets/images/icon/preloader.gif') }}" alt="img">
</div>
<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

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

<!-- ==================== Mobile Menu Start Here ==================== -->
@include('frontend.includes.partials.navbar')
<!-- ==================== Mobile Menu End Here ==================== -->

<!-- ======================= Middle Header Two Start ========================= -->
<header class="header-middle border-bottom border-neutral-40 py-4">
    <div class="container container-lg">
        <nav class="header-inner flex-between gap-8">
            <!-- ============================ Logo Start ============================ -->
            <div class="logo">
                <a href="{{ route('indexThree') }}" class="link">
                    <img src="{{ asset('assets/images/logo/logo-two.png') }}" alt="Logo">
                </a>
            </div>
            <!-- ============================ Logo End  -->

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
                                    {{ __('Home Grocery') }}</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('indexTwo') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Home Electronics') }}</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('indexThree') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Home Fashion') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="on-hover-item nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link text-heading-two">{{ __('Shop') }}</a>
                        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('shop') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Shop') }}</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('shop.details') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Shop Details') }}</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('shop.details.two') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Shop Details Two') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="on-hover-item nav-menu__item has-submenu">
                        <span
                            class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">{{ __('New') }}</span>
                        <a href="javascript:void(0)" class="nav-menu__link text-heading-two">{{ __('Pages') }}</a>
                        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('cart') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Cart') }}</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('wishlist') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Wishlist') }}</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('checkout') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Checkout') }}</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('become.seller') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Become Seller') }}</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('account') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Account') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="on-hover-item nav-menu__item has-submenu">
                        <span
                            class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">{{ __('New') }}</span>
                        <a href="javascript:void(0)" class="nav-menu__link text-heading-two">{{ __('Vendors') }}</a>
                        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('vendor') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Vendors') }} </a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('vendor.details') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Vendor Details') }} </a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('vendor.two') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Vendors Two') }}</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('vendor.two.details') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Vendors Two Details') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="on-hover-item nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link text-heading-two">{{ __('Blog') }}</a>
                        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('blog') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Blog') }}</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item">
                                <a href="{{ route('blog.details') }}"
                                    class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                    {{ __('Blog Details') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="{{ route('contact') }}" class="nav-menu__link text-heading-two">{{ __('Contact Us') }}</a>
                    </li>
                </ul>
                <!-- ============================ Nav Menu end ============================ -->
            </div>
            <!-- ============================ Menu End ============================ -->

            <!-- ============================ Middle Header Right Start ============================ -->
            <div class="header-right flex-align">
                <!-- ============================ Dropdown Select Start ============================ -->
                <ul class="header-top__right style-two style-three flex-align flex-wrap">
                    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                        <a href="javascript:void(0)"
                            class="selected-text selected-text text-neutral-500 fw-semibold text-sm py-8 text-sm py-8">{{ __('Eng') }}</a>
                        <ul
                            class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag1.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('English') }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag2.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('Japan') }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag3.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{  __('French') }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag4.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('Germany') }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag6.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('Bangladesh') }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag5.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('South Korea') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                        <a href="javascript:void(0)"
                            class="selected-text selected-text text-neutral-500 fw-semibold text-sm py-8 text-sm py-8">{{ __('USD') }}</a>
                        <ul
                            class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag1.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('USD') }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag2.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('Yen') }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag3.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('Franc') }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag4.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('EURO') }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag6.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('BDT') }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0">
                                    <img src="{{ asset('assets/images/thumbs/flag5.png') }}" alt="img"
                                        class="w-16 h-12 rounded-4 border border-gray-100">
                                    {{ __('WON') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="d-sm-flex d-none">
                        <a href="javascript:void(0)"
                            class="selected-text selected-text text-neutral-500 fw-semibold text-sm py-8 text-sm py-8 hover-text-heading">{{ __('Order Tracking') }}</a>
                    </li>
                </ul>
                <!-- ============================ Dropdown Select end ============================ -->
                <button type="button" class="toggle-mobileMenu d-lg-none ms-3n text-gray-800 text-4xl d-flex"> <i
                        class="ph ph-list"></i> </button>
            </div>
            <!-- ============================ Middle Header Right End ============================ -->

        </nav>
    </div>
</header>
<!-- ======================= Middle Header Two End ========================= -->

<!-- ==================== Header Two Start Here ==================== -->
<header class="header bg-white  pt-24">
    <div class="container container-lg">
        <nav class="header-inner d-flex justify-content-between gap-16">
            <div class="d-flex w-100">

                <!-- ============================ Category Dropdown Start ============================ -->
                <div class="category-two h-100 d-none flex-shrink-0">
                    <button type="button"
                        class="category__button flex-align gap-8 fw-medium bg-main-two-600 py-16 px-20 text-white h-100 md-rounded-top">
                        <span class="icon text-2xl d-md-flex d-none"><i class="ph ph-squares-four"></i></span>
                        <span class="d-lg-flex d-none">{{ __('All') }}</span> {{ __('Categories') }}
                        <span class="arrow-icon text-md d-flex ms-auto"><i class="ph ph-caret-down"></i></span>
                    </button>

                    <div
                        class="responsive-dropdown common-dropdown d-lg-none d-block nav-submenu p-0 submenus-submenu-wrapper shadow-none border border-gray-100">
                        <button type="button"
                            class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex">
                            <i class="ph ph-x"></i> </button>

                        <div class="logo px-16 d-lg-none d-block">
                            <a href="{{ route('indexThree') }}" class="link">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
                            </a>
                        </div>

                        <ul class="scroll-sm p-0 py-8 overflow-y-auto">
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{ __('Cell Phone') }}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{ __('Cell Phone') }}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Samsung') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Iphone') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Vivo') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Oppo') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Itel') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Realme') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{ __('Wear') }}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{ __('Wear') }}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Samsung') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Iphone') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Vivo') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Oppo') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Itel') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Realme') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{ __('Computer') }}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{ __('Computer') }}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Samsung') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Iphone') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Vivo') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Oppo') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Itel') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{ __('Realme') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Headphone')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Headphone')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Smart Screen')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Smart Screen')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Smart Home')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Smart Home')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Digital Accessories')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Digital Accessories')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Value Added Services')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Value Added Services')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Car Products')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Car Products')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Ecological Products')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Ecological Products')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Flat')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Flat')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Commercial Terminal')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Commercial Terminal')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Headphone')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Headphone')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span>{{__('Smart Screen')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Smart Screen')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Samsung')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Iphone')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Vivo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Oppo')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Itel')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Realme')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="category d-block on-hover-item text-white flex-shrink-0 w-310">
                    <button type="button"
                        class="category__button flex-align gap-8 fw-medium p-16 bg-main-600 text-white rounded-top h-100 w-100">
                        <span class="icon text-2xl d-md-flex d-none"><i class="ph ph-squares-four"></i></span>
                        <span class="d-sm-flex d-none">{{__('All')}}</span> {{__('Categories')}}
                        <span class="arrow-icon text-xl d-flex ms-auto"><i class="ph ph-caret-down"></i></span>
                    </button>

                    <div
                        class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                        <button type="button"
                            class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex">
                            <i class="ph ph-x"></i> </button>
                        <div class="logo px-16 d-lg-none d-block">
                            <a href="{{ route('indexThree') }}" class="link">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-carrot"></i></span>
                                    <span>{{__('Vegetables')}} &amp; {{__('Fruit')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>

                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Vegetables')}} &amp; {{__('Fruit')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Potato')}} &amp; {{__('Tomato')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Cucumber')}} &amp; {{__('Capsicum')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Leafy Vegetables')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Root Vegetables')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Beans')}} &amp; {{__('Okra')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Cabbage')}} &amp; {{__('Cauliflower')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Gourd')}} &amp; {{__('Drumstick')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Specialty')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>{{__('Beverages')}}</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">{{__('Beverages')}}</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}">{{__('Soda')}} &amp; {{__('Cocktail Mix')}} </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> {{__('Sports')}} &amp; {{__('Energy Drinks')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> {{__('Non Alcoholic Drinks')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> {{__('Packaged Water')}} </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> {{__('Spring Water')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> {{__('Flavoured Water')}} </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Meats &amp; Seafood</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Meats &amp; Seafood</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}"> Fresh Meat </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Frozen Meat</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Marinated Meat</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Fresh &amp; Frozen Meat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Breakfast &amp; Dairy</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Breakfast &amp; Dairy</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}"> Oats &amp; Porridge</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Kids Cereal</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Muesli</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Flakes</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Granola &amp; Cereal Bars</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Instant Noodles</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Frozen Foods</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Frozen Foods</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}"> Instant Noodles </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Hakka Noodles</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Cup Noodles</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Vermicelli</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Instant Pasta</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Biscuits &amp; Snacks</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Biscuits &amp; Snacks</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}"> Salted Biscuits </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Marie, Health, Digestive</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Cream Biscuits &amp; Wafers </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Glucose &amp; Milk biscuits</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Cookies</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Grocery &amp; Staples</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Grocery &amp; Staples</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="{{ route('shop') }}"> Lemon, Ginger &amp; Garlic </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Indian &amp; Exotic Herbs</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Orangic Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">Orangic Fruits </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Orangic Dry Fruits</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Orangic Dals &amp; pulses</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"> Orangic Millet &amp; Flours</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ============================ Category Dropdown End ============================ -->

                <!-- ============================ Search Start ============================ -->
                <form action="#" class="position-relative ms-20 max-w-870 w-100 d-md-block d-none">
                    @csrf
                    <input type="text"
                        class="form-control fw-medium placeholder-italic shadow-none bg-neutral-30 placeholder-fw-medium placeholder-light py-16 ps-30 pe-60 "
                        placeholder="Search for products, categories or brands...">
                    <button type="submit"
                        class="position-absolute top-50 translate-middle-y text-main-600 end-0 me-36 text-xl line-height-1">
                        <i class="ph-bold ph-magnifying-glass"></i>
                    </button>
                </form>
                <!-- ============================ Search End ============================ -->
            </div>

            <!-- ============================ header Middle Right Start ============================ -->
            <div class="d-flex align-items-center gap-20-px flex-shrink-0">
                <a href="javascript:void(0)" class="flex-align gap-6 item-hover">
                    <span class="text-2xl text-heading d-flex position-relative me-6 mt-6 item-hover__text">
                        <i class="ph-bold ph-recycle"></i>
                        <span
                            class="w-18 h-18 flex-center rounded-circle bg-success-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
                    </span>
                    <span class="text-md text-neutral-500 item-hover__text fw-medium d-none d-lg-flex">Compare</span>
                </a>
                <a href="{{route('cart')}}" class="flex-align gap-6 item-hover">
                    <span class="text-2xl text-heading d-flex position-relative me-6 mt-6 item-hover__text">
                        <i class="ph-bold ph-shopping-cart"></i>
                        <span
                            class="w-18 h-18 flex-center rounded-circle bg-success-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
                    </span>
                    <span class="text-md text-neutral-500 item-hover__text fw-medium d-none d-lg-flex">Cart</span>
                </a>
                @auth
                    <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="d-flex align-content-around gap-10 fw-medium text-main-600 py-14 px-24 bg-main-50 rounded-pill line-height-1 hover-bg-main-600 hover-text-white">
                        <span class="d-sm-flex d-none line-height-1"><i class="ph-bold ph-sign-out"></i></span>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
                @guest
                    <a href="{{route('register')}}"
                        class="d-flex align-content-around gap-10 fw-medium text-main-600 py-14 px-24 bg-main-50 rounded-pill line-height-1 hover-bg-main-600 hover-text-white">
                        <span class="d-sm-flex d-none line-height-1"><i class="ph-bold ph-user"></i></span>
                        Register
                    </a>
                @endguest
            </div>
            <!-- ============================ header Middle Right End ============================ -->

        </nav>
    </div>
</header>
<!-- ==================== Header End Here ==================== -->
