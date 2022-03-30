<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label(trans('common.Name')) }}
            {{ Form::text('name', $zone->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => trans('common.Name')]) }}
        </div>

        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
