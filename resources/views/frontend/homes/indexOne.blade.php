@extends('frontend.layouts.app')
@section('title', 'KG Coins - Coins para seus Jogos Favoritos')
@section('content')

    <!-- ============================ Header ============================ -->
    @include('frontend.includes.headers.headerOne')

    <!-- ============================ HERO BANNER ============================ -->
    <div class="banner-gaming py-0">
        <div class="container container-lg py-5">
            <div class="banner-item rounded-24 overflow-hidden position-relative arrow-center"
                style="background: linear-gradient(135deg, #13141e 0%, #1c1535 50%, #08101e 100%); min-height: 460px; display:flex; align-items:center;">

                <!-- Glow effects -->
                <div style="position:absolute; top:-100px; left:-100px; width:400px; height:400px; background:radial-gradient(circle, rgba(124,58,237,0.2) 0%, transparent 70%); pointer-events:none;"></div>
                <div style="position:absolute; bottom:-50px; right:-50px; width:300px; height:300px; background:radial-gradient(circle, rgba(6,182,212,0.15) 0%, transparent 70%); pointer-events:none;"></div>

                <div class="flex-align w-100">
                    <button type="button" id="banner-prev"
                        class="slick-prev slick-arrow flex-center rounded-circle text-xl transition-1"
                        style="background:rgba(124,58,237,0.2); border:1px solid rgba(124,58,237,0.4); color:#8878F5; width:44px; height:44px;">
                        <i class="ph ph-caret-left"></i>
                    </button>
                    <button type="button" id="banner-next"
                        class="slick-next slick-arrow flex-center rounded-circle text-xl transition-1"
                        style="background:rgba(124,58,237,0.2); border:1px solid rgba(124,58,237,0.4); color:#8878F5; width:44px; height:44px;">
                        <i class="ph ph-caret-right"></i>
                    </button>
                </div>

                <div class="banner-slider w-100">
                    <!-- Slide 1: Diablo 4 -->
                    <div class="banner-slider__item px-4 px-lg-5 py-5">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-6">
                                <div class="banner-gaming__tag">Gold em até 5 minutos</div>
                                <h1 class="banner-gaming__title">
                                    Coins para seus<br><span>Jogos Favoritos</span>
                                </h1>
                                <p class="banner-gaming__subtitle">
                                    Entrega Instantânea &nbsp;·&nbsp; 100% Seguro &nbsp;·&nbsp; Melhor Preço &nbsp;·&nbsp; Suporte 24/7
                                </p>
                                <div class="d-flex align-items-center gap-16 flex-wrap">
                                    <a href="{{ route('shop') }}" class="btn-neon" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
                                        <i class="ph ph-shopping-cart-simple"></i> Comprar Agora
                                    </a>
                                    <a href="{{ route('shop') }}" class="btn-neon-cyan" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
                                        <i class="ph ph-game-controller"></i> Ver Games
                                    </a>
                                </div>
                                <div class="banner-gaming__stats mt-4">
                                    <div class="banner-gaming__stat">
                                        <span class="banner-gaming__stat-value">50k+</span>
                                        <span class="banner-gaming__stat-label">Clientes</span>
                                    </div>
                                    <div class="banner-gaming__stat">
                                        <span class="banner-gaming__stat-value">200+</span>
                                        <span class="banner-gaming__stat-label">Games</span>
                                    </div>
                                    <div class="banner-gaming__stat">
                                        <span class="banner-gaming__stat-value">5min</span>
                                        <span class="banner-gaming__stat-label">Entrega</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center banner-item__thumb animate-scale animation-delay-12">
                                <div style="position:relative; display:inline-block;">
                                    <div style="width:320px; height:320px; background:linear-gradient(135deg, #1e2030, #17133a); border-radius:50%; border:2px solid rgba(124,58,237,0.3); display:flex; align-items:center; justify-content:center; margin:0 auto; box-shadow:0 0 60px rgba(124,58,237,0.3);">
                                        <span style="font-size:8rem;">🔥</span>
                                    </div>
                                    <div class="badge-game badge-hot" style="position:absolute; top:20px; right:20px; font-size:0.75rem; padding:6px 12px;">
                                        DIABLO 4
                                    </div>
                                    <div style="position:absolute; bottom:20px; left:50%; transform:translateX(-50%); background:rgba(13,15,26,0.9); border:1px solid rgba(124,58,237,0.4); border-radius:10px; padding:8px 16px; white-space:nowrap;">
                                        <span style="color:#94a3b8; font-size:0.75rem;">Gold a partir de</span>
                                        <span style="color:#f97316; font-weight:800; font-family:'Exo',sans-serif; font-size:1rem; margin-left:6px;">R$ 4,99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Path of Exile 2 -->
                    <div class="banner-slider__item px-4 px-lg-5 py-5">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-6">
                                <div class="banner-gaming__tag">Currency garantida</div>
                                <h1 class="banner-gaming__title">
                                    Path of Exile 2<br><span>Currency Shop</span>
                                </h1>
                                <p class="banner-gaming__subtitle">
                                    Exalted Orbs, Divine Orbs, Chaos Orbs &nbsp;·&nbsp; Entrega Rápida
                                </p>
                                <div class="d-flex align-items-center gap-16 flex-wrap">
                                    <a href="{{ route('shop') }}" class="btn-neon" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
                                        <i class="ph ph-shopping-cart-simple"></i> Comprar Currency
                                    </a>
                                    <a href="{{ route('shop') }}" class="btn-neon-cyan" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
                                        <i class="ph ph-star"></i> Ofertas
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div style="width:320px; height:320px; background:linear-gradient(135deg, #1e2030, #0a1a2e); border-radius:50%; border:2px solid rgba(6,182,212,0.3); display:flex; align-items:center; justify-content:center; margin:0 auto; box-shadow:0 0 60px rgba(6,182,212,0.2);">
                                    <span style="font-size:8rem;">🌌</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: FC 26 -->
                    <div class="banner-slider__item px-4 px-lg-5 py-5">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-6">
                                <div class="banner-gaming__tag" style="background:rgba(249,115,22,0.15); border-color:rgba(249,115,22,0.4); color:#fb923c;">Melhor preço garantido</div>
                                <h1 class="banner-gaming__title">
                                    FC 26 Coins<br><span style="background:linear-gradient(135deg, #fb923c, #f59e0b); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">Preço Top</span>
                                </h1>
                                <p class="banner-gaming__subtitle">
                                    FC Points, Players, SBCs &nbsp;·&nbsp; Bônus de 5% no primeiro pedido
                                </p>
                                <div class="d-flex align-items-center gap-16 flex-wrap">
                                    <a href="{{ route('shop') }}" class="btn-neon" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none; background:linear-gradient(135deg,#f97316,#ea580c); box-shadow:0 4px 15px rgba(249,115,22,0.4);">
                                        <i class="ph ph-shopping-cart-simple"></i> Comprar Agora
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div style="width:320px; height:320px; background:linear-gradient(135deg, #1e2030, #1a0d00); border-radius:50%; border:2px solid rgba(249,115,22,0.3); display:flex; align-items:center; justify-content:center; margin:0 auto; box-shadow:0 0 60px rgba(249,115,22,0.2);">
                                    <span style="font-size:8rem;">⚽</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ HERO BANNER END ============================ -->

    <!-- ============================ GAMES STRIP ============================ -->
    <div class="games-strip" id="featureSection">
        <div class="container container-lg">
            <div class="position-relative arrow-center gradient-shadow">
                <div class="flex-align">
                    <button type="button" id="feature-item-wrapper-prev"
                        class="slick-prev slick-arrow flex-center rounded-circle text-xl transition-1"
                        style="background:rgba(124,58,237,0.15); border:1px solid rgba(124,58,237,0.3); color:#8878F5; width:36px; height:36px;">
                        <i class="ph ph-caret-left"></i>
                    </button>
                    <button type="button" id="feature-item-wrapper-next"
                        class="slick-next slick-arrow flex-center rounded-circle text-xl transition-1"
                        style="background:rgba(124,58,237,0.15); border:1px solid rgba(124,58,237,0.3); color:#8878F5; width:36px; height:36px;">
                        <i class="ph ph-caret-right"></i>
                    </button>
                </div>
                <div class="feature-item__wrapper" style="overflow:hidden;">
                    <a href="{{ route('shop') }}" class="game-pill">🔥 Diablo 4</a>
                    <a href="{{ route('shop') }}" class="game-pill">🌌 Path of Exile 2</a>
                    <a href="{{ route('shop') }}" class="game-pill">⚽ FC 26</a>
                    <a href="{{ route('shop') }}" class="game-pill">⚔️ World of Warcraft</a>
                    <a href="{{ route('shop') }}" class="game-pill">💫 Final Fantasy XIV</a>
                    <a href="{{ route('shop') }}" class="game-pill">🗡️ Lost Ark</a>
                    <a href="{{ route('shop') }}" class="game-pill">🏰 Albion Online</a>
                    <a href="{{ route('shop') }}" class="game-pill">🌿 Runescape</a>
                    <a href="{{ route('shop') }}" class="game-pill">🎯 Escape from Tarkov</a>
                    <a href="{{ route('shop') }}" class="game-pill">🧙 Elder Scrolls Online</a>
                    <a href="{{ route('shop') }}" class="game-pill">⚡ Throne and Liberty</a>
                    <a href="{{ route('shop') }}" class="game-pill">🎭 Genshin Impact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ GAMES STRIP END ============================ -->

    <!-- ============================ CATEGORIAS PRINCIPAIS ============================ -->
    <div class="section-dark py-5">
        <div class="container container-lg">
            <div class="text-center mb-5">
                <h2 class="section-title-gaming">O que você quer <span>comprar?</span></h2>
                <div class="section-line mx-auto"></div>
                <p class="section-subtitle-gaming">Escolha a categoria e encontre o melhor preço</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('shop') }}" class="game-category-card">
                        <span class="icon">💰</span>
                        <h4>Game Currency</h4>
                        <p>Gold, Coins, Gil, Orbs e todas as moedas dos seus jogos favoritos</p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('shop') }}" class="game-category-card" style="border-color:rgba(6,182,212,0.2);"
                        onmouseover="this.style.borderColor='#8878F5'; this.style.boxShadow='0 8px 30px rgba(6,182,212,0.2)';"
                        onmouseout="this.style.borderColor='rgba(6,182,212,0.2)'; this.style.boxShadow='';">
                        <span class="icon icon-neon-cyan">⚔️</span>
                        <h4>Game Items</h4>
                        <p>Itens raros, equipamentos lendários e cosméticos exclusivos</p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('shop') }}" class="game-category-card" style="border-color:rgba(249,115,22,0.2);"
                        onmouseover="this.style.borderColor='#f97316'; this.style.boxShadow='0 8px 30px rgba(249,115,22,0.2)';"
                        onmouseout="this.style.borderColor='rgba(249,115,22,0.2)'; this.style.boxShadow='';">
                        <span class="icon icon-neon-orange">🚀</span>
                        <h4>Boosting</h4>
                        <p>Level up, serviços de ranked, conquistas e power leveling</p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('shop') }}" class="game-category-card" style="border-color:rgba(245,158,11,0.2);"
                        onmouseover="this.style.borderColor='#f59e0b'; this.style.boxShadow='0 8px 30px rgba(245,158,11,0.2)';"
                        onmouseout="this.style.borderColor='rgba(245,158,11,0.2)'; this.style.boxShadow='';">
                        <span class="icon" style="filter:drop-shadow(0 0 10px rgba(245,158,11,0.5));">🎮</span>
                        <h4>Game Accounts</h4>
                        <p>Contas prontas, high level, full equipadas e starter packs</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ CATEGORIAS END ============================ -->

    <!-- ============================ GAMES EM DESTAQUE ============================ -->
    <div class="section-dark-2 py-5">
        <div class="container container-lg">
            <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">
                <div>
                    <h2 class="section-title-gaming mb-1">Games em <span>Destaque</span></h2>
                    <div class="section-line" style="margin-bottom:0;"></div>
                </div>
                <a href="{{ route('shop') }}" class="btn-neon-cyan text-decoration-none" style="font-size:0.8rem; padding:8px 20px;">
                    Ver Todos <i class="ph ph-arrow-right"></i>
                </a>
            </div>

            <div class="row g-4">
                <!-- Diablo 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="game-card">
                        <div class="position-relative">
                            <div class="badge-absolute badge-game badge-hot">🔥 HOT</div>
                            <div style="height:180px; background:linear-gradient(135deg, #1a0a0a, #2d0000); display:flex; align-items:center; justify-content:center; font-size:5rem;">🔥</div>
                        </div>
                        <div class="game-card__body">
                            <h3 class="game-card__title">Diablo IV Gold</h3>
                            <p class="game-card__subtitle">Gold · Itens · Power Leveling</p>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <span class="game-card__price-from d-block">A partir de</span>
                                    <span class="game-card__price">R$ 4,99</span>
                                </div>
                                <span class="badge-game badge-sale">-20%</span>
                            </div>
                            <a href="{{ route('shop') }}" class="game-card__btn">Ver Ofertas</a>
                        </div>
                    </div>
                </div>

                <!-- Path of Exile 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="game-card">
                        <div class="position-relative">
                            <div class="badge-absolute badge-game badge-new">NOVO</div>
                            <div style="height:180px; background:linear-gradient(135deg, #0a0a1a, #00002d); display:flex; align-items:center; justify-content:center; font-size:5rem;">🌌</div>
                        </div>
                        <div class="game-card__body">
                            <h3 class="game-card__title">Path of Exile 2</h3>
                            <p class="game-card__subtitle">Currency · Items · Boosting</p>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <span class="game-card__price-from d-block">A partir de</span>
                                    <span class="game-card__price">R$ 7,99</span>
                                </div>
                                <span class="badge-game badge-popular">POPULAR</span>
                            </div>
                            <a href="{{ route('shop') }}" class="game-card__btn">Ver Ofertas</a>
                        </div>
                    </div>
                </div>

                <!-- FC 26 -->
                <div class="col-md-6 col-lg-4">
                    <div class="game-card">
                        <div class="position-relative">
                            <div class="badge-absolute badge-game badge-sale">-15%</div>
                            <div style="height:180px; background:linear-gradient(135deg, #0a1a00, #002d00); display:flex; align-items:center; justify-content:center; font-size:5rem;">⚽</div>
                        </div>
                        <div class="game-card__body">
                            <h3 class="game-card__title">FC 26 Coins</h3>
                            <p class="game-card__subtitle">Ultimate Team · Players · SBCs</p>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <span class="game-card__price-from d-block">A partir de</span>
                                    <span class="game-card__price">R$ 9,90</span>
                                </div>
                            </div>
                            <a href="{{ route('shop') }}" class="game-card__btn">Ver Ofertas</a>
                        </div>
                    </div>
                </div>

                <!-- WoW -->
                <div class="col-md-6 col-lg-4">
                    <div class="game-card">
                        <div class="position-relative">
                            <div style="height:180px; background:linear-gradient(135deg, #1a0a00, #2d1a00); display:flex; align-items:center; justify-content:center; font-size:5rem;">⚔️</div>
                        </div>
                        <div class="game-card__body">
                            <h3 class="game-card__title">World of Warcraft</h3>
                            <p class="game-card__subtitle">Gold · Items · Boosting</p>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <span class="game-card__price-from d-block">A partir de</span>
                                    <span class="game-card__price">R$ 14,99</span>
                                </div>
                            </div>
                            <a href="{{ route('shop') }}" class="game-card__btn">Ver Ofertas</a>
                        </div>
                    </div>
                </div>

                <!-- Final Fantasy XIV -->
                <div class="col-md-6 col-lg-4">
                    <div class="game-card">
                        <div class="position-relative">
                            <div style="height:180px; background:linear-gradient(135deg, #00001a, #001a2d); display:flex; align-items:center; justify-content:center; font-size:5rem;">💫</div>
                        </div>
                        <div class="game-card__body">
                            <h3 class="game-card__title">Final Fantasy XIV</h3>
                            <p class="game-card__subtitle">Gil · Items · Power Level</p>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <span class="game-card__price-from d-block">A partir de</span>
                                    <span class="game-card__price">R$ 12,50</span>
                                </div>
                            </div>
                            <a href="{{ route('shop') }}" class="game-card__btn">Ver Ofertas</a>
                        </div>
                    </div>
                </div>

                <!-- Lost Ark -->
                <div class="col-md-6 col-lg-4">
                    <div class="game-card">
                        <div class="position-relative">
                            <div class="badge-absolute badge-game badge-sale">-10%</div>
                            <div style="height:180px; background:linear-gradient(135deg, #1a001a, #2d002d); display:flex; align-items:center; justify-content:center; font-size:5rem;">🗡️</div>
                        </div>
                        <div class="game-card__body">
                            <h3 class="game-card__title">Lost Ark</h3>
                            <p class="game-card__subtitle">Gold · Gems · Materials</p>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <span class="game-card__price-from d-block">A partir de</span>
                                    <span class="game-card__price">R$ 6,99</span>
                                </div>
                            </div>
                            <a href="{{ route('shop') }}" class="game-card__btn">Ver Ofertas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ GAMES END ============================ -->

    <!-- ============================ POR QUE ESCOLHER ============================ -->
    <div class="section-gaming py-5">
        <div class="container container-lg">
            <div class="text-center mb-5">
                <h2 class="section-title-gaming">Por que escolher a <span>KG Coins?</span></h2>
                <div class="section-line mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="why-card">
                        <div class="icon-wrap">
                            <span class="icon-neon">⚡</span>
                        </div>
                        <h5>Entrega Instantânea</h5>
                        <p>Coins e itens entregues em até 5 minutos após confirmação do pagamento</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="why-card">
                        <div class="icon-wrap" style="background:rgba(6,182,212,0.15); border-color:rgba(6,182,212,0.3);">
                            <span class="icon-neon-cyan">🔒</span>
                        </div>
                        <h5>100% Seguro</h5>
                        <p>Pagamento seguro via Pix, cartão ou boleto. Criptografia SSL em todas as transações</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="why-card">
                        <div class="icon-wrap" style="background:rgba(249,115,22,0.15); border-color:rgba(249,115,22,0.3);">
                            <span class="icon-neon-orange">💬</span>
                        </div>
                        <h5>Suporte 24/7</h5>
                        <p>Nossa equipe está disponível 24 horas por dia, 7 dias por semana via chat e Discord</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="why-card">
                        <div class="icon-wrap" style="background:rgba(245,158,11,0.15); border-color:rgba(245,158,11,0.3);">
                            <span style="font-size:1.75rem; filter:drop-shadow(0 0 8px rgba(245,158,11,0.7));">💰</span>
                        </div>
                        <h5>Melhor Preço</h5>
                        <p>Garantimos o melhor preço do mercado. Encontrou mais barato? Igualamos!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ POR QUE ESCOLHER END ============================ -->

    <!-- ============================ ESTATÍSTICAS ============================ -->
    <div class="section-dark-3 py-5">
        <div class="container container-lg">
            <div class="stats-gaming">
                <div class="row g-4 text-center">
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <div class="stat-item__value">50K+</div>
                            <div class="stat-item__label">Clientes Satisfeitos</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <div class="stat-item__value">200+</div>
                            <div class="stat-item__label">Games Suportados</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <div class="stat-item__value">1M+</div>
                            <div class="stat-item__label">Pedidos Entregues</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <div class="stat-item__value">4.9★</div>
                            <div class="stat-item__label">Avaliação Média</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ ESTATÍSTICAS END ============================ -->

    <!-- ============================ OFERTA RELÂMPAGO ============================ -->
    <div class="flash-sale-section py-5">
        <div class="container container-lg">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                <div>
                    <h2 class="section-title-gaming mb-1">⚡ Ofertas <span>Relâmpago</span></h2>
                    <div class="section-line" style="margin-bottom:0;"></div>
                </div>
                <div class="flash-sale-timer">
                    <span style="color:#94a3b8; font-size:0.8rem; font-family:'Exo',sans-serif; font-weight:600; text-transform:uppercase; letter-spacing:1px;">Termina em:</span>
                    <div class="d-flex align-items-center gap-8" id="countdown-flash">
                        <div class="timer-unit">
                            <span class="timer-unit__value hours">08</span>
                            <span class="timer-unit__label">Horas</span>
                        </div>
                        <span class="timer-separator">:</span>
                        <div class="timer-unit">
                            <span class="timer-unit__value minutes">45</span>
                            <span class="timer-unit__label">Min</span>
                        </div>
                        <span class="timer-separator">:</span>
                        <div class="timer-unit">
                            <span class="timer-unit__value seconds">30</span>
                            <span class="timer-unit__label">Seg</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="game-card neon-border-animated">
                        <div style="height:140px; background:linear-gradient(135deg, #1a0a0a, #2d0000); display:flex; align-items:center; justify-content:center; font-size:4rem; position:relative;">
                            🔥
                            <div class="badge-absolute badge-game badge-sale">-30%</div>
                        </div>
                        <div class="game-card__body">
                            <h3 class="game-card__title" style="font-size:0.9rem;">D4 Gold 100M</h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span style="color:#475569; text-decoration:line-through; font-size:0.8rem;">R$ 29,90</span>
                                    <span class="game-card__price d-block" style="font-size:1.1rem;">R$ 20,93</span>
                                </div>
                                <a href="{{ route('shop') }}" class="game-card__btn" style="width:auto; padding:6px 12px; font-size:0.75rem;">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="game-card neon-border-animated">
                        <div style="height:140px; background:linear-gradient(135deg, #0a0a1a, #00002d); display:flex; align-items:center; justify-content:center; font-size:4rem; position:relative;">
                            🌌
                            <div class="badge-absolute badge-game badge-sale">-25%</div>
                        </div>
                        <div class="game-card__body">
                            <h3 class="game-card__title" style="font-size:0.9rem;">PoE2 Exalted Orb x10</h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span style="color:#475569; text-decoration:line-through; font-size:0.8rem;">R$ 39,90</span>
                                    <span class="game-card__price d-block" style="font-size:1.1rem;">R$ 29,93</span>
                                </div>
                                <a href="{{ route('shop') }}" class="game-card__btn" style="width:auto; padding:6px 12px; font-size:0.75rem;">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="game-card neon-border-animated">
                        <div style="height:140px; background:linear-gradient(135deg, #0a1a00, #002d00); display:flex; align-items:center; justify-content:center; font-size:4rem; position:relative;">
                            ⚽
                            <div class="badge-absolute badge-game badge-sale">-20%</div>
                        </div>
                        <div class="game-card__body">
                            <h3 class="game-card__title" style="font-size:0.9rem;">FC 26 1000K Coins</h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span style="color:#475569; text-decoration:line-through; font-size:0.8rem;">R$ 49,90</span>
                                    <span class="game-card__price d-block" style="font-size:1.1rem;">R$ 39,92</span>
                                </div>
                                <a href="{{ route('shop') }}" class="game-card__btn" style="width:auto; padding:6px 12px; font-size:0.75rem;">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="game-card neon-border-animated">
                        <div style="height:140px; background:linear-gradient(135deg, #1a0a00, #2d1a00); display:flex; align-items:center; justify-content:center; font-size:4rem; position:relative;">
                            ⚔️
                            <div class="badge-absolute badge-game badge-sale">-15%</div>
                        </div>
                        <div class="game-card__body">
                            <h3 class="game-card__title" style="font-size:0.9rem;">WoW Gold 50K</h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span style="color:#475569; text-decoration:line-through; font-size:0.8rem;">R$ 34,90</span>
                                    <span class="game-card__price d-block" style="font-size:1.1rem;">R$ 29,67</span>
                                </div>
                                <a href="{{ route('shop') }}" class="game-card__btn" style="width:auto; padding:6px 12px; font-size:0.75rem;">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ OFERTA END ============================ -->

    <!-- ============================ MARQUEE GAMES SUPORTADOS ============================ -->
    <div class="marquee-gaming py-3">
        <div class="d-flex align-items-center" style="white-space:nowrap; animation:marqueeScroll 30s linear infinite;">
            <span class="marquee-item">Diablo IV</span>
            <span class="marquee-item">Path of Exile 2</span>
            <span class="marquee-item">FC 26</span>
            <span class="marquee-item">World of Warcraft</span>
            <span class="marquee-item">Final Fantasy XIV</span>
            <span class="marquee-item">Lost Ark</span>
            <span class="marquee-item">Albion Online</span>
            <span class="marquee-item">Runescape</span>
            <span class="marquee-item">Throne & Liberty</span>
            <span class="marquee-item">Genshin Impact</span>
            <span class="marquee-item">Escape from Tarkov</span>
            <span class="marquee-item">Elder Scrolls Online</span>
            <span class="marquee-item">Guild Wars 2</span>
            <span class="marquee-item">Aion</span>
            <span class="marquee-item">Diablo IV</span>
            <span class="marquee-item">Path of Exile 2</span>
            <span class="marquee-item">FC 26</span>
            <span class="marquee-item">World of Warcraft</span>
            <span class="marquee-item">Final Fantasy XIV</span>
            <span class="marquee-item">Lost Ark</span>
        </div>
    </div>
    <!-- ============================ MARQUEE END ============================ -->

    <!-- ============================ DEPOIMENTOS ============================ -->
    <div class="section-dark py-5">
        <div class="container container-lg">
            <div class="text-center mb-5">
                <h2 class="section-title-gaming">O que nossos <span>clientes dizem</span></h2>
                <div class="section-line mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p>"Recebi o gold do Diablo 4 em menos de 3 minutos! Serviço impecável e preço justo. Com certeza voltarei a comprar."</p>
                        <div>
                            <div class="author">Carlos M.</div>
                            <div class="author-game">🔥 Diablo IV · Gold</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p>"Comprei Exalted Orbs para o PoE 2 e foi tudo perfeito. O suporte me ajudou rapidamente quando tive uma dúvida."</p>
                        <div>
                            <div class="author">Ana K.</div>
                            <div class="author-game">🌌 Path of Exile 2 · Currency</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p>"Melhor site para comprar FC Coins! Preço baixo, entrega rápida e sem risco de ban. Recomendo para todos os jogadores!"</p>
                        <div>
                            <div class="author">Pedro L.</div>
                            <div class="author-game">⚽ FC 26 · Ultimate Team</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ DEPOIMENTOS END ============================ -->

    <!-- ============================ PROGRAMA DE FIDELIDADE BANNER ============================ -->
    <div class="py-5" style="background:linear-gradient(135deg, #17133a, #13141e, #082a1a);">
        <div class="container container-lg">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div class="badge-game badge-popular mb-3" style="display:inline-block;">🏆 PROGRAMA DE FIDELIDADE</div>
                    <h2 class="section-title-gaming mb-3">Ganhe pontos em <span>cada compra!</span></h2>
                    <p style="color:#94a3b8; font-size:1rem; margin-bottom:1.5rem;">
                        Acumule pontos, suba de nível e desbloqueie benefícios exclusivos. Bronze → Prata → Ouro → Platina
                    </p>
                    <div class="d-flex align-items-center gap-16 flex-wrap">
                        @auth
                            <a href="{{ route('loyalty.dashboard') }}" class="btn-neon text-decoration-none" style="display:inline-flex; align-items:center; gap:8px;">
                                <i class="ph ph-trophy"></i> Ver Meus Pontos
                            </a>
                        @endauth
                        @guest
                            <a href="{{ route('register') }}" class="btn-neon text-decoration-none" style="display:inline-flex; align-items:center; gap:8px;">
                                <i class="ph ph-user-plus"></i> Cadastre-se Grátis
                            </a>
                            <a href="{{ route('login') }}" class="btn-neon-cyan text-decoration-none" style="display:inline-flex; align-items:center; gap:8px;">
                                <i class="ph ph-sign-in"></i> Login
                            </a>
                        @endguest
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row g-3">
                        <div class="col-6">
                            <div style="background:rgba(205,127,50,0.1); border:1px solid rgba(205,127,50,0.3); border-radius:10px; padding:1rem; text-align:center;">
                                <div style="font-size:2rem; margin-bottom:4px;">🥉</div>
                                <div style="color:#cd7f32; font-family:'Exo',sans-serif; font-weight:700; font-size:0.85rem;">Bronze</div>
                                <div style="color:#64748b; font-size:0.75rem;">0 - 500 pts</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="background:rgba(192,192,192,0.1); border:1px solid rgba(192,192,192,0.3); border-radius:10px; padding:1rem; text-align:center;">
                                <div style="font-size:2rem; margin-bottom:4px;">🥈</div>
                                <div style="color:#c0c0c0; font-family:'Exo',sans-serif; font-weight:700; font-size:0.85rem;">Prata</div>
                                <div style="color:#64748b; font-size:0.75rem;">500 - 2000 pts</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="background:rgba(255,215,0,0.1); border:1px solid rgba(255,215,0,0.3); border-radius:10px; padding:1rem; text-align:center;">
                                <div style="font-size:2rem; margin-bottom:4px;">🥇</div>
                                <div style="color:#ffd700; font-family:'Exo',sans-serif; font-weight:700; font-size:0.85rem;">Ouro</div>
                                <div style="color:#64748b; font-size:0.75rem;">2000 - 5000 pts</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="background:rgba(229,228,226,0.1); border:1px solid rgba(229,228,226,0.3); border-radius:10px; padding:1rem; text-align:center;">
                                <div style="font-size:2rem; margin-bottom:4px;">💎</div>
                                <div style="color:#e5e4e2; font-family:'Exo',sans-serif; font-weight:700; font-size:0.85rem;">Platina</div>
                                <div style="color:#64748b; font-size:0.75rem;">5000+ pts</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ FIDELIDADE END ============================ -->

    <!-- ============================ FOOTER ============================ -->
    @include('frontend.includes.footers.footerOne')
    <!-- ============================ FOOTER END ============================ -->

@endsection

@section('script')
<style>
@keyframes marqueeScroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
</style>
@endsection
