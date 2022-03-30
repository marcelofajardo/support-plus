<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Name')) }}
                    {{ Form::text('name', $theme->name, ['class' => 'form-control' . ($errors->has('name') ? '
                    is-invalid' :
                    ''), 'placeholder' =>trans('common.Name')]) }}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Primary')) }}
                    {{ Form::color('primary', $theme->primary, ['class' => 'form-control' . ($errors->has('primary') ? '
                    is-invalid' :
                    ''), 'placeholder' => trans('setting.Primary')]) }}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Sub Primary')) }}
                    {{ Form::color('sub_primary', $theme->sub_primary, ['class' => 'form-control' .
                    ($errors->has('sub_primary') ? '
                    is-invalid' : ''), 'placeholder' => trans('setting.Sub Primary')]) }}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Secondary')) }}
                    {{ Form::color('secondary', $theme->secondary, ['class' => 'form-control' . ($errors->has('secondary') ? '
            is-invalid' : ''), 'placeholder' => trans('setting.Secondary')]) }}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Sub Secondary')) }}
                    {{ Form::color('sub_secondary', $theme->sub_secondary, ['class' => 'form-control' .
            ($errors->has('sub_secondary') ? ' is-invalid' : ''), 'placeholder' => trans('setting.Sub Secondary')]) }}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Tertiary')) }}
                    {{ Form::color('tertiary', $theme->tertiary, ['class' => 'form-control' . ($errors->has('tertiary') ? '
            is-invalid' : ''), 'placeholder' => trans('setting.Tertiary')]) }}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Sub Tertiary')) }}
                    {{ Form::color('sub_tertiary', $theme->sub_tertiary, ['class' => 'form-control' .
            ($errors->has('sub_tertiary') ? ' is-invalid' : ''), 'placeholder' => trans('setting.Sub Tertiary')]) }}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Success')) }}
                    {{ Form::color('success', $theme->success, ['class' => 'form-control' . ($errors->has('success') ? '
            is-invalid' : ''), 'placeholder' =>trans('setting.Success')]) }}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Sub Success')) }}
                    {{ Form::color('sub_success', $theme->sub_success, ['class' => 'form-control' . ($errors->has('sub_success')
            ? ' is-invalid' : ''), 'placeholder' => trans('setting.Sub Success')]) }}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Warning')) }}
                    {{ Form::color('warning', $theme->warning, ['class' => 'form-control' . ($errors->has('warning') ? '
            is-invalid' : ''), 'placeholder' => trans('setting.Warning')]) }}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Sub Warning')) }}
                    {{ Form::color('sub_warning', $theme->sub_warning, ['class' => 'form-control' . ($errors->has('sub_warning')
            ? ' is-invalid' : ''), 'placeholder' => trans('setting.Sub Warning')]) }}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Info')) }}
                    {{ Form::color('info', $theme->sub_info, ['class' => 'form-control' . ($errors->has('info') ? '
            is-invalid' : ''), 'placeholder' => trans('setting.Info')]) }}

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Sub Info')) }}
                    {{ Form::color('sub_info', $theme->sub_info, ['class' => 'form-control' . ($errors->has('sub_info') ? '
            is-invalid' : ''), 'placeholder' =>trans('setting.Sub Info')]) }}

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Danger')) }}
                    {{ Form::color('danger', $theme->danger, ['class' => 'form-control' . ($errors->has('danger') ? '
            is-invalid'
            : ''), 'placeholder' => trans('setting.Danger')]) }}

                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Sub Danger')) }}
                    {{ Form::color('sub_danger', $theme->sub_danger, ['class' => 'form-control' . ($errors->has('sub_danger') ?
            '
            is-invalid' : ''), 'placeholder' =>trans('setting.Sub Danger')]) }}

                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Body Color')) }}
                    {{ Form::color('body_color', $theme->body_color, ['class' => 'form-control' . ($errors->has('body_color') ?
            '
            is-invalid' : ''), 'placeholder' => trans('setting.Body Color')]) }}

                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Body Background Color')) }}
                    {{ Form::color('body_bg', $theme->body_bg, ['class' => 'form-control' . ($errors->has('body_bg') ? '
            is-invalid' : ''), 'placeholder' => trans('setting.Body Background Color')]) }}

                </div>
            </div>


        </div>

        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
