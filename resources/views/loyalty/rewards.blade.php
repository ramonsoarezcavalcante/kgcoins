@extends('frontend.layouts.app')

@section('title', 'Resgate de Prêmios - KG Coins')

@section('content')

    @include('frontend.includes.headers.headerOne')

    <!-- PAGE HERO -->
    <div style="background: linear-gradient(135deg, #13141e 0%, #1c1535 50%, #08101e 100%); border-bottom: 1px solid rgba(107,94,240,0.2); padding: 3rem 0 2rem;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div>
                    <div class="banner-gaming__tag mb-3">Programa de Fidelidade</div>
                    <h1 class="banner-gaming__title mb-2" style="font-size: clamp(1.6rem, 4vw, 2.5rem);">
                        Resgate de <span>Prêmios</span>
                    </h1>
                    <p class="section-subtitle-gaming mb-0">Use seus pontos para desbloquear recompensas exclusivas</p>
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

            <!-- SALDO DISPONÍVEL -->
            <div class="loyalty-card mb-4" style="background: linear-gradient(135deg, #1c1535, #17133a); border-color: rgba(107,94,240,0.4);">
                <div class="d-flex align-items-center gap-3">
                    <div style="width:52px; height:52px; background:rgba(107,94,240,0.2); border:1px solid rgba(107,94,240,0.5); border-radius:12px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <i class="ph ph-coin" style="font-size:1.6rem; color:#8878F5;"></i>
                    </div>
                    <div>
                        <p style="color:#64748b; font-size:0.78rem; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px; margin:0;">Pontos Disponíveis</p>
                        <p style="color:#f1f5f9; font-size:1rem; font-family:'Exo',sans-serif; margin:4px 0 0;">
                            Você tem <strong style="color:#8878F5; font-family:'Orbitron',sans-serif; font-size:1.3rem;">{{ number_format($userPoints) }}</strong> pontos disponíveis para resgatar prêmios.
                        </p>
                    </div>
                </div>
            </div>

            @if(session('success'))
            <div class="mb-4" style="background:rgba(52,211,153,0.12); border:1px solid rgba(52,211,153,0.4); border-radius:10px; padding:1rem 1.25rem; color:#34d399; font-family:'Exo',sans-serif; display:flex; align-items:center; gap:10px;">
                <i class="ph ph-check-circle" style="font-size:1.25rem; flex-shrink:0;"></i>
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="mb-4" style="background:rgba(248,113,113,0.12); border:1px solid rgba(248,113,113,0.4); border-radius:10px; padding:1rem 1.25rem; color:#f87171; font-family:'Exo',sans-serif; display:flex; align-items:center; gap:10px;">
                <i class="ph ph-x-circle" style="font-size:1.25rem; flex-shrink:0;"></i>
                {{ session('error') }}
            </div>
            @endif

            <!-- PRÊMIOS DISPONÍVEIS -->
            @if(count($availableRewards) > 0)
            <div class="mb-5">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="section-line mb-0" style="margin-bottom:0 !important;"></div>
                    <h2 class="section-title-gaming mb-0" style="font-size:1.3rem; white-space:nowrap;">
                        <i class="ph ph-check-circle" style="color:#34d399;"></i> Prêmios <span>Disponíveis</span>
                    </h2>
                </div>
                <div class="row g-3">
                    @foreach($availableRewards as $reward)
                    <div class="col-md-6">
                        <div class="loyalty-card h-100" style="border-color: rgba(52,211,153,0.3);">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h5 style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9; margin-bottom:6px;">{{ $reward['name'] }}</h5>
                                    <p style="color:#94a3b8; font-size:0.85rem; margin:0;">{{ $reward['description'] }}</p>
                                </div>
                                <span style="background:rgba(52,211,153,0.15); border:1px solid rgba(52,211,153,0.4); color:#34d399; padding:3px 10px; border-radius:20px; font-size:0.7rem; font-family:'Exo',sans-serif; font-weight:700; white-space:nowrap; flex-shrink:0; margin-left:12px;">Disponível</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3" style="border-top:1px solid rgba(107,94,240,0.12);">
                                <div>
                                    <small style="color:#64748b; font-size:0.75rem; display:block; font-family:'Exo',sans-serif;">Custo</small>
                                    <strong style="color:#34d399; font-family:'Orbitron',sans-serif; font-size:1.1rem;">{{ number_format($reward['points_required']) }}</strong>
                                    <small style="color:#64748b; font-size:0.75rem; font-family:'Exo',sans-serif;"> pts</small>
                                </div>
                                <form action="{{ route('loyalty.claim') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="reward_id" value="{{ $reward['id'] }}">
                                    <button type="submit" class="btn-neon" style="border:none; cursor:pointer; display:inline-flex; align-items:center; gap:8px;">
                                        <i class="ph ph-gift"></i> Resgatar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- PRÊMIOS BLOQUEADOS -->
            @if(count($allRewards) > count($availableRewards))
            <div class="mb-5">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="section-line mb-0" style="margin-bottom:0 !important;"></div>
                    <h2 class="section-title-gaming mb-0" style="font-size:1.3rem; white-space:nowrap;">
                        <i class="ph ph-lock" style="color:#64748b;"></i> Prêmios <span>Bloqueados</span>
                    </h2>
                </div>
                <p style="color:#64748b; font-size:0.85rem; margin-bottom:1.25rem; font-family:'Exo',sans-serif;">Continue acumulando pontos para desbloquear estes prêmios!</p>
                <div class="row g-3">
                    @foreach($allRewards as $reward)
                        @php $isAvailable = in_array($reward['id'], array_column($availableRewards, 'id')); @endphp
                        @if(!$isAvailable)
                        <div class="col-md-6">
                            <div class="loyalty-card h-100" style="opacity:0.55;">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div>
                                        <h5 style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9; margin-bottom:6px;">{{ $reward['name'] }}</h5>
                                        <p style="color:#94a3b8; font-size:0.85rem; margin:0;">{{ $reward['description'] }}</p>
                                    </div>
                                    <span style="background:rgba(148,163,184,0.1); border:1px solid rgba(148,163,184,0.3); color:#64748b; padding:3px 10px; border-radius:20px; font-size:0.7rem; font-family:'Exo',sans-serif; font-weight:700; white-space:nowrap; flex-shrink:0; margin-left:12px;">Bloqueado</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3 pt-3" style="border-top:1px solid rgba(107,94,240,0.12);">
                                    <div>
                                        <strong style="color:#94a3b8; font-family:'Orbitron',sans-serif; font-size:1.1rem;">{{ number_format($reward['points_required']) }}</strong>
                                        <small style="color:#64748b; font-size:0.75rem; font-family:'Exo',sans-serif;"> pts</small>
                                        <br>
                                        <small style="color:#f87171; font-size:0.75rem; font-family:'Exo',sans-serif;">
                                            Faltam {{ number_format($reward['points_required'] - $userPoints) }} pts
                                        </small>
                                    </div>
                                    <button disabled style="background:rgba(100,116,139,0.1); border:1px solid rgba(100,116,139,0.3); color:#64748b; padding:10px 20px; border-radius:6px; font-family:'Exo',sans-serif; font-weight:700; font-size:0.85rem; cursor:not-allowed; display:inline-flex; align-items:center; gap:8px;">
                                        <i class="ph ph-lock"></i> Bloqueado
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif

            <!-- EMPTY STATE -->
            @if(count($allRewards) === 0)
            <div style="text-align:center; padding:5rem 2rem;">
                <i class="ph ph-gift" style="font-size:4rem; color:#374151; display:block; margin-bottom:16px;"></i>
                <p style="color:#64748b; font-family:'Exo',sans-serif; font-size:1rem;">Nenhum prêmio disponível no momento</p>
            </div>
            @endif

            <!-- COMO GANHAR MAIS PONTOS -->
            <div class="loyalty-card" style="background: linear-gradient(135deg, #1a1c28, #1e2030);">
                <h6 style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9; margin-bottom:1.25rem; font-size:0.9rem; text-transform:uppercase; letter-spacing:1px;">
                    <i class="ph ph-lightbulb" style="color:#f59e0b;"></i> Como Ganhar Mais Pontos
                </h6>
                <div class="row g-3">
                    @foreach([
                        ['ph-shopping-bag', '#8878F5', 'Realize Compras', 'Ganhe 1 ponto a cada R$10 gasto'],
                        ['ph-users-three',  '#38bdf8', 'Indique Amigos',  'Ganhe 100 pontos por amigo registrado'],
                        ['ph-trophy',       '#f59e0b', 'Suba de Nível',   'Desbloqueie benefícios com cada nível'],
                        ['ph-cake',         '#34d399', 'Aniversário',     'Ganhe bônus especial no seu mês'],
                        ['ph-medal',        '#f97316', 'Desbloqueie Badges', 'Complete desafios e conquistas'],
                        ['ph-star',         '#c084fc', 'Promoções',       'Participe de eventos especiais'],
                    ] as [$icon, $color, $title, $desc])
                    <div class="col-md-4 col-sm-6">
                        <div style="display:flex; align-items:flex-start; gap:12px;">
                            <div style="width:36px; height:36px; background:rgba(107,94,240,0.12); border:1px solid rgba(107,94,240,0.25); border-radius:8px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                <i class="ph {{ $icon }}" style="color:{{ $color }}; font-size:1.1rem;"></i>
                            </div>
                            <div>
                                <p style="font-family:'Exo',sans-serif; font-weight:700; color:#f1f5f9; font-size:0.85rem; margin:0 0 2px;">{{ $title }}</p>
                                <p style="color:#64748b; font-size:0.78rem; margin:0;">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    @include('frontend.includes.footers.footerOne')

@endsection
