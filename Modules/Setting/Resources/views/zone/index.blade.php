@extends('backend.layouts.app')

@section('title')
    {{__('common.Zones')}}
@endsection

@section('content')

    {{ Breadcrumbs::render('zones.index') }}

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
               {{__('common.Zones')}}
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




