@extends('backend.layouts.guest')
@section('title')
    {{__('frontend.FAQs')}}
@endsection
@section('content')
    <div class="container   pb-6">


        <div class="" id="">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-3 h3">{{__('frontend.Create Your Business')}}</h1>
                    </div>
                    <form action="{{ route('businesses.store') }}" method="POST">
                        @csrf

                        <div class="form-group pb-3">
                            {{ Form::label('name') }}
                            {{ Form::text('name', $business->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}

                        </div>

                        <div class="form-group pb-3">
                            {{ Form::label('country') }}
                            {{ Form::select('country', $countries,$business->country, ['class' => 'form-select' . ($errors->has('country') ? ' is-invalid' : ''), 'placeholder' => 'Select Country']) }}

                        </div>

                        <div class="form-group pb-3">
                            {{ Form::label('category') }}
                            {{ Form::select('category',$categories, $business->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => 'Select Category']) }}

                        </div>

                        <div class="form-group pb-3">
                            {{ Form::label('address') }}
                            {{ Form::text('address', $business->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}

                        </div>


                        <div class="d-grid pt-3">
                            <button type="submit" class="btn btn-gray-800 onClickLoading">
                                {{__('common.Submit')}}
                            </button>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
@endsection
