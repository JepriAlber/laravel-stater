<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', config('app.name'))
    </title>

    <link href="{{ asset('assets/css/font-face.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link href="{{ asset('assets/vendor/fontawesome-7.2.0/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap-5.3.8.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme-2026.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body class="theme-2026">

<div class="page-wrapper">

    @include('layouts.sidebar')

    <div class="page-container">

        @include('layouts.header')

        <main id="main-content" class="main-content">

            <div class="section__content section__content--p30">

                <div class="container-fluid">

                    @yield('content')

                </div>

            </div>

        </main>

        @include('layouts.footer')

    </div>

</div>

@include('layouts.scripts')

</body>
</html>