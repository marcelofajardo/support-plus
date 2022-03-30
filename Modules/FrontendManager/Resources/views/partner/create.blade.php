@extends('backend.layouts.app')

@section('title')
    {{__('common.Create')}} {{__('frontendmanager.Partners')}}
@endsection

@section('content')
    {{ Breadcrumbs::render('partners.create') }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                    <span class="card_title h4">
                            <span class="card-title"> {{__('common.Create')}}  {{__('frontendmanager.Partners')}}</span>
                    </span>

                    <div class="float-right">
                        <a href="{{ route('partners.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('frontendmanager.Partners')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('partners.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    @include('frontendmanager::partner.form')

                </form>
            </div>
        </div>
    </div>
@endsection
