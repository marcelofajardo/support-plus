@include('partials._multi_language_editor')


<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group pb-3">
            {{ Form::label(trans('common.Details')) }}
            {!! Form::textarea('details', $term->details, ['class' => 'form-control editor' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Details')])  !!}
            {!! $errors->first('details', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
