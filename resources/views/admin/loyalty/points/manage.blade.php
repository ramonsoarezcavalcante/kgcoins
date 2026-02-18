@extends('layouts.admin')

@section('title', 'Admin - Gerenciar Pontos')

@section('content')
<div class="container-fluid my-4">
    <div class="row mb-4">
        <div class="col-lg-12">
            <h1 class="h2">💰 Gerenciar Pontos dos Usuários</h1>
        </div>
    </div>

    @if($message = session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle"></i> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" class="row g-3">
                        <div class="col-md-6">
                            <label for="search" class="form-label">Buscar Usuário</label>
                            <input type="text" class="form-control" id="search" name="search" placeholder="Nome ou email..." value="{{ request('search') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="tier" class="form-label">Filtrar por Tier</label>
                            <select class="form-select" id="tier" name="tier">
                                <option value="">Todos</option>
                                @foreach($tiers as $tier)
                                    <option value="{{ $tier->id }}" @selected(request('tier') == $tier->id)>{{ $tier->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-search"></i> Buscar
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
                    @if($users->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Usuário</th>
                                        <th>Email</th>
                                        <th>Pontos</th>
                                        <th>Tier</th>
                                        <th>Compras</th>
                                        <th>Badges</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <strong>{{ $user->name }}</strong>
                                        </td>
                                        <td><small>{{ $user->email }}</small></td>
                                        <td>
                                            <span class="badge bg-info">{{ $user->points }} pts</span>
                                        </td>
                                        <td>
                                            @if($user->tier)
                                                <span class="badge" style="background-color: {{ $user->tier->color ?? '#6c757d' }}; color: white;">
                                                    {{ $user->tier->name }}
                                                </span>
                                            @else
                                                <span class="badge bg-secondary">Sem Tier</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->orders()->count() }}</td>
                                        <td>{{ $user->badges()->count() }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#adjustPointsModal{{ $user->id }}">
                                                <i class="fas fa-edit"></i> Ajustar
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal para ajustar pontos -->
                                    <div class="modal fade" id="adjustPointsModal{{ $user->id }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ajustar Pontos - {{ $user->name }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('admin.loyalty.points.update', $user) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="alert alert-info">
                                                            <small>
                                                                <strong>Pontos Atuais:</strong> {{ $user->points }}
                                                            </small>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="points{{ $user->id }}" class="form-label">Quantidade de Pontos</label>
                                                            <input type="number" class="form-control" id="points{{ $user->id }}" name="points" value="0" required>
                                                            <small class="form-text text-muted">
                                                                Positivo = adiciona | Negativo = subtrai
                                                            </small>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="reason{{ $user->id }}" class="form-label">Motivo <span class="text-danger">*</span></label>
                                                            <select class="form-select" id="reason{{ $user->id }}" name="reason" required>
                                                                <option value="">Selecione um motivo</option>
                                                                <option value="bonus">Bônus Manual</option>
                                                                <option value="adjustment">Ajuste Manual</option>
                                                                <option value="redemption">Resgate</option>
                                                                <option value="correction">Correção</option>
                                                                <option value="compensation">Compensação</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="description{{ $user->id }}" class="form-label">Descrição (Opcional)</label>
                                                            <textarea class="form-control" id="description{{ $user->id }}" name="description" rows="2" placeholder="Ex: Bônus por feedback positivo..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary">Confirmar Ajuste</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{ $users->links() }}
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-inbox" style="font-size: 3rem; color: #ccc;"></i>
                            <p class="text-muted mt-3">Nenhum usuário encontrado</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
