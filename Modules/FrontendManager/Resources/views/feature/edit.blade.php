@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}    {{__('frontendmanager.Feature')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('features.edit',$feature->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}}   {{__('frontendmanager.Feature')}}</span>
                </span>
                    <div class="float-right">
                        <a href="{{ route('features.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('frontendmanager.Feature')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('features.update', $feature->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('frontendmanager::feature.form')

                </form>
            </div>
        </div>
    </div>



@endsection
