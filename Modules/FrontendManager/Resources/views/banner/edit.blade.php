@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}   {{__('frontendmanager.Banner')}}
@endsection

@section('content')

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}}  {{__('frontendmanager.Banner')}}</span>
                </span>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('banners.store') }}" role="form" enctype="multipart/form-data">

                    @csrf
                    @include('frontendmanager::banner.form')

                </form>
            </div>
        </div>
    </div>



@endsection
