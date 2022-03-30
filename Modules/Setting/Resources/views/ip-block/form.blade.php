<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label('ip') }}
            {{ Form::text('ip', $ipBlock->ip, ['class' => 'form-control' . ($errors->has('ip') ? ' is-invalid' : ''), 'placeholder' => 'Ip']) }}

        </div>

        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
