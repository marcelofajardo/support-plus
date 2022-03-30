<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group pb-3">
            {{ Form::label(trans('common.Text')) }}
            {{ Form::text('text', $cookie->text, ['class' => 'form-control' . ($errors->has('text') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Text')]) }}

        </div>
        <div class="form-group pb-3">
            {{ Form::label( trans('common.Button Text')) }}
            {{ Form::text('btn', $cookie->btn, ['class' => 'form-control' . ($errors->has('btn') ? ' is-invalid' : ''), 'placeholder' => trans('common.Button Text')]) }}

        </div>
        <div class="col-md-3">

            <div class="form-check form-switch">
                <input name="status" value="1" class="form-check-input" type="checkbox" id="regChecked"
                    {{$cookie->status==1?'checked':''}}>
                <label class="form-check-label" for="regChecked">  {{trans('common.Status')}}</label>
            </div>

        </div>
        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
