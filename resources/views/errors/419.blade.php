@extends('layouts.error')

@section('title', '419 - Session Expired')

@section('content')

<main class="error-card" role="main">

    <a href="{{ route('dashboard') }}" class="error-card__brand">
        <span class="logo-mark">S</span>
        <span class="logo-text">{{ config('app.name') }}</span>
    </a>

    <h1 class="error-card__code">419</h1>

    <h2 class="error-card__title">
        Session Expired
    </h2>

    <p class="error-card__text">
        Your session has expired. Please refresh the page and try again.
    </p>

    <div class="error-card__actions">

        <button type="button"
                class="m-btn m-btn--primary"
                onclick="location.reload()">

            Refresh Page

        </button>

    </div>

</main>

@endsection