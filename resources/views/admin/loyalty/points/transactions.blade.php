@extends('layouts.admin')

@section('title', 'Admin - Histórico de Transações')

@section('content')
<div class="container-fluid my-4">
    <div class="row mb-4">
        <div class="col-lg-12">
            <h1 class="h2">📊 Histórico de Transações de Pontos</h1>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" class="row g-3">
                        <div class="col-md-3">
                            <label for="reason" class="form-label">Tipo de Transação</label>
                            <select class="form-select" id="reason" name="reason">
                                <option value="">Todas</option>
                                <option value="registration_bonus" @selected(request('reason') === 'registration_bonus')>Bônus de Registro</option>
                                <option value="purchase" @selected(request('reason') === 'purchase')>Compra</option>
                                <option value="referral" @selected(request('reason') === 'referral')>Indicação</option>
                                <option value="bonus" @selected(request('reason') === 'bonus')>Bônus</option>
                                <option value="redemption" @selected(request('reason') === 'redemption')>Resgate</option>
                                <option value="adjustment" @selected(request('reason') === 'adjustment')>Ajuste</option>
                                <option value="referral_signup" @selected(request('reason') === 'referral_signup')>Cadastro do Referido</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="user" class="form-label">Filtrar por Usuário</label>
                            <input type="text" class="form-control" id="user" name="user" placeholder="Nome ou email..." value="{{ request('user') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="date_from" class="form-label">De</label>
                            <input type="date" class="form-control" id="date_from" name="date_from" value="{{ request('date_from') }}">
                        </div>
                        <div class="col-md-2">
                            <label for="date_to" class="form-label">Até</label>
                            <input type="date" class="form-control" id="date_to" name="date_to" value="{{ request('date_to') }}">
                        </div>
                        <div class="col-md-1 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if($transactions->count() > 0)
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <small class="text-muted">Total de Transações</small>
                                        <h5 class="mb-0">{{ $transactions->total() }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-success bg-opacity-10">
                                    <div class="card-body">
                                        <small class="text-muted">Pontos Adicionados</small>
                                        <h5 class="text-success mb-0">+{{ $transactions->sum('points') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-danger bg-opacity-10">
                                    <div class="card-body">
                                        <small class="text-muted">Pontos Removidos</small>
                                        <h5 class="text-danger mb-0">{{ $transactions->where('points', '<', 0)->sum('points') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-info bg-opacity-10">
                                    <div class="card-body">
                                        <small class="text-muted">Saldo Líquido</small>
                                        <h5 class="text-info mb-0">{{ $transactions->sum('points') }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Data</th>
                                        <th>Usuário</th>
                                        <th>Tipo</th>
                                        <th>Pontos</th>
                                        <th>Descrição</th>
                                        <th>Referência</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $transaction)
                                    <tr>
                                        <td>
                                            <small>{{ $transaction->created_at->format('d/m/Y H:i') }}</small>
                                        </td>
                                        <td>
                                            <strong>{{ $transaction->user->name }}</strong>
                                            <br>
                                            <small class="text-muted">{{ $transaction->user->email }}</small>
                                        </td>
                                        <td>
                                            @switch($transaction->reason)
                                                @case('registration_bonus')
                                                    <span class="badge bg-success">Registro</span>
                                                    @break
                                                @case('purchase')
                                                    <span class="badge bg-primary">Compra</span>
                                                    @break
                                                @case('referral')
                                                    <span class="badge bg-info">Indicação</span>
                                                    @break
                                                @case('referral_signup')
                                                    <span class="badge bg-info">Cadastro Referido</span>
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
                                                @default
                                                    <span class="badge bg-dark">{{ $transaction->reason }}</span>
                                            @endswitch
                                        </td>
                                        <td>
                                            @if($transaction->points > 0)
                                                <span class="text-success fw-bold">+{{ $transaction->points }}</span>
                                            @else
                                                <span class="text-danger fw-bold">{{ $transaction->points }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <small>{{ $transaction->description ?: '-' }}</small>
                                        </td>
                                        <td>
                                            @if($transaction->order_id)
                                                <small class="text-muted">#ORD{{ str_pad($transaction->order_id, 5, '0', STR_PAD_LEFT) }}</small>
                                            @else
                                                <small class="text-muted">-</small>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{ $transactions->links() }}
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
</div>
@endsection
