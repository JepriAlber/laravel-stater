@extends('layouts.app')

@section('title', 'My Profile')

@section('content')

<div class="row">

    <div class="col-md-12">

        <div class="overview-wrap mb-4">

            <h2 class="title-1">
                My Profile
            </h2>

        </div>

    </div>

</div>

<div class="row">

    <div class="col-lg-8">

        @include('profile.partials.update-profile-information-form')

    </div>

    <div class="col-lg-4">

        @include('profile.partials.update-password-form')

        <div class="mt-4">
            @include('profile.partials.delete-user-form')
        </div>

    </div>

</div>

@endsection