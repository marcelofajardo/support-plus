<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link rel="stylesheet" href="{{ assetPath('css/app.css') }}">
    <link rel="stylesheet" href="{{ assetPath('css/preloader.css') }}">
    <script src="{{ assetPath('js/app.js') }}"></script>
</head>

<body>
<div class="loaderShow">
    <div class="loader">{{env('APP_NAME')}}...</div>
</div>
<main>
    <section class="bg-soft d-flex align-items-center py-5 auth-form-container">
        @yield('content')
    </section>
</main>
</body>
@include('sweetalert::alert')

</html>
