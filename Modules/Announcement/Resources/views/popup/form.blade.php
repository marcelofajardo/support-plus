@include('partials._multi_language_editor')

<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group pb-3">
            {{ Form::label(trans('common.Title')) }}
            {{ Form::text('title', $popup->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => trans('common.Title')]) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label(trans('common.Text')) }}
            {{ Form::textarea('text', $popup->text, ['class' => 'form-control' . ($errors->has('text') ? ' is-invalid' : ''), 'placeholder' => trans('common.Text')]) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label(trans('Button Text')) }}
            {{ Form::text('button_text', $popup->button_text, ['class' => 'form-control' . ($errors->has('button_text') ? ' is-invalid' : ''), 'placeholder' => trans('Button Text')]) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label(trans('common.Button URL')) }}
            {{ Form::url('button_url', $popup->button_url, ['class' => 'form-control' . ($errors->has('button_url') ? ' is-invalid' : ''), 'placeholder' => trans('common.Button URL')]) }}

        </div>

        <div class="form-group pb-3">
            {{ Form::label(trans('common.Delay (In Second)')) }}
            {{ Form::number('delay', $popup->delay, ['class' => 'form-control' . ($errors->has('delay') ? ' is-invalid' : ''), 'placeholder' => trans('common.Delay')]) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label(trans('common.Order')) }}
            {{ Form::number('order', $popup->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => trans('common.Order')]) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label(trans('common.Image')) }}
            <div class="row">
                <div class="col-md-6">
                    <x-image-input-with-preview :name="'image'" :src="$popup->image"/>
                </div>
            </div>
        </div>

        <div class="form-group pb-3">
            {{ Form::label(trans('common.Background')) }}
            <div class="row">
                <div class="col-md-6">
                    <x-image-input-with-preview :name="'bg'" :src="$popup->bg"/>
                </div>
            </div>
        </div>
        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
