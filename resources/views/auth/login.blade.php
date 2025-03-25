@extends('layouts.app')

@section('content')
<!-- Content -->
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Login -->
            <div class="card px-sm-6 px-0">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{ url('/') }}" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <svg width="25" viewBox="0 0 25 42" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <!-- Insert your SVG code here -->
                                    </defs>
                                    <!-- SVG paths -->
                                </svg>
                            </span>
                            <span class="app-brand-text demo text-heading fw-bold">IDAS</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1">Welcome to IDASystem! 👋</h4>
                    <p class="mb-6">Please sign-in to your account and start the adventure</p>

                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}" id="formAuthentication" class="mb-6">
                        @csrf

                        <!-- Email Input -->
                        <div class="mb-6">
                            <label for="email" class="form-label">Email or Username</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email or username" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div class="mb-6 form-password-toggle">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-merge">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required autocomplete="current-password">
                                <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="mb-8">
                            <div class="d-flex justify-content-between">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember"> Remember Me </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        <span>Forgot Password?</span>
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="mb-6">
                            <button type="submit" class="btn btn-primary d-grid w-100">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>

                    <!-- Register Link -->
                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="{{ route('register') }}">
                            <span>Create an account</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>
</div>
<!-- /Content -->
@endsection
