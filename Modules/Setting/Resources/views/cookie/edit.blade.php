@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}  {{__('setting.Cookie')}}
@endsection
@section('content')
    {{ Breadcrumbs::render('cookies.index') }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}} {{__('setting.Cookie')}}</span>
                </span>
                    <div class="float-right">
                        <a href="{{ route('cookies.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('setting.Cookie')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('cookies.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    @include('setting::cookie.form')
                </form>
            </div>
        </div>
    </div>
@endsection
