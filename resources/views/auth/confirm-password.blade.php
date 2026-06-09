@extends('layouts.auth')

@section('content')

<main class="login-wrap">

    <div class="login-content">

        <a href="{{ url('/') }}" class="auth-brand">
            <span class="logo-mark">S</span>
            <span class="logo-text">
                {{ config('app.name') }}
            </span>
        </a>

        <h1 class="auth-title">
            Confirm Password
        </h1>

        <p class="auth-subtitle">

            Please confirm your password before continuing.

        </p>

        @if ($errors->any())
            <div class="alert alert-danger mb-3">
                {{ $errors->first() }}
            </div>
        @endif

        <form
            class="login-form"
            method="POST"
            action="{{ route('password.confirm') }}">

            @csrf

            <div class="form-group">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    class="au-input"
                    required>

            </div>

            <button
                type="submit"
                class="au-btn au-btn--green w-100">

                Confirm

            </button>

        </form>

    </div>

</main>

@endsection