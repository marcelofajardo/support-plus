@extends('backend.layouts.app')
@section('title')
    {{__('common.My Profile')}}
@endsection
@section('content')

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                    <span class="card_title h4">
                            <span class="card-title">{{ __('common.My profile') }}</span>
                    </span>

                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row align-items-center">
                        <div class="mb-3 col-md-6 offset-md-3">
                            <label for="name">{{ __('common.Name') }}</label>
                            <div class="input-group">
                                <span class="input-group-text">
                               <span class="ti-user"></span>
                                </span>
                                <input id="name" class="form-control" type="text" name="name"
                                       placeholder="{{ __('common.Name') }}"
                                       value="{{ old('name', auth()->user()->name) }}"
                                       required>
                            </div>

                        </div>
                        <div class="mb-3 col-md-6 offset-md-3">
                            <label for="email">{{ __('common.Email') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <span class="ti-email"></span>
                                </span>
                                <input type="email" name="email" class="form-control"
                                       placeholder="{{ __('common.Email') }}" readonly
                                       id="email" value="{{ old('email', auth()->user()->email) }}" required>
                            </div>

                        </div>

                        <div class="mb-3 col-md-6 offset-md-3">
                            <label for="email">{{ __('common.Country') }}</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="basic-addon1">
                                    <span class="ti-map"></span>
                                </span>
                                <select name="country_id" id="country_id" class="form-control countrySelect">
                                    <option value="">{{__('common.Select')}} {{__('common.Country')}} </option>
                                    @foreach($countries  as $key=>$country)
                                        <option
                                            {{auth()->user()->country_id==$key?'selected':''}} value="{{$key}}">{{$country}}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>

                        <div class="mb-3 col-md-6 offset-md-3">
                            <label for="email">{{ __('common.State') }}</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="basic-addon1">
                                    <span class="ti-email"></span>
                                </span>
                                <select name="state_id" id="state_id" class="form-control stateSelect">
                                    <option value="">{{__('common.Select')}} {{__('common.State')}} </option>
                                    @foreach($states  as $key=>$state)
                                        <option
                                            {{auth()->user()->state_id==$key?'selected':''}} value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="mb-3 col-md-6 offset-md-3">
                            <label for="email">{{ __('common.City') }}</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="basic-addon1">
                                    <span class="ti-map-alt"></span>
                                </span>
                                <select name="city_id" id="city_id" class="form-control citySelect">
                                    <option value="">{{__('common.Select')}} {{__('common.City')}} </option>
                                    @foreach($states  as $key=>$state)
                                        <option
                                            {{auth()->user()->city_id==$key?'selected':''}} value="{{$key}}">{{$state}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="mb-3 col-md-6 offset-md-3">
                            <label for="email">{{ __('common.Address') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <span class="ti-email"></span>
                                </span>
                                <input type="text" name="address" class="form-control"
                                       placeholder="{{ __('common.Address') }}"
                                       id="address" value="{{ old('address', auth()->user()->address) }}">
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
@section('scripts')
    <script>




    </script>
@endsection
