@extends('frontend.layouts.app')
@section('title', 'Cadastro - KG Coins')
@section('content')
    <!-- ============================ header area ============================ -->
    @include('frontend.includes.headers.headerOne')
    <!-- ============================ header area end ============================ -->

    <!-- ========================= Breadcrumb Start =============================== -->
    <div class="mb-0 py-20" style="background:#1a1c28; border-bottom:1px solid rgba(124,58,237,0.15);">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <h6 class="mb-0" style="font-family:'Exo',sans-serif; font-weight:700; color:#f1f5f9;">🎮 Criar Conta</h6>
                <ul class="flex-align gap-8 flex-wrap">
                    <li class="text-sm">
                        <a href="{{route('home')}}" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                            <i class="ph ph-house"></i>
                            {{ __('Home') }}
                        </a>
                    </li>
                    <li class="flex-align">
                        <i class="ph ph-caret-right"></i>
                    </li>
                    <li class="text-sm text-main-600">{{ __('Register') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ========================= Breadcrumb End =============================== -->

    <!-- =============================== Account Section Start =========================== -->
    <section class="account py-80">
        <div class="container container-lg">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row justify-content-center gy-4">
                    <!-- ============================ Register Card Start ============================ -->
                    <div class="col-xl-6">
                        <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40">
                            <h6 class="text-xl mb-32">{{ __('Register') }}</h6>
                            <div class="mb-24">
                                <label for="name" class="text-neutral-900 text-lg mb-8 fw-medium">{{ __('Name') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="common-input @error('name') is-invalid @enderror" id="name"
                                    placeholder="{{ __('Write a name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-24">
                                <label for="emailTwo" class="text-neutral-900 text-lg mb-8 fw-medium">{{ __('Email address') }}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="email" class="common-input @error('email') is-invalid @enderror" id="emailTwo"
                                    placeholder="{{ __('Enter Email Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-24">
                                <label for="password" class="text-neutral-900 text-lg mb-8 fw-medium">{{ __('Password') }}
                                    <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <input type="password" class="common-input @error('password') is-invalid @enderror" id="password"
                                        placeholder="{{ __('Enter Password') }}" name="password" required autocomplete="new-password" />
                                    <span
                                        class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash"
                                        id="#password"></span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-24">
                                <label for="confirm-password" class="text-neutral-900 text-lg mb-8 fw-medium">{{ __('Confirm Password') }}
                                    <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <input type="password" class="common-input @error('confirm-password') is-invalid @enderror" id="confirm-password"
                                        placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password" />
                                    <span
                                        class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash"
                                        id="#confirm-password"></span>
                                </div>
                                @error('confirm-password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="my-48">
                                <p class="text-gray-500">
                                    Your personal data will be used to
                                    process your order, support your
                                    experience throughout this website, and
                                    for other purposes described in our
                                    <a href="#" class="text-main-600 text-decoration-underline">
                                        {{ __('privacy policy') }}</a>
                                    .
                                </p>
                            </div>
                            <div class="mt-48">
                                <button type="submit" class="btn btn-main py-18 px-40">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{ route('login') }}" class="text-main-600 ms-24">
                                        {{ __('Already have an account?') }}</a>
                            </div>
                        </div>
                    </div>
                    <!-- ============================ Register Card end ============================ -->
                </div>
            </form>
        </div>
    </section>
    <!-- =============================== Account Section End =========================== -->

    <!-- ========================== Shipping Section Start ============================ -->
    <section class="shipping mb-24" id="shipping">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-car-profile"></i></span>
                        <div class="">
                            <h6 class="mb-0">{{ __('Free Shipping') }}</h6>
                            <span class="text-sm text-heading">{{ __('Free shipping all over the US') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-hand-heart"></i></span>
                        <div class="">
                            <h6 class="mb-0">{{ __('100% Satisfaction') }}</h6>
                            <span class="text-sm text-heading">{{ __('Free shipping all over the US') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-credit-card"></i></span>
                        <div class="">
                            <h6 class="mb-0">{{ __('Secure Payments') }}</h6>
                            <span class="text-sm text-heading">{{ __('Free shipping all over the US') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-chats"></i></span>
                        <div class="">
                            <h6 class="mb-0">{{ __('24/7 Support') }}</h6>
                            <span class="text-sm text-heading">{{ __('Free shipping all over the US') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Shipping Section End ============================ -->

    <!-- ========================== footer area ============================ -->
    @include('frontend.includes.footers.footerTwo')
    <!-- ========================== footer area end ============================ -->
@endsection
