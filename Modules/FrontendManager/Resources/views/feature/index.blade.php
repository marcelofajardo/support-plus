@extends('backend.layouts.app')

@section('title')
    {{__('frontendmanager.Feature')}}
@endsection

@section('content')

    {{ Breadcrumbs::render('features.index') }}

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
    {{__('frontendmanager.Feature')}}
                </span>

                    <div class="float-right">
                        <a href="{{ route('features.create') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{ __('common.Create') }}  {{ __('common.New') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="w-100">
                        {{$dataTable->table()}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{$dataTable->scripts()}}
@endsection



