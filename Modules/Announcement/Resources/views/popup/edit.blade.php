@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}  {{__('popup.Popup')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('popups.edit',$popup->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}} {{__('popup.Popup')}}</span>
                </span>

                    <div class="float-right">
                        <a href="{{ route('popups.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('popup.Popup')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('popups.update', $popup->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('announcement::popup.form')

                </form>
            </div>
        </div>
    </div>



@endsection
