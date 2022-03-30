<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group pb-3">
            {{ Form::label(trans('setting.Secret')) }}
            {{ Form::text('secret', config('captcha.secret'), ['class' => 'form-control' . ($errors->has('secret') ? ' is-invalid' : ''), 'placeholder' => trans('setting.Secret')]) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label(trans('setting.Site Key')) }}
            {{ Form::text('sitekey', config('captcha.sitekey'), ['class' => 'form-control' . ($errors->has('sitekey') ? ' is-invalid' : ''), 'placeholder' => trans('setting.Site Key')]) }}

        </div>
        <div class="row  pb-3 pt-3">
            <div class="col-md-3">
                <div class="form-check form-switch">
                    <input name="login" value="1" class="form-check-input" type="checkbox" id="loginChecked"
                        {{config('captcha.login')?'checked':''}}>
                    <label class="form-check-label"
                           for="loginChecked">{{trans('setting.Login')}} {{trans('setting.Page')}}</label>
                </div>
            </div>
            <div class="col-md-3">

                <div class="form-check form-switch">
                    <input name="reg" value="1" class="form-check-input" type="checkbox" id="regChecked"
                        {{config('captcha.reg')?'checked':''}}>
                    <label class="form-check-label"
                           for="regChecked">{{trans('setting.Register')}}  {{trans('setting.Page')}}</label>
                </div>

            </div>
            <div class="col-md-3">
                <div class="form-check form-switch">
                    <input name="contact" value="1" class="form-check-input" type="checkbox" id="contactChecked"
                        {{config('captcha.contact')?'checked':''}}>
                    <label class="form-check-label"
                           for="contactChecked">{{trans('setting.Contact')}}  {{trans('setting.Page')}}</label>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check form-switch">
                    <input name="is_invisible" value="1" class="form-check-input" type="checkbox"
                           id="is_invisibleChecked"
                        {{config('captcha.is_invisible')?'checked':''}}>
                    <label class="form-check-label" for="is_invisibleChecked">{{__('setting.Is Invisible')}}</label>
                </div>
            </div>
        </div>


        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
