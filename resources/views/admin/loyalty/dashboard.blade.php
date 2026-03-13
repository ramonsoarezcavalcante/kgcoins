@extends('layouts.admin')

@section('title', 'Admin - Painel de Fidelidade')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-lg-8">
            <h1 class="h2">📊 Painel de Administração - Fidelidade</h1>
        </div>
        <div class="col-lg-4 text-end">
            <a href="{{ route('admin.loyalty.export') }}" class="btn btn-outline-primary btn-sm">
                <i class="fas fa-download"></i> Exportar Relatório
            </a>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-md-6 col-lg-3 mb-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h6 class="card-title">Total de Usuários</h6>
                    <h3 class="mb-0">{{ $stats['total_users'] }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h6 class="card-title">Pontos Distribuídos</h6>
                    <h3 class="mb-0">{{ number_format($stats['total_points_distributed']) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h6 class="card-title">Níveis (Tiers)</h6>
                    <h3 class="mb-0">{{ $stats['total_tiers'] }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h6 class="card-title">Conquistas (Badges)</h6>
                    <h3 class="mb-0">{{ $stats['total_badges'] }}</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Management Sections -->
    <div class="row mb-4">
        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-body text-center py-4">
                    <h5 class="card-title mb-3">⭐ Gerenciar Níveis</h5>
                    <p class="text-muted mb-3">{{ $stats['total_tiers'] }} níveis criados</p>
                    <a href="{{ route('admin.loyalty.tiers.index') }}" class="btn btn-primary btn-sm w-100 mb-2">
                        Ver Todos
                    </a>
                    <a href="{{ route('admin.loyalty.tiers.create') }}" class="btn btn-outline-primary btn-sm w-100">
                        Criar Novo
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-body text-center py-4">
                    <h5 class="card-title mb-3">🎖️ Gerenciar Conquistas</h5>
                    <p class="text-muted mb-3">{{ $stats['total_badges'] }} conquistas criadas</p>
                    <a href="{{ route('admin.loyalty.badges.index') }}" class="btn btn-primary btn-sm w-100 mb-2">
                        Ver Todos
                    </a>
                    <a href="{{ route('admin.loyalty.badges.create') }}" class="btn btn-outline-primary btn-sm w-100">
                        Criar Novo
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-body text-center py-4">
                    <h5 class="card-title mb-3">💰 Gerenciar Pontos</h5>
                    <p class="text-muted mb-3">{{ $stats['active_users_with_points'] }} usuários com pontos</p>
                    <a href="{{ route('admin.loyalty.points.manage') }}" class="btn btn-primary btn-sm w-100 mb-2">
                        Gerenciar
                    </a>
                    <a href="{{ route('admin.loyalty.points.transactions') }}" class="btn btn-outline-primary btn-sm w-100">
                        Ver Transações
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Configurações de Comissão -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-dark text-white d-flex align-items-center gap-2">
                    <i class="fas fa-percent"></i>
                    <h5 class="mb-0">⚙️ Configurações de Comissão</h5>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <p class="text-muted mb-2">
                                Define a <strong>porcentagem padrão de comissão</strong> que será pré-preenchida ao cadastrar
                                uma nova indicação. O valor pode ser ajustado individualmente em cada indicação.
                            </p>
                            <p class="text-muted mb-0 small">
                                <i class="fas fa-info-circle text-info"></i>
                                Comissão = Valor do Produto × (% / 100)
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <form action="{{ route('admin.loyalty.settings.update') }}" method="POST" class="d-flex align-items-end gap-3">
                                @csrf
                                <div class="flex-grow-1">
                                    <label for="default_commission_percentage" class="form-label fw-semibold">
                                        Porcentagem Padrão de Comissão (%)
                                    </label>
                                    <div class="input-group">
                                        <input type="number"
                                               class="form-control form-control-lg @error('default_commission_percentage') is-invalid @enderror"
                                               id="default_commission_percentage"
                                               name="default_commission_percentage"
                                               value="{{ old('default_commission_percentage', $settings['default_commission_percentage']) }}"
                                               min="0" max="100" step="0.01" required>
                                        <span class="input-group-text fs-5">%</span>
                                        @error('default_commission_percentage')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <small class="text-muted">Valor atual: <strong>{{ $settings['default_commission_percentage'] }}%</strong></small>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-save"></i> Salvar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Referrals Quick Access -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center bg-dark text-white">
                    <h5 class="mb-0">🔗 Gestão de Indicações</h5>
                    <a href="{{ route('admin.loyalty.referrals.create') }}" class="btn btn-sm btn-light">
                        <i class="fas fa-plus"></i> Nova Indicação
                    </a>
                </div>
                <div class="card-body">
                    @php
                        $refStats = [
                            'total'    => \App\Models\Referral::count(),
                            'pending'  => \App\Models\Referral::where('status', 'pending')->count(),
                            'approved' => \App\Models\Referral::where('status', 'approved')->count(),
                            'paid'     => \App\Models\Referral::where('status', 'paid')->count(),
                            'total_commission' => \App\Models\Referral::whereIn('status', ['approved', 'paid'])->sum('commission_amount'),
                        ];
                        $recentReferrals = \App\Models\Referral::with(['referrer', 'referred'])
                            ->latest()->limit(5)->get();
                    @endphp

                    <div class="row mb-3">
                        <div class="col-6 col-md-3 mb-2">
                            <div class="border rounded p-2 text-center">
                                <div class="text-muted small">Total</div>
                                <div class="fw-bold fs-5">{{ $refStats['total'] }}</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-2">
                            <div class="border border-warning rounded p-2 text-center">
                                <div class="text-muted small">Pendentes</div>
                                <div class="fw-bold fs-5 text-warning">{{ $refStats['pending'] }}</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-2">
                            <div class="border border-success rounded p-2 text-center">
                                <div class="text-muted small">Pagas</div>
                                <div class="fw-bold fs-5 text-success">{{ $refStats['paid'] }}</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-2">
                            <div class="border border-primary rounded p-2 text-center">
                                <div class="text-muted small">Comissão Total</div>
                                <div class="fw-bold fs-6 text-primary">
                                    R$ {{ number_format($refStats['total_commission'], 2, ',', '.') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($recentReferrals->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-sm table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Indicador</th>
                                    <th>Indicado</th>
                                    <th>Produto</th>
                                    <th class="text-end">% Comissão</th>
                                    <th class="text-end">Comissão (R$)</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentReferrals as $ref)
                                <tr>
                                    <td class="text-muted small">{{ $ref->id }}</td>
                                    <td><strong>{{ $ref->referrer->name ?? '—' }}</strong></td>
                                    <td>{{ $ref->referred->name ?? '—' }}</td>
                                    <td>{{ $ref->product_name ?: '—' }}</td>
                                    <td class="text-end">{{ number_format($ref->commission_percentage, 2) }}%</td>
                                    <td class="text-end text-success fw-bold">
                                        @if($ref->commission_amount)
                                            R$ {{ number_format($ref->commission_amount, 2, ',', '.') }}
                                        @else
                                            —
                                        @endif
                                    </td>
                                    <td>
                                        @switch($ref->status)
                                            @case('pending')
                                                <span class="badge bg-warning text-dark">Pendente</span>
                                                @break
                                            @case('approved')
                                                <span class="badge bg-info">Aprovada</span>
                                                @break
                                            @case('paid')
                                                <span class="badge bg-success">Paga</span>
                                                @break
                                            @case('cancelled')
                                                <span class="badge bg-danger">Cancelada</span>
                                                @break
                                        @endswitch
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.loyalty.referrals.edit', $ref) }}"
                                           class="btn btn-xs btn-outline-secondary btn-sm py-0 px-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                        <p class="text-muted text-center py-2 mb-0">Nenhuma indicação cadastrada ainda.</p>
                    @endif

                    <div class="text-end mt-2">
                        <a href="{{ route('admin.loyalty.referrals.index') }}" class="btn btn-outline-dark btn-sm">
                            Ver Todas as Indicações →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Users Section -->
    <div class="row mb-4">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">🏆 Top 10 Usuários por Pontos</h6>
                </div>
                <div class="card-body">
                    @if($topUsers->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-sm table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Usuário</th>
                                        <th>Pontos</th>
                                        <th>Tier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($topUsers as $user)
                                    <tr>
                                        <td>
                                            <small><strong>{{ $user->name }}</strong></small><br>
                                            <small class="text-muted">{{ $user->email }}</small>
                                        </td>
                                        <td><strong>{{ number_format($user->points) }}</strong></td>
                                        <td>
                                            @if($user->tier)
                                                <span class="badge" style="background-color: {{ $user->tier->color }}; color: #fff;">
                                                    {{ $user->tier->name }}
                                                </span>
                                            @else
                                                <span class="badge bg-secondary">-</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-muted text-center py-3">Nenhum usuário com pontos</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Recent Transactions -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">📝 Transações Recentes</h6>
                        <a href="{{ route('admin.loyalty.points.transactions') }}" class="btn btn-sm btn-outline-primary">
                            Ver Todas
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if($recentTransactions->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-sm table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Usuário</th>
                                        <th>Pontos</th>
                                        <th>Motivo</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentTransactions as $transaction)
                                    <tr>
                                        <td>
                                            <small><strong>{{ $transaction->user->name }}</strong></small>
                                        </td>
                                        <td>
                                            <strong class="@if($transaction->points > 0) text-success @else text-danger @endif">
                                                {{ $transaction->points > 0 ? '+' : '' }}{{ number_format($transaction->points) }}
                                            </strong>
                                        </td>
                                        <td>
                                            <small><span class="badge bg-secondary">{{ $transaction->reason }}</span></small>
                                        </td>
                                        <td>
                                            <small>{{ $transaction->created_at->format('d/m H:i') }}</small>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-muted text-center py-3">Nenhuma transação registrada</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Tiers Overview -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">📊 Visão Geral de Tiers</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($tiers as $tier)
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="card border" style="border-left: 4px solid {{ $tier->color }}!important;">
                                <div class="card-body">
                                    <h6 style="color: {{ $tier->color }};">{{ $tier->name }}</h6>
                                    <ul class="small mb-0" style="list-style: none; padding: 0;">
                                        <li><strong>Mínimo:</strong> {{ number_format($tier->min_points) }} pts</li>
                                        <li><strong>Desconto:</strong> {{ $tier->discount_percentage }}%</li>
                                        <li><strong>Usuários:</strong> {{ $tier->users()->count() }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
