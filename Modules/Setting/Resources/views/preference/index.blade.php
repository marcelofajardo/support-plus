@extends('backend.layouts.app')

@section('title')
    {{__('setting.Preference')}}
@endsection




@section('content')

    {{ Breadcrumbs::render('preferences.index') }}

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
               {{ __('Preference') }}
                </span>


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




