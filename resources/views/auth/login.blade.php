@extends('layouts.auth')

@section('content')

<a class="visually-hidden-focusable skip-link" href="#auth-form">
    Skip to sign-in form
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
            Welcome Back
        </h1>

        <p class="auth-subtitle">
            Sign in to continue.
        </p>

        @if ($errors->any())
            <div class="alert alert-danger mb-3">
                {{ $errors->first() }}
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success mb-3">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label>Email Address</label>

                <input
                    type="email"
                    name="email"
                    class="au-input"
                    value="{{ old('email') }}"
                    required
                    autofocus>
            </div>

            <div class="form-group">
                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    class="au-input"
                    required>
            </div>

            <div class="login-checkbox">

                <label>
                    <input
                        type="checkbox"
                        name="remember">
                    Remember Me
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                @endif

            </div>

            <button
                class="au-btn au-btn--green w-100"
                type="submit">

                Sign In

            </button>

        </form>

        @if (Route::has('register'))
            <div class="register-link">

                <p>
                    Don't have an account?

                    <a href="{{ route('register') }}">
                        Create one
                    </a>
                </p>

            </div>
        @endif

    </div>

</main>

@endsection