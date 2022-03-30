@extends('backend.layouts.app')

@section('title')
    {{__('common.Create')}}    {{__('setting.Role')}}
@endsection

@section('content')
    {{ Breadcrumbs::render('roles.create') }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                    <span class="card_title h4">
                            <span class="card-title"> {{__('common.Create')}}   {{__('setting.Role')}}</span>
                    </span>

                    <div class="float-right">
                        <a href="{{ route('countries.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('setting.Role')}}         {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('roles.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    @include('setting::role.form')

                </form>
            </div>
        </div>
    </div>
@endsection
