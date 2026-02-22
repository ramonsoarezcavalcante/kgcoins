{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('frontend.layouts.app')
@section('title', 'Login - KG Coins')
@section('content')
    <!-- ============================ header area ============================ -->
    @include('frontend.includes.headers.headerOne')
    <!-- ============================ header area end ============================ -->

    <!-- =============================== Account / Login Section =========================== -->
    <section class="auth-gaming">
        <div class="container">
            <div class="row justify-content-center py-5 my-3">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="auth-card">
                        <!-- Logo -->
                        <div class="text-center mb-4">
                            <a href="{{ route('home') }}" class="logo-gaming text-decoration-none" style="font-size:1.75rem;">
                                <i class="ph ph-coins" style="margin-right:4px;"></i>KG Coins
                            </a>
                            <p style="color:#64748b; font-size:0.875rem; margin-top:8px;">Entre na sua conta</p>
                        </div>

                        <!-- Flash Messages -->
                        @if(session('status'))
                            <div class="alert" style="background:rgba(5,150,105,0.15); border:1px solid rgba(5,150,105,0.4); color:#34d399; border-radius:8px; padding:12px 16px; margin-bottom:1.5rem; font-size:0.875rem;">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" style="color:#94a3b8; font-size:0.875rem; font-weight:600; font-family:'Exo',sans-serif; margin-bottom:8px; display:block;">
                                    Email <span style="color:#f97316;">*</span>
                                </label>
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email"
                                    placeholder="seu@email.com"
                                    value="{{ old('email') }}"
                                    required autocomplete="email" autofocus
                                    style="border-radius:8px; padding:12px 16px;" />
                                @error('email')
                                    <div style="color:#f87171; font-size:0.8rem; margin-top:4px;">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <label for="password" style="color:#94a3b8; font-size:0.875rem; font-weight:600; font-family:'Exo',sans-serif; margin-bottom:8px; display:block;">
                                    Senha
                                </label>
                                <div class="position-relative">
                                    <input type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password" id="password"
                                        placeholder="Sua senha"
                                        required autocomplete="current-password"
                                        style="border-radius:8px; padding:12px 16px;" />
                                    <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash"
                                        id="#password" style="color:#64748b;"></span>
                                </div>
                                @error('password')
                                    <div style="color:#f87171; font-size:0.8rem; margin-top:4px;">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember + Forgot -->
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center gap-8">
                                    <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}
                                        style="background:#1e2030; border-color:rgba(124,58,237,0.4); width:16px; height:16px;" />
                                    <label for="remember" style="color:#94a3b8; font-size:0.85rem; cursor:pointer;">Lembrar de mim</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" style="color:#8878F5; font-size:0.85rem; text-decoration:none;">Esqueci a senha</a>
                                @endif
                            </div>

                            <!-- Submit -->
                            <button type="submit" class="btn-neon w-100" style="padding:14px; font-size:1rem; border-radius:8px; cursor:pointer; border:none;">
                                <i class="ph ph-sign-in" style="margin-right:8px;"></i>Entrar
                            </button>

                            <!-- Divider -->
                            <div class="text-center my-4" style="position:relative;">
                                <div style="position:absolute; top:50%; left:0; right:0; height:1px; background:rgba(124,58,237,0.2);"></div>
                                <span style="position:relative; background:#1e2030; padding:0 12px; color:#475569; font-size:0.8rem;">ou</span>
                            </div>

                            <!-- Register Link -->
                            <div class="text-center">
                                <span style="color:#64748b; font-size:0.875rem;">Ainda não tem conta? </span>
                                <a href="{{ route('register') }}" style="color:#8878F5; font-weight:700; text-decoration:none; font-size:0.875rem;">Cadastre-se grátis</a>
                            </div>
                        </form>

                        <!-- Trust badges -->
                        <div class="d-flex align-items-center justify-content-center gap-16 mt-4 pt-4" style="border-top:1px solid rgba(124,58,237,0.1);">
                            <span style="color:#475569; font-size:0.75rem;">🔒 SSL Seguro</span>
                            <span style="color:#475569; font-size:0.75rem;">·</span>
                            <span style="color:#475569; font-size:0.75rem;">✓ Dados protegidos</span>
                            <span style="color:#475569; font-size:0.75rem;">·</span>
                            <span style="color:#475569; font-size:0.75rem;">🎮 KG Coins</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Account Section End =========================== -->

    <!-- ========================== footer area ============================ -->
    @include('frontend.includes.footers.footerOne')
    <!-- ========================== footer area end ============================ -->
@endsection

