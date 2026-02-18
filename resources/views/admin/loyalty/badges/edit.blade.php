@extends('layouts.admin')

@section('title', 'Admin - Editar Badge')

@section('content')
<div class="container-fluid my-4">
    <div class="row mb-4">
        <div class="col-lg-12">
            <h1 class="h2">🎖️ Editar Badge: {{ $badge->name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.loyalty.badges.update', $badge) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nome da Badge <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $badge->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description', $badge->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="icon" class="form-label">Icon (Emoji ou Font Awesome) <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{ old('icon', $badge->icon) }}" required>
                                    @error('icon')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="is_active" class="form-label">Status</label>
                                    <select class="form-select @error('is_active') is-invalid @enderror" id="is_active" name="is_active">
                                        <option value="1" @selected(old('is_active', $badge->is_active) == 1)>Ativa</option>
                                        <option value="0" @selected(old('is_active', $badge->is_active) == 0)>Inativa</option>
                                    </select>
                                    @error('is_active')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h5 class="mb-3">Condição de Desbloqueio</h5>

                            <div class="mb-3">
                                <label for="unlock_type" class="form-label">Tipo de Condição <span class="text-danger">*</span></label>
                                <select class="form-select @error('unlock_type') is-invalid @enderror" id="unlock_type" name="unlock_type" required onchange="toggleUnlockFields()">
                                    <option value="">Selecione uma opção</option>
                                    <option value="points_threshold" @selected(old('unlock_type') === 'points_threshold' || ($badge->unlock_condition && $badge->unlock_condition['type'] === 'points_threshold'))>Limite de Pontos</option>
                                    <option value="purchase_count" @selected(old('unlock_type') === 'purchase_count' || ($badge->unlock_condition && $badge->unlock_condition['type'] === 'purchase_count'))>Número de Compras</option>
                                    <option value="first_purchase" @selected(old('unlock_type') === 'first_purchase' || ($badge->unlock_condition && $badge->unlock_condition['type'] === 'first_purchase'))>Primeira Compra</option>
                                    <option value="tier_reached" @selected(old('unlock_type') === 'tier_reached' || ($badge->unlock_condition && $badge->unlock_condition['type'] === 'tier_reached'))>Atingir Tier</option>
                                    <option value="manual" @selected(old('unlock_type') === 'manual' || !$badge->unlock_condition)>Manual (Admin)</option>
                                </select>
                                @error('unlock_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Campos condicionais -->
                            <div id="points_threshold_field" class="mb-3" style="display: none;">
                                <label for="unlock_points" class="form-label">Pontos Necessários</label>
                                <input type="number" class="form-control @error('unlock_points') is-invalid @enderror" id="unlock_points" name="unlock_points" value="{{ old('unlock_points', $badge->unlock_condition['points'] ?? 0) }}" min="0">
                                @error('unlock_points')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div id="purchase_count_field" class="mb-3" style="display: none;">
                                <label for="unlock_count" class="form-label">Número de Compras</label>
                                <input type="number" class="form-control @error('unlock_count') is-invalid @enderror" id="unlock_count" name="unlock_count" value="{{ old('unlock_count', $badge->unlock_condition['count'] ?? 0) }}" min="0">
                                @error('unlock_count')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div id="tier_reached_field" class="mb-3" style="display: none;">
                                <label for="unlock_tier" class="form-label">Tier Necessário</label>
                                <select class="form-select @error('unlock_tier') is-invalid @enderror" id="unlock_tier" name="unlock_tier">
                                    <option value="">Selecione um tier</option>
                                    @foreach($tiers as $tier)
                                        <option value="{{ $tier->name }}" @selected(old('unlock_tier') === $tier->name || ($badge->unlock_condition && $badge->unlock_condition['tier'] === $tier->name))>{{ $tier->name }}</option>
                                    @endforeach
                                </select>
                                @error('unlock_tier')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Atualizar Badge
                            </button>
                            <a href="{{ route('admin.loyalty.badges.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Voltar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">📊 Informações</h5>
                    <div class="mb-3">
                        <small class="text-muted">Usuários com essa badge:</small>
                        <h6 class="mb-0">{{ $badge->users()->count() }} usuários</h6>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted">Última atualização:</small>
                        <p class="mb-0" style="font-size: 0.85rem;">{{ $badge->updated_at->format('d/m/Y H:i') }}</p>
                    </div>
                    <hr>
                    <h6>💡 Dicas</h6>
                    <ul class="small">
                        <li>Mude o status para inativo para desabilitar</li>
                        <li>Editando aqui não remove badges já ganhas</li>
                        <li>Novas condições se aplicam a futuros desbloqueios</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleUnlockFields() {
    const unlockType = document.getElementById('unlock_type').value;

    document.getElementById('points_threshold_field').style.display =
        unlockType === 'points_threshold' ? 'block' : 'none';
    document.getElementById('purchase_count_field').style.display =
        unlockType === 'purchase_count' ? 'block' : 'none';
    document.getElementById('tier_reached_field').style.display =
        unlockType === 'tier_reached' ? 'block' : 'none';
}

// Executar ao carregar se houver valor selecionado
document.addEventListener('DOMContentLoaded', toggleUnlockFields);
</script>
@endsection
