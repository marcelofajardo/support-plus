@extends('backend.layouts.app')

@section('title')
    {{__('frontendmanager.Contact')}}
@endsection




@section('content')

    {{ Breadcrumbs::render('contacts.index') }}

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
               {{__('frontendmanager.Contact')}}
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




