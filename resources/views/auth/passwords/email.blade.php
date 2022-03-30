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

                <div class="signin-inner my-3 my-lg-0 bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="h3">{{ __('Forgot your password?') }}</h1>
                    <p class="mb-4">
                        {{ __("Don't fret! Just type in your email and we will send you a code to reset your password!") }}
                    </p>
                    <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Form -->
                        <div class="mb-4">
                            <label for="email">{{ __('Your Email') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                        </path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                        </path>
                                    </svg>
                                </span>
                                <input name='email' type="email" class="form-control" id="email"
                                       placeholder="{{ __('Email') }}" required autofocus>
                            </div>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <!-- End of Form -->

                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">{{ __('Recover password') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
