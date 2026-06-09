@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="page-header">

    <div>

        <h1>Dashboard</h1>

        <p class="subtitle">
            Welcome back, {{ Auth::user()->name }}
        </p>

    </div>

</div>

@endsection