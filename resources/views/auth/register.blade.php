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
                <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mt-n3 mb-0 h3">{{ __('Create Account') }}</h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Form -->
                        <div class="form-group mt-4 mb-4">
                            <label for="name">{{ __('Your Name') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ti-user"></i>
                                </span>
                                <input name="name" id="name" type="text"
                                       class="form-control {{ ($errors->has('name') ? ' is-invalid' : '')}}"
                                       placeholder="{{ __('Name') }}" value="{{ old('name') }}" autofocus>
                            </div>


                        </div>

                        <div class="form-group mt-4 mb-4">
                            <label for="email">{{ __('Your Email') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                   <span class="ti-email"></span>
                                </span>
                                <input name="email" id="email" type="email"
                                       class="form-control  {{ ($errors->has('email') ? ' is-invalid' : '')}}"
                                       placeholder="{{ __('Email') }}" value="{{ old('email') }}" autofocus>
                            </div>

                        </div>

                        <div class="form-group mb-4">
                            <label for="password">{{ __('Your Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2">
                                  <span class="ti-lock"></span>
                                </span>
                                <input name="password" type="password" placeholder="{{ __('Password') }}"
                                       class="form-control  {{ ($errors->has('password') ? ' is-invalid' : '')}}"
                                       id="password"
                                       autocomplete="new-password">
                            </div>

                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">
                                  <span class="ti-lock"></span>
                                </span>
                                <input name="password_confirmation" type="password"
                                       placeholder="{{ __('Confirm Password') }}"
                                       class="form-control  {{ ($errors->has('password') ? ' is-invalid' : '')}}"
                                       id="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group  mb-4">
                            @if(config('captcha.reg'))
                                {!! NoCaptcha::renderJs() !!}
                                @if(config('captcha.is_invisible'))
                                    {!! NoCaptcha::display(["data-size"=>"invisible"]) !!}
                                @else
                                    {!! NoCaptcha::display() !!}
                                @endif
                            @endif
                        </div>

                        <!-- End of Form -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800 onClickLoading">{{ __('Register') }}</button>
                        </div>
                    </form>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            {{ __('Already have an account?') }}
                            <a href="{{ route('login') }}" class="fw-bold">{{ __('Login here') }}</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
