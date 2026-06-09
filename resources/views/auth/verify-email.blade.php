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
            Verify Email Address
        </h1>

        <p class="auth-subtitle">

            Thanks for signing up.

            Before getting started, please verify your email address by clicking
            the link we just emailed to you.

        </p>

        @if (session('status') == 'verification-link-sent')

            <div class="alert alert-success mb-3">

                A new verification link has been sent to your email address.

            </div>

        @endif

        <form method="POST"
              action="{{ route('verification.send') }}">

            @csrf

            <button
                type="submit"
                class="au-btn au-btn--green w-100">

                Resend Verification Email

            </button>

        </form>

        <hr>

        <form method="POST"
              action="{{ route('logout') }}">

            @csrf

            <button
                type="submit"
                class="btn btn-link text-decoration-none">

                Log Out

            </button>

        </form>

    </div>

</main>

@endsection