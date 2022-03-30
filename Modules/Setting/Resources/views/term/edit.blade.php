@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}  {{__('setting.Term of service')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('terms.edit',$term->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">    {{__('common.Update')}}  {{__('setting.Term of service')}}</span>
                </span>


                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('terms.update', $term->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('setting::term.form')

                </form>
            </div>
        </div>
    </div>



@endsection
