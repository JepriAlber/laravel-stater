@extends('layouts.auth')

@section('content')

<a class="visually-hidden-focusable skip-link" href="#auth-form">
    Skip to reset password form
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
            Create New Password
        </h1>

        <p class="auth-subtitle">
            Enter your new password below.
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
            action="{{ route('password.store') }}">

            @csrf

            <input
                type="hidden"
                name="token"
                value="{{ $request->route('token') }}">

            <div class="form-group">
                <label>Email Address</label>

                <input
                    type="email"
                    name="email"
                    class="au-input"
                    value="{{ old('email', $request->email) }}"
                    required>
            </div>

            <div class="form-group">
                <label>New Password</label>

                <input
                    type="password"
                    name="password"
                    class="au-input"
                    required>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>

                <input
                    type="password"
                    name="password_confirmation"
                    class="au-input"
                    required>
            </div>

            <button
                type="submit"
                class="au-btn au-btn--green w-100">

                Reset Password

            </button>

        </form>

    </div>

</main>

@endsection