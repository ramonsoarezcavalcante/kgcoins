@extends('frontend.layouts.app')

@section('title', 'Histórico de Transações - KG Coins')

@section('content')

    @include('frontend.includes.headers.headerOne')

    <!-- PAGE HERO -->
    <div style="background: linear-gradient(135deg, #13141e 0%, #1c1535 50%, #08101e 100%); border-bottom: 1px solid rgba(107,94,240,0.2); padding: 3rem 0 2rem;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div>
                    <div class="banner-gaming__tag mb-3">Programa de Fidelidade</div>
                    <h1 class="banner-gaming__title mb-2" style="font-size: clamp(1.6rem, 4vw, 2.5rem);">
                        Histórico de <span>Transações</span>
                    </h1>
                    <p class="section-subtitle-gaming mb-0">Acompanhe todos os movimentos de pontos da sua conta</p>
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

            <!-- FILTROS -->
            <div class="loyalty-card mb-4">
                <form method="GET" class="row g-3 align-items-end">
                    <div class="col-md-6">
                        <label style="color:#94a3b8; font-size:0.78rem; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px; display:block; margin-bottom:6px;">Filtrar por Motivo</label>
                        <select name="reason" class="form-select" style="background:#13141e; border-color:rgba(107,94,240,0.3); color:#e2e8f0; border-radius:8px;">
                            <option value="">Todos os motivos</option>
                            @foreach($reasons as $reason)
                                <option value="{{ $reason }}" @selected($reason === $currentReason) style="background:#1e2030;">{{ $reason }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label style="color:#94a3b8; font-size:0.78rem; font-family:'Exo',sans-serif; text-transform:uppercase; letter-spacing:1px; display:block; margin-bottom:6px;">Itens por página</label>
                        <select name="per_page" class="form-select" style="background:#13141e; border-color:rgba(107,94,240,0.3); color:#e2e8f0; border-radius:8px;">
                            <option value="10" @selected(request('per_page') == 10) style="background:#1e2030;">10</option>
                            <option value="20" @selected(request('per_page') == 20) style="background:#1e2030;">20</option>
                            <option value="50" @selected(request('per_page') == 50) style="background:#1e2030;">50</option>
                            <option value="100" @selected(request('per_page') == 100) style="background:#1e2030;">100</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn-neon w-100" style="border:none; cursor:pointer; padding:10px 0;">
                            <i class="ph ph-funnel"></i> Filtrar
                        </button>
                    </div>
                </form>
            </div>

            <!-- TABELA -->
            <div class="loyalty-card mb-4" style="padding:0; overflow:hidden;">
                @if($transactions->count() > 0)
                <div class="table-responsive">
                    <table class="table mb-0" style="background:transparent;">
                        <thead>
                            <tr style="border-bottom: 1px solid rgba(107,94,240,0.2);">
                                @foreach(['Data', 'Motivo', 'Pontos', 'Saldo', 'Descrição', 'Pedido'] as $col)
                                <th style="background:#1a1c28; color:#8878F5; font-family:'Exo',sans-serif; font-size:0.72rem; text-transform:uppercase; letter-spacing:1px; border:none; padding:14px 20px; font-weight:700;">{{ $col }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php $balance = auth()->user()->points; @endphp
                            @foreach($transactions as $transaction)
                            <tr style="border-bottom: 1px solid rgba(107,94,240,0.08); transition: background 0.2s;"
                                onmouseover="this.style.background='rgba(107,94,240,0.06)'"
                                onmouseout="this.style.background='transparent'">
                                <td style="color:#94a3b8; font-size:0.82rem; border:none; padding:14px 20px; white-space:nowrap;">
                                    {{ $transaction->created_at->format('d/m/Y H:i') }}
                                </td>
                                <td style="border:none; padding:14px 20px;">
                                    @php
                                        $badgeMap = [
                                            'registration_bonus' => ['label'=>'Bônus Registro', 'color'=>'#34d399', 'bg'=>'rgba(52,211,153,0.15)', 'border'=>'rgba(52,211,153,0.4)'],
                                            'purchase'           => ['label'=>'Compra',         'color'=>'#8878F5', 'bg'=>'rgba(136,120,245,0.15)', 'border'=>'rgba(136,120,245,0.4)'],
                                            'referral'           => ['label'=>'Indicação',       'color'=>'#38bdf8', 'bg'=>'rgba(56,189,248,0.15)', 'border'=>'rgba(56,189,248,0.4)'],
                                            'referral_signup'    => ['label'=>'Indicação Signup','color'=>'#38bdf8', 'bg'=>'rgba(56,189,248,0.15)', 'border'=>'rgba(56,189,248,0.4)'],
                                            'bonus'              => ['label'=>'Bônus',           'color'=>'#f59e0b', 'bg'=>'rgba(245,158,11,0.15)', 'border'=>'rgba(245,158,11,0.4)'],
                                            'redemption'         => ['label'=>'Resgate',         'color'=>'#f87171', 'bg'=>'rgba(248,113,113,0.15)', 'border'=>'rgba(248,113,113,0.4)'],
                                            'adjustment'         => ['label'=>'Ajuste',          'color'=>'#94a3b8', 'bg'=>'rgba(148,163,184,0.1)', 'border'=>'rgba(148,163,184,0.3)'],
                                        ];
                                        $badge = $badgeMap[$transaction->reason] ?? ['label'=>$transaction->reason, 'color'=>'#94a3b8', 'bg'=>'rgba(148,163,184,0.1)', 'border'=>'rgba(148,163,184,0.3)'];
                                    @endphp
                                    <span style="background:{{ $badge['bg'] }}; border:1px solid {{ $badge['border'] }}; color:{{ $badge['color'] }}; padding:3px 10px; border-radius:20px; font-size:0.72rem; font-family:'Exo',sans-serif; font-weight:700; white-space:nowrap;">
                                        {{ $badge['label'] }}
                                    </span>
                                </td>
                                <td style="border:none; padding:14px 20px; font-family:'Exo',sans-serif; font-weight:800; font-size:0.95rem; color:{{ $transaction->points > 0 ? '#34d399' : '#f87171' }};">
                                    {{ $transaction->points > 0 ? '+' : '' }}{{ number_format($transaction->points) }}
                                </td>
                                <td style="border:none; padding:14px 20px; color:#64748b; font-size:0.82rem; font-family:'Exo',sans-serif;">
                                    {{ number_format($balance) }}
                                    @php $balance -= $transaction->points; @endphp
                                </td>
                                <td style="color:#94a3b8; font-size:0.82rem; border:none; padding:14px 20px;">
                                    {{ $transaction->description ?? '-' }}
                                </td>
                                <td style="border:none; padding:14px 20px;">
                                    @if($transaction->order)
                                        <a href="{{ route('orders.show', $transaction->order->id) }}"
                                           style="color:#8878F5; font-size:0.8rem; font-family:'Exo',sans-serif; font-weight:700; text-decoration:none;">
                                            {{ $transaction->order->order_number }}
                                        </a>
                                    @else
                                        <span style="color:#374151;">-</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Paginação -->
                <div style="padding:16px 20px; border-top:1px solid rgba(107,94,240,0.1);">
                    {{ $transactions->render() }}
                </div>

                @else
                <div style="text-align:center; padding:4rem 2rem;">
                    <i class="ph ph-tray" style="font-size:3rem; color:#374151; display:block; margin-bottom:12px;"></i>
                    <p style="color:#64748b; font-family:'Exo',sans-serif;">Nenhuma transação encontrada</p>
                </div>
                @endif
            </div>

            <!-- LEGENDA -->
            <div class="loyalty-card">
                <h6 style="font-family:'Exo',sans-serif; font-weight:800; color:#f1f5f9; margin-bottom:1rem; font-size:0.9rem; text-transform:uppercase; letter-spacing:1px;">
                    <i class="ph ph-info" style="color:#8878F5;"></i> Legenda de Motivos
                </h6>
                <div class="row g-2">
                    @foreach([
                        ['Bônus Registro', '#34d399', 'rgba(52,211,153,0.15)', 'rgba(52,211,153,0.4)', 'Pontos ganhos ao se registrar'],
                        ['Compra',         '#8878F5', 'rgba(136,120,245,0.15)', 'rgba(136,120,245,0.4)', 'Pontos ganhos em compras'],
                        ['Indicação',      '#38bdf8', 'rgba(56,189,248,0.15)', 'rgba(56,189,248,0.4)', 'Pontos ganhos ao indicar amigos'],
                        ['Bônus',          '#f59e0b', 'rgba(245,158,11,0.15)', 'rgba(245,158,11,0.4)', 'Bônus especiais e promoções'],
                        ['Resgate',        '#f87171', 'rgba(248,113,113,0.15)', 'rgba(248,113,113,0.4)', 'Pontos usados para resgatar prêmios'],
                        ['Ajuste',         '#94a3b8', 'rgba(148,163,184,0.1)', 'rgba(148,163,184,0.3)', 'Ajustes manuais de pontos'],
                    ] as [$label, $color, $bg, $border, $desc])
                    <div class="col-md-4 col-sm-6">
                        <div style="display:flex; align-items:center; gap:10px;">
                            <span style="background:{{ $bg }}; border:1px solid {{ $border }}; color:{{ $color }}; padding:2px 10px; border-radius:20px; font-size:0.7rem; font-family:'Exo',sans-serif; font-weight:700; white-space:nowrap; flex-shrink:0;">{{ $label }}</span>
                            <small style="color:#64748b; font-size:0.75rem;">{{ $desc }}</small>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    @include('frontend.includes.footers.footerOne')

@endsection
