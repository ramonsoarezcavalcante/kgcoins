<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Search Box Start Here ==================== -->
<form action="#" class="search-box" style="background: rgba(13,15,26,0.98);">
    @csrf
    <button type="button"
        class="search-box__close position-absolute inset-block-start-0 inset-inline-end-0 m-16 w-48 h-48 border rounded-circle flex-center text-white text-2xl transition-1"
        style="border-color: rgba(124,58,237,0.4);">
        <i class="ph ph-x"></i>
    </button>
    <div class="container">
        <div class="position-relative">
            <input type="text" class="form-control py-16 px-24 text-xl rounded-pill pe-64"
                placeholder="Buscar game, coins, itens...">
            <button type="submit"
                class="w-48 h-48 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8 btn-neon"
                style="padding: 0;">
                <i class="ph ph-magnifying-glass"></i>
            </button>
        </div>
    </div>
</form>
<!-- ==================== Search Box End Here ==================== -->

<!-- ============================ navbar Start ============================ -->
@include('frontend.includes.partials.navbar')
<!-- ============================ navbar end ============================ -->

<!-- ======================= Header Top Gaming Start ========================= -->
<div class="header-top-gaming py-8">
    <div class="container container-lg">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-8">

            <!-- Promo Text Marquee -->
            <div class="d-flex align-items-center gap-16">
                <span class="badge-game badge-hot">PROMOÇÃO</span>
                <span class="text-sm" style="color: #94a3b8;">
                    Compre <span style="color: #8878F5; font-weight: 700;">coins com segurança</span>
                    &nbsp;·&nbsp; Entrega Instantânea &nbsp;·&nbsp; Suporte 24/7
                </span>
            </div>

            <!-- Countdown -->
            <div class="d-flex align-items-center gap-10">
                <span class="text-xs d-none d-md-block" style="color: #64748b; text-transform: uppercase; letter-spacing: 1px;">Oferta expira em:</span>
                <div class="d-flex align-items-center gap-6" id="countdown25">
                    <div class="d-flex align-items-center gap-4" style="color: #8878F5;">
                        <strong class="text-sm fw-bold days" style="font-family:'Orbitron',sans-serif;">35</strong>
                        <span class="text-xs" style="color:#64748b;">d</span>
                    </div>
                    <span style="color:#6B5EF0; font-weight:700;">:</span>
                    <div class="d-flex align-items-center gap-4" style="color: #8878F5;">
                        <strong class="text-sm fw-bold hours" style="font-family:'Orbitron',sans-serif;">14</strong>
                        <span class="text-xs" style="color:#64748b;">h</span>
                    </div>
                    <span style="color:#6B5EF0; font-weight:700;">:</span>
                    <div class="d-flex align-items-center gap-4" style="color: #8878F5;">
                        <strong class="text-sm fw-bold minutes" style="font-family:'Orbitron',sans-serif;">54</strong>
                        <span class="text-xs" style="color:#64748b;">m</span>
                    </div>
                    <span style="color:#6B5EF0; font-weight:700;">:</span>
                    <div class="d-flex align-items-center gap-4" style="color: #8878F5;">
                        <strong class="text-sm fw-bold seconds" style="font-family:'Orbitron',sans-serif;">28</strong>
                        <span class="text-xs" style="color:#64748b;">s</span>
                    </div>
                </div>
            </div>

            <!-- Right Links -->
            <ul class="flex-align gap-16" style="list-style:none; margin:0; padding:0;">
                <li class="d-none d-lg-flex">
                    <a href="{{ route('contact') }}" class="text-xs hover-text-decoration-underline" style="color:#64748b;">Suporte</a>
                </li>
                <li class="d-none d-lg-flex">
                    <a href="javascript:void(0)" class="text-xs hover-text-decoration-underline" style="color:#64748b;">FAQ</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="text-xs" style="color:#94a3b8;">🇧🇷 BRL</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ======================= Header Top Gaming End ========================= -->

