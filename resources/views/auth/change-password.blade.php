@extends('backend.layouts.app')
@section('title')
    {{__('common.Change Password')}}
@endsection
@section('content')
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                    <span class="card_title h4">
                            <span class="card-title">{{ __('common.Change Password') }}</span>
                    </span>

                </div>
            </div>
            <div class="card-body">

                <form action="{{ route('profile.change-password') }}" method="POST">
                    @csrf


                    <div class="row align-items-center">

                        <div class="mb-3 col-md-6 offset-md-3">
                            <label for="old_password">{{ __('common.Old Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">
                                   <span class="ti-lock"></span>

                                </span>
                                <input type="password" name="old_password"
                                       placeholder="{{ __('common.New Password') }}"
                                       class="form-control" id="old_password">
                            </div>

                        </div>
                        <div class="mb-3 col-md-6 offset-md-3">
                            <label for="password">{{ __('common.New Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2">
                                   <span class="ti-lock"></span>

                                </span>
                                <input type="password" name="password" placeholder="{{ __('common.New Password') }}"
                                       class="form-control" id="password">
                            </div>

                        </div>
                        <div class="mb-3 col-md-6 offset-md-3">
                            <label for="password_confirmation">{{ __('common.Confirm Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">
                                   <span class="ti-lock"></span>

                                </span>
                                <input type="password" name="password_confirmation" class="form-control"
                                       id="password_confirmation"
                                       placeholder="{{ __('common.New password confirmation') }}"
                                       autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 col-md-6 offset-md-3">
                        <button type="submit"
                                class="mt-2 btn btn-gray-800 animate-up-2">{{ __('common.Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>














@endsection
