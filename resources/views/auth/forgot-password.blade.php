@extends('layouts.auth')

@section('content')

<a class="visually-hidden-focusable skip-link" href="#auth-form">
    Skip to recovery form
</a>

<main id="auth-form" class="login-wrap">

    <div class="login-content">

        <a href="{{ url('/') }}" class="auth-brand">
            <span class="logo-mark">S</span>
            <span class="logo-text">
                {{ config('app.name') }}
            </span>
        </a>

        <h1 class="auth-title">
            Reset Your Password
        </h1>

        <p class="auth-subtitle">
            Enter your email address and we will send you a password reset link.
        </p>

        @if (session('status'))
            <div class="alert alert-success mb-3">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mb-3">
                <ul class="mb-0 ps-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            class="login-form"
            method="POST"
            action="{{ route('password.email') }}">

            @csrf

            <div class="form-group">

                <label for="email">
                    Email Address
                </label>

                <input
                    id="email"
                    class="au-input"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    autocomplete="email"
                    required
                    autofocus>

            </div>

            <button
                class="au-btn au-btn--green w-100"
                type="submit">

                Send Reset Link

            </button>

        </form>

        <div class="register-link">

            <p>
                Remember your password?

                <a href="{{ route('login') }}">
                    Back to Sign In
                </a>
            </p>

        </div>

    </div>

</main>

@endsection