<!-- ======================= Middle Header Start ========================= -->
<header class="header-middle" style="background: rgba(13,15,26,0.98); border-bottom: 1px solid rgba(124,58,237,0.2); padding: 14px 0;">
    <div class="container container-lg">
        <nav class="header-inner flex-between gap-8">

            <!-- Logo -->
            <div class="logo" style="min-width: 150px;">
                <a href="{{ route('home') }}" class="text-decoration-none d-flex align-items-center">
                    <img src="{{ asset('assets/images/logo/kgcoins-logo.png') }}"
                         alt="KG Coins"
                         style="height: 44px; width: auto; object-fit: contain;"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <span class="logo-gaming text-decoration-none" style="display:none; align-items:center;">
                        <i class="ph ph-coins" style="font-size: 1.2rem; margin-right: 4px;"></i>KG Coins
                    </span>
                </a>
            </div>

            <!-- Search Bar -->
            <form action="#" class="flex-align flex-wrap w-100" style="max-width: 700px;">
                @csrf
                <div class="d-sm-flex d-none w-100 position-relative">
                    <select class="js-example-basic-single" name="category"
                        style="background:#1e2030; border: 1px solid rgba(124,58,237,0.4); border-right:0; color:#94a3b8; padding: 10px 12px; font-size:0.85rem; font-family:'Exo',sans-serif; outline:none; border-radius: 8px 0 0 8px; min-width: 140px;">
                        <option value="" selected>Todas as categorias</option>
                        <option value="currency">💰 Currency</option>
                        <option value="items">⚔️ Items</option>
                        <option value="boosting">🚀 Boosting</option>
                        <option value="accounts">🎮 Accounts</option>
                        <option value="topup">🎁 Top-Up</option>
                        <option value="giftcards">🎴 Gift Cards</option>
                    </select>
                    <div class="position-relative flex-grow-1">
                        <input type="text"
                            style="background:#1e2030; border: 1px solid rgba(124,58,237,0.4); border-left:0; color:#f1f5f9; padding: 10px 56px 10px 16px; font-size:0.875rem; width:100%; outline:none; border-radius: 0 8px 8px 0;"
                            placeholder="Buscar game, coins, itens...">
                        <button type="submit"
                            style="position:absolute; right:6px; top:50%; transform:translateY(-50%); width:38px; height:38px; background:linear-gradient(135deg,#6B5EF0,#4B38CC); border:none; border-radius:6px; color:#fff; font-size:1rem; cursor:pointer; display:flex; align-items:center; justify-content:center;">
                            <i class="ph ph-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Header Right -->
            <div class="header-right flex-align gap-16" style="min-width: 200px; justify-content: flex-end;">
                <!-- Mobile Search -->
                <button type="button" class="search-icon flex-align d-lg-none d-flex gap-4" style="background:none; border:none; color:#94a3b8; font-size:1.25rem;">
                    <i class="ph ph-magnifying-glass"></i>
                </button>

                <!-- Auth -->
                @auth
                    <a href="{{ route('loyalty.dashboard') }}" class="d-none d-lg-flex align-items-center gap-6 text-decoration-none" style="color:#8878F5; font-size:0.85rem; font-family:'Exo',sans-serif; font-weight:600;">
                        <i class="ph ph-user-circle" style="font-size:1.25rem;"></i>
                        <span>Minha Conta</span>
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="d-none d-lg-flex align-items-center gap-4 text-decoration-none" style="color:#64748b; font-size:0.85rem;">
                        <i class="ph ph-sign-out"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                @endauth
                @guest
                    <a href="{{ route('login') }}"
                        class="d-none d-lg-flex align-items-center gap-6 text-decoration-none px-14 py-8 rounded-6"
                        style="color:#8878F5; border:1px solid rgba(124,58,237,0.4); font-size:0.8rem; font-family:'Exo',sans-serif; font-weight:600; transition:all 0.2s ease;"
                        onmouseover="this.style.background='rgba(124,58,237,0.15)'" onmouseout="this.style.background='none'">
                        <i class="ph ph-sign-in"></i> Login
                    </a>
                    <a href="{{ route('register') }}"
                        class="d-none d-lg-flex align-items-center gap-6 text-decoration-none px-14 py-8 rounded-6 btn-neon"
                        style="font-size:0.8rem;">
                        <i class="ph ph-user-plus"></i> Cadastrar
                    </a>
                @endguest

                <!-- Wishlist -->
                <a href="{{ route('wishlist') }}" class="position-relative text-decoration-none" style="color:#94a3b8; font-size:1.4rem;">
                    <i class="ph ph-heart"></i>
                    <span class="position-absolute" style="top:-6px; right:-6px; width:16px; height:16px; background:#6B5EF0; border-radius:50%; font-size:0.6rem; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700;">2</span>
                </a>

                <!-- Cart -->
                <a href="{{ route('cart') }}" class="position-relative text-decoration-none" style="color:#94a3b8; font-size:1.4rem;">
                    <i class="ph ph-shopping-cart-simple"></i>
                    <span class="position-absolute" style="top:-6px; right:-6px; width:16px; height:16px; background:#f97316; border-radius:50%; font-size:0.6rem; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700;">2</span>
                </a>

                <!-- Mobile Menu Toggle -->
                <button type="button" class="toggle-mobileMenu d-lg-none" style="background:none; border:none; color:#94a3b8; font-size:1.75rem; display:flex; align-items:center;">
                    <i class="ph ph-list"></i>
                </button>
            </div>
        </nav>
    </div>
