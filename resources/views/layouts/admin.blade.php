<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') — {{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">

    <style>
        body { background-color: #f1f3f5; }

        /* Sidebar */
        .admin-sidebar {
            width: 240px;
            min-height: 100vh;
            background: #1a1d21;
            position: fixed;
            top: 0; left: 0;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }
        .admin-sidebar .sidebar-brand {
            padding: 1.25rem 1.25rem 1rem;
            border-bottom: 1px solid rgba(255,255,255,.08);
            color: #fff;
            text-decoration: none;
        }
        .admin-sidebar .sidebar-brand small { color: #6c757d; font-size: .7rem; display: block; }
        .admin-sidebar .nav-section {
            font-size: .65rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: #6c757d;
            padding: 1rem 1.25rem .35rem;
        }
        .admin-sidebar .nav-link {
            color: #adb5bd;
            padding: .5rem 1.25rem;
            border-radius: 0;
            font-size: .875rem;
            display: flex;
            align-items: center;
            gap: .6rem;
            transition: background .15s, color .15s;
        }
        .admin-sidebar .nav-link:hover { color: #fff; background: rgba(255,255,255,.06); }
        .admin-sidebar .nav-link.active { color: #fff; background: rgba(255,255,255,.12); border-left: 3px solid #0d6efd; }
        .admin-sidebar .nav-link .fa-fw { width: 1.1rem; text-align: center; }

        /* Main */
        .admin-main { margin-left: 240px; min-height: 100vh; display: flex; flex-direction: column; width: 100%; }

        /* Topbar */
        .admin-topbar {
            background: #fff;
            border-bottom: 1px solid #dee2e6;
            padding: .6rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 50;
        }
        .admin-topbar .breadcrumb { margin: 0; font-size: .82rem; }

        /* Content */
        .admin-content { padding: .75rem 1rem; flex: 1; }

        /* Sidebar footer */
        .sidebar-footer {
            padding: 1rem 1.25rem;
            border-top: 1px solid rgba(255,255,255,.08);
            margin-top: auto;
        }

        @media (max-width: 768px) {
            .admin-sidebar { position: relative; width: 100%; min-height: auto; }
            .admin-main { margin-left: 0; }
        }
    </style>

    @yield('styles')
</head>
<body>

<div class="d-flex">

    {{-- =================== SIDEBAR =================== --}}
    <aside class="admin-sidebar">

        <a href="{{ route('admin.loyalty.dashboard') }}" class="sidebar-brand d-flex align-items-center gap-2">
            <i class="fas fa-shield-alt"></i>
            <div>
                <strong>{{ config('app.name') }}</strong>
                <small>Painel Administrativo</small>
            </div>
        </a>

        <nav class="flex-grow-1 py-2">
            <span class="nav-section">Principal</span>
            <a href="{{ route('admin.loyalty.dashboard') }}"
               class="nav-link {{ request()->routeIs('admin.loyalty.dashboard') ? 'active' : '' }}">
                <i class="fas fa-chart-line fa-fw"></i> Painel
            </a>

            <span class="nav-section">Fidelidade</span>
            <a href="{{ route('admin.loyalty.tiers.index') }}"
               class="nav-link {{ request()->routeIs('admin.loyalty.tiers.*') ? 'active' : '' }}">
                <i class="fas fa-layer-group fa-fw"></i> Níveis
            </a>
            <a href="{{ route('admin.loyalty.badges.index') }}"
               class="nav-link {{ request()->routeIs('admin.loyalty.badges.*') ? 'active' : '' }}">
                <i class="fas fa-medal fa-fw"></i> Conquistas
            </a>

            <a href="{{ route('admin.loyalty.referrals.index') }}"
               class="nav-link {{ request()->routeIs('admin.loyalty.referrals.*') ? 'active' : '' }}">
                <i class="fas fa-users fa-fw"></i> Indicações
            </a>

            <span class="nav-section">Pontos</span>
            <a href="{{ route('admin.loyalty.points.manage') }}"
               class="nav-link {{ request()->routeIs('admin.loyalty.points.manage') ? 'active' : '' }}">
                <i class="fas fa-coins fa-fw"></i> Gerenciar Pontos
            </a>
            <a href="{{ route('admin.loyalty.points.transactions') }}"
               class="nav-link {{ request()->routeIs('admin.loyalty.points.transactions') ? 'active' : '' }}">
                <i class="fas fa-list fa-fw"></i> Transações
            </a>

            <span class="nav-section">Relatórios</span>
            <a href="{{ route('admin.loyalty.export') }}" class="nav-link">
                <i class="fas fa-file-download fa-fw"></i> Exportar
            </a>

            <div class="mt-3" style="border-top: 1px solid rgba(255,255,255,.08); padding-top: .75rem;">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-store fa-fw"></i> Ver Loja
                </a>
            </div>
        </nav>

        <div class="sidebar-footer">
            <div class="d-flex align-items-center gap-2 mb-2">
                <i class="fas fa-user-circle text-secondary"></i>
                <span class="text-white" style="font-size: .82rem;">{{ Auth::user()->name }}</span>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-secondary w-100" style="font-size: .78rem;">
                    <i class="fas fa-sign-out-alt me-1"></i> Sair
                </button>
            </form>
        </div>

    </aside>

    {{-- =================== MAIN =================== --}}
    <div class="admin-main">

        {{-- Topbar --}}
        <div class="admin-topbar">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.loyalty.dashboard') }}">Admin</a>
                    </li>
                    @yield('breadcrumb')
                </ol>
            </nav>
            <span class="text-muted" style="font-size: .8rem;">
                <i class="fas fa-calendar-alt me-1"></i>{{ now()->format('d/m/Y') }}
            </span>
        </div>

        {{-- Flash messages --}}
        <div class="px-4 pt-3">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-1"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-1"></i> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
        </div>

        {{-- Page content --}}
        <div class="admin-content">
            @yield('content')
        </div>

    </div>
</div>

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/boostrap.bundle.min.js') }}"></script>
@yield('scripts')

</body>
</html>
