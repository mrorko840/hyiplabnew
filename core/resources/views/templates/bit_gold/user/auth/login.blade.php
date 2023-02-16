@extends($activeTemplate . 'layouts.frontend')
@section('content')
    @php
        $loginContent = getContent('login.content', true);
    @endphp

    <!-- account section start -->
    {{-- <div class="account-section bg_img"
        data-background="{{ getImage('assets/images/frontend/login/' . @$loginContent->data_values->section_bg) }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7">
                    <div class="account-card">
                        <div class="account-card__header bg_img overlay--one"
                            data-background="{{ getImage('assets/images/frontend/login/' . @$loginContent->data_values->card_bg) }}">
                            <h2 class="section-title">{{ __(@$loginContent->data_values->heading_w) }} <span
                                    class="base--color">{{ __(@$loginContent->data_values->heading_c) }}</span></h2>
                            <p>{{ __(@$loginContent->data_values->sub_heading) }}</p>
                        </div>
                        <div class="account-card__body">
                            <form method="POST" action="{{ route('user.login') }}" class="verify-gcaptcha">
                                @csrf

                                <div class="form-group">
                                    <label for="username" class="form-label">@lang('Username or Email')</label>
                                    <input type="text" name="username" value="{{ old('username') }}"
                                        class="form-control form--control" required>
                                </div>

                                <div class="form-group">
                                    <div class="d-flex flex-wrap justify-content-between mb-2">
                                        <label for="password" class="form-label mb-0">@lang('Password')</label>
                                        <a class="fw-bold forgot-pass" href="{{ route('user.password.request') }}">
                                            @lang('Forgot your password?')
                                        </a>
                                    </div>
                                    <input id="password" type="password" class="form-control form--control" name="password"
                                        required>
                                </div>

                                <x-captcha />

                                <div class="form-group form--check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        @lang('Remember Me')
                                    </label>
                                </div>

                                <div class="form-group">
                                    <button type="submit" id="recaptcha" class="btn--base w-100">
                                        @lang('Login')
                                    </button>
                                </div>
                                <p class="mb-0">@lang('Don\'t have any account?') <a
                                        href="{{ route('user.register') }}">@lang('Register')</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- account section end -->


    <section class="auth-section">
        <div class="auth-wrapper">
            <div class="auth-top-part">
                <a href="{{route('home')}}" class="auth-logo">
                    <img class="img-fluid rounded sm-device-img text-align"
                        src="{{asset('assets/images/logoIcon/logo.png')}}"
                        width="100%" alt="pp">
                </a>
                <p class="mb-0"><span class="me-2">Haven't an account?</span> <a class="btn main-btn btn-sm"
                        href="{{ route('user.register') }}">Register</a></p>
            </div>
            <div class="auth-body-part">
                <div class="auth-form-wrapper">
                    <h3 class="text-center mb-4">Login your account</h3>
                    <form action="{{ route('user.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" name="username" value="{{ old('username') }}"
                                placeholder="Enter Username" class="form-control form--control" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput">Pasword</label>
                            <input id="password" type="password" class="form-control form--control" name="password"
                                placeholder="Enter password" required>
                        </div>
                        <p class="text-end"><a href="{{ route('user.password.request') }}"
                                class="text-dark">Forget password?</a></p>
                        <button class="btn main-btn w-100 mt-3" type="submit"> Log in </button>
                    </form>
                </div>
            </div>
            <div class="auth-footer-part">
                <p class="text-center mb-0">
                    Copyright 2022 {{$general->site_name}}. all rights reserved.
                </p>
            </div>
        </div>
        <div class="auth-thumb-area"
            style="background-image: url('{{route('home')}}/assets/templates/bit_gold/images/bg/plan.jpg')">
            <div class="auth-thumb">
                <img src="{{ getImage('assets/templates/bit_gold/images/login/frontend_login_image.png') }}"
                    alt="image">
            </div>
        </div>
    </section>
@endsection
