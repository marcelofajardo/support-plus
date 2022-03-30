@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}     {{__('setting.System')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('updates.index') }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">
                     {{__('common.Update')}}     {{__('setting.System')}}
                 </span>
                </span>


                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('updates.store') }}" role="form"
                      enctype="multipart/form-data">
                    @csrf
                    @include('setting::update.form')

                </form>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">
                      {{__('setting.Versions')}}
                 </span>
                </span>


                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('updates.store') }}" role="form"
                      enctype="multipart/form-data">
                    @csrf
                    @include('setting::update.version')

                </form>
            </div>
        </div>
    </div>



@endsection
