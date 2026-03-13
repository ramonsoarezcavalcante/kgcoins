@extends('layouts.admin')

@section('title', 'Admin - Editar Indicação #' . $referral->id)

@section('content')
<div class="container-fluid">

    <div class="row mb-4">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.loyalty.referrals.index') }}">Indicações</a>
                    </li>
                    <li class="breadcrumb-item active">Editar #{{ $referral->id }}</li>
                </ol>
            </nav>
            <h1 class="h2">✏️ Editar Indicação <span class="text-muted">#{{ $referral->id }}</span></h1>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Dados da Indicação</h5>
                    @switch($referral->status)
                        @case('pending')
                            <span class="badge bg-warning text-dark fs-6">Pendente</span>
                            @break
                        @case('approved')
                            <span class="badge bg-info fs-6">Aprovada</span>
                            @break
                        @case('paid')
                            <span class="badge bg-success fs-6">Paga</span>
                            @break
                        @case('cancelled')
                            <span class="badge bg-danger fs-6">Cancelada</span>
                            @break
                    @endswitch
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.loyalty.referrals.update', $referral) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="referrer_id" class="form-label fw-semibold">
                                    Indicador <span class="text-danger">*</span>
                                </label>
                                <select class="form-select @error('referrer_id') is-invalid @enderror"
                                        id="referrer_id" name="referrer_id" required>
                                    <option value="">— Selecione o indicador —</option>
                                    @foreach($users as $u)
                                        <option value="{{ $u->id }}"
                                                @selected(old('referrer_id', $referral->referrer_id) == $u->id)>
                                            {{ $u->name }} — {{ $u->email }}
                                            @if($u->referral_code) ({{ $u->referral_code }}) @endif
                                        </option>
                                    @endforeach
                                </select>
                                @error('referrer_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="referred_id" class="form-label fw-semibold">Indicado</label>
                                <select class="form-select @error('referred_id') is-invalid @enderror"
                                        id="referred_id" name="referred_id">
                                    <option value="">— Nenhum (opcional) —</option>
                                    @foreach($users as $u)
                                        <option value="{{ $u->id }}"
                                                @selected(old('referred_id', $referral->referred_id) == $u->id)>
                                            {{ $u->name }} — {{ $u->email }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('referred_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr>
                        <h6 class="text-muted mb-3">Produto / Pedido</h6>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="product_name" class="form-label fw-semibold">Nome do Produto</label>
                                <input type="text"
                                       class="form-control @error('product_name') is-invalid @enderror"
                                       id="product_name" name="product_name"
                                       value="{{ old('product_name', $referral->product_name) }}"
                                       placeholder="Ex: KG Coins 5000 - Lost Ark">
                                @error('product_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="order_id" class="form-label fw-semibold">Pedido Vinculado</label>
                                <select class="form-select @error('order_id') is-invalid @enderror"
                                        id="order_id" name="order_id">
                                    <option value="">— Nenhum —</option>
                                    @foreach($orders as $order)
                                        <option value="{{ $order->id }}"
                                                data-value="{{ $order->total_amount }}"
                                                @selected(old('order_id', $referral->order_id) == $order->id)>
                                            #{{ $order->id }} — {{ $order->user->name ?? '?' }}
                                            — R$ {{ number_format($order->total_amount, 2, ',', '.') }}
                                            ({{ $order->created_at->format('d/m/Y') }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('order_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr>
                        <h6 class="text-muted mb-3">Comissão</h6>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="product_value" class="form-label fw-semibold">Valor do Produto (R$)</label>
                                <div class="input-group">
                                    <span class="input-group-text">R$</span>
                                    <input type="number" step="0.01" min="0"
                                           class="form-control @error('product_value') is-invalid @enderror"
                                           id="product_value" name="product_value"
                                           value="{{ old('product_value', $referral->product_value) }}"
                                           placeholder="0,00">
                                    @error('product_value')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="commission_percentage" class="form-label fw-semibold">
                                    % Comissão <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="number" step="0.01" min="0" max="100"
                                           class="form-control @error('commission_percentage') is-invalid @enderror"
                                           id="commission_percentage" name="commission_percentage"
                                           value="{{ old('commission_percentage', $referral->commission_percentage) }}"
                                           required>
                                    <span class="input-group-text">%</span>
                                    @error('commission_percentage')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Comissão Calculada</label>
                                <div class="input-group">
                                    <span class="input-group-text">R$</span>
                                    <input type="text" class="form-control bg-light fw-bold text-success"
                                           id="commission_preview" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="status" class="form-label fw-semibold">
                                    Status <span class="text-danger">*</span>
                                </label>
                                <select class="form-select @error('status') is-invalid @enderror"
                                        id="status" name="status" required>
                                    <option value="pending"   @selected(old('status', $referral->status) === 'pending')>Pendente</option>
                                    <option value="approved"  @selected(old('status', $referral->status) === 'approved')>Aprovada</option>
                                    <option value="paid"      @selected(old('status', $referral->status) === 'paid')>Paga</option>
                                    <option value="cancelled" @selected(old('status', $referral->status) === 'cancelled')>Cancelada</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="notes" class="form-label fw-semibold">Observações</label>
                            <textarea class="form-control @error('notes') is-invalid @enderror"
                                      id="notes" name="notes" rows="3">{{ old('notes', $referral->notes) }}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2 justify-content-between">
                            <form action="{{ route('admin.loyalty.referrals.destroy', $referral) }}" method="POST"
                                  onsubmit="return confirm('Confirma remoção desta indicação?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i> Remover
                                </button>
                            </form>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.loyalty.referrals.index') }}" class="btn btn-secondary">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Salvar Alterações
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Info da indicação -->
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="mb-0">Informações</h6>
                </div>
                <div class="card-body small">
                    <dl class="row mb-0">
                        <dt class="col-sm-5">Criada em</dt>
                        <dd class="col-sm-7">{{ $referral->created_at->format('d/m/Y H:i') }}</dd>

                        @if($referral->approved_at)
                        <dt class="col-sm-5">Aprovada em</dt>
                        <dd class="col-sm-7">{{ $referral->approved_at->format('d/m/Y H:i') }}</dd>
                        @endif

                        @if($referral->paid_at)
                        <dt class="col-sm-5">Paga em</dt>
                        <dd class="col-sm-7">{{ $referral->paid_at->format('d/m/Y H:i') }}</dd>
                        @endif
                    </dl>
                </div>
            </div>

            <!-- Ações rápidas -->
            @if($referral->status === 'pending')
            <div class="card border-success">
                <div class="card-body">
                    <form action="{{ route('admin.loyalty.referrals.approve', $referral) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success w-100">
                            <i class="fas fa-check"></i> Aprovar Indicação
                        </button>
                    </form>
                </div>
            </div>
            @endif

            @if($referral->status === 'approved')
            <div class="card border-primary">
                <div class="card-body">
                    <form action="{{ route('admin.loyalty.referrals.pay', $referral) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-dollar-sign"></i> Marcar como Paga
                        </button>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const valueInput      = document.getElementById('product_value');
    const percentageInput = document.getElementById('commission_percentage');
    const preview         = document.getElementById('commission_preview');
    const orderSelect     = document.getElementById('order_id');

    function updatePreview() {
        const val = parseFloat(valueInput.value) || 0;
        const pct = parseFloat(percentageInput.value) || 0;
        const commission = val * (pct / 100);
        preview.value = commission > 0
            ? commission.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })
            : '—';
    }

    valueInput.addEventListener('input', updatePreview);
    percentageInput.addEventListener('input', updatePreview);

    orderSelect.addEventListener('change', function () {
        const selected = this.options[this.selectedIndex];
        const orderValue = selected.getAttribute('data-value');
        if (orderValue) {
            valueInput.value = parseFloat(orderValue).toFixed(2);
            updatePreview();
        }
    });

    updatePreview();
});
</script>
@endsection
