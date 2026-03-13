@extends('frontend.layouts.app')

@section('title', 'Painel de Fidelidade - KG Coins')

@section('content')

    @include('frontend.includes.headers.headerOne')

    <!-- PAGE HERO -->
    <div style="background: linear-gradient(135deg, #13141e 0%, #1c1535 50%, #08101e 100%); border-bottom: 1px solid rgba(107,94,240,0.2); padding: 3rem 0 2rem;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div>
                    <div class="banner-gaming__tag mb-3">Programa de Fidelidade</div>
                    <h1 class="banner-gaming__title mb-2" style="font-size: clamp(1.6rem, 4vw, 2.5rem);">
                        Painel de <span>Conquistas</span>
                    </h1>
                    <p class="section-subtitle-gaming mb-0">Acompanhe seus pontos, nível e recompensas exclusivas</p>
                </div>
                <a href="{{ route('loyalty.export', ['format' => 'csv']) }}" class="btn-neon-cyan" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none;">
                    <i class="ph ph-download-simple"></i> Exportar CSV
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div style="background: #13141e; padding: 3rem 0; min-height: 60vh;">
        <div class="container">

            <!-- POINTS + TIER CARDS -->
            <div class="row g-4 mb-4">

                <!-- Saldo de Pontos -->
                <div class="col-lg-6">
                    <div class="loyalty-card h-100" style="background: linear-gradient(135deg, #1c1535, #17133a); border: 1px solid rgba(107,94,240,0.4); position: relative; overflow: hidden;">
                        <!-- glow -->
                        <div style="position:absolute; top:-60px; right:-60px; width:180px; height:180px; background:radial-gradient(circle, rgba(107,94,240,0.25) 0%, transparent 70%); pointer-events:none;"></div>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div style="width:52px; height:52px; background:rgba(107,94,240,0.2); border:1px solid rgba(107,94,240,0.5); border-radius:12px; display:flex; align-items:center; justify-content:center;">
                                <i class="ph ph-coin" style="font-size:1.6rem; color:#8878F5;"></i>
                            </div>
                            <div>
                                <p style="color:#64748b; font-size:0.8rem; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px; margin:0;">Saldo Atual</p>
                                <h2 style="font-family:'Orbitron',sans-serif; font-weight:900; color:#f1f5f9; margin:0; font-size:2.2rem; line-height:1;">
                                    {{ number_format($summary['current_points']) }}
                                    <small style="font-size:0.8rem; color:#8878F5; font-family:'Exo',sans-serif;">pts</small>
                                </h2>
                            </div>
                        </div>
                        @if($nextTier)
                        <div>
                            <div class="d-flex justify-content-between mb-1">
                                <small style="color:#94a3b8; font-size:0.78rem;">Progresso para <strong style="color:#8878F5;">{{ $nextTier->name }}</strong></small>
                                <small style="color:#8878F5; font-weight:700;">{{ round($progressPercentage, 1) }}%</small>
                            </div>
                            <div class="progress" style="height:8px;">
                                <div class="progress-bar" role="progressbar" style="width: {{ $progressPercentage }}%;" aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p style="color:#64748b; font-size:0.75rem; margin-top:6px; margin-bottom:0;">
                                Faltam <strong style="color:#f97316;">{{ number_format($nextTier->min_points - $summary['current_points']) }} pontos</strong> para o próximo nível
                            </p>
                        </div>
                        @else
                        <p style="color:#34d399; font-size:0.85rem; margin:0;">
                            <i class="ph ph-trophy"></i> Parabéns! Você atingiu o nível máximo!
                        </p>
                        @endif
                    </div>
                </div>

                <!-- Nível de Fidelidade -->
                <div class="col-lg-6">
                    <div class="loyalty-card h-100" style="border-left: 3px solid {{ $summary['tier_color'] ?? '#CD7F32' }};">
                        <div class="d-flex align-items-center gap-3">
                            <div style="font-size: 3.5rem; line-height:1; filter: drop-shadow(0 0 12px rgba(107,94,240,0.5));">
                                @switch($summary['current_tier'])
                                    @case('Bronze') 🥉 @break
                                    @case('Prata')  🥈 @break
                                    @case('Ouro')   🥇 @break
                                    @case('Platina') 👑 @break
                                    @default ⭐
                                @endswitch
                            </div>
                            <div>
                                <p style="color:#64748b; font-size:0.8rem; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px; margin:0;">Nível de Fidelidade</p>
                                <h3 style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9; margin:4px 0; font-size:1.8rem;">{{ $summary['current_tier'] }}</h3>
                                <span style="background:rgba(107,94,240,0.15); border:1px solid rgba(107,94,240,0.4); color:#8878F5; padding:3px 10px; border-radius:20px; font-size:0.75rem; font-family:'Exo',sans-serif; font-weight:700;">
                                    {{ $summary['discount_percentage'] }}% de desconto
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- QUICK STATS -->
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="loyalty-card text-center">
                        <div style="font-size:2rem; color:#8878F5; font-family:'Orbitron',sans-serif; font-weight:900; line-height:1;">{{ $summary['total_orders'] }}</div>
                        <p style="color:#64748b; font-size:0.8rem; margin:6px 0 0; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px;">Compras Realizadas</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="loyalty-card text-center">
                        <div style="font-size:2rem; color:#f97316; font-family:'Orbitron',sans-serif; font-weight:900; line-height:1;">{{ $summary['badges_count'] }}</div>
                        <p style="color:#64748b; font-size:0.8rem; margin:6px 0 0; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px;">Conquistas</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="loyalty-card text-center">
                        <div style="font-size:2rem; color:#f59e0b; font-family:'Orbitron',sans-serif; font-weight:900; line-height:1;">{{ $summary['discount_percentage'] }}%</div>
                        <p style="color:#64748b; font-size:0.8rem; margin:6px 0 0; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px;">Desconto Ativo</p>
                    </div>
                </div>
            </div>

            <!-- ACTION BUTTONS -->
            <div class="row g-3 mb-4">
                <div class="col-6 col-md-3">
                    <a href="{{ route('loyalty.transactions') }}" class="btn-neon-cyan d-flex align-items-center justify-content-center gap-2 text-decoration-none w-100" style="padding: 12px;">
                        <i class="ph ph-clock-countdown"></i> Histórico
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('loyalty.rewards') }}" class="btn-neon d-flex align-items-center justify-content-center gap-2 text-decoration-none w-100" style="padding: 12px;">
                        <i class="ph ph-gift"></i> Prêmios
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('loyalty.referral') }}" class="btn-neon-cyan d-flex align-items-center justify-content-center gap-2 text-decoration-none w-100" style="padding: 12px;">
                        <i class="ph ph-users-three"></i> Indicar
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('loyalty.benefits') }}" class="btn-neon-cyan d-flex align-items-center justify-content-center gap-2 text-decoration-none w-100" style="padding: 12px;">
                        <i class="ph ph-star"></i> Benefícios
                    </a>
                </div>
            </div>

            <!-- BADGES -->
            @if($badges->count() > 0)
            <div class="mb-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="section-line mb-0" style="margin-bottom:0 !important;"></div>
                    <h2 class="section-title-gaming mb-0" style="font-size:1.3rem; white-space:nowrap;">🎖️ Suas <span>Conquistas</span></h2>
                </div>
                <div class="row g-3">
                    @foreach($badges as $badge)
                    <div class="col-6 col-md-3">
                        <div class="loyalty-card text-center h-100">
                            <div style="font-size: 2.5rem; margin-bottom: 10px; filter: drop-shadow(0 0 8px rgba(107,94,240,0.5));">{{ $badge->icon }}</div>
                            <h6 style="font-family:'Exo',sans-serif; font-weight:700; color:#f1f5f9; margin-bottom:4px; font-size:0.9rem;">{{ $badge->name }}</h6>
                            <p style="color:#64748b; font-size:0.75rem; margin-bottom:6px;">{{ $badge->description }}</p>
                            <span style="color:#34d399; font-size:0.7rem; display:block;">
                                <i class="ph ph-check-circle"></i> {{ $badge->pivot->unlocked_at->format('d/m/Y') }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- RECENT TRANSACTIONS -->
            @if($recentTransactions)
            <div>
                <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                    <div class="d-flex align-items-center gap-3">
                        <div class="section-line mb-0" style="margin-bottom:0 !important;"></div>
                        <h2 class="section-title-gaming mb-0" style="font-size:1.3rem; white-space:nowrap;">Transações <span>Recentes</span></h2>
                    </div>
                    <a href="{{ route('loyalty.transactions') }}" class="btn-neon-cyan" style="font-size:0.75rem; padding:6px 14px; text-decoration:none; display:inline-flex; align-items:center; gap:6px;">
                        Ver Todas <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
                <div class="loyalty-card" style="padding:0; overflow:hidden;">
                    <div class="table-responsive">
                        <table class="table mb-0" style="background:transparent;">
                            <thead>
                                <tr style="border-bottom: 1px solid rgba(107,94,240,0.2);">
                                    <th style="background:#1a1c28; color:#8878F5; font-family:'Exo',sans-serif; font-size:0.72rem; text-transform:uppercase; letter-spacing:1px; border:none; padding:14px 20px; font-weight:700;">Data</th>
                                    <th style="background:#1a1c28; color:#8878F5; font-family:'Exo',sans-serif; font-size:0.72rem; text-transform:uppercase; letter-spacing:1px; border:none; padding:14px 20px; font-weight:700;">Motivo</th>
                                    <th style="background:#1a1c28; color:#8878F5; font-family:'Exo',sans-serif; font-size:0.72rem; text-transform:uppercase; letter-spacing:1px; border:none; padding:14px 20px; font-weight:700;">Pontos</th>
                                    <th style="background:#1a1c28; color:#8878F5; font-family:'Exo',sans-serif; font-size:0.72rem; text-transform:uppercase; letter-spacing:1px; border:none; padding:14px 20px; font-weight:700;">Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recentTransactions as $transaction)
                                <tr style="border-bottom: 1px solid rgba(107,94,240,0.08); transition: background 0.2s;"
                                    onmouseover="this.style.background='rgba(107,94,240,0.06)'"
                                    onmouseout="this.style.background='transparent'">
                                    <td style="color:#94a3b8; font-size:0.82rem; border:none; padding:14px 20px;">
                                        {{ \Carbon\Carbon::parse($transaction['created_at'])->format('d/m/Y H:i') }}
                                    </td>
                                    <td style="border:none; padding:14px 20px;">
                                        <span style="background:rgba(107,94,240,0.15); border:1px solid rgba(107,94,240,0.3); color:#8878F5; padding:3px 10px; border-radius:20px; font-size:0.72rem; font-family:'Exo',sans-serif; font-weight:700;">
                                            {{ $transaction['reason'] }}
                                        </span>
                                    </td>
                                    <td style="border:none; padding:14px 20px; font-family:'Exo',sans-serif; font-weight:800; font-size:0.95rem;
                                        color: {{ $transaction['points'] > 0 ? '#34d399' : '#f87171' }};">
                                        {{ $transaction['points'] > 0 ? '+' : '' }}{{ $transaction['points'] }}
                                    </td>
                                    <td style="color:#64748b; font-size:0.82rem; border:none; padding:14px 20px;">
                                        {{ $transaction['description'] ?? '-' }}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" style="text-align:center; color:#64748b; padding:2rem; border:none; font-family:'Exo',sans-serif;">
                                        <i class="ph ph-clock" style="font-size:2rem; display:block; margin-bottom:8px; opacity:0.5;"></i>
                                        Nenhuma transação registrada ainda
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>

    <!-- Benefits Modal -->
    <div class="modal fade" id="benefitsModal" tabindex="-1" aria-labelledby="benefitsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="background:#1e2030; border:1px solid rgba(107,94,240,0.3); border-radius:16px;">
            <div class="modal-header" style="border-bottom:1px solid rgba(107,94,240,0.2); padding:1.5rem 1.75rem;">
                <h5 class="modal-title" id="benefitsModalLabel" style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9;">
                    ⭐ Benefícios por Nível
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding:1.75rem;">
                <div class="row g-3">
                    @foreach($allTiers as $tier)
                    <div class="col-md-6">
                        <div class="loyalty-card h-100" style="border-left: 3px solid {{ $tier->color }};">
                            <h6 style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9; margin-bottom:8px;">{{ $tier->name }}</h6>
                            <p style="color:#64748b; font-size:0.78rem; margin-bottom:4px;">
                                A partir de <strong style="color:#8878F5;">{{ number_format($tier->min_points) }} pontos</strong>
                            </p>
                            <p style="color:#64748b; font-size:0.78rem; margin-bottom:10px;">
                                Desconto: <strong style="color:#f97316;">{{ $tier->discount_percentage }}%</strong>
                            </p>
                            @if($tier->benefits)
                            <ul style="list-style:none; padding:0; margin:0;">
                                @foreach($tier->benefits as $benefit)
                                <li style="color:#94a3b8; font-size:0.8rem; padding:3px 0; display:flex; align-items:flex-start; gap:6px;">
                                    <i class="ph ph-check-circle" style="color:#34d399; flex-shrink:0; margin-top:2px;"></i>
                                    {{ $benefit }}
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

    @include('frontend.includes.footers.footerOne')

@endsection
