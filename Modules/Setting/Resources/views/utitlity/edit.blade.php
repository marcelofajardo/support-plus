@extends('backend.layouts.app')

@section('title')
    {{__('setting.Utility')}}
@endsection

@section('content')

    {{ Breadcrumbs::render('utilities.index') }}

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">
                    {{__('setting.Utility')}}
                 </span>
                </span>


                </div>
            </div>
            <div class="card-body">
                @include('setting::utitlity.form')
            </div>
        </div>
    </div>



@endsection
