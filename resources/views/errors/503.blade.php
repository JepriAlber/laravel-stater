@extends('layouts.error')

@section('title', '503 - Maintenance')

@section('content')

<main class="error-card" role="main">

    <a href="#" class="error-card__brand">
        <span class="logo-mark">S</span>
        <span class="logo-text">{{ config('app.name') }}</span>
    </a>

    <h1 class="error-card__code">503</h1>

    <h2 class="error-card__title">
        Under Maintenance
    </h2>

    <p class="error-card__text">
        We are performing scheduled maintenance.
        Please check back again shortly.
    </p>

</main>

@endsection