{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layouts.backend.authmaster')

@section('content')
<div class="card mb-0">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="card-body">
      <a href="index-1.html" class="brand-logo">

        <h2 class="brand-text text-primary ms-1">Vuexy</h2>
      </a>

      <h4 class="card-title mb-1">Admin Login 👋</h4>
      <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
      <form method="POST" action="{{ route('login') }}" class="auth-login-form mt-2">
        @csrf

        <div class="mb-1">
          <label for="login-email" class="form-label">Email</label>
          <input type="text" class="form-control" id="login-email" name="email" placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus="">
        </div>

        <div class="mb-1">
          <div class="d-flex justify-content-between">
            <label class="form-label" for="login-password">Password</label>
            <a href="auth-forgot-password-basic-1.html">
              <small>Forgot Password?</small>
            </a>
          </div>
          <div class="input-group input-group-merge form-password-toggle">
            <input type="password" class="form-control form-control-merge" id="login-password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password">
            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
          </div>
        </div>
        <div class="mb-1">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3">
            <label class="form-check-label" for="remember-me"> Remember Me </label>
          </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
      </form>

      <p class="text-center mt-2">
        <span>New on our platform?</span>
        <a href="auth-register-basic-1.html">
          <span>Create an account</span>
        </a>
      </p>

      <div class="divider my-2">
        <div class="divider-text">or</div>
      </div>

      <div class="auth-footer-btn d-flex justify-content-center">
        <a href="#" class="btn btn-facebook">
          <i data-feather="facebook"></i>
        </a>
        <a href="#" class="btn btn-twitter white">
          <i data-feather="twitter"></i>
        </a>
        <a href="#" class="btn btn-google">
          <i data-feather="mail"></i>
        </a>
        <a href="#" class="btn btn-github">
          <i data-feather="github"></i>
        </a>
      </div>
    </div>
  </div>
@endsection
