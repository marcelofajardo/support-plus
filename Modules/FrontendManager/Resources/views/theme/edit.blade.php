@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}      {{__('frontendmanager.Theme')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('themes.edit',$theme->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}}     {{__('frontendmanager.Theme')}}</span>
                </span>

                    <div class="float-right">
                        <a href="{{ route('themes.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('frontendmanager.Theme')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('themes.update', $theme->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('frontendmanager::theme.form')

                </form>
            </div>
        </div>
    </div>



@endsection
