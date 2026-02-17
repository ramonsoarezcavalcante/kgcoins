@extends('layouts.app')

@section('title', 'Resgate de Prêmios')

@section('content')
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-lg-8">
            <h1 class="mb-4">🎁 Resgate de Prêmios</h1>
        </div>
        <div class="col-lg-4 text-end">
            <a href="{{ route('loyalty.dashboard') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </div>
    </div>

    <!-- Current Points Info -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">💰 Pontos Disponíveis</h4>
                <p class="mb-0">
                    Você tem <strong>{{ number_format($userPoints) }} pontos</strong> disponíveis para resgatar prêmios.
                </p>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    @endif

    @if(session('error'))
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    @endif

    <!-- Available Rewards -->
    @if(count($availableRewards) > 0)
    <div class="row mb-5">
        <div class="col-lg-12">
            <h5 class="mb-4">✅ Prêmios Disponíveis para Resgate</h5>
            <div class="row">
                @foreach($availableRewards as $reward)
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-success">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h5 class="card-title mb-2">{{ $reward['name'] }}</h5>
                                    <p class="card-text text-muted">{{ $reward['description'] }}</p>
                                </div>
                                <span class="badge bg-success">Disponível</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <small class="text-muted">Custa:</small><br>
                                    <strong class="text-success">{{ number_format($reward['points_required']) }} pontos</strong>
                                </div>
                                <form action="{{ route('loyalty.claim') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <input type="hidden" name="reward_id" value="{{ $reward['id'] }}">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fas fa-gift"></i> Resgatar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- All Rewards (Locked) -->
    @if(count($allRewards) > count($availableRewards))
    <div class="row">
        <div class="col-lg-12">
            <h5 class="mb-4">🔒 Prêmios Bloqueados</h5>
            <p class="text-muted mb-4">Você não tem pontos suficientes para resgatar estes prêmios ainda. Continue acumulando!</p>
            <div class="row">
                @foreach($allRewards as $reward)
                    @php
                        $isAvailable = in_array($reward['id'], array_column($availableRewards, 'id'));
                    @endphp
                    @if(!$isAvailable)
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 opacity-50">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div>
                                        <h5 class="card-title mb-2">{{ $reward['name'] }}</h5>
                                        <p class="card-text text-muted">{{ $reward['description'] }}</p>
                                    </div>
                                    <span class="badge bg-secondary">Bloqueado</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <small class="text-muted">Custa:</small><br>
                                        <strong>{{ number_format($reward['points_required']) }} pontos</strong><br>
                                        <small class="text-danger">
                                            Faltam: {{ $reward['points_required'] - $userPoints }} pontos
                                        </small>
                                    </div>
                                    <button type="button" class="btn btn-secondary btn-sm" disabled>
                                        <i class="fas fa-lock"></i> Bloqueado
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- Empty State -->
    @if(count($allRewards) === 0)
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center py-5">
                <i class="fas fa-gift" style="font-size: 3rem; color: #ccc;"></i>
                <p class="text-muted mt-3">Nenhum prêmio disponível no momento</p>
            </div>
        </div>
    </div>
    @endif

    <!-- Tips Section -->
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card bg-light">
                <div class="card-body">
                    <h6 class="card-title mb-3">💡 Como Ganhar Mais Pontos</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <ul style="list-style: none; padding: 0;">
                                <li class="mb-2">
                                    <i class="fas fa-shopping-bag text-primary"></i> 
                                    <strong>Realize Compras:</strong> Ganhe 1 ponto a cada R$10 gasto
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-users text-info"></i> 
                                    <strong>Indique Amigos:</strong> Ganhe 100 pontos por amigo que se registrar
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-star text-warning"></i> 
                                    <strong>Suba de Nível:</strong> Desbloqueie benefícios com cada nível
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul style="list-style: none; padding: 0;">
                                <li class="mb-2">
                                    <i class="fas fa-calendar-alt text-success"></i> 
                                    <strong>Aniversário:</strong> Ganhe bônus especial no seu mês
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-trophy text-danger"></i> 
                                    <strong>Desbloqueie Badges:</strong> Complete desafios e ganhe conquistas
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-gift text-success"></i> 
                                    <strong>Promoções:</strong> Participe de eventos especiais
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
