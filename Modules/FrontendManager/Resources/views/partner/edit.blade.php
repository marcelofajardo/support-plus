@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}  {{__('frontendmanager.Partners')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('partners.edit',$partner->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}} {{__('frontendmanager.Partners')}}</span>
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
                <form method="POST" action="{{ route('partners.update', $partner->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('frontendmanager::partner.form')

                </form>
            </div>
        </div>
    </div>



@endsection
