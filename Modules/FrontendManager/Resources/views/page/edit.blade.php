@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}  {{__('frontendmanager.Page')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('pages.edit',$page->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}} {{__('frontendmanager.Page')}}</span>
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
                <form method="POST" action="{{ route('pages.update', $page->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('frontendmanager::page.form')

                </form>
            </div>
        </div>
    </div>



@endsection
