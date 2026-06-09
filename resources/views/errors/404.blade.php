@extends('layouts.error')

@section('title', '404 - Page Not Found')

@section('content')

<main class="error-card" role="main">

    <a href="{{ route('dashboard') }}" class="error-card__brand">
        <span class="logo-mark">S</span>
        <span class="logo-text">{{ config('app.name') }}</span>
    </a>

    <h1 class="error-card__code">404</h1>

    <h2 class="error-card__title">
        We can't find that page
    </h2>

    <p class="error-card__text">
        The page you are looking for may have been moved,
        renamed, or does not exist.
    </p>

    <div class="error-card__actions">

        <a href="{{ auth()->check() ? route('dashboard') : route('login') }}"
           class="m-btn m-btn--primary">

            <i class="fa-solid fa-house"></i>

            Back to Home

        </a>

        <button type="button"
                class="m-btn m-btn--ghost"
                onclick="history.back()">

            <i class="fa-solid fa-arrow-left"></i>

            Go Back

        </button>

    </div>

</main>

@endsection