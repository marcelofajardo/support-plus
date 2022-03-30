<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group mb-3">
            {{ Form::label(trans('setting.Mail Protocol')) }}
            {{ Form::select('MAIL_MAILER', ['sendmail'=>'PhpMail','smtp'=>'SMTP'],env('MAIL_MAILER'), ['class' => 'form-select' . ($errors->has('MAIL_MAILER') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Select').' '. trans('setting.Mail Protocol')]) }}

        </div>

        <div class="form-group mb-3">
            {{ Form::label(trans('setting.Host')) }}
            {{ Form::text('MAIL_HOST',env('MAIL_HOST'), ['class' => 'form-control' . ($errors->has('host') ? ' is-invalid' : ''), 'placeholder' => trans('setting.Host')]) }}

        </div>

        <div class="form-group mb-3">
            {{ Form::label(trans('setting.Port')) }}
            {{ Form::number('MAIL_PORT',env('MAIL_PORT'), ['class' => 'form-control' . ($errors->has('port') ? ' is-invalid' : ''), 'placeholder' => trans('setting.Port')]) }}

        </div>

        <div class="form-group mb-3">
            {{ Form::label(trans('setting.Encryption')) }}
            {{ Form::select('MAIL_ENCRYPTION',['tls'=>'tls','ssl'=>'ssl'],env('MAIL_ENCRYPTION'), ['class' => 'form-control' . ($errors->has('encryption') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Select').'  '.trans('setting.Encryption')]) }}

        </div>
        <div class="form-group mb-3">
            {{ Form::label(trans('setting.Username')) }}
            {{ Form::text('MAIL_USERNAME' ,env('MAIL_USERNAME'), ['class' => 'form-control' . ($errors->has('username') ? ' is-invalid' : ''), 'placeholder' => trans('setting.Username')]) }}

        </div>
        <div class="form-group mb-3">
            {{ Form::label(trans('setting.Password')) }}
            {{ Form::text('MAIL_PASSWORD' ,env('MAIL_PASSWORD'), ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => trans('setting.Password')]) }}

        </div>
        <div class="form-group mb-3">
            {{ Form::label(trans('setting.From Mail Address')) }}
            {{ Form::text('MAIL_FROM_ADDRESS' ,env('MAIL_FROM_ADDRESS'), ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' =>trans('setting.From Mail Address')]) }}

        </div>
        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
