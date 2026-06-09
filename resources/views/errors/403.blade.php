@extends('layouts.error')

@section('title', '403 - Forbidden')

@section('content')

<main class="error-card" role="main">

    <a href="{{ route('dashboard') }}" class="error-card__brand">
        <span class="logo-mark">S</span>
        <span class="logo-text">{{ config('app.name') }}</span>
    </a>

    <h1 class="error-card__code">403</h1>

    <h2 class="error-card__title">
        Access Denied
    </h2>

    <p class="error-card__text">
        You don't have permission to access this page.
    </p>

    <div class="error-card__actions">

        <a href="{{ auth()->check() ? route('dashboard') : route('login') }}"
           class="m-btn m-btn--primary">

            <i class="fa-solid fa-house"></i>

            Back to Dashboard

        </a>

    </div>

</main>

@endsection