</header>
<!-- ======================= Middle Header End ========================= -->

<!-- ==================== Navigation Bar Gaming Start ==================== -->
<header class="header z-2" style="background: rgba(18,21,30,0.98); border-bottom: 1px solid rgba(124,58,237,0.15); padding: 0;">
    <div class="container container-lg">
        <nav class="header-inner d-flex align-items-center gap-8" style="min-height: 52px;">

            <!-- Categories Dropdown -->
            <div class="flex-align menu-category-wrapper position-relative">
                <div>
                    <button type="button"
                        class="category-button d-flex align-items-center gap-10 px-16 py-12 rounded-6 transition-2"
                        style="background: rgba(124,58,237,0.15); border:1px solid rgba(124,58,237,0.3); color:#8878F5; font-family:'Exo',sans-serif; font-weight:600; font-size:0.85rem; cursor:pointer;">
                        <span class="text-xl line-height-1"><i class="ph ph-squares-four"></i></span>
                        <span class="d-none d-lg-block">Todos os Games</span>
                        <span class="line-height-1 icon transition-2"><i class="ph-bold ph-caret-down"></i></span>
                    </button>

                    <!-- Category Dropdown -->
                    <div class="category-dropdown shadow position-absolute inset-block-start-100 inset-inline-start-0 z-99 transition-2"
                        style="background:#1e2030; border:1px solid rgba(124,58,237,0.3); border-radius:12px; padding:1rem; min-width:440px;">
                        <div class="d-grid gap-4" style="grid-template-columns: repeat(3, 1fr);">
                            <a href="{{ route('shop') }}"
                                class="py-12 px-8 rounded-8 d-flex flex-column align-items-center text-center text-decoration-none transition-1"
                                style="border:1px solid rgba(124,58,237,0.1); color:#94a3b8;"
                                onmouseover="this.style.background='rgba(124,58,237,0.1)'; this.style.borderColor='rgba(124,58,237,0.4)'; this.style.color='#8878F5';"
                                onmouseout="this.style.background=''; this.style.borderColor='rgba(124,58,237,0.1)'; this.style.color='#94a3b8';">
                                <span class="d-block mb-8 text-2xl">🔥</span>
                                <span class="fw-semibold text-xs">Diablo 4</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-12 px-8 rounded-8 d-flex flex-column align-items-center text-center text-decoration-none transition-1"
                                style="border:1px solid rgba(124,58,237,0.1); color:#94a3b8;"
                                onmouseover="this.style.background='rgba(124,58,237,0.1)'; this.style.borderColor='rgba(124,58,237,0.4)'; this.style.color='#8878F5';"
                                onmouseout="this.style.background=''; this.style.borderColor='rgba(124,58,237,0.1)'; this.style.color='#94a3b8';">
                                <span class="d-block mb-8 text-2xl">🌌</span>
                                <span class="fw-semibold text-xs">Path of Exile 2</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-12 px-8 rounded-8 d-flex flex-column align-items-center text-center text-decoration-none transition-1"
                                style="border:1px solid rgba(124,58,237,0.1); color:#94a3b8;"
                                onmouseover="this.style.background='rgba(124,58,237,0.1)'; this.style.borderColor='rgba(124,58,237,0.4)'; this.style.color='#8878F5';"
                                onmouseout="this.style.background=''; this.style.borderColor='rgba(124,58,237,0.1)'; this.style.color='#94a3b8';">
                                <span class="d-block mb-8 text-2xl">⚽</span>
                                <span class="fw-semibold text-xs">FC 26</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-12 px-8 rounded-8 d-flex flex-column align-items-center text-center text-decoration-none transition-1"
                                style="border:1px solid rgba(124,58,237,0.1); color:#94a3b8;"
                                onmouseover="this.style.background='rgba(124,58,237,0.1)'; this.style.borderColor='rgba(124,58,237,0.4)'; this.style.color='#8878F5';"
                                onmouseout="this.style.background=''; this.style.borderColor='rgba(124,58,237,0.1)'; this.style.color='#94a3b8';">
                                <span class="d-block mb-8 text-2xl">⚔️</span>
                                <span class="fw-semibold text-xs">WoW</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-12 px-8 rounded-8 d-flex flex-column align-items-center text-center text-decoration-none transition-1"
                                style="border:1px solid rgba(124,58,237,0.1); color:#94a3b8;"
                                onmouseover="this.style.background='rgba(124,58,237,0.1)'; this.style.borderColor='rgba(124,58,237,0.4)'; this.style.color='#8878F5';"
                                onmouseout="this.style.background=''; this.style.borderColor='rgba(124,58,237,0.1)'; this.style.color='#94a3b8';">
                                <span class="d-block mb-8 text-2xl">💫</span>
                                <span class="fw-semibold text-xs">Final Fantasy XIV</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-12 px-8 rounded-8 d-flex flex-column align-items-center text-center text-decoration-none transition-1"
                                style="border:1px solid rgba(124,58,237,0.1); color:#94a3b8;"
                                onmouseover="this.style.background='rgba(124,58,237,0.1)'; this.style.borderColor='rgba(124,58,237,0.4)'; this.style.color='#8878F5';"
                                onmouseout="this.style.background=''; this.style.borderColor='rgba(124,58,237,0.1)'; this.style.color='#94a3b8';">
                                <span class="d-block mb-8 text-2xl">🗡️</span>
                                <span class="fw-semibold text-xs">Lost Ark</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-12 px-8 rounded-8 d-flex flex-column align-items-center text-center text-decoration-none transition-1"
                                style="border:1px solid rgba(124,58,237,0.1); color:#94a3b8;"
                                onmouseover="this.style.background='rgba(124,58,237,0.1)'; this.style.borderColor='rgba(124,58,237,0.4)'; this.style.color='#8878F5';"
                                onmouseout="this.style.background=''; this.style.borderColor='rgba(124,58,237,0.1)'; this.style.color='#94a3b8';">
                                <span class="d-block mb-8 text-2xl">🏰</span>
                                <span class="fw-semibold text-xs">Albion Online</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-12 px-8 rounded-8 d-flex flex-column align-items-center text-center text-decoration-none transition-1"
                                style="border:1px solid rgba(124,58,237,0.1); color:#94a3b8;"
                                onmouseover="this.style.background='rgba(124,58,237,0.1)'; this.style.borderColor='rgba(124,58,237,0.4)'; this.style.color='#8878F5';"
                                onmouseout="this.style.background=''; this.style.borderColor='rgba(124,58,237,0.1)'; this.style.color='#94a3b8';">
                                <span class="d-block mb-8 text-2xl">🌿</span>
                                <span class="fw-semibold text-xs">Runescape</span>
                            </a>
                            <a href="{{ route('shop') }}"
                                class="py-12 px-8 rounded-8 d-flex flex-column align-items-center text-center text-decoration-none transition-1"
                                style="border:1px solid rgba(124,58,237,0.1); color:#94a3b8;"
                                onmouseover="this.style.background='rgba(124,58,237,0.1)'; this.style.borderColor='rgba(124,58,237,0.4)'; this.style.color='#8878F5';"
                                onmouseout="this.style.background=''; this.style.borderColor='rgba(124,58,237,0.1)'; this.style.color='#94a3b8';">
                                <span class="d-block mb-8 text-2xl">🎮</span>
                                <span class="fw-semibold text-xs">Ver todos</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Main Nav Menu -->
                <div class="header-menu d-lg-block d-none" style="margin-left: 8px;">
                    <ul class="nav-menu flex-align" style="gap: 0; list-style: none; margin: 0; padding: 0;">

                        <li class="on-hover-item nav-menu__item has-submenu" style="position:relative;">
                            <a href="javascript:void(0)" class="nav-menu__link"
                                style="color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.9rem; padding:14px 16px; display:block; text-decoration:none; transition:color 0.2s;">
                                💰 Currency
                            </a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                                style="background:#1e2030; border:1px solid rgba(124,58,237,0.3); border-radius:10px; min-width:200px; padding:8px 0; list-style:none;">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#94a3b8; font-size:0.85rem; text-decoration:none;">
                                        🔥 Diablo 4 Gold</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#94a3b8; font-size:0.85rem; text-decoration:none;">
                                        🌌 Path of Exile 2 Currency</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#94a3b8; font-size:0.85rem; text-decoration:none;">
                                        ⚽ FC 26 Coins</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#94a3b8; font-size:0.85rem; text-decoration:none;">
                                        ⚔️ WoW Gold</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#8878F5; font-size:0.85rem; text-decoration:none; font-weight:600;">
                                        Ver todos →</a>
                                </li>
                            </ul>
                        </li>

                        <li class="on-hover-item nav-menu__item has-submenu" style="position:relative;">
                            <a href="javascript:void(0)" class="nav-menu__link"
                                style="color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.9rem; padding:14px 16px; display:block; text-decoration:none;">
                                ⚔️ Items
                            </a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                                style="background:#1e2030; border:1px solid rgba(124,58,237,0.3); border-radius:10px; min-width:200px; padding:8px 0; list-style:none;">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#94a3b8; font-size:0.85rem; text-decoration:none;">
                                        Itens Raros</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#94a3b8; font-size:0.85rem; text-decoration:none;">
                                        Equipamentos</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#94a3b8; font-size:0.85rem; text-decoration:none;">
                                        Cosméticos</a>
                                </li>
                            </ul>
                        </li>

                        <li class="on-hover-item nav-menu__item has-submenu" style="position:relative;">
                            <a href="javascript:void(0)" class="nav-menu__link"
                                style="color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.9rem; padding:14px 16px; display:block; text-decoration:none;">
                                🚀 Boosting
                            </a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                                style="background:#1e2030; border:1px solid rgba(124,58,237,0.3); border-radius:10px; min-width:200px; padding:8px 0; list-style:none;">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#94a3b8; font-size:0.85rem; text-decoration:none;">
                                        Level Up</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#94a3b8; font-size:0.85rem; text-decoration:none;">
                                        Ranked / ELO</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="{{ route('shop') }}" class="common-dropdown__link nav-submenu__link"
                                        style="display:block; padding:10px 20px; color:#94a3b8; font-size:0.85rem; text-decoration:none;">
                                        Achievements</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-menu__item">
                            <a href="javascript:void(0)" class="nav-menu__link"
                                style="color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.9rem; padding:14px 16px; display:block; text-decoration:none;">
                                🎮 Accounts
                            </a>
                        </li>

                        <li class="nav-menu__item">
                            <a href="javascript:void(0)" class="nav-menu__link"
                                style="color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.9rem; padding:14px 16px; display:block; text-decoration:none;">
                                🎁 Top-Up
                            </a>
                        </li>

                        <li class="nav-menu__item">
                            <a href="javascript:void(0)" class="nav-menu__link"
                                style="color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.9rem; padding:14px 16px; display:block; text-decoration:none;">
                                🎴 Gift Cards
                            </a>
                        </li>

                        <li class="nav-menu__item">
                            <a href="{{ route('contact') }}" class="nav-menu__link"
                                style="color:#64748b; font-family:'Exo',sans-serif; font-weight:600; font-size:0.85rem; padding:14px 16px; display:block; text-decoration:none;">
                                Contato
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Side: Discord / Support -->
            <div class="header-right flex-align gap-16" style="margin-left: auto;">
                <a href="javascript:void(0)" class="d-sm-flex d-none align-items-center gap-10 text-decoration-none">
                    <span style="width:38px; height:38px; background:rgba(88,101,242,0.15); border:1px solid rgba(88,101,242,0.4); border-radius:8px; display:flex; align-items:center; justify-content:center; color:#7289da; font-size:1.1rem;">
                        <i class="ph ph-discord-logo"></i>
                    </span>
                    <span style="font-size:0.8rem;">
                        <span style="display:block; color:#64748b; font-size:0.7rem;">Suporte</span>
                        <span style="color:#e2e8f0; font-weight:700; font-family:'Exo',sans-serif; font-size:0.85rem;">Discord</span>
                    </span>
                </a>
                <button type="button" class="toggle-mobileMenu d-lg-none" style="background:none; border:none; color:#94a3b8; font-size:1.75rem; display:flex; align-items:center;">
                    <i class="ph ph-list"></i>
                </button>
            </div>
        </nav>
    </div>
</header>
<!-- ==================== Navigation Bar Gaming End ==================== -->
