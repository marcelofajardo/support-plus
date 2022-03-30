<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="{{auth()->check()?auth()->user()->language_rtl==1?'rtl':'ltr':session()->get('language_code')}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ assetPath('css/preloader.css') }}">
    <link rel="stylesheet" href="{{ assetPath('css/app.css') }}">

    @laravelPWA
    @include('backend.partials._custom_theme')


</head>

<body>
<div class="loaderShow">
    <div class="loader">{{env('APP_NAME')}}...</div>
</div>

<header class="navbar navbar-nav navbar-expand navbar-dark navbar-theme-primary">
    <div class="container px-3 px-md-4">
        <div class="d-flex align-items-center">
            <a class="navbar-brandd me-4" href="{{url('/')}}">
                <img src="{{ assetPath('images/logo.png') }}" height="30"
                     alt="logo">
            </a>
            <div class="navbar-nav-scroll order-md-0 justify-content-start d-none d-md-flex">
                <ul class="navbar-nav bd-navbar-nav flex-row">
                    @foreach($pages->where('menu',1) as $page)
                        <li class="nav-item">
                            <a class="nav-link {{request()->is($page->slug)?'active':''}}" href="{{url($page->slug)}}"
                               rel="noopener">{{$page->title}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ms-3 order-3 ms-auto" type="button"
                data-bs-toggle="collapse" data-bs-target="#bd-docs-nav" aria-controls="bd-docs-nav"
                aria-expanded="false" aria-label="Toggle docs navigation">
            <span class="ti-menu text-white font-size-20px header-menu"></span>
        </button>
        @if( app('preferences')['multilingual'])
            <div class="d-flex align-items-center">
                <div class="d-none d-lg-flex">
                    <ul class="navbar-nav bd-navbar-nav flex-row">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownPreview" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{app('languageFullName')->native}}
                                <span class="ti-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownPreview">
                                @foreach(app('activeLanguages') as $language)
                                    <li>
                                        <a href="{{route('localization.language.changeLanguage',$language->code)}}"
                                           class="list-group-item list-group-item-action border-bottom {{app()->getLocale()==$language->code?'active text-white':''}}">
                                            <h4 class="h6 mb-0 text-small">
                                                {{$language->native}}
                                            </h4>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </li>
                    </ul>
                    @endif
                    @auth
                        <a class="btn btn-secondary text-dark animate-up-2 ms-3 d-none d-sm-flex align-items-center justify-content-center"
                           href="{{route('home')}}">
                            {{__('frontend.Dashboard')}}</a>

                        <a class="btn btn-outline-white animate-up-2 ms-3 d-none d-sm-inline-block"
                           onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                            {{__('common.Log Out')}}</a>
                    @else
                        @if(app('preferences')['allow_reg'])
                            <a class="btn btn-secondary text-dark animate-up-2 ms-3 d-none d-sm-flex align-items-center justify-content-center"
                               href="{{route('register')}}">
                                {{__('frontend.Sign Up')}}</a>
                        @endif
                        <a class="btn btn-outline-white animate-up-2 ms-3 d-none d-sm-inline-block"
                           href="{{route('login')}}">{{__('frontend.Login')}}</a>
                    @endauth


                </div>
            </div>
    </div>
</header>

<main>

    <div class="col-lg-2 bd-sidebar d-block d-md-none">
        <nav class="bd-links collapse mobile-menu" id="bd-docs-nav" aria-label="Main navigation" style="">
            <ul class="list-unstyled">

                @foreach($pages->where('menu',1) as $page)
                    <li class="bd-sidenav-group js-sidenav-group has-children p-2  {{request()->is($page->slug)?'active':''}}">
                        <a class="d-inline-flex align-items-center bd-sidenav-group-link"
                           href="{{url($page->slug)}}">
                            {{$page->title}}
                        </a>
                    </li>

                @endforeach

            </ul>
            <div class="auth-btns py-3 d-flex justify-content-center">
                @auth
                    <a class="btn btn-secondary text-dark animate-up-2"
                       href="{{route('home')}}">
                        {{__('frontend.Dashboard')}}</a>

                    <a class="btn btn-outline-white animate-up-2 ms-3" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                            @csrf
                        </form>
                        {{__('common.Log Out')}}
                    </a>
                @else
                    @if(app('preferences')['allow_reg'])
                        <a class="btn btn-secondary text-dark animate-up-2 ms-3"
                           href="{{route('register')}}">
                            {{__('frontend.Sign Up')}}</a>
                    @endif
                    <a class="btn btn-outline-white animate-up-2 ms-3"
                       href="{{route('login')}}">{{__('frontend.Login')}}</a>
                @endauth
            </div>
        </nav>
    </div>
    @yield('content')

</main>
<footer class="footer pt-5 text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="navbar-brand-dark mb-4" height="35" src="{{ assetPath('images/logo.png') }}"
                     alt="Logo">
                <p>
                    {{app('generalSettings')['footer_about']}}
                </p>
                <ul class="social-buttons mb-5 mb-lg-0">
                    @foreach($socialMedia as $media)

                        <li>
                            <a href="{{$media->link}}" class="icon-white me-2">
                                <span class="{{$media->icon}}"></span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-5 mb-lg-0">
                <ul class="links-vertical mt-2">
                    @foreach($pages->where('footer1',1) as $page)
                        <li><a {{request()->is($page->slug)?'active':''}}" href="{{url($page->slug)}}"
                            >{{$page->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-5 mb-lg-0">

                <ul class="links-vertical mt-2">
                    @foreach($pages->where('footer2',1) as $page)
                        <li><a {{request()->is($page->slug)?'active':''}}" href="{{url($page->slug)}}"
                            >{{$page->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-4 mb-5 mb-lg-0">
                <span class="h5 mb-3 d-block">{{__('common.Subscribe')}}</span>
                <form action="{{route('contacts.store')}}" method="post">
                    @csrf
                    <div class="form-row mb-2">
                        <div class="col-12">
                            <input type="email" class="form-control mb-2" placeholder="example@company.com"
                                   name="email" aria-label="Subscribe form" required>
                        </div>
                        <div class="col-12 d-grid">
                            <button type="submit" class="btn btn-secondary" data-loading-text="Sending">
                                <span>{{__('common.Subscribe')}}</span>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="text-muted font-small m-0">{{__('frontend.We’ll never share your details')}}
                    . {{__('frontend.See our')}} <a class="text-white"
                                                    href="{{url('privacy')}}">{{__('frontend.Privacy Policy')}}</a></p>
            </div>
        </div>
        <!-- <hr class="bg-gray-700 my-5"> -->
    </div>
    <div class="row py-3 mt-3 mx-0 copyright-area">
        <div class="col mb-md-0">

            <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                <p class="fw-normal font-small mb-0">
                    {{app('generalSettings')['copyright']}}
                </p>
            </div>
        </div>
    </div>

    <div class="back-to-top-btn">
        <a id="btt-button" class="">
            <span class="ti-arrow-up"></span>
        </a>
    </div>

</footer>

@include('sweetalert::alert')
@yield('scripts')

<script src="{{ assetPath('js/app.js') }}"></script>

<x-cookie-popup/>

<x-popup-modal/>

</body>

</html>
