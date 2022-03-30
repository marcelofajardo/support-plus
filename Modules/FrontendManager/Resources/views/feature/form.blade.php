@include('partials._multi_language_editor')

<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group pb-3">
            {{ Form::label('name') }}
            {{ Form::text('name', $feature->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group  pb-2">
            {{ Form::label('details') }}
            {{ Form::textarea('details', $feature->details, ['class' => 'form-control editor' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' => 'Details']) }}
            {!! $errors->first('details', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group  pb-2">
            {{ Form::label('orders') }}
            {{ Form::number('orders', $feature->orders, ['class' => 'form-control' . ($errors->has('orders') ? ' is-invalid' : ''), 'placeholder' => 'Orders']) }}
            {!! $errors->first('orders', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group  pb-2">
            {{ Form::label('Image') }}
            <x-image-input-with-preview :name="'image'" :src="$feature->image"/>
        </div>

        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
