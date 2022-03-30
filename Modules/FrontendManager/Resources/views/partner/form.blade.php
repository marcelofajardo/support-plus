<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group pb-3">
            {{ Form::label(trans('common.Name')) }}
            {{ Form::text('name', $partner->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => trans('common.Name')]) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label(trans('common.Image')) }}
            <div class="row">
                <div class="col-md-6">
                    <x-image-input-with-preview :name="'image'" :src="$partner->thumb"/>
                </div>
            </div>
        </div>

        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
