@extends('layouts.admin')

@section('title', 'Admin - Gerenciar Conquistas')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-lg-8">
            <h1 class="h2">🎖️ Gerenciar Conquistas</h1>
        </div>
        <div class="col-lg-4 text-end">
            <a href="{{ route('admin.loyalty.badges.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Nova Conquista
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if($badges->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Ícone</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Condição de Desbloqueio</th>
                                        <th>Usuários</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($badges as $badge)
                                    <tr>
                                        <td style="font-size: 1.5rem;">{{ $badge->icon }}</td>
                                        <td><strong>{{ $badge->name }}</strong></td>
                                        <td><small>{{ substr($badge->description, 0, 50) }}{{ strlen($badge->description) > 50 ? '...' : '' }}</small></td>
                                        <td>
                                            <small>
                                                @php
                                                    $typeLabels = [
                                                        'points_threshold' => 'Limite de Pontos',
                                                        'purchases_count'  => 'Nº de Compras',
                                                        'first_purchase'   => 'Primeira Compra',
                                                        'tier_reached'     => 'Atingir Nível',
                                                        'manual'           => 'Manual',
                                                    ];
                                                    $type = $badge->unlock_condition['type'] ?? 'manual';
                                                @endphp
                                                @if($badge->unlock_condition)
                                                    {{ $typeLabels[$type] ?? ucfirst($type) }}
                                                    @if(isset($badge->unlock_condition['points']))
                                                        ({{ $badge->unlock_condition['points'] }} pts)
                                                    @endif
                                                @else
                                                    <span class="text-muted">Manual</span>
                                                @endif
                                            </small>
                                        </td>
                                        <td>{{ $badge->users()->count() }}</td>
                                        <td>
                                            @if($badge->is_active)
                                                <span class="badge bg-success">Ativo</span>
                                            @else
                                                <span class="badge bg-secondary">Inativo</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.loyalty.badges.edit', $badge) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.loyalty.badges.destroy', $badge) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{ $badges->links() }}
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-inbox" style="font-size: 3rem; color: #ccc;"></i>
                            <p class="text-muted mt-3">Nenhuma conquista criada ainda</p>
                            <a href="{{ route('admin.loyalty.badges.create') }}" class="btn btn-primary mt-3">
                                Criar a Primeira Conquista
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
