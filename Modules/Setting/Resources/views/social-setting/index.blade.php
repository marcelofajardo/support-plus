@extends('backend.layouts.app')

@section('title')
    {{__('setting.Social Setting')}}
@endsection

@section('content')

    {{ Breadcrumbs::render('social-settings.index') }}

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
              {{__('setting.Social Setting')}}
                </span>

                    <div class="float-right">
                        <a href="{{ route('social-settings.create') }}" class="float-right btn btn-primary btn-sm"
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




