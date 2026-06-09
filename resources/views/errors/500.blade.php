@extends('layouts.error')

@section('title', '500 - Internal Server Error')

@section('content')

<main class="error-card" role="main">

    <a href="{{ route('dashboard') }}" class="error-card__brand">
        <span class="logo-mark">S</span>
        <span class="logo-text">{{ config('app.name') }}</span>
    </a>

    <h1 class="error-card__code">500</h1>

    <h2 class="error-card__title">
        Something went wrong
    </h2>

    <p class="error-card__text">
        An unexpected error occurred while processing your request.
        Please try again in a few moments.
    </p>

    <div class="error-card__actions">

        <button type="button"
                class="m-btn m-btn--primary"
                onclick="location.reload()">

            <i class="fa-solid fa-rotate-right"></i>

            Try Again

        </button>

        <a href="{{ auth()->check() ? route('dashboard') : route('login') }}"
           class="m-btn m-btn--ghost">

            <i class="fa-solid fa-house"></i>

            Back to Home

        </a>

    </div>

</main>

@endsection