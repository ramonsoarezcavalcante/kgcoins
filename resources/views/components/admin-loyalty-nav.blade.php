<!-- Admin Loyalty Navigation Component -->
<!-- Add this to your admin layout sidebar or navigation -->

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.loyalty.dashboard') }}">
            🎮 Painel de Loyalidade
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.loyalty.dashboard') }}">
                        <i class="fas fa-chart-line"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="tiersDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-layer-group"></i> Tiers
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="tiersDropdown">
                        <li><a class="dropdown-item" href="{{ route('admin.loyalty.tiers.index') }}">Listar Tiers</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.loyalty.tiers.create') }}">Novo Tier</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="badgesDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-medal"></i> Badges
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="badgesDropdown">
                        <li><a class="dropdown-item" href="{{ route('admin.loyalty.badges.index') }}">Listar Badges</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.loyalty.badges.create') }}">Nova Badge</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pointsDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-coins"></i> Pontos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="pointsDropdown">
                        <li><a class="dropdown-item" href="{{ route('admin.loyalty.points.manage') }}">Gerenciar Pontos</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.loyalty.points.transactions') }}">Transações</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.loyalty.export') }}">
                        <i class="fas fa-download"></i> Exportar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- 
    Estrutura de View Blade (colocar em layouts/admin.blade.php ou semelhante):
    
    @extends('layouts.app')
    
    @section('content')
        @include('components.admin-loyalty-nav')
        
        <!-- Seu conteúdo aqui -->
        @yield('admin-content')
    @endsection
-->

<!-- Sidebar alternativo para layouts com sidebar -->
<div class="list-group">
    <a href="{{ route('admin.loyalty.dashboard') }}" class="list-group-item list-group-item-action d-flex align-items-center gap-3">
        <i class="fas fa-chart-line"></i>
        <span>Dashboard</span>
    </a>
    
    <div class="list-group-item d-flex justify-content-between align-items-center">
        <span><i class="fas fa-layer-group"></i> Tiers</span>
        <i class="fas fa-chevron-down"></i>
    </div>
    <a href="{{ route('admin.loyalty.tiers.index') }}" class="list-group-item list-group-item-action ms-3">
        Listar Tiers
    </a>
    <a href="{{ route('admin.loyalty.tiers.create') }}" class="list-group-item list-group-item-action ms-3">
        Criar Tier
    </a>
    
    <div class="list-group-item d-flex justify-content-between align-items-center">
        <span><i class="fas fa-medal"></i> Badges</span>
        <i class="fas fa-chevron-down"></i>
    </div>
    <a href="{{ route('admin.loyalty.badges.index') }}" class="list-group-item list-group-item-action ms-3">
        Listar Badges
    </a>
    <a href="{{ route('admin.loyalty.badges.create') }}" class="list-group-item list-group-item-action ms-3">
        Criar Badge
    </a>
    
    <div class="list-group-item d-flex justify-content-between align-items-center">
        <span><i class="fas fa-coins"></i> Pontos</span>
        <i class="fas fa-chevron-down"></i>
    </div>
    <a href="{{ route('admin.loyalty.points.manage') }}" class="list-group-item list-group-item-action ms-3">
        Gerenciar Pontos
    </a>
    <a href="{{ route('admin.loyalty.points.transactions') }}" class="list-group-item list-group-item-action ms-3">
        Transações
    </a>
    
    <a href="{{ route('admin.loyalty.export') }}" class="list-group-item list-group-item-action">
        <i class="fas fa-download"></i> Exportar Relatório
    </a>
</div>
