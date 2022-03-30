<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group pb-3">
            {{ Form::label(trans('common.Name')) }}
            {{ Form::text('name', $socialSetting->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Name')]) }}
        </div>
        <div class="form-group pb-3">
            {{ Form::label(trans('common.Link')) }}
            {{ Form::url('link', $socialSetting->link, ['class' => 'form-control' . ($errors->has('link') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Link')]) }}
        </div>
        <div class="form-group pb-3">
            {{ Form::label(trans('common.Icon')) }}
            {{ Form::select('icon',$icons, $socialSetting->icon, ['class' => 'form-control primary_select' . ($errors->has('icon') ? ' is-invalid' : ''), 'placeholder' => trans('common.Select').' '.trans('common.Icon')]) }}
        </div>
        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
