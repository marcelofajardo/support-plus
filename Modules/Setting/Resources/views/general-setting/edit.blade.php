@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}  {{__('setting.General Setting')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('general-settings.index') }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">
                        {{__('common.Update')}}  {{__('setting.General Setting')}}
                 </span>
                </span>


                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('general-settings.store') }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    @include('setting::general-setting.form')

                </form>
            </div>
        </div>
    </div>



@endsection
