@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}   {{__('setting.User')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('users.edit',$currency->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}}  {{__('setting.User')}}</span>
                </span>

                    <div class="float-right">
                        <a href="{{ route('users.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('setting.User')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('users.update', $currency->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('setting::user.form')

                </form>
            </div>
        </div>
    </div>



@endsection
