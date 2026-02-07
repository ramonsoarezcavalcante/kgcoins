<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block">
    <button type="button" class="close-button"> <i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="{{route('home')}}" class="mobile-menu__logo">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- ============================ Nav Menu Start ============================ -->
            <ul class="nav-menu flex-align nav-menu--mobile">
                <li class="on-hover-item nav-menu__item has-submenu activePage">
                    <a href="javascript:void(0)" class="nav-menu__link text-heading-two">Home</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item activePage">
                            <a href="{{route('home')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Home Grocery</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('indexTwo')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Home Electronics</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('indexThree')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Home Fashion</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link text-heading-two">Shop</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('shop')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Shop</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('shop.details')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Shop Details</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('shop.details.two')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Shop Details Two</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                    <a href="javascript:void(0)" class="nav-menu__link text-heading-two">Pages</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('cart')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Cart</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('wishlist')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Wishlist</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('checkout')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Checkout </a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('become.seller')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Become Seller</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('account')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Account</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <span class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                    <a href="javascript:void(0)" class="nav-menu__link text-heading-two">Vendors</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('vendor')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Vendors </a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('vendor.details')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Vendor Details </a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('vendor.two')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Vendors Two</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('vendor.two.details')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Vendors Two Details</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link text-heading-two">Blog</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('blog')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Blog</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('blog.details')}}"
                                class="common-dropdown__link nav-submenu__link text-heading-two hover-bg-neutral-100">
                                Blog Details</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item">
                    <a href="{{route('contact')}}" class="nav-menu__link text-heading-two">Contact Us</a>
                </li>
            </ul>
            <!-- ============================ Nav Menu end ============================ -->
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->
