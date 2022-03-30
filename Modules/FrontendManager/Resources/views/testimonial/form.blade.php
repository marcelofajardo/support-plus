@include('partials._multi_language_editor')

<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group pb-3">
            {{ Form::label(trans('common.Name')) }}
            {{ Form::text('name', $testimonial->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => trans('common.Name')]) }}
        </div>

        <div class="form-group pb-3">
            {{ Form::label(trans('common.Designation')) }}
            {{ Form::text('designation', $testimonial->designation, ['class' => 'form-control' . ($errors->has('designation') ? ' is-invalid' : ''), 'placeholder' => trans('common.Designation')]) }}
        </div>

        <div class="form-group pb-3">
            {{ Form::label(trans('common.Feedback')) }}
            {{ Form::textarea('feedback', $testimonial->feedback, ['class' => 'form-control' . ($errors->has('feedback') ? ' is-invalid' : ''), 'placeholder' => trans('common.Feedback')]) }}
        </div>
        <div class="form-group pb-3">
            {{ Form::label('image') }}
            <x-image-input-with-preview :name="'image'" :src="$testimonial->image"/>
        </div>


        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
