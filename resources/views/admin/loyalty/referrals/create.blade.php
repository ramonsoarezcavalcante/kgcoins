@extends('layouts.admin')

@section('title', 'Admin - Nova Indicação')

@section('content')
<div class="container-fluid">

    <div class="row mb-4">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.loyalty.referrals.index') }}">Indicações</a>
                    </li>
                    <li class="breadcrumb-item active">Nova Indicação</li>
                </ol>
            </nav>
            <h1 class="h2">🔗 Nova Indicação</h1>
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
                <div class="card-header">
                    <h5 class="mb-0">Dados da Indicação</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.loyalty.referrals.store') }}" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="referrer_id" class="form-label fw-semibold">
                                    Indicador <span class="text-danger">*</span>
                                </label>
                                <select class="form-select @error('referrer_id') is-invalid @enderror"
                                        id="referrer_id" name="referrer_id" required>
                                    <option value="">— Selecione o indicador —</option>
                                    @foreach($users as $u)
                                        <option value="{{ $u->id }}" @selected(old('referrer_id') == $u->id)>
                                            {{ $u->name }} — {{ $u->email }}
                                            @if($u->referral_code) ({{ $u->referral_code }}) @endif
                                        </option>
                                    @endforeach
                                </select>
                                @error('referrer_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">Quem realizou a indicação.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="referred_id" class="form-label fw-semibold">
                                    Indicado
                                </label>
                                <select class="form-select @error('referred_id') is-invalid @enderror"
                                        id="referred_id" name="referred_id">
                                    <option value="">— Selecione o indicado (opcional) —</option>
                                    @foreach($users as $u)
                                        <option value="{{ $u->id }}" @selected(old('referred_id') == $u->id)>
                                            {{ $u->name }} — {{ $u->email }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('referred_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">Cliente que foi indicado (se já cadastrado).</div>
                            </div>
                        </div>

                        <hr>
                        <h6 class="text-muted mb-3">Produto / Pedido</h6>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="product_name" class="form-label fw-semibold">
                                    Nome do Produto
                                </label>
                                <input type="text"
                                       class="form-control @error('product_name') is-invalid @enderror"
                                       id="product_name" name="product_name"
                                       value="{{ old('product_name') }}"
                                       placeholder="Ex: KG Coins 5000 - Lost Ark">
                                @error('product_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="order_id" class="form-label fw-semibold">
                                    Pedido Vinculado
                                </label>
                                <select class="form-select @error('order_id') is-invalid @enderror"
                                        id="order_id" name="order_id">
                                    <option value="">— Nenhum pedido vinculado —</option>
                                    @foreach($orders as $order)
                                        <option value="{{ $order->id }}"
                                                data-value="{{ $order->total_amount }}"
                                                @selected(old('order_id') == $order->id)>
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
                            <div class="col-md-4">
                                <label for="product_value" class="form-label fw-semibold">
                                    Valor do Produto (R$)
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">R$</span>
                                    <input type="number" step="0.01" min="0"
                                           class="form-control @error('product_value') is-invalid @enderror"
                                           id="product_value" name="product_value"
                                           value="{{ old('product_value') }}"
                                           placeholder="0,00">
                                    @error('product_value')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="commission_percentage" class="form-label fw-semibold">
                                    Porcentagem de Comissão (%) <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="number" step="0.01" min="0" max="100"
                                           class="form-control @error('commission_percentage') is-invalid @enderror"
                                           id="commission_percentage" name="commission_percentage"
                                           value="{{ old('commission_percentage', $defaultCommission) }}"
                                           required>
                                    <span class="input-group-text">%</span>
                                    @error('commission_percentage')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-text">Percentual sobre o valor do produto.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Comissão Calculada</label>
                                <div class="input-group">
                                    <span class="input-group-text">R$</span>
                                    <input type="text" class="form-control bg-light fw-bold text-success"
                                           id="commission_preview" readonly placeholder="—">
                                </div>
                                <div class="form-text">Calculado automaticamente.</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="notes" class="form-label fw-semibold">Observações</label>
                            <textarea class="form-control @error('notes') is-invalid @enderror"
                                      id="notes" name="notes" rows="3"
                                      placeholder="Informações adicionais sobre esta indicação...">{{ old('notes') }}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2 justify-content-end">
                            <a href="{{ route('admin.loyalty.referrals.index') }}" class="btn btn-secondary">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Salvar Indicação
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-info">
                <div class="card-header bg-info text-white">
                    <h6 class="mb-0"><i class="fas fa-info-circle"></i> Como funciona</h6>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0 small">
                        <li class="mb-2">
                            <strong>Indicador:</strong> usuário que trouxe o cliente indicado.
                        </li>
                        <li class="mb-2">
                            <strong>Indicado:</strong> cliente captado pela indicação.
                        </li>
                        <li class="mb-2">
                            <strong>Produto:</strong> informe o produto que foi vendido para calcular a comissão corretamente.
                        </li>
                        <li class="mb-2">
                            <strong>% Comissão:</strong> a porcentagem é aplicada sobre o valor do produto, gerando o valor da comissão em reais.
                        </li>
                        <li>
                            <strong>Status:</strong> a indicação começa como <em>Pendente</em> e pode ser aprovada ou marcada como paga na listagem.
                        </li>
                    </ul>
                </div>
            </div>
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
            : '';
    }

    valueInput.addEventListener('input', updatePreview);
    percentageInput.addEventListener('input', updatePreview);

    // Preenche valor do produto ao selecionar pedido
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
