<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block" style="background:#13141e; border-right:1px solid rgba(124,58,237,0.3);">
    <button type="button" class="close-button" style="color:#94a3b8;"> <i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="{{route('home')}}" class="mobile-menu__logo text-decoration-none d-flex align-items-center" style="padding:1rem 1.5rem;">
            <img src="{{ asset('assets/images/logo/kgcoins-logo.png') }}"
                 alt="KG Coins"
                 style="height: 36px; width: auto; object-fit: contain;"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
            <span class="logo-gaming" style="display:none; align-items:center; font-size:1.25rem;">
                <i class="ph ph-coins" style="margin-right:4px;"></i>KG Coins
            </span>
        </a>
        <div class="mobile-menu__menu" style="padding:1rem 0;">
            <ul class="nav-menu flex-align nav-menu--mobile" style="list-style:none; padding:0; margin:0;">
                <li class="on-hover-item nav-menu__item has-submenu">
                    <a href="{{ route('home') }}" class="nav-menu__link"
                        style="display:block; padding:12px 20px; color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.95rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.1);">
                        🏠 Início
                    </a>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link"
                        style="display:block; padding:12px 20px; color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.95rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.1);">
                        💰 Currency
                    </a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                        style="background:#1a1c28; border:none; padding:0; list-style:none;">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('shop')}}" class="common-dropdown__link nav-submenu__link"
                                style="display:block; padding:10px 32px; color:#94a3b8; font-size:0.875rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.05);">
                                🔥 Diablo 4 Gold</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('shop')}}" class="common-dropdown__link nav-submenu__link"
                                style="display:block; padding:10px 32px; color:#94a3b8; font-size:0.875rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.05);">
                                🌌 Path of Exile 2 Currency</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('shop')}}" class="common-dropdown__link nav-submenu__link"
                                style="display:block; padding:10px 32px; color:#94a3b8; font-size:0.875rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.05);">
                                ⚽ FC 26 Coins</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('shop')}}" class="common-dropdown__link nav-submenu__link"
                                style="display:block; padding:10px 32px; color:#94a3b8; font-size:0.875rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.05);">
                                ⚔️ WoW Gold</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link"
                        style="display:block; padding:12px 20px; color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.95rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.1);">
                        ⚔️ Items
                    </a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm"
                        style="background:#1a1c28; border:none; padding:0; list-style:none;">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('shop')}}" class="common-dropdown__link nav-submenu__link"
                                style="display:block; padding:10px 32px; color:#94a3b8; font-size:0.875rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.05);">
                                Itens Raros</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{route('shop')}}" class="common-dropdown__link nav-submenu__link"
                                style="display:block; padding:10px 32px; color:#94a3b8; font-size:0.875rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.05);">
                                Equipamentos</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item">
                    <a href="javascript:void(0)" class="nav-menu__link"
                        style="display:block; padding:12px 20px; color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.95rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.1);">
                        🚀 Boosting
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a href="javascript:void(0)" class="nav-menu__link"
                        style="display:block; padding:12px 20px; color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.95rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.1);">
                        🎮 Accounts
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a href="javascript:void(0)" class="nav-menu__link"
                        style="display:block; padding:12px 20px; color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.95rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.1);">
                        🎁 Top-Up
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a href="javascript:void(0)" class="nav-menu__link"
                        style="display:block; padding:12px 20px; color:#cbd5e1; font-family:'Exo',sans-serif; font-weight:600; font-size:0.95rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.1);">
                        🎴 Gift Cards
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ route('shop') }}" class="nav-menu__link"
                        style="display:block; padding:12px 20px; color:#94a3b8; font-family:'Exo',sans-serif; font-weight:600; font-size:0.9rem; text-decoration:none; border-bottom:1px solid rgba(124,58,237,0.1);">
                        🛒 Loja
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ route('contact') }}" class="nav-menu__link"
                        style="display:block; padding:12px 20px; color:#94a3b8; font-family:'Exo',sans-serif; font-weight:600; font-size:0.9rem; text-decoration:none;">
                        📞 Contato
                    </a>
                </li>
            </ul>

            <!-- Mobile Auth Buttons -->
            <div style="padding: 1.25rem 1.25rem 0.5rem;">
                @auth
                    <a href="{{ route('loyalty.dashboard') }}" class="btn-neon d-block text-center mb-8" style="text-decoration:none; margin-bottom:8px;">
                        Minha Conta
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form-mobile').submit();"
                        style="display:block; text-align:center; padding:10px; color:#64748b; font-size:0.85rem; text-decoration:none;">
                        Sair
                    </a>
                    <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="btn-neon-cyan d-block text-center mb-8" style="text-decoration:none; margin-bottom:8px;">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="btn-neon d-block text-center" style="text-decoration:none;">
                        Cadastrar
                    </a>
                @endguest
            </div>
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->
