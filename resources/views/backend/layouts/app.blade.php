<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{auth()->user()->language_rtl==1?'rtl':'ltr'}}">

<head>
    <meta charset="utf-8">
    <meta name="base_url" content="{{url('/')}}"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="mark_notification" content="{{ route('markNotification') }}">

    <title data-url="{{url('/')}}">{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ assetPath('css/app.css') }}">
    <link rel="stylesheet" href="{{ assetPath('css/preloader.css') }}">

    <!-- Scripts -->
    <script src="{{ assetPath('js/app.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    @include('backend.partials._custom_theme')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

</head>

<body>
<div class="loaderShow">
    <div class="loader">{{env('APP_NAME')}}...</div>
</div>
@include('backend.layouts.nav')
@include('backend.layouts.sidenav')
<main class="content">
    {{-- TopBar --}}
    @include('backend.layouts.topbar')

    @yield('content')

    {{-- Footer --}}
    @include('backend.layouts.footer')
</main>

@include('sweetalert::alert')
<script src="{{ assetPath('vendor/datatables/buttons.server-side.js') }}"></script>
@yield('scripts')
@if(isAdmin())
    @include('backend.partials._change_business')
@endif
</body>

</html>
