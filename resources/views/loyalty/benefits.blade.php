@extends('frontend.layouts.app')

@section('title', 'Benefícios por Nível - KG Coins')

@section('content')

    @include('frontend.includes.headers.headerOne')

    <!-- PAGE HERO -->
    <div style="background: linear-gradient(135deg, #13141e 0%, #1c1535 50%, #08101e 100%); border-bottom: 1px solid rgba(107,94,240,0.2); padding: 3rem 0 2rem;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div>
                    <div class="banner-gaming__tag mb-3">Programa de Fidelidade</div>
                    <h1 class="banner-gaming__title mb-2" style="font-size: clamp(1.6rem, 4vw, 2.5rem);">
                        Benefícios por <span>Nível</span>
                    </h1>
                    <p class="section-subtitle-gaming mb-0">Suba de nível e desbloqueie recompensas exclusivas</p>
                </div>
                <a href="{{ route('loyalty.dashboard') }}" class="btn-neon-cyan" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
                    <i class="ph ph-arrow-left"></i> Voltar ao Painel
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div style="background: #13141e; padding: 3rem 0; min-height: 60vh;">
        <div class="container">

            <!-- SEU NÍVEL ATUAL -->
            @if($userTier)
            <div class="loyalty-card mb-5" style="background: linear-gradient(135deg, #1c1535, #17133a); border: 1px solid rgba(107,94,240,0.4); position:relative; overflow:hidden;">
                <div style="position:absolute; top:-80px; right:-80px; width:240px; height:240px; background:radial-gradient(circle, rgba(107,94,240,0.18) 0%, transparent 70%); pointer-events:none;"></div>
                <div class="row align-items-center g-3">
                    <div class="col-auto">
                        <div style="font-size:3.5rem; filter:drop-shadow(0 0 16px rgba(107,94,240,0.5)); line-height:1;">
                            @switch($userTier->name)
                                @case('Bronze') 🥉 @break
                                @case('Prata')  🥈 @break
                                @case('Ouro')   🥇 @break
                                @case('Platina') 👑 @break
                                @default ⭐
                            @endswitch
                        </div>
                    </div>
                    <div class="col">
                        <p style="color:#64748b; font-size:0.78rem; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px; margin:0;">Seu Nível Atual</p>
                        <h3 style="font-family:'Exo',sans-serif; font-weight:900; color:#f1f5f9; margin:4px 0; font-size:1.8rem;">{{ $userTier->name }}</h3>
                        <div class="d-flex align-items-center gap-3 flex-wrap">
                            <span style="background:rgba(107,94,240,0.15); border:1px solid rgba(107,94,240,0.4); color:#8878F5; padding:3px 12px; border-radius:20px; font-size:0.75rem; font-family:'Exo',sans-serif; font-weight:700;">
                                {{ number_format($userPoints) }} pontos
                            </span>
                            <span style="background:rgba(249,115,22,0.15); border:1px solid rgba(249,115,22,0.4); color:#f97316; padding:3px 12px; border-radius:20px; font-size:0.75rem; font-family:'Exo',sans-serif; font-weight:700;">
                                {{ $userTier->discount_percentage }}% de desconto
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- TRILHA DE NÍVEIS (visual) -->
            <div class="mb-5">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="section-line mb-0" style="margin-bottom:0 !important;"></div>
                    <h2 class="section-title-gaming mb-0" style="font-size:1.3rem; white-space:nowrap;">Trilha de <span>Progressão</span></h2>
                </div>

                <div class="d-flex align-items-center gap-0 mb-4 overflow-auto pb-2">
                    @foreach($allTiers as $i => $tier)
                    @php $isActive = $userTier && $userTier->id === $tier->id; @endphp
                    <div style="flex:1; min-width:100px; text-align:center; position:relative;">
                        <!-- linha conectora -->
                        @if(!$loop->last)
                        <div style="position:absolute; top:20px; left:50%; width:100%; height:2px; background:linear-gradient(90deg, {{ $isActive ? '#6B5EF0' : 'rgba(107,94,240,0.2)' }}, rgba(107,94,240,0.2)); z-index:0;"></div>
                        @endif
                        <!-- círculo -->
                        <div style="width:42px; height:42px; border-radius:50%; margin:0 auto 8px; display:flex; align-items:center; justify-content:center; font-size:1.3rem; position:relative; z-index:1;
                            background: {{ $isActive ? 'linear-gradient(135deg,#6B5EF0,#4B38CC)' : 'rgba(107,94,240,0.1)' }};
                            border: 2px solid {{ $isActive ? '#8878F5' : 'rgba(107,94,240,0.3)' }};
                            box-shadow: {{ $isActive ? '0 0 20px rgba(107,94,240,0.5)' : 'none' }};">
                            @switch($tier->name)
                                @case('Bronze') 🥉 @break
                                @case('Prata')  🥈 @break
                                @case('Ouro')   🥇 @break
                                @case('Platina') 👑 @break
                                @default ⭐
                            @endswitch
                        </div>
                        <p style="font-family:'Exo',sans-serif; font-weight:800; font-size:0.8rem; margin:0 0 2px; color:{{ $isActive ? '#8878F5' : '#f1f5f9' }};">{{ $tier->name }}</p>
                        <p style="color:#64748b; font-size:0.7rem; margin:0; font-family:'Exo',sans-serif;">{{ number_format($tier->min_points) }} pts</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- CARDS DE BENEFÍCIOS POR NÍVEL -->
            <div class="d-flex align-items-center gap-3 mb-4">
                <div class="section-line mb-0" style="margin-bottom:0 !important;"></div>
                <h2 class="section-title-gaming mb-0" style="font-size:1.3rem; white-space:nowrap;">Detalhes dos <span>Níveis</span></h2>
            </div>

            <div class="row g-4">
                @foreach($allTiers as $tier)
                @php $isActive = $userTier && $userTier->id === $tier->id; @endphp
                <div class="col-md-6 col-lg-3">
                    <div style="border-radius:16px; overflow:hidden; height:100%; display:flex; flex-direction:column;
                        background: {{ $isActive ? 'linear-gradient(160deg, #1c1535, #1a1c28)' : '#1e2030' }};
                        border: {{ $isActive ? '2px solid '.$tier->color : '1px solid rgba(107,94,240,0.2)' }};
                        box-shadow: {{ $isActive ? '0 0 30px rgba(107,94,240,0.2)' : 'none' }};
                        transition: all 0.3s ease;">

                        <!-- header do card -->
                        <div style="padding:1.5rem; border-bottom:1px solid rgba(107,94,240,0.12); background:rgba(0,0,0,0.2); text-align:center; position:relative; overflow:hidden;">
                            @if($isActive)
                            <span style="position:absolute; top:10px; right:10px; background:{{ $tier->color }}; color:#13141e; padding:2px 8px; border-radius:20px; font-size:0.65rem; font-family:'Exo',sans-serif; font-weight:800; text-transform:uppercase; letter-spacing:0.5px;">
                                Seu Nível
                            </span>
                            @endif
                            <div style="font-size:3rem; margin-bottom:10px; filter:drop-shadow(0 0 12px rgba(107,94,240,0.4));">
                                @switch($tier->name)
                                    @case('Bronze') 🥉 @break
                                    @case('Prata')  🥈 @break
                                    @case('Ouro')   🥇 @break
                                    @case('Platina') 👑 @break
                                    @default ⭐
                                @endswitch
                            </div>
                            <h4 style="font-family:'Exo',sans-serif; font-weight:900; font-size:1.3rem; margin:0 0 4px; color:{{ $tier->color }};">
                                {{ $tier->name }}
                            </h4>
                            <p style="color:#64748b; font-size:0.75rem; font-family:'Exo',sans-serif; margin:0;">
                                A partir de <strong style="color:#94a3b8;">{{ number_format($tier->min_points) }} pontos</strong>
                            </p>
                        </div>

                        <!-- desconto destaque -->
                        <div style="padding:1rem 1.5rem; border-bottom:1px solid rgba(107,94,240,0.1); display:flex; align-items:center; justify-content:space-between; gap:8px;">
                            <span style="color:#64748b; font-size:0.8rem; font-family:'Exo',sans-serif;">Desconto nas compras</span>
                            <span style="font-family:'Orbitron',sans-serif; font-weight:900; font-size:1.3rem; color:#f97316;">
                                {{ $tier->discount_percentage }}%
                            </span>
                        </div>

                        <!-- lista de benefícios -->
                        <div style="padding:1.25rem 1.5rem; flex:1;">
                            @if($tier->benefits && count($tier->benefits) > 0)
                            <p style="color:#64748b; font-size:0.72rem; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px; margin-bottom:12px;">Benefícios Incluídos</p>
                            <ul style="list-style:none; padding:0; margin:0;">
                                @foreach($tier->benefits as $benefit)
                                <li style="display:flex; align-items:flex-start; gap:8px; margin-bottom:8px; color:#e2e8f0; font-size:0.83rem; font-family:'Inter',sans-serif; line-height:1.5;">
                                    <i class="ph ph-check-circle" style="color:{{ $tier->color }}; flex-shrink:0; font-size:1rem; margin-top:1px;"></i>
                                    {{ $benefit }}
                                </li>
                                @endforeach
                            </ul>
                            @else
                            <p style="color:#374151; font-size:0.82rem; font-family:'Inter',sans-serif; margin:0; text-align:center; padding:1rem 0;">
                                <i class="ph ph-lock" style="display:block; font-size:1.5rem; margin-bottom:6px;"></i>
                                Benefícios em breve
                            </p>
                            @endif
                        </div>

                        <!-- rodapé: pts necessários / botão -->
                        <div style="padding:1rem 1.5rem; border-top:1px solid rgba(107,94,240,0.1);">
                            @if($isActive)
                            <div style="text-align:center; color:#34d399; font-family:'Exo',sans-serif; font-weight:700; font-size:0.82rem; display:flex; align-items:center; justify-content:center; gap:6px;">
                                <i class="ph ph-check-fat"></i> Nível Atual Ativo
                            </div>
                            @elseif($userTier && $tier->min_points > $userTier->min_points)
                            @php $needed = $tier->min_points - $userPoints; @endphp
                            <div style="text-align:center;">
                                <p style="color:#64748b; font-size:0.72rem; font-family:'Exo',sans-serif; margin:0 0 4px;">Faltam para desbloquear</p>
                                <strong style="color:#f97316; font-family:'Orbitron',sans-serif; font-size:0.95rem;">
                                    {{ number_format(max(0, $needed)) }} pts
                                </strong>
                            </div>
                            @else
                            <div style="text-align:center; color:#374151; font-family:'Exo',sans-serif; font-size:0.78rem; display:flex; align-items:center; justify-content:center; gap:6px;">
                                <i class="ph ph-check"></i> Nível Conquistado
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- COMO SUBIR DE NÍVEL -->
            <div class="loyalty-card mt-5" style="background: linear-gradient(135deg, #1a1c28, #1e2030);">
                <h6 style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9; margin-bottom:1.25rem; font-size:0.9rem; text-transform:uppercase; letter-spacing:1px;">
                    <i class="ph ph-rocket-launch" style="color:#8878F5;"></i> Como Acumular Pontos
                </h6>
                <div class="row g-3">
                    @foreach([
                        ['ph-shopping-bag',  '#8878F5', 'Compras',          'Ganhe 1 ponto a cada R$10 gasto nas suas compras'],
                        ['ph-users-three',   '#38bdf8', 'Indicações',       'Ganhe 100 pontos por cada amigo que se cadastrar com seu código'],
                        ['ph-user-plus',     '#34d399', 'Cadastro',         'Ganhe pontos bônus ao criar sua conta na KG Coins'],
                        ['ph-cake',          '#f59e0b', 'Aniversário',      'Receba pontos especiais no mês do seu aniversário'],
                        ['ph-medal',         '#f97316', 'Conquistas',       'Complete desafios e desbloqueie badges para ganhar pontos extras'],
                        ['ph-star',          '#c084fc', 'Promoções',        'Participe de eventos especiais com pontos em dobro'],
                    ] as [$icon, $color, $title, $desc])
                    <div class="col-md-4 col-sm-6">
                        <div style="display:flex; align-items:flex-start; gap:12px;">
                            <div style="width:38px; height:38px; background:rgba(107,94,240,0.12); border:1px solid rgba(107,94,240,0.25); border-radius:8px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                <i class="ph {{ $icon }}" style="color:{{ $color }}; font-size:1.15rem;"></i>
                            </div>
                            <div>
                                <p style="font-family:'Exo',sans-serif; font-weight:700; color:#f1f5f9; font-size:0.85rem; margin:0 0 3px;">{{ $title }}</p>
                                <p style="color:#64748b; font-size:0.78rem; margin:0; line-height:1.5;">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- CTA -->
            <div class="mt-4 text-center d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ route('shop') }}" class="btn-neon" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
                    <i class="ph ph-shopping-cart-simple"></i> Comprar e Ganhar Pontos
                </a>
                <a href="{{ route('loyalty.referral') }}" class="btn-neon-cyan" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
                    <i class="ph ph-users-three"></i> Indicar Amigos
                </a>
            </div>

        </div>
    </div>

    @include('frontend.includes.footers.footerOne')

@endsection
