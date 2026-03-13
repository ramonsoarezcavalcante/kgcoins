@extends('layouts.admin')

@section('title', 'Admin - Criar Nível')

@section('content')
<div class="container-fluid">

    <div class="row mb-3">
        <div class="col-12 d-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0">➕ Criar Novo Nível</h1>
            <a href="{{ route('admin.loyalty.tiers.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-lg-9">
            <div class="card h-100">
                <div class="card-header">
                    <h6 class="mb-0">Dados do Nível</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.loyalty.tiers.store') }}" method="POST">
                        @csrf

                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label for="name" class="form-label">Nome do Nível <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="min_points" class="form-label">Pontos Mínimos <span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('min_points') is-invalid @enderror"
                                       id="min_points" name="min_points" value="{{ old('min_points', 0) }}" min="0" required>
                                @error('min_points')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label for="discount_percentage" class="form-label">Desconto (%) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('discount_percentage') is-invalid @enderror"
                                       id="discount_percentage" name="discount_percentage" value="{{ old('discount_percentage', 0) }}"
                                       min="0" max="100" step="0.01" required>
                                @error('discount_percentage')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-2">
                                <label for="color" class="form-label">Cor <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="color" class="form-control form-control-color @error('color') is-invalid @enderror"
                                           id="color" name="color" value="{{ old('color', '#6c757d') }}" required style="max-width:50px;">
                                    <input type="text" class="form-control @error('color') is-invalid @enderror"
                                           id="colorText" placeholder="#6c757d">
                                </div>
                                @error('color')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="benefits" class="form-label">Benefícios (um por linha)</label>
                            <textarea class="form-control @error('benefits') is-invalid @enderror"
                                      id="benefits" name="benefits" rows="6"
                                      placeholder="Benefício 1&#10;Benefício 2&#10;Benefício 3">{{ old('benefits') }}</textarea>
                            <small class="form-text text-muted">Digite cada benefício em uma linha separada</small>
                            @error('benefits')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Criar Nível
                            </button>
                            <a href="{{ route('admin.loyalty.tiers.index') }}" class="btn btn-outline-secondary">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card bg-light border-0">
                <div class="card-body">
                    <h6 class="card-title">💡 Dicas</h6>
                    <ul class="small mb-0">
                        <li class="mb-2"><strong>Pontos Mínimos:</strong> valor a partir do qual o usuário entra neste nível.</li>
                        <li class="mb-2"><strong>Desconto:</strong> percentual aplicado automaticamente nas compras deste nível.</li>
                        <li class="mb-2"><strong>Cor:</strong> usada para identificar visualmente o nível no painel.</li>
                        <li><strong>Benefícios:</strong> listados na área do usuário como vantagens do nível.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
document.getElementById('color').addEventListener('change', function() {
    document.getElementById('colorText').value = this.value;
});

document.getElementById('colorText').addEventListener('input', function() {
    if (/^#[0-9a-f]{6}$/i.test(this.value)) {
        document.getElementById('color').value = this.value;
    }
});
</script>
@endsection
