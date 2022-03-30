@include('partials._multi_language_editor')

<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group pb-3">
            {{ Form::label('text') }}
            {{ Form::text('text', $preference->text, ['class' => 'form-control' . ($errors->has('text') ? ' is-invalid' : ''), 'placeholder' => 'Text']) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label('details') }}
            {{ Form::text('details', $preference->details, ['class' => 'form-control' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' => 'Details']) }}

        </div>


        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
