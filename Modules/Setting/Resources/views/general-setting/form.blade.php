@include('partials._multi_language_editor')

<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.App Name')) }}
                    {{ Form::text('app_name', setting('app_name'), ['class' => 'form-control' . ($errors->has('app_name') ? ' is-invalid' : ''), 'placeholder' => trans('common.App Name')]) }}

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.App Title')) }}
                    {{ Form::text('app_title',  setting('app_title'), ['class' => 'form-control' . ($errors->has('app_title') ? ' is-invalid' : ''), 'placeholder' => trans('common.App Title')]) }}

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Logo')) }}
                    <x-image-input-with-preview :name="'logo'" :src="setting('logo')"/>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Favicon')) }}
                    <x-image-input-with-preview :name="'favicon'" :src="setting('favicon')"/>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Contact Mail')) }}
                    {{ Form::text('contact_mail', setting('contact_mail'), ['class' => 'form-control' . ($errors->has('contact_mail') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Contact Mail')]) }}

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Meta Tag')) }}
                    {{ Form::text('meta_tag',  setting('meta_tag'), ['class' => 'form-control' . ($errors->has('meta_tag') ? ' is-invalid' : ''), 'placeholder' => trans('common.Meta Tag')]) }}

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Default Language')) }}
                    {{ Form::select('language_code',$languages,  setting('language_code'), ['class' => 'form-control' . ($errors->has('language_code') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Select').' '.trans('common.Default Language')]) }}

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Default Currency')) }}
                    {{ Form::select('currency',$currencies,  setting('currency'), ['class' => 'form-control' . ($errors->has('currency') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Select').' '.trans('common.Default Currency')]) }}

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Currency Symbol Position')) }}
                    {{ Form::select('currency',
[
    1=>trans('setting.Left'),
    2=>trans('setting.Left With Space'),
    3=>trans('setting.Right'),
    4=>trans('setting.Right With Space'),
], setting('currency_show_type'), ['class' => 'form-control' . ($errors->has('currency') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Select').' '.trans('common.Default Currency')]) }}

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Timezone')) }}
                    {{ Form::select('time_zone',$timezones,  setting('time_zone'), ['class' => 'form-control' . ($errors->has('time_zone') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Select').' '.trans('common.Timezone')]) }}

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Set Trial Days')) }}
                    {{ Form::select('trial_days',$trials,  setting('trial_days'), ['class' => 'form-control' . ($errors->has('trial_days') ? ' is-invalid' : ''), 'placeholder' => trans('common.Select').' '.trans('common.Set Trial Days')]) }}

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Allow Multi Device Login At A Time')) }}
                    {{ Form::select('allow_multi_login',[0=>trans('common.No'),1=>trans('common.Yes')],  setting('allow_multi_login'), ['class' => 'form-control' . ($errors->has('allow_multi_login') ? ' is-invalid' : ''), 'placeholder' => trans('common.Select')]) }}

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Footer About')) }}
                    {{ Form::text('footer_about',  setting('footer_about'), ['class' => 'form-control' . ($errors->has('footer_about') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Footer About')]) }}

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Copyright')) }}
                    {{ Form::text('copyright',setting('copyright'), ['class' => 'form-control' . ($errors->has('copyright') ? ' is-invalid' : ''), 'placeholder' => trans('common.Copyright')]) }}

                </div>
            </div>

        </div>


        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
