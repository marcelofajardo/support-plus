@extends('backend.layouts.app')

@section('title')
    {{__('common.Create')}} {{__('setting.Social Setting')}}
@endsection

@section('content')
    {{ Breadcrumbs::render('social-settings.create') }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                    <span class="card_title h4">
                            <span
                                class="card-title"> {{__('common.Create')}}  {{__('setting.Social Setting')}}</span>
                    </span>

                    <div class="float-right">
                        <a href="{{ route('social-settings.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('setting.Social Setting')}} {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('social-settings.store') }}" role="form"
                      enctype="multipart/form-data">
                    @csrf

                    @include('setting::social-setting.form')

                </form>
            </div>
        </div>
    </div>
@endsection
