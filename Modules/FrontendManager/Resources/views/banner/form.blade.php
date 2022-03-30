@include('partials._multi_language_editor')

<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group pb-3">
            {{ Form::label('title') }}
            {{ Form::text('title', $banner->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-3">
            {{ Form::label('details') }}
            {{ Form::text('details', $banner->details, ['class' => 'form-control' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' => 'Details']) }}
            {!! $errors->first('details', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-3">
            {{ Form::label('image') }}

            <x-image-input-with-preview :name="'image'" :src="$banner->image"/>

        </div>

        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
