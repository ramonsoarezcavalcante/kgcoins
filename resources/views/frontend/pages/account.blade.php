@extends('frontend.layouts.app')
@section('title', 'Account')
@section('content')
    <!-- ============================ header area ============================ -->
    @include('frontend.includes.headers.headerTwo')
    <!-- ============================ header area end ============================ -->

    <!-- ========================= Breadcrumb Start =============================== -->
    <div class="breadcrumb mb-0 py-26 bg-main-two-50">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <h6 class="mb-0">My Account</h6>
                <ul class="flex-align gap-8 flex-wrap">
                    <li class="text-sm">
                        <a href="{{route('home')}}" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                            <i class="ph ph-house"></i>
                            Home
                        </a>
                    </li>
                    <li class="flex-align">
                        <i class="ph ph-caret-right"></i>
                    </li>
                    <li class="text-sm text-main-600">Account</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ========================= Breadcrumb End =============================== -->

    <!-- =============================== Account Section Start =========================== -->
    <section class="account py-80">
        <div class="container container-lg">
            <form action="#">
                @csrf
                <div class="row gy-4">
                    <!-- ============================ Login Card Start ============================ -->
                    <div class="col-xl-6 pe-xl-5">
                        <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-100">
                            <h6 class="text-xl mb-32">Login</h6>
                            <div class="mb-24">
                                <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Username or email
                                    address
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="common-input" id="username" placeholder="First Name" />
                            </div>
                            <div class="mb-24">
                                <label for="password" class="text-neutral-900 text-lg mb-8 fw-medium">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="common-input" id="password" placeholder="Enter Password"
                                        value="password" />
                                    <span
                                        class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash"
                                        id="#password"></span>
                                </div>
                            </div>
                            <div class="mb-24 mt-48">
                                <div class="flex-align gap-48 flex-wrap">
                                    <button type="submit" class="btn btn-main py-18 px-40">
                                        Log in
                                    </button>
                                    <div class="form-check common-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember" />
                                        <label class="form-check-label flex-grow-1" for="remember">Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-48">
                                <a href="#"
                                    class="text-danger-600 text-sm fw-semibold hover-text-decoration-underline">Forgot your
                                    password?</a>
                            </div>
                        </div>
                    </div>
                    <!-- ============================ Login Card end ============================ -->

                    <!-- ============================ Register Card Start ============================ -->
                    <div class="col-xl-6">
                        <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40">
                            <h6 class="text-xl mb-32">Register</h6>
                            <div class="mb-24">
                                <label for="usernameTwo" class="text-neutral-900 text-lg mb-8 fw-medium">Username
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="common-input" id="usernameTwo"
                                    placeholder="Write a username" />
                            </div>
                            <div class="mb-24">
                                <label for="emailTwo" class="text-neutral-900 text-lg mb-8 fw-medium">Email address
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="email" class="common-input" id="emailTwo"
                                    placeholder="Enter Email Address" />
                            </div>
                            <div class="mb-24">
                                <label for="enter-password" class="text-neutral-900 text-lg mb-8 fw-medium">Password
                                    <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <input type="password" class="common-input" id="enter-password"
                                        placeholder="Enter Password" value="password" />
                                    <span
                                        class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash"
                                        id="#enter-password"></span>
                                </div>
                            </div>
                            <div class="my-48">
                                <p class="text-gray-500">
                                    Your personal data will be used to
                                    process your order, support your
                                    experience throughout this website, and
                                    for other purposes described in our
                                    <a href="#" class="text-main-600 text-decoration-underline">
                                        privacy policy</a>
                                    .
                                </p>
                            </div>
                            <div class="mt-48">
                                <button type="submit" class="btn btn-main py-18 px-40">
                                    Register
                                </button>
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
                            <h6 class="mb-0">Free Shipping</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-hand-heart"></i></span>
                        <div class="">
                            <h6 class="mb-0">100% Satisfaction</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-credit-card"></i></span>
                        <div class="">
                            <h6 class="mb-0">Secure Payments</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-chats"></i></span>
                        <div class="">
                            <h6 class="mb-0">24/7 Support</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
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
