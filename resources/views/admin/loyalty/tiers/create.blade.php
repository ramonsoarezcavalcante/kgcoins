@extends('layouts.admin')

@section('title', 'Admin - Criar Tier')

@section('content')
<div class="container my-4">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h1 class="h2 mb-4">➕ Criar Novo Tier</h1>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.loyalty.tiers.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nome do Tier *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="min_points" class="form-label">Pontos Mínimos *</label>
                                <input type="number" class="form-control @error('min_points') is-invalid @enderror"
                                       id="min_points" name="min_points" value="{{ old('min_points', 0) }}" min="0" required>
                                @error('min_points')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="discount_percentage" class="form-label">Desconto (%) *</label>
                                <input type="number" class="form-control @error('discount_percentage') is-invalid @enderror"
                                       id="discount_percentage" name="discount_percentage" value="{{ old('discount_percentage', 0) }}"
                                       min="0" max="100" step="0.01" required>
                                @error('discount_percentage')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="color" class="form-label">Cor (Hexadecimal) *</label>
                            <div class="input-group">
                                <input type="color" class="form-control form-control-color @error('color') is-invalid @enderror"
                                       id="color" name="color" value="{{ old('color', '#6c757d') }}" required>
                                <input type="text" class="form-control @error('color') is-invalid @enderror"
                                       id="colorText" placeholder="#6c757d">
                            </div>
                            @error('color')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="benefits" class="form-label">Benefícios (um por linha)</label>
                            <textarea class="form-control @error('benefits') is-invalid @enderror"
                                      id="benefits" name="benefits" rows="5"
                                      placeholder="Benefício 1&#10;Benefício 2&#10;Benefício 3">{{ old('benefits') }}</textarea>
                            <small class="form-text text-muted">Digite cada benefício em uma linha separada</small>
                            @error('benefits')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Criar Tier
                            </button>
                            <a href="{{ route('admin.loyalty.tiers.index') }}" class="btn btn-outline-secondary">
                                Cancelar
                            </a>
                        </div>
                    </form>
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
