@extends('layouts.auth')

@section('content')

<a class="visually-hidden-focusable skip-link" href="#auth-form">
    Skip to sign-up form
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
            Create Your Account
        </h1>

        <p class="auth-subtitle">
            Create an account to continue.
        </p>

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
            action="{{ route('register') }}">

            @csrf

            <div class="form-group">
                <label for="name">
                    Full Name
                </label>

                <input
                    id="name"
                    class="au-input"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    autocomplete="name"
                    required
                    autofocus>
            </div>

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
                    required>
            </div>

            <div class="form-group">
                <label for="password">
                    Password
                </label>

                <input
                    id="password"
                    class="au-input"
                    type="password"
                    name="password"
                    autocomplete="new-password"
                    required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">
                    Confirm Password
                </label>

                <input
                    id="password_confirmation"
                    class="au-input"
                    type="password"
                    name="password_confirmation"
                    autocomplete="new-password"
                    required>
            </div>

            <div class="login-checkbox">
                <label>
                    <input
                        type="checkbox"
                        required>

                    I agree to the Terms & Privacy Policy
                </label>
            </div>

            <button
                class="au-btn au-btn--green w-100"
                type="submit">

                Create Account

            </button>

        </form>

        <div class="register-link">
            <p>
                Already have an account?

                <a href="{{ route('login') }}">
                    Sign In
                </a>
            </p>
        </div>

    </div>

</main>

@endsection