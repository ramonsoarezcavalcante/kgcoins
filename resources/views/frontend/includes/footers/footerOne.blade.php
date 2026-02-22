<!-- ========================== Footer Gaming Start ============================ -->
<footer class="footer-gaming pt-5 pb-0">
    <div class="container container-lg pt-4">
        <div class="row g-5">

            <!-- Coluna 1: Logo + Sobre + Social -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('home') }}" class="footer-logo mb-3 d-inline-flex align-items-center text-decoration-none">
                    <img src="{{ asset('assets/images/logo/kgcoins-logo.png') }}"
                         alt="KG Coins"
                         style="height: 40px; width: auto; object-fit: contain;"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='inline-flex';">
                    <span style="display:none; align-items:center; font-family:'Orbitron',sans-serif; font-weight:700; font-size:1.1rem; color:#8878F5;">
                        <i class="ph ph-coins" style="margin-right:4px;"></i>KG Coins
                    </span>
                </a>
                <p>
                    A maior loja de coins e moedas para jogos do Brasil. Compre com segurança, entrega instantânea e os melhores preços do mercado.
                </p>
                <div class="d-flex gap-6 mt-3" style="flex-wrap:wrap;">
                    <span class="badge-game badge-popular">✓ Entrega Garantida</span>
                    <span class="badge-game badge-new">✓ Antifraude</span>
                    <span class="badge-game" style="background:rgba(245,158,11,0.2); color:#f59e0b;">✓ SSL 256-bit</span>
                </div>
                <div class="social-links mt-3">
                    <a href="javascript:void(0)" class="social-link" title="Discord">
                        <i class="ph ph-discord-logo"></i>
                    </a>
                    <a href="javascript:void(0)" class="social-link" title="YouTube">
                        <i class="ph ph-youtube-logo"></i>
                    </a>
                    <a href="javascript:void(0)" class="social-link" title="Twitch">
                        <i class="ph ph-twitch-logo"></i>
                    </a>
                    <a href="javascript:void(0)" class="social-link" title="Twitter/X">
                        <i class="ph ph-x-logo"></i>
                    </a>
                    <a href="javascript:void(0)" class="social-link" title="Instagram">
                        <i class="ph ph-instagram-logo"></i>
                    </a>
                </div>
            </div>

            <!-- Coluna 2: Games Populares -->
            <div class="col-lg-2 col-md-6">
                <h6>Games Populares</h6>
                <ul>
                    <li><a href="{{ route('shop') }}">🔥 Diablo IV</a></li>
                    <li><a href="{{ route('shop') }}">🌌 Path of Exile 2</a></li>
                    <li><a href="{{ route('shop') }}">⚽ FC 26</a></li>
                    <li><a href="{{ route('shop') }}">⚔️ World of Warcraft</a></li>
                    <li><a href="{{ route('shop') }}">💫 Final Fantasy XIV</a></li>
                    <li><a href="{{ route('shop') }}">🗡️ Lost Ark</a></li>
                    <li><a href="{{ route('shop') }}">🏰 Albion Online</a></li>
                    <li><a href="{{ route('shop') }}">🌿 Runescape</a></li>
                    <li><a href="{{ route('shop') }}" style="color:#8878F5 !important; font-weight:700;">Ver todos →</a></li>
                </ul>
            </div>

            <!-- Coluna 3: Categorias -->
            <div class="col-lg-2 col-md-6">
                <h6>Categorias</h6>
                <ul>
                    <li><a href="{{ route('shop') }}">💰 Currency</a></li>
                    <li><a href="{{ route('shop') }}">⚔️ Items</a></li>
                    <li><a href="{{ route('shop') }}">🚀 Boosting</a></li>
                    <li><a href="{{ route('shop') }}">🎮 Accounts</a></li>
                    <li><a href="{{ route('shop') }}">🎁 Top-Up</a></li>
                    <li><a href="{{ route('shop') }}">🎴 Gift Cards</a></li>
                </ul>

                <h6 class="mt-4">Minha Conta</h6>
                <ul>
                    @auth
                        <li><a href="{{ route('loyalty.dashboard') }}">🏆 Fidelidade</a></li>
                        <li><a href="{{ route('account') }}">👤 Perfil</a></li>
                        <li><a href="{{ route('wishlist') }}">❤️ Wishlist</a></li>
                    @endauth
                    @guest
                        <li><a href="{{ route('login') }}">Entrar</a></li>
                        <li><a href="{{ route('register') }}">Cadastrar</a></li>
                    @endguest
                </ul>
            </div>

            <!-- Coluna 4: Suporte -->
            <div class="col-lg-2 col-md-6">
                <h6>Suporte</h6>
                <ul>
                    <li><a href="{{ route('contact') }}">📞 Contato</a></li>
                    <li><a href="javascript:void(0)">❓ FAQ</a></li>
                    <li><a href="javascript:void(0)">🔄 Política de Reembolso</a></li>
                    <li><a href="javascript:void(0)">📋 Termos de Uso</a></li>
                    <li><a href="javascript:void(0)">🔒 Privacidade</a></li>
                    <li><a href="{{ route('blog') }}">📰 Blog / Notícias</a></li>
                </ul>

                <h6 class="mt-4">Contato</h6>
                <ul>
                    <li><a href="mailto:suporte@kgcoins.com.br">📧 suporte@kgcoins.com.br</a></li>
                    <li>
                        <a href="javascript:void(0)" style="display:flex; align-items:center; gap:6px;">
                            <i class="ph ph-discord-logo" style="color:#7289da;"></i> Discord 24/7
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Coluna 5: Formas de Pagamento -->
            <div class="col-lg-2 col-md-6">
                <h6>Pagamento Seguro</h6>
                <div class="d-flex flex-wrap gap-6 mb-3">
                    <div class="payment-icon">PIX</div>
                    <div class="payment-icon">Visa</div>
                    <div class="payment-icon">Master</div>
                    <div class="payment-icon">Boleto</div>
                    <div class="payment-icon">PayPal</div>
                    <div class="payment-icon">Elo</div>
                </div>
                <div style="background:rgba(124,58,237,0.1); border:1px solid rgba(124,58,237,0.2); border-radius:8px; padding:12px; margin-top:8px;">
                    <div style="color:#8878F5; font-family:'Exo',sans-serif; font-weight:700; font-size:0.8rem; margin-bottom:4px;">🔒 Compra Segura</div>
                    <div style="color:#64748b; font-size:0.75rem; line-height:1.4;">Seus dados protegidos com criptografia SSL de 256 bits</div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-gaming footer-bottom mt-5">
        <div class="container container-lg">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <p style="color:#374151; font-size:0.8rem; margin:0;">
                    © {{ date('Y') }} KG Coins. Todos os direitos reservados. |
                    <a href="javascript:void(0)" style="color:#4b5563; text-decoration:none;">Termos</a> ·
                    <a href="javascript:void(0)" style="color:#4b5563; text-decoration:none;">Privacidade</a>
                </p>
                <p style="color:#374151; font-size:0.75rem; margin:0;">
                    Feito com ❤️ para gamers brasileiros · KG Coins não é afiliado às empresas dos jogos
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- ========================== Footer Gaming End ============================ -->
