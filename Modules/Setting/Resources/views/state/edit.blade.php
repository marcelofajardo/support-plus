@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}   {{__('setting.State')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('states.edit',$state->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}}  {{__('setting.State')}}</span>
                </span>

                    <div class="float-right">
                        <a href="{{ route('states.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('setting.State')}}          {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('states.update', $state->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('setting::state.form')

                </form>
            </div>
        </div>
    </div>



@endsection
