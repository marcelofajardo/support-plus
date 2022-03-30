<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-md-3">
                <div class="form-group  pb-3">
                    {{ Form::label( trans('common.Name')) }}
                    {{ Form::text('name', $language->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => trans('common.Name') ]) }}
                </div>
            </div>
            <div class="col-md-3">

                <div class="form-group  pb-3">
                    {{ Form::label( trans('common.Native')) }}
                    {{ Form::text('native', $language->native, ['class' => 'form-control' . ($errors->has('native') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Native')]) }}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Code')) }}
                    {{ Form::text('code', $language->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => trans('common.Code')]) }}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group  pb-3">
                    {{ Form::label(trans('common.RTL')) }}
                    {{ Form::select('rtl',[0=>'LTL',1=>'RTL'], $language->rtl, ['class' => 'form-select' . ($errors->has('rtl') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Select').' '.trans('common.RTL')]) }}
                </div>
            </div>
        </div>


        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
