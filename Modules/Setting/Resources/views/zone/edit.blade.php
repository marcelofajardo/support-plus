@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}    {{__('common.Zone')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('zones.edit',$zone->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}}   {{__('common.Zone')}}</span>
                </span>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('zones.update', $zone->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('setting::zone.form')

                </form>
            </div>
        </div>
    </div>



@endsection
