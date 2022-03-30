@extends('backend.layouts.app')

@section('title')
    {{__('frontendmanager.Mail to Subscribers')}}
@endsection

@section('content')

    {{ Breadcrumbs::render('email-subscriptions.mail') }}

    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 {{__('frontendmanager.Mail to Subscribers')}}
                </span>


                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="w-100">
                        <div class="box box-info padding-1">
                            <div class="box-body">
                                <form method="POST" action="{{ route('subscriptions.mail') }}" role="form"
                                      enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group pb-3">
                                        {{ Form::label(trans('common.Subject')) }}
                                        {{ Form::text('subject', '', ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => trans('common.Subject')]) }}
                                    </div>
                                    <div class="form-group pb-3">
                                        {{ Form::label(trans('common.Details')) }}
                                        {{ Form::textarea('details', '', ['class' => 'form-control editor' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' => trans('common.Details')]) }}
                                    </div>


                                    <div class="box-footer mt-3 pb-3">
                                        <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

