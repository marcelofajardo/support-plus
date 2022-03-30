@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}   {{__('frontendmanager.Testimonials')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('testimonials.edit',$testimonial->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}}  {{__('frontendmanager.Testimonials')}}</span>
                </span>

                    <div class="float-right">
                        <a href="{{ route('testimonials.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('frontendmanager.Testimonials')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('frontendmanager::testimonial.form')

                </form>
            </div>
        </div>
    </div>



@endsection
