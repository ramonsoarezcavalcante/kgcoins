@extends('layouts.app')

@section('title', 'Painel de Fidelidade')

@section('content')
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-lg-8">
            <h1 class="mb-4">📊 Painel de Fidelidade</h1>
        </div>
        <div class="col-lg-4 text-end">
            <a href="{{ route('loyalty.export', ['format' => 'csv']) }}" class="btn btn-outline-primary btn-sm">
                <i class="fas fa-download"></i> Exportar Dados
            </a>
        </div>
    </div>

    <!-- Points Summary Card -->
    <div class="row mb-4">
        <div class="col-lg-6 mb-3">
            <div class="card bg-gradient text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <div class="card-body">
                    <h5 class="card-title">Saldo de Pontos</h5>
                    <h2 class="mb-3">{{ number_format($summary['current_points']) }}</h2>
                    <p class="mb-0">
                        <small>Próximo prêmio: <strong>@if($nextTier){{ $nextTier->min_points - $summary['current_points'] }} pontos@else Parabéns! Você atingiu o máximo!@endif</strong></small>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-3">
            <div class="card" style="border-left: 4px solid {{ $summary['tier_color'] ?? '#CD7F32' }};">
                <div class="card-body">
                    <h5 class="card-title">Nível de Fidelidade</h5>
                    <div class="d-flex align-items-center">
                        <div style="font-size: 2.5rem; margin-right: 15px;">
                            @switch($summary['current_tier'])
                                @case('Bronze')
                                    🥉
                                    @break
                                @case('Prata')
                                    🥈
                                    @break
                                @case('Ouro')
                                    🥇
                                    @break
                                @case('Platina')
                                    👑
                                    @break
                                @default
                                    ⭐
                            @endswitch
                        </div>
                        <div>
                            <h3 class="mb-1">{{ $summary['current_tier'] }}</h3>
                            <small class="text-muted">Desconto: <strong>{{ $summary['discount_percentage'] }}%</strong></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tier Progress -->
    @if($nextTier)
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Progresso para o próximo nível</h5>
                    <div class="progress" style="height: 25px;">
                        <div class="progress-bar bg-success" role="progressbar"
                             style="width: {{ $progressPercentage }}%;"
                             aria-valuenow="{{ $progressPercentage }}"
                             aria-valuemin="0"
                             aria-valuemax="100">
                            {{ round($progressPercentage, 1) }}%
                        </div>
                    </div>
                    <p class="mt-2 mb-0 text-muted">
                        <small>{{ $summary['current_points'] }} / {{ $nextTier->min_points }} pontos para atingir <strong>{{ $nextTier->name }}</strong></small>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Quick Stats -->
    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="text-primary mb-2">{{ $summary['total_orders'] }}</h4>
                    <p class="card-text mb-0">Compras Realizadas</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="text-success mb-2">{{ $summary['badges_count'] }}</h4>
                    <p class="card-text mb-0">Conquistas Desbloqueadas</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="text-warning mb-2">{{ $summary['discount_percentage'] }}%</h4>
                    <p class="card-text mb-0">Desconto Disponível</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions Row -->
    <div class="row mb-4">
        <div class="col-md-3 mb-2">
            <a href="{{ route('loyalty.transactions') }}" class="btn btn-outline-primary w-100">
                <i class="fas fa-history"></i> Histórico
            </a>
        </div>
        <div class="col-md-3 mb-2">
            <a href="{{ route('loyalty.rewards') }}" class="btn btn-outline-success w-100">
                <i class="fas fa-gift"></i> Prêmios
            </a>
        </div>
        <div class="col-md-3 mb-2">
            <a href="{{ route('loyalty.referral') }}" class="btn btn-outline-info w-100">
                <i class="fas fa-users"></i> Indicar
            </a>
        </div>
        <div class="col-md-3 mb-2">
            <button class="btn btn-outline-secondary w-100" data-bs-toggle="modal" data-bs-target="#benefitsModal">
                <i class="fas fa-star"></i> Benefícios
            </button>
        </div>
    </div>

    <!-- Badges Section -->
    @if($badges->count() > 0)
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">🎖️ Suas Conquistas</h5>
                    <div class="row">
                        @foreach($badges as $badge)
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="text-center p-3 border rounded" style="background: #f8f9fa;">
                                <div style="font-size: 2rem; margin-bottom: 10px;">{{ $badge->icon }}</div>
                                <h6 class="mb-2">{{ $badge->name }}</h6>
                                <small class="text-muted">{{ $badge->description }}</small>
                                <br>
                                <small class="text-success mt-2 d-block">
                                    Desbloqueado em: {{ $badge->pivot->unlocked_at->format('d/m/Y') }}
                                </small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Recent Transactions -->
    @if($recentTransactions)
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title mb-0">Transações Recentes</h5>
                        <a href="{{ route('loyalty.transactions') }}" class="btn btn-sm btn-outline-primary">Ver Todas</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-sm mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Data</th>
                                    <th>Motivo</th>
                                    <th>Pontos</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recentTransactions as $transaction)
                                <tr>
                                    <td>
                                        <small>{{ \Carbon\Carbon::parse($transaction['created_at'])->format('d/m/Y H:i') }}</small>
                                    </td>
                                    <td>
                                        <span class="badge bg-info">{{ $transaction['reason'] }}</span>
                                    </td>
                                    <td>
                                        <strong class="@if($transaction['points'] > 0) text-success @else text-danger @endif">
                                            {{ $transaction['points'] > 0 ? '+' : '' }}{{ $transaction['points'] }}
                                        </strong>
                                    </td>
                                    <td>
                                        <small>{{ $transaction['description'] ?? '-' }}</small>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-3">
                                        Nenhuma transação registrada ainda
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<!-- Benefits Modal -->
<div class="modal fade" id="benefitsModal" tabindex="-1" aria-labelledby="benefitsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="benefitsModalLabel">Benefícios por Nível</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @foreach($allTiers as $tier)
                    <div class="col-md-6 mb-3">
                        <div class="card" style="border-left: 4px solid {{ $tier->color }};">
                            <div class="card-body">
                                <h6 class="card-title">{{ $tier->name }}</h6>
                                <p class="card-text mb-2">
                                    <small><strong>A partir de {{ number_format($tier->min_points) }} pontos</strong></small>
                                </p>
                                <p class="card-text mb-2">
                                    <small><strong>Desconto: {{ $tier->discount_percentage }}%</strong></small>
                                </p>
                                @if($tier->benefits)
                                <ul class="mb-0" style="padding-left: 20px; font-size: 0.9rem;">
                                    @foreach($tier->benefits as $benefit)
                                    <li class="mb-1">{{ $benefit }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
