@extends('backend.layouts.guest')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <p class="text-center">
                <a href="{{url('/')}}" class="d-flex align-items-center justify-content-center">
                    <span class="ti-arrow-left px-2"></span>{{ __('Back to Homepage') }}
                </a>
            </p>
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-3 h3">{{ __('Welcome back') }}</h1>
                    </div>

                    <form class="mt-4" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="email">{{ __('Your Email') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <span class="ti-email"></span>
                                </span>
                                <input name="email" type="email"
                                       class="form-control {{ ($errors->has('email') ? ' is-invalid' : '')}}"
                                       placeholder="{{ __('Email') }}"
                                       id="email" value="{{ old('email') }}" autofocus>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="form-group mb-4">
                                <label for="password">{{ __('Your Password') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                       <span class="ti-lock"></span>
                                    </span>
                                    <input name="password" type="password" placeholder="{{ __('Password') }}"
                                           class="form-control {{ ($errors->has('password') ? ' is-invalid' : '')}}"
                                           id="password">
                                </div>

                            </div>

                            <div class="form-group  mb-4">
                                @if(config('captcha.login'))
                                    {!! NoCaptcha::renderJs() !!}
                                    @if(config('captcha.is_invisible'))
                                        {!! NoCaptcha::display(["data-size"=>"invisible"]) !!}
                                    @else
                                        {!! NoCaptcha::display() !!}
                                    @endif
                                @endif
                            </div>

                            <!-- End of Form -->
                            <div class="d-flex justify-content-between align-items-top mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value=""
                                           id="remember">
                                    <label class="form-check-label mb-0" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                                <div>
                                    <a href="{{ route('password.request') }}" class="small text-right">
                                        {{ __('Lost password?') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800 onClickLoading">
                                {{ __('Sign in') }}</button>
                        </div>
                    </form>


                    <div class="mt-3 mb-4 text-center"><span class="fw-normal">{{__('frontend.or login with')}}</span>
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        <a href="{{ route('social.oauth', 'facebook') }}"
                           class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                           aria-label="facebook button"
                           title="facebook button">
                            <span class="ti-facebook"></span>
                        </a>
                        <a href="{{ route('social.oauth', 'twitter') }}"
                           class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                           aria-label="twitter button" title="twitter button">
                            <span class="ti-twitter"></span>
                        </a>
                        <a href="{{ route('social.oauth', 'google') }}"
                           class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                           aria-label="github button" title="github button">
                            <span class="ti-google"></span>
                        </a>

                        <a href="{{ route('social.oauth', 'github') }}"
                           class="btn btn-icon-only btn-pill btn-outline-gray-500"
                           aria-label="github button" title="github button">
                            <span class="ti-github"></span>
                        </a>
                    </div>

                    @if(app('preferences')['allow_reg'])
                        <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            {{ __('Not registered?') }}
                            <a href="{{ route('register') }}" class="fw-bold">{{ __('Create account') }}</a>
                        </span>
                        </div>
                    @endif
                    @if(env('DEMO_MODE'))
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <a href="{{ route('auto.login', 'admin') }}"
                               class="btn btn-gray-800 onClickLoading  me-2">
                                Admin
                            </a>

                            <a href="{{ route('auto.login', 'business') }}"
                               class="btn btn-gray-800 onClickLoading  me-2">
                                Business
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
