@extends('layouts.admin')

@section('title', 'Admin - Painel de Fidelidade')

@section('content')
<div class="container-fluid my-4">
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
                    <h5 class="card-title mb-3">⭐ Gerenciar Tiers</h5>
                    <p class="text-muted mb-3">{{ $stats['total_tiers'] }} tiers criados</p>
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
                    <h5 class="card-title mb-3">🎖️ Gerenciar Badges</h5>
                    <p class="text-muted mb-3">{{ $stats['total_badges'] }} badges criados</p>
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
