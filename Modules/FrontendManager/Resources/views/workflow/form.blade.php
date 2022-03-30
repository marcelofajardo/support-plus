<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group pb-3">
            {{ Form::label('title') }}
            {{ Form::text('title', $workflow->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label('order') }}
            {{ Form::number('order', $workflow->order, ['class' => 'form-control' . ($errors->has('order') ? ' is-invalid' : ''), 'placeholder' => 'Order']) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label('image') }}
            <div class="row">
                <div class="col-md-6">
                    <x-image-input-with-preview :name="'image'" :src="$workflow->image"/>
                </div>
            </div>
        </div>


        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
