@extends('layouts.app')

@section('title', 'Admin - Gerenciar Tiers')

@section('content')
<div class="container-fluid my-4">
    <div class="row mb-4">
        <div class="col-lg-8">
            <h1 class="h2">⭐ Gerenciar Tiers de Fidelidade</h1>
        </div>
        <div class="col-lg-4 text-end">
            <a href="{{ route('admin.loyalty.tiers.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Novo Tier
            </a>
        </div>
    </div>

    @if($message = session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle"></i> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if($tiers->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Pontos Mínimos</th>
                                        <th>Desconto</th>
                                        <th>Usuários</th>
                                        <th>Benefícios</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tiers as $tier)
                                    <tr>
                                        <td>
                                            <div style="width: 15px; height: 15px; background-color: {{ $tier->color }}; display: inline-block; border-radius: 3px; margin-right: 10px;"></div>
                                            <strong>{{ $tier->name }}</strong>
                                        </td>
                                        <td>{{ number_format($tier->min_points) }}</td>
                                        <td><span class="badge bg-success">{{ $tier->discount_percentage }}%</span></td>
                                        <td>{{ $tier->users()->count() }}</td>
                                        <td>
                                            <small>
                                                @if($tier->benefits)
                                                    {{ count($tier->benefits) }} benefício(s)
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </small>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.loyalty.tiers.edit', $tier) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.loyalty.tiers.destroy', $tier) }}" method="POST" style="display: inline;">
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
                        
                        {{ $tiers->links() }}
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-inbox" style="font-size: 3rem; color: #ccc;"></i>
                            <p class="text-muted mt-3">Nenhum tier criado ainda</p>
                            <a href="{{ route('admin.loyalty.tiers.create') }}" class="btn btn-primary mt-3">
                                Criar o Primeiro Tier
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
