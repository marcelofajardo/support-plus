@extends('backend.layouts.app')

@section('title')
    {{__('common.Update')}}  {{__('setting.Language')}}
@endsection

@section('content')


    {{ Breadcrumbs::render('localization.languages.edit',$language->id) }}
    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 <span class="card-title">{{__('common.Update')}} {{__('setting.Language')}}</span>
                </span>

                    <div class="float-right">
                        <a href="{{ route('localization.languages.index') }}" class="float-right btn btn-primary btn-sm"
                           data-placement="left">
                            {{__('setting.Language')}} {{__('common.List')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('localization.languages.update', $language->id) }}" role="form"
                      enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    @include('setting::language.form')

                </form>
            </div>
        </div>
    </div>



@endsection
