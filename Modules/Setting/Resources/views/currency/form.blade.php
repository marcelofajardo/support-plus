<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">

            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Code')) }}
                    {{ Form::text('code', $currency->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => trans('common.Code')]) }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('common.Name')) }}
                    {{ Form::text('name', $currency->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => trans('common.Name')]) }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Currency').' '.trans('common.Name')) }}
                    {{ Form::text('currency_name', $currency->currency_name, ['class' => 'form-control' . ($errors->has('currency_name') ? ' is-invalid' : ''), 'placeholder' =>trans('setting.Currency').' '.trans('common.Name')]) }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pb-3">
                    {{ Form::label(trans('setting.Symbol')) }}
                    {{ Form::text('symbol', $currency->symbol, ['class' => 'form-control' . ($errors->has('symbol') ? ' is-invalid' : ''), 'placeholder' => trans('setting.Symbol')]) }}
                </div>
            </div>
        </div>
        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
