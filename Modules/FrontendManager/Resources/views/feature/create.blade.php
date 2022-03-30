@extends('backend.layouts.app')

@section('title')
    {{__('common.Create')}}   {{__('frontendmanager.Feature')}}
@endsection

@section('content')
    {{ Breadcrumbs::render('features.create') }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                    <span class="card_title h4">
                            <span
                                class="card-title"> {{__('common.Create')}}    {{__('frontendmanager.Feature')}}</span>
                    </span>

                    <div class="float-right">
                        <a href="{{ route('features.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('frontendmanager.Feature')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('features.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    @include('frontendmanager::feature.form')

                </form>
            </div>
        </div>
    </div>
@endsection
