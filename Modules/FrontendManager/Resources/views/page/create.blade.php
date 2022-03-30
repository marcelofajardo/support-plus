@extends('backend.layouts.app')

@section('title')
    {{__('common.Create')}} {{__('frontendmanager.Page')}}
@endsection

@section('content')
    {{ Breadcrumbs::render('pages.create') }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                    <span class="card_title h4">
                            <span class="card-title"> {{__('common.Create')}}  Page</span>
                    </span>

                    <div class="float-right">
                        <a href="{{ route('pages.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('frontendmanager.Page')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pages.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    @include('frontendmanager::page.form')

                </form>
            </div>
        </div>
    </div>
@endsection
