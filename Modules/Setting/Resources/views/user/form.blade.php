<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">


            <div class="col-md-6  pb-3">
                <div class="form-group">
                    {{ Form::label(trans('common.Name')) }}
                    {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => trans('common.Name')]) }}
                </div>
            </div>

            <div class="col-md-6  pb-3">
                <div class="form-group">
                    {{ Form::label(trans('common.Email')) }}
                    {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => trans('common.Email')]) }}
                </div>
            </div>

            <div class="col-md-6  pb-3">
                <div class="form-group">
                    {{ Form::label(trans('common.Password')) }}
                    {{ Form::text('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => trans('common.Password')]) }}
                </div>
            </div>
            <div class="col-md-6  pb-3">
                <div class="form-group">
                    {{ Form::label(trans('setting.Role')) }}
                    {{ Form::select('role',$roles, $user->role, ['class' => 'form-control' . ($errors->has('role') ? ' is-invalid' : ''), 'placeholder' =>  trans('common.Select').' '.trans('setting.Role')]) }}
                </div>
            </div>
            <div class="col-md-6  pb-3">
                <div class="form-group">
                    {{ Form::label(trans('common.Country')) }}
                    {{ Form::select('country_id',$counties, $user->country_id, ['class' => 'form-control countrySelect' . ($errors->has('country_id') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Select').' '. trans('common.Country')]) }}
                </div>
            </div>
            <div class="col-md-6  pb-3">
                <div class="form-group">
                    {{ Form::label(trans('common.State')) }}
                    {{ Form::select('state_id',[], $user->state_id, ['class' => 'form-control stateSelect' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' => trans('common.State')]) }}
                </div>
            </div>
            <div class="col-md-6  pb-3">
                <div class="form-group">
                    {{ Form::label(trans('common.City')) }}
                    {{ Form::select('city_id',[], $user->city_id, ['class' => 'form-control citySelect' . ($errors->has('city_id') ? ' is-invalid' : ''), 'placeholder' => trans('common.City')]) }}
                </div>
            </div>
            <div class="col-md-6  pb-3">
                <div class="form-group">
                    {{ Form::label(trans('common.Address')) }}
                    {{ Form::text('address', $user->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => trans('common.Address')]) }}
                </div>
            </div>

        </div>
        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
