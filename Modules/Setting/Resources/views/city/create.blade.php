@extends('backend.layouts.app')

@section('title')
    {{__('common.Create')}} {{__('setting.City')}}
@endsection

@section('content')
    {{ Breadcrumbs::render('cities.create') }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                    <span class="card_title h4">
                            <span class="card-title"> {{__('common.Create')}}   {{__('setting.City')}}</span>
                    </span>

                    <div class="float-right">
                        <a href="{{ route('cities.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('setting.City')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('cities.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    @include('setting::city.form')

                </form>
            </div>
        </div>
    </div>
@endsection
