@extends('backend.layouts.app')

@section('title')
    {{__('setting.API')}}  {{__('setting.Setting')}}
@endsection

@section('content')

    {{ Breadcrumbs::render('zones.index') }}

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
           {{__('setting.API')}}  {{__('setting.Setting')}}
                </span>


                </div>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection




