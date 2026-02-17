@extends('layouts.app')

@section('title', 'Histórico de Transações')

@section('content')
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-lg-8">
            <h1 class="mb-4">📋 Histórico de Transações</h1>
        </div>
        <div class="col-lg-4 text-end">
            <a href="{{ route('loyalty.dashboard') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" class="row g-3 align-items-end">
                        <div class="col-md-6">
                            <label for="reasonFilter" class="form-label">Filtrar por Motivo</label>
                            <select name="reason" id="reasonFilter" class="form-select">
                                <option value="">Todos os motivos</option>
                                @foreach($reasons as $reason)
                                    <option value="{{ $reason }}" @selected($reason === $currentReason)>
                                        {{ $reason }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="perPageFilter" class="form-label">Itens por página</label>
                            <select name="per_page" id="perPageFilter" class="form-select">
                                <option value="10" @selected(request('per_page') == 10)>10</option>
                                <option value="20" @selected(request('per_page') == 20)>20</option>
                                <option value="50" @selected(request('per_page') == 50)>50</option>
                                <option value="100" @selected(request('per_page') == 100)>100</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-filter"></i> Filtrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Transactions Table -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if($transactions->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Data</th>
                                        <th>Motivo</th>
                                        <th>Pontos</th>
                                        <th>Saldo</th>
                                        <th>Descrição</th>
                                        <th>Pedido</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $balance = auth()->user()->points;
                                    @endphp
                                    @foreach($transactions as $transaction)
                                    <tr>
                                        <td>
                                            <small>{{ $transaction->created_at->format('d/m/Y H:i') }}</small>
                                        </td>
                                        <td>
                                            @switch($transaction->reason)
                                                @case('registration_bonus')
                                                    <span class="badge bg-success">Bônus Registro</span>
                                                    @break
                                                @case('purchase')
                                                    <span class="badge bg-primary">Compra</span>
                                                    @break
                                                @case('referral')
                                                    <span class="badge bg-info">Indicação</span>
                                                    @break
                                                @case('bonus')
                                                    <span class="badge bg-warning">Bônus</span>
                                                    @break
                                                @case('redemption')
                                                    <span class="badge bg-danger">Resgate</span>
                                                    @break
                                                @case('adjustment')
                                                    <span class="badge bg-secondary">Ajuste</span>
                                                    @break
                                                @case('referral_signup')
                                                    <span class="badge bg-info">Indicação Signup</span>
                                                    @break
                                                @default
                                                    <span class="badge bg-secondary">{{ $transaction->reason }}</span>
                                            @endswitch
                                        </td>
                                        <td>
                                            <strong class="@if($transaction->points > 0) text-success @else text-danger @endif">
                                                {{ $transaction->points > 0 ? '+' : '' }}{{ number_format($transaction->points) }}
                                            </strong>
                                        </td>
                                        <td>
                                            <small class="text-muted">{{ number_format($balance) }}</small>
                                            @php
                                                $balance -= $transaction->points;
                                            @endphp
                                        </td>
                                        <td>
                                            <small>{{ $transaction->description ?? '-' }}</small>
                                        </td>
                                        <td>
                                            @if($transaction->order)
                                                <a href="{{ route('orders.show', $transaction->order->id) }}" class="badge bg-link">
                                                    {{ $transaction->order->order_number }}
                                                </a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Page navigation" class="mt-4">
                            {{ $transactions->render() }}
                        </nav>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-inbox" style="font-size: 3rem; color: #ccc;"></i>
                            <p class="text-muted mt-3">Nenhuma transação encontrada</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Legend -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-light">
                <div class="card-body">
                    <h6 class="card-title mb-3">Legenda de Motivos</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <ul style="list-style: none; padding: 0;">
                                <li class="mb-2"><span class="badge bg-success">Bônus Registro</span> - Pontos ganhos ao se registrar</li>
                                <li class="mb-2"><span class="badge bg-primary">Compra</span> - Pontos ganhos em compras</li>
                                <li class="mb-2"><span class="badge bg-info">Indicação</span> - Pontos ganhos ao indicar amigos</li>
                                <li class="mb-2"><span class="badge bg-warning">Bônus</span> - Bônus especiais e promoções</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul style="list-style: none; padding: 0;">
                                <li class="mb-2"><span class="badge bg-danger">Resgate</span> - Pontos usados para resgatar prêmios</li>
                                <li class="mb-2"><span class="badge bg-secondary">Ajuste</span> - Ajustes manuais de pontos</li>
                                <li class="mb-2"><span class="badge bg-info">Indicação Signup</span> - Amigos indicados se registraram</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
