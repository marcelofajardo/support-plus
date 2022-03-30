@extends('backend.layouts.app')

@section('title')
    {{__('setting.Email Setting')}}
@endsection

@section('content')
    {{ Breadcrumbs::render('email-settings.create') }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                    <span class="card_title h4">
                            <span class="card-title">   {{__('setting.Email Setting')}}</span>
                    </span>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('email-settings.store') }}" role="form"
                      enctype="multipart/form-data">
                    @csrf

                    @include('setting::email-setting.form')

                </form>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <form method="POST" action="{{ route('email-settings.test') }}" role="form">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                {{ Form::email('email','', ['class' => 'form-select' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Test email']) }}

                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">{{__('setting.Test Mail')}}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
