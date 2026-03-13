@extends('layouts.admin')

@section('title', 'Admin - Gestão de Indicações')

@section('content')
<div class="container-fluid">

    <div class="row mb-4">
        <div class="col-lg-8">
            <h1 class="h2">🔗 Gestão de Indicações</h1>
        </div>
        <div class="col-lg-4 text-end">
            <a href="{{ route('admin.loyalty.referrals.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Nova Indicação
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-md-6 col-lg-2 mb-3">
            <div class="card bg-secondary text-white">
                <div class="card-body py-2">
                    <h6 class="card-title mb-0" style="font-size:.75rem">Total</h6>
                    <h4 class="mb-0">{{ $stats['total'] }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-2 mb-3">
            <div class="card bg-warning text-white">
                <div class="card-body py-2">
                    <h6 class="card-title mb-0" style="font-size:.75rem">Pendentes</h6>
                    <h4 class="mb-0">{{ $stats['pending'] }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-2 mb-3">
            <div class="card bg-info text-white">
                <div class="card-body py-2">
                    <h6 class="card-title mb-0" style="font-size:.75rem">Aprovadas</h6>
                    <h4 class="mb-0">{{ $stats['approved'] }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-2 mb-3">
            <div class="card bg-success text-white">
                <div class="card-body py-2">
                    <h6 class="card-title mb-0" style="font-size:.75rem">Pagas</h6>
                    <h4 class="mb-0">{{ $stats['paid'] }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-3">
            <div class="card bg-primary text-white">
                <div class="card-body py-2">
                    <h6 class="card-title mb-0" style="font-size:.75rem">Comissão Total (Aprovadas + Pagas)</h6>
                    <h4 class="mb-0">R$ {{ number_format($stats['total_commission'], 2, ',', '.') }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtros -->
    <div class="card mb-4">
        <div class="card-body">
            <form method="GET" class="row g-3 align-items-end">
                <div class="col-md-3">
                    <label class="form-label">Indicador</label>
                    <select class="form-select" name="referrer_id">
                        <option value="">Todos</option>
                        @foreach($users as $u)
                            <option value="{{ $u->id }}" @selected(request('referrer_id') == $u->id)>
                                {{ $u->name }} ({{ $u->email }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status">
                        <option value="">Todos</option>
                        <option value="pending"   @selected(request('status') === 'pending')>Pendente</option>
                        <option value="approved"  @selected(request('status') === 'approved')>Aprovada</option>
                        <option value="paid"      @selected(request('status') === 'paid')>Paga</option>
                        <option value="cancelled" @selected(request('status') === 'cancelled')>Cancelada</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">De</label>
                    <input type="date" class="form-control" name="from_date" value="{{ request('from_date') }}">
                </div>
                <div class="col-md-2">
                    <label class="form-label">Até</label>
                    <input type="date" class="form-control" name="to_date" value="{{ request('to_date') }}">
                </div>
                <div class="col-md-3 d-flex gap-2">
                    <button type="submit" class="btn btn-outline-primary flex-grow-1">
                        <i class="fas fa-search"></i> Filtrar
                    </button>
                    <a href="{{ route('admin.loyalty.referrals.index') }}" class="btn btn-outline-secondary">
                        Limpar
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabela de Indicações -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Indicador</th>
                            <th>Indicado</th>
                            <th>Produto</th>
                            <th class="text-end">Valor Produto</th>
                            <th class="text-end">% Comissão</th>
                            <th class="text-end">Comissão (R$)</th>
                            <th>Status</th>
                            <th>Data</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($referrals as $referral)
                        <tr>
                            <td class="text-muted small">{{ $referral->id }}</td>
                            <td>
                                <strong>{{ $referral->referrer->name ?? '—' }}</strong>
                                @if($referral->referrer)
                                    <br><small class="text-muted">{{ $referral->referrer->email }}</small>
                                @endif
                            </td>
                            <td>
                                @if($referral->referred)
                                    {{ $referral->referred->name }}
                                    <br><small class="text-muted">{{ $referral->referred->email }}</small>
                                @else
                                    <span class="text-muted">—</span>
                                @endif
                            </td>
                            <td>
                                {{ $referral->product_name ?: '—' }}
                                @if($referral->order_id)
                                    <br><small class="text-muted">Pedido #{{ $referral->order_id }}</small>
                                @endif
                            </td>
                            <td class="text-end">
                                @if($referral->product_value)
                                    R$ {{ number_format($referral->product_value, 2, ',', '.') }}
                                @else
                                    <span class="text-muted">—</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <span class="badge bg-secondary fs-6">
                                    {{ number_format($referral->commission_percentage, 2) }}%
                                </span>
                            </td>
                            <td class="text-end fw-bold">
                                @if($referral->commission_amount)
                                    <span class="text-success">
                                        R$ {{ number_format($referral->commission_amount, 2, ',', '.') }}
                                    </span>
                                @else
                                    <span class="text-muted">—</span>
                                @endif
                            </td>
                            <td>
                                @switch($referral->status)
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
                            <td class="small text-muted">
                                {{ $referral->created_at->format('d/m/Y') }}
                                <br>{{ $referral->created_at->format('H:i') }}
                            </td>
                            <td class="text-center">
                                <div class="d-flex gap-1 justify-content-center">
                                    @if($referral->status === 'pending')
                                        <form action="{{ route('admin.loyalty.referrals.approve', $referral) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm" title="Aprovar">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </form>
                                    @endif
                                    @if($referral->status === 'approved')
                                        <form action="{{ route('admin.loyalty.referrals.pay', $referral) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-sm" title="Marcar como Paga">
                                                <i class="fas fa-dollar-sign"></i>
                                            </button>
                                        </form>
                                    @endif
                                    <a href="{{ route('admin.loyalty.referrals.edit', $referral) }}" class="btn btn-warning btn-sm" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.loyalty.referrals.destroy', $referral) }}" method="POST"
                                          onsubmit="return confirm('Confirma remoção desta indicação?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Remover">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="text-center text-muted py-4">
                                Nenhuma indicação encontrada.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if($referrals->hasPages())
        <div class="card-footer">
            {{ $referrals->withQueryString()->links() }}
        </div>
        @endif
    </div>

</div>
@endsection
