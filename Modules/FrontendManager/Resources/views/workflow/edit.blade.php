@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}  {{__('frontendmanager.Workflow')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('workflows.edit',$workflow->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}}   {{__('frontendmanager.Workflow')}}</span>
                </span>

                    <div class="float-right">
                        <a href="{{ route('workflows.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('frontendmanager.Workflow')}}           {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('workflows.update', $workflow->id) }}" role="form"
                      enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PATCH') }}
                    @include('frontendmanager::workflow.form')

                </form>
            </div>
        </div>
    </div>



@endsection
