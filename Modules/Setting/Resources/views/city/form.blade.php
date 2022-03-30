<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Name')) }}
                    {{ Form::text('name', $city->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Country')) }}
                    {{ Form::select('country_id',$counties, $city->country_id, ['class' => 'form-control' . ($errors->has('country_id') ? ' is-invalid' : ''), 'placeholder' => trans('common.Select').' '.trans('setting.Country')]) }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.State')) }}
                    {{ Form::select('state_id', $states,$city->state_id, ['class' => 'form-control' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Select').' '.trans('setting.State')]) }}
                </div>
            </div>


        </div>
        